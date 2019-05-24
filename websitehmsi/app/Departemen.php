<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    protected  $table = "departement";
    protected $primaryKey = 'id_departemen';

    protected $fillable = ['nama_departemen','kepala_departemen','nim'];
}
