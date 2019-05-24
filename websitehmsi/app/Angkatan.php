<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Angkatan extends Model
{
    protected $table = "angkatan";
    protected $primaryKey = 'id_angkatan';

    protected $fillable = ['tahun_angkatan','jumlah_angkatan'];
}
