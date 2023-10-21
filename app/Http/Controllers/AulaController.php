<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Aula; 

class AulaController extends Controller
{
    //abre o formulario de cadastro
    public function mostrarFormAul(){
        return view('cad_aula');
    }

    public function index(){
        return view('index');
    }

    public function cadastroAul(Request $request){
        $registroAul = $request->validate([
            'idcurso' => 'number|required',
            'tituloaula' => 'string'|'required',
        ]);

        Aula::create($registroAul);

        return Redirect::route('index');
    }
}
