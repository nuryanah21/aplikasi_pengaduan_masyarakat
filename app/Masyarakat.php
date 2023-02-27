<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Masyarakat extends Authenticatable
{
    protected $table = 'masyarakat';
    protected $fillable = ['nik', 'nama', 'username', 'password', 'telp','alamat','rt','rw','kode_pos','province_id','regency_id','district_id','village_id'];
    protected $primaryKey = 'nik';
    protected $guard = "masyarakat";
}
