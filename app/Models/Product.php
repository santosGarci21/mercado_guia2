<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table  = 'productos'; //nombre de la tabla
    protected $primaryKey = 'codigo'; //llave primaria de la tabla
    protected $fillable = ['nombre','precio','marca']; //campos para asignacion masiva
     
}
