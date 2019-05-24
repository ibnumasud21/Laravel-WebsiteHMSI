<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    protected $table = "prodi";

    protected $primaryKey = 'id_program_studi';

    protected $fillable = ['id_program_studi','nama_prodi','jumlah_mhs','jumlah_dosen'];
}
