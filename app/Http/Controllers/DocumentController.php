<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Documento;
use App\Models\Categoria;
use App\Models\Operator;
use App\Models\Bitacora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function Ndocument(Request $request){

        $categoria = New Categoria;
        $categoria->nombre = $request->nombre;
        $categoria->cuerpo = $request->cuerpo;
        $categoria->save();

        $bitacora = new Bitacora;
        $bitacora->accion = 'Creacion de Nuevo Documento';
        $bitacora->user_id = Auth::user()->id;
        $bitacora->save();

        return redirect()->route('document.index');
    }

    public function Ngestor(Request $request){

        $Operator = New Operator;
        $Operator->nombre = $request->nombre;
        $Operator->cedula = $request->cedula;
        $Operator->save();

        $bitacora = new Bitacora;
        $bitacora->accion = 'Inserción de un Nuevo Gestor de Documento';
        $bitacora->user_id = Auth::user()->id;
        $bitacora->save();

        return redirect()->route('document.gestor');
    }   

    public function Edocument(Categoria $categoria,$id)
    {
        $categoria = Categoria::find($id);
        return view('edit_categoria',compact('categoria'));
    }


    public function Udocument(Request $request, Categoria $categorias)
    {
        $categorias = Categoria::find($request->id); //  Model Name;
        $categorias->nombre = $request->nombre;
        $categorias->cuerpo = $request->cuerpo;
        $categorias->save();
        return redirect()->route('document.index');        
    }

   public function Ddocument(Categoria $categorias, $id)
    {
        $categorias = new Categoria();
        $categorias = Categoria::find($id);
        $categorias->delete();
        $result['data'] = Categoria::all(); 
        return redirect()->route('document.index');
    }


    public function Egestor(Operator $operators,$id)
    {
        $operator = Operator::find($id);
        return view('edit_gestor',compact('operator'));
    }


    public function Ugestor(Request $request, Operator $operators)
    {
        $operator = Operator::find($request->id); //  Model Name;
        $operator->nombre = $request->nombre;
        $operator->cedula = $request->cedula;
        $operator->save();
        return redirect()->route('document.gestor');        
    }

   public function Dgestor(Operator $operators, $id)
    {
        $gestor = new Operator();
        $gestor = Operator::find($id);
        $gestor->delete();
        $result['data'] = Operator::all(); 
        return redirect()->route('document.gestor');
    }
}
