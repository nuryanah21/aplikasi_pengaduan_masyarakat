<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tanggapan;

class TanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tanggapan = Tanggapan::all();
        return view('tanggapan.index', compact('tanggapan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tanggapan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'id_pengaduan' => 'required',
    		'tanggal_tanggapan' => 'required',
            'tanggapan' => 'required',
            'id_petugas' => 'required'
    	]);
 
        Tanggapan::create([
            'id_pengaduan' => $request->id_pengaduan,
    		'tanggal_tanggapan' => $request->tanggal_tanggapan,
            'tanggapan' => $request->tanggapan,
            'id_petugas' => $request->id_petugas,
    	]);
 
    	return redirect('/tanggapan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tanggapan = Tanggapan::where('id_tanggapan',$id)->first();
        return view('tanggapan.edit', compact('tanggapan'));
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
        $this->validate($request,[
            'id_pengaduan' => 'required',
    		'tanggal_tanggapan' => 'required',
            'tanggapan' => 'required',
            'id_petugas' => 'required'
    	]);
 
        Tanggapan::where('id_pengaduan', $id)->update([
            'id_pengaduan' => $request->id_pengaduan,
    		'tanggal_tanggapan' => $request->tanggal_tanggapan,
            'tanggapan' => $request->tanggapan,
            'id_petugas' => $request->id_petugas,
    	]);
 
    	return redirect('/tanggapan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Tanggapan::where('id_tanggapan',$id)->delete();
        return redirect('/tanggapan');
    }
}
