<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Videojuego extends Model
{
    use HasFactory;

    protected $table = 'videojuegos';

    protected $fillable = [
        'nombre',
        'portada',
        'precio'
    ];

}