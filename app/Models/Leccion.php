<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leccion extends Model
{
    use HasFactory;
    protected $table = "leccion";
    protected $primaryKey = "idLeccion";
    protected $fillable = ['nombreLeccion','descripcion','nombreVideo','videoLeccionRuta'];
}
