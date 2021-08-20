<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(request $request)
    {
        Usuario::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return redirect()
               ->route('create_user')
            ->with('mensagem', 'Usuário cadastrado com sucesso!');
    }
}
