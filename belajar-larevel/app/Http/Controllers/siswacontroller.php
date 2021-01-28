<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\siswa;

class siswacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan data
        $datasiswa = siswa::all();
        return view('master.tampildata', compact('datasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* $this->validate($request,[
           'name' => 'required',
            'telepon' => 'required',
            'alamat' => 'required'
        ]);*/
        siswa::create([
            'name' => $request->nama,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
        ]);
        return redirect(route('main.editdata'))->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return view('tampildata');
        redirect(route('siswa.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datasiswa = siswa::find($id);
        return view('master.editdata', compact('datasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $upd = siswa::find($id);

        /*$this->validate($request, [
            'name' => 'required',
            'telepon' => 'required',
            'alamat' => 'required'          
        ]);*/
        $upd->update([
            'name' => $request->nama,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
        ]);
        return redirect(route('siswa.index'));
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = siswa::find($id);
        $siswa->delete();
        return redirect(route('siswa.index'));
    }
}
