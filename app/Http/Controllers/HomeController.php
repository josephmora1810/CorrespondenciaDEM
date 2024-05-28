<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

//Modelo User
use App\Models\User;
use App\Models\Documento;


class HomeController extends Controller
{
    public function index(){
        return view('login');
    }



    public function show(){

        $documentos = Documento::all()->take(5);

        $user = User::all()->count();
        $docu = Documento::all()->count();
        return view('dashboard', compact('documentos'), compact('docu'), compact('user'));
    }

}