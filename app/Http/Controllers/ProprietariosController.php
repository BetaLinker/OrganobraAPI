<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proprietarios;

class ProprietariosController extends Controller
{
    //Resgata Todas os Proprietários
    public function getAll(){

        $vistorias = Proprietarios::all();
        
        return $vistorias;   

    }
}
