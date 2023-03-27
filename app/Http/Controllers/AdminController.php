<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use App\Pengaduan;
use App\User;
use PDF;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // index data petugas
    public function index(Request $request)
    {
        $petugas = User::where('level', 'petugas')->get();
        return view('petugas.index', compact('petugas'));
    }

    // tampil form create data petugas
    public function create()
    {
        $provinces = Province::all();
        return view('petugas.create', compact('provinces'));
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

        $data_user = new User();
        $data_user->nik = request()->get('nik');
        $data_user->nama = request()->get('nama');
        $data_user->email = request()->get('email');
        $data_user->password = bcrypt(request()->get('password'));
        $data_user->telp = request()->get('telp');
        $data_user->jenkel = request()->get('jenkel');
        $data_user->alamat = request()->get('alamat');
        $data_user->level = 'petugas ';
        $data_user->rt = request()->get('rt');
        $data_user->rw = request()->get('rw');
        $data_user->kode_pos = request()->get('kode_pos');
        $data_user->province_id = request()->get('province_id');
        $data_user->regency_id = request()->get('regency_id');
        $data_user->district_id = request()->get('district_id');
        $data_user->village_id = request()->get('village_id');
        $data_user->save();
        return redirect()->to('/petugas')->with('Data ditambah','Data Petugas berhasil ditambah');
    }

    // detail data petugas
    public function show($id)
    {
        $province = Province::all();
        $district = District::all();
        $regency = Regency::all();
        $village = Village::all();
        $petugas = User::where('id', $id)->first();
        return view('petugas.show', compact('petugas','province','district','regency','village'));
    }  
    // hapus data petugas
    public function delete($id)
    {
        User::where('id',$id)->delete();
        return redirect('/petugas')->with('Data dihapus','Data berhasil dihapus!');
    }

    // cetak laporan admin
    public function pdf()
        {
            $data_pengaduan = Pengaduan::with('user')->get();
            $pdf = PDF::loadView('pengaduan.pdf', compact('data_pengaduan'))->setPaper('a4','potrait');
            return $pdf->stream();
        }
}
