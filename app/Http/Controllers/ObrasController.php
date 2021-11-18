<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obras;

class ObrasController extends Controller
{
    //Resgatar Todas as Obras
    public function getAll(){

        $obras = Obras::all();
        
        return $obras;   

    }
}
