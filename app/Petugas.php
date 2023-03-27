<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = "petugas";
    protected $fillable = ['nama_petugas','email','password','telp','level'];

    public function tanggapan()
    {
        return $this->hasMany('App\Tanggapan');
    }
}
