<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    protected $table = "prestasi";

    protected $primaryKey = 'id_prestasi';

    protected $fillable = ['id_prestasi','judul','nim','tahun_prestasi'];

}
