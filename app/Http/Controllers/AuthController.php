<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Cargar el formualrio de REGISTRO de Usuario
     */
    public function registrarse()
    {
        return view("auth.registro");
    }

    public function guardarUsuario(Request $request)
    {
        // validar
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required",
            "c_password" => "required|same:password"
        ]);
        // guardar
        $u = new User();
        $u->name = $request->name;
        $u->email = $request->email;
        $u->password = bcrypt($request->password);
        $u->save();
        
        // refireccionar
        return redirect("/");
    }
}
