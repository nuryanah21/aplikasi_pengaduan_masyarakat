<?php

namespace App\Http\Controllers;

use App\Pengaduan;
use App\Tanggapan;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('halamandepan.dashboard',[
            'pengaduan' => Pengaduan::count(),
            'petugas' => User::where('level','=', 'PETUGAS')->count(),
            'masyarakat' => User::where('level','=', 'MASYARAKAT')->count(),
            'tanggapan' => Tanggapan::count(),
            'pending' => Pengaduan::where('status', '0')->count(),
            'proses' => Pengaduan::where('status', 'Proses')->count(),
            'selesai' => Pengaduan::where('status', 'Selesai')->count(),
        ]);
    }
}
