<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proprietarios;

class ProprietariosController extends Controller
{
    //Resgata Todas os Proprietários
    public function getAll(){

        $proprietario = Proprietarios::all();
        
        return $proprietario;   

    }

    public function insert(Request $request){

        $data = $request->all();
        $proprietario = new Proprietarios;

        $proprietario->nome     = $data;
        $proprietario->cpf      = $data;
        $proprietario->endereco = $data;
        $proprietario->celular  = $data;
        $proprietario->telefone = $data;
        $proprietario->email    = $data;
        
        $proprietario->save();

        return $proprietario;
    }
}
