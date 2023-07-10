<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vehiculos extends Controller
{
    public $nombre, $marca, $modelo, $color,$estado;
    public function render()
    {
        $vehiculo=vehiculos::all();
        $categoria=categorias::all();
        return view('dashboard',compact('marca','modelo','color','estado'));
    }

    public function guardar(){
        $vehiculo = new vehiculos();
        $vehiculo->marca=$this->marca;
        $vehiculo->modelo=$this->modelo;
        $vehiculo->color=$this->color;
        $vehiculo->estado=$this->estado;
        $vehiculo->categorias_id=1;
        $vehiculo->users_id=1;
        $vehiculo->save();

    }
}
