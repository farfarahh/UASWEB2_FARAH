<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table    = 'mahasiswa';
    protected $fillable = ['user_id', 'npm', 'tempat_lahir', 'tanggal_lahir', 'gender', 'telephone', 'alamat'];
    public $timestamps  = false;
}
