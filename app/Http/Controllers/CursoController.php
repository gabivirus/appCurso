<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Curso; 

class CursoController extends Controller
{
    //abre o formulario de cadastro
    public function mostrarFormCur(){
        return view('cad_curso');
    }

    public function index(){
        return view('index');
    }

    public function cadastroCur(Request $request){
        $registroCur = $request->validate([
            'nomecurso' => 'string|required',
            'cargahoraria' => 'string|required',
            'idcategoria' => 'number|required',
            'valor' => 'number|required'
        ]);

        Curso::create($registroCur);

        return Redirect::route('index');
    }
}
