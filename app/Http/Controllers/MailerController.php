<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Categoria;
use App\Models\Operator;
use App\Models\Documento;
use App\Models\Bitacora;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;

class MailerController extends Controller
{
    public function index(){
        $documentos = Documento::paginate(3);
        //$paginate = Documento::paginate(3);
        return view('inbox', compact('documentos'));
    }

   public function send(){
        $operators = Operator::all();
        $Categorias = Categoria::all();
        return view('send_mail', compact('Categorias'), compact('operators'));
    }

    public function pdf(Documento $documento, $id){

        $documento = Documento::find($id);
        return view('edit_category',compact('documento'));
    }

    public function destroy(Documento $documentos, $id)
    {
        $documentos= new Documento();
        $documentos= Documento::find($id);
        $documentos->delete();
        $result['data'] = Documento::all(); 
        return redirect()->route('inbox.index');
    }


    public function store(Request $request) {
 
        $docu = new Documento();

        $docu->numero = $request->numerodocu;
        $docu->receptor = $request->dirigidoa;
        $docu->operator_id = $request->operator_id;
        $docu->categoria_id = $request->categoria_id;
        $docu->user_id = Auth::user()->id;

        $docu->save();

        $bitacora = new Bitacora();
        $bitacora->accion = 'Documento Agregado';
        $bitacora->user_id = Auth::user()->id;      
        $bitacora->save();

        return redirect()->route('inbox.index');

    }
}
