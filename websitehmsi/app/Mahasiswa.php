<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
  protected $table = "mahasiswa";

  protected $primaryKey = 'nim';

  protected $fillable = ['nama_mahasiswa','id_program_studi','jenis_kelamin','keanggotaan','angkatan'];
}
