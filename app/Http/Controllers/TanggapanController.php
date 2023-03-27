<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengaduan;
use App\Tanggapan;
use App\User;
use Carbon\Carbon;
use Auth;

class TanggapanController extends Controller
{
    // index tanggapan admin
    public function index()
    {
        $tanggapan = Tanggapan::all();
        return view('tanggapan.index', compact('tanggapan'));
    }

    // tampil create tanggapan di dalam detail pengaduan admin
    public function create($id)
    {
        $detail_pengaduan = Pengaduan::with('pengaduan')->find($id);
        return view('pengaduan.show', compact('detail_pengaduan'));
    }

    public function store(Request $request)
    {
        $data_tanggapan = new Tanggapan();
        $data_tanggapan->tanggal_tanggapan = request()->get('tanggal_tanggapan');
        $data_tanggapan->id_pengaduan = request()->get('id_pengaduan');
        $data_tanggapan->tanggapan = request()->get('tanggapan');
        $data_tanggapan->id = Auth::user()->id;
        $data_tanggapan->save();
        return redirect()->back();
    }

        // edit tanggapan admin
        public function edit($id)
        {
            $tanggapan = Tanggapan::where('id_tanggapan',$id)->first();
            return view('tanggapan.edit', compact('tanggapan'));
        }
    
        public function update(Request $request, $id)
        {
            $this->validate($request,[
                'id_pengaduan' => 'required',
                'tanggal_tanggpaan' => 'required',
                'tanggapan' => 'required',
            ]);
     
            Tanggapan::where('id_pengaduan', $id)->update([
                'id_pengaduan' => $request->id_pengaduan,
                'tanggal_tanggpaan' => $request->tanggal_tanggpaan,
                'tanggapan' => $request->tanggapan,
            ]);
     
            return redirect('/tanggapan');
        }
    
        // hapus tanggapan admin
        public function delete($id)
        {
            Tanggapan::where('id_tanggapan',$id)->delete();
            return redirect('/tanggapan');
        }

}
