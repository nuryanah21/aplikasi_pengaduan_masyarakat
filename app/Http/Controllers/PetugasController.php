<?php

namespace App\Http\Controllers;

use App\Pengaduan;
use App\Tanggapan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PetugasController extends Controller
{
    public function index()
    {
        $pengaduan = Pengaduan::all();
        return view('petugas.pengaduan.index', compact('pengaduan'));
    }

    public function statusOnchange1($id){    
        $pengaduan = Pengaduan::with('user')->find($id);
        $pengaduan->status = request()->get('status');
        $pengaduan->save();
        return redirect()->back();
    }

    public function show($id)
    {
        $pengaduan = Pengaduan::where('id_pengaduan', $id)->first();

        $data_tanggapan = Tanggapan::whereHas('pengaduan', function($query){
            $query->where('id_pengaduan', request()->route('id'));
        })->with('user')->first();

        return view('petugas.pengaduan.show', compact('pengaduan','data_tanggapan'));
    }

    public function delete($id)
    {
        Pengaduan::where('id_pengaduan',$id)->delete();
        return redirect('/petugas/pengaduan')->with('Data dihapus','Data berhasil dihapus!');
    }

    public function indextanggapan()
    {
        $tanggapan = Tanggapan::all();
        return view('petugas.tanggapan.index', compact('tanggapan'));
    }

    public function createtanggapan($id)
    {
        $detail_pengaduan = Pengaduan::with('pengaduan')->find($id);
        return view('petugas.pengaduan.show', compact('detail_pengaduan'));
    }

    public function deletetanggapan($id)
    {
        Pengaduan::where('id_tanggapan',$id)->delete();
        return redirect('/petugas/tanggapan');
    }

    public function storetanggapan()
    {
    $data_tanggapan = new Tanggapan();
    $data_tanggapan->tanggal_tanggapan = request()->get('tanggal_tanggapan');
    $data_tanggapan->id_pengaduan = request()->get('id_pengaduan');
    $data_tanggapan->tanggapan = request()->get('tanggapan');
    $data_tanggapan->id = Auth::user()->id;
    $data_tanggapan->save();
    return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'tanggapan' => 'required'
    	]);

        Tanggapan::where('id_pengaduan', $id)->update([
    		'tanggapan' => $request->tanggapan
    	]);
 
    	return redirect()->back();
    }
    
}
