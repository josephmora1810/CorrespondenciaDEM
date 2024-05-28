<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Documento;
use App\Models\Bitacora;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function store(Request $request) {
        

        $user = new User();

        if ($request->hasFile('featured')) {
            $file = $request->file('featured');
            $destinationPath = 'src/images/featureds/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('featured')->move($destinationPath, $filename);
            $user->featured = $destinationPath . $filename;
        }else{
            $file = $request->src('src/images/woman-illustration.svg');
            $destinationPath = 'src/images/featureds/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('featured')->move($destinationPath, $filename);
            $user->featured = $destinationPath . $filename;
        }

        $user->name = $request->Username;
        $user->email = $request->UserEmail;
        $user->password = Hash::make($request->UserPassword);

        $user->save();

        $bitacora = new Bitacora;
        $bitacora->accion = 'Creacion de Nuevo Usuario';
        $bitacora->user_id = Auth::user()->id;
        $bitacora->save();

        return redirect()->route('dashboard.show')->with('msj','Nuevo vehiculo incorporado exitosamente');
    }

    public function login(Request $request) {

        $credentials = [
            "email" => $request->email,
            "password" => $request->password
        ];

        $remember = ($request->has('remember') ? true : false);

        if(Auth::attempt($credentials,$remember)){
            $request->session()->regenerate();
            $bitacora = new Bitacora;
            $bitacora->accion = 'Inicio de Sesion';
            $bitacora->user_id = Auth::user()->id;
            $bitacora->save();
            return redirect()->intended(route('dashboard.show'));
        }else{
            return redirect()->route('dashboard.index');
        }
    }

    public function show(Request $request){
        $users = User::paginate(10);
        return view('show_user', compact('users'));
    }

    public function logout(Request $request){

        $bitacora = new Bitacora;
        $bitacora->accion = 'Cierre de Sesion';
        $bitacora->user_id = Auth::user()->id;
        $bitacora->save();

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('dashboard.index');
    }


}
?>
