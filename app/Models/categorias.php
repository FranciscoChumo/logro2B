<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    protected $table='categorias';
    public $timestamps=false;
    protected $fillable=['categoria'];
}
