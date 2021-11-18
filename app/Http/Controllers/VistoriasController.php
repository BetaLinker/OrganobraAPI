<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vistorias;

class VistoriasController extends Controller
{
    //Resgatar Todas as Vistorias
    public function getAll(){

        $vistorias = Vistorias::all();
        
        return $vistorias;   

    }
}
