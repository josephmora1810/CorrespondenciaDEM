<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Documento;
use App\Models\Bitacora;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function index(){
        $users = User::select('name','email')->get();
        return view('restore', compact('users'));
    }
    public function show(){
        $documentos = Documento::all()->take(5);
        $bitacoras = Bitacora::paginate(5);
        return view('bitacora', compact('documentos'), compact('bitacoras'));
    }
}
