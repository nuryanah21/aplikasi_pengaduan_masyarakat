<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    protected $table = "tanggapans";
    protected $fillable = ['id_pengaduan','tanggal_tanggapan','tanggapan','id_petugas'];
}
