<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

        public function register(Request $request){

        $request->validate([
        'email' => 'required|string|email|max:255|unique:clientes,email',
        'phone' => 'required|string|max:20|unique:clientes,telefone',
        'password' => 'required|string|min:8|confirmed',
        ]);
        
        Cliente::create([

            'email'=> $request->email,
            'telefone' => $request->phone,
            'password' => $request->password,

        ]);

        return redirect()->route('logar')->with('sucesso', 'conta criada com sucesso!');
        }
}