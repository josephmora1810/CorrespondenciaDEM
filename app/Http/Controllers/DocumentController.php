<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Documento;
use App\Models\Categoria;
use App\Models\Operator;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index(Request $request){
        $categoria = Categoria::paginate(5);
        return view('document_index',  compact('categoria'));
    }

    public function show(Request $request){
        $gestores = Operator::paginate(5);
        return view('create_gestor',  compact('gestores'));
    }
}
