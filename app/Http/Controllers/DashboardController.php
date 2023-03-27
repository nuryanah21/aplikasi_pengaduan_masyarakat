<?php

namespace App\Http\Controllers;

use App\Pengaduan;
use App\Tanggapan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlah_pengaduan = Pengaduan::all()->count();
        $jumlah_tanggapan = Tanggapan::all()->count();

        return view('halamandepan.dashboard')
        ->with('jumlah_pengaduan', $jumlah_pengaduan)
        ->with('jumlah_tanggapan', $jumlah_tanggapan);
    }
}
