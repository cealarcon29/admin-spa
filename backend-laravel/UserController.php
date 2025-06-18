<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {
    public function index() {
        return User::where('estado', true)->get();
    }

    public function store(Request $request) {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'correo' => 'required|email|unique:users,email',
            'password' => 'required|string|max:200',
            'rol_id' => 'required|exists:roles,id',
            'tipo_documento_id' => 'required|exists:document_types,id',
        ]);
        return User::create([
            'nombre' => $request->nombre,
            'correo' => $request->correo,
            'password' => Hash::make($request->password),
            'rol_id' => $request->rol_id,
            'tipo_documento_id' => $request->tipo_documento_id,
            'estado' => true
        ]);
    }
}
