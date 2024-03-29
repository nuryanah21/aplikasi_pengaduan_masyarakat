<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // petugas index
    public function index(Request $request)
    {
        if($request) {
            if($request->cari != ''){
                $petugas = User::whereColumn([
                    ['level', "<>","admin"],
                    ['level', "<>","masyarakat"]
                ])
                ->orWhere('level', "<>","admin")
                ->Where('level', "<>","masyarakat")
                ->get();
            }else{
                $petugas = User::Where('level', "<>","masyarakat")
                ->get();
            }
            
        }else{
            $petugas = User::all();
        }
        return view('petugas.index', compact('petugas'));
    }

    // petugas create
    public function create()
    {
        $provinces = Province::all();
        return view('petugas.create', compact('provinces'));
    }

    // petugas detail
    public function show($id)
    {
        $petugas = User::where('nik',$id)->first();
        return view('petugas.show',compact('petugas'));
    }

    // petugas pengaduan
    public function pengaduan()
    {
        return view('petugas.pengaduan.index');
    }

    public function getkbptn(Request $request)
    {
        $id_provinsi = $request->id_provinsi;

        $kabupatens = Regency::where('province_id', $id_provinsi)->get();

        $option = "<option>Pilih Kabupaten</option>";

        foreach ($kabupatens as $kabupaten){
            $option .= "<option value='$kabupaten->id'>$kabupaten->name</option>";
        }

        echo $option;
    }

    public function getkcmtn(Request $request)
    {
        $id_kabupaten = $request->id_kabupaten;

        $kecamatans = District::where('regency_id', $id_kabupaten)->get();

        $option = "<option>Pilih Kecamatan</option>";

        foreach ($kecamatans as $kecamatan){
            $option .= "<option value='$kecamatan->id'>$kecamatan->name</option>";
        }
        echo $option;
    }

    public function getds(Request $request)
    {
        $id_kecamatan = $request->id_kecamatan;

        $desas = Village::where('district_id', $id_kecamatan)->get();

        $option = "<option>Pilih Desa</option>";

        foreach ($desas as $desa){
            $option .= "<option value='$desa->id'>$desa->name</option>";
        }
        echo $option;
    }

    // tambah petugas
    public function store(Request $request)
    {
        $this->validate($request,[
            'nik' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'telp' => 'required',
            'jenkel' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kode_pos' => 'required',
            'province_id' => 'required',
            'regency_id' => 'required',
            'district_id' => 'required',
            'village_id' => 'required'
        ]);

        User::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => $request->password,
            'telp' => $request->telp,
            'jenkel' => $request->jenkel,
            'level' => 'petugas',
            'alamat' => $request->alamat,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'kode_pos' => $request->kode_pos,
            'province_id' => $request->province_id,
            'regency_id' => $request->regency_id,
            'district_id' => $request->district_id,
            'village_id' => $request->village_id,
        ]);

        return redirect('/petugas');
    }

    // index masyarakat
    public function indexx(Request $request)
    {
        // $user = User::all();
        // return view('user.index', compact('user'));

        // if($request) {
            // if($request->cari != ''){
                // $user = User::whereColumn([
                    // ['level', "<>","admin"],
                    // ['level', "<>","petugas"]
                // ])
                // ->orWhere('level', "<>","admin")
                // ->Where('level', "<>","petugas")
                // ->get();
            // }else{
                // $user = User::Where('level', "<>","admin")
                // ->get();
            // }
            // 
        // }else{
            // $user = User::all();
        // }

        $user = User::where('level', 'masyarakat')->get();
        return view('user.index', compact('user'));
    }

    // detail masyarakat
    public function showw($id)
    {
        $province = Province::all();
        $district = District::all();
        $regency = Regency::all();
        $village = Village::all();
        $user = User::where('id', $id)->first();
        return view('user.show', compact('user','province','district','regency','village'));
    }

    // hapus masyarakat
    public function delete($id)
    {
        User::where('id',$id)->delete();
        return redirect('/user')->with('Data dihapus','Data berhasil dihapus!');
    }
}