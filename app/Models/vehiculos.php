<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehiculos extends Model
{
    protected $table='vehiculos';
    public $timestamps=false;
    protected $fillable=['marca','modelo','color','estado','categorias_id','users_id'];
}