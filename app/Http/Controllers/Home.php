<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contato;

class Home extends Controller
{
    public function homeTemplate() {
        return view('home');
    }

    public function cadastro() {
        return view('cadastro');
    }

    public function listarContatos() {

        $contatos = Contato::all(); // seria o mesmo que fazer uma query sql com select all        

        return view('cadastro', ['contatos' => $contatos]);

    }

    public function novoCadastro(Request $request) {

        $contato = new Contato;

        $contato->nome = $request->nome;
        $contato->email = $request->email;
        $contato->telefone = $request->telefone;

        $contato->save();

        return redirect('/');

        // adicionar a diretiva @csrf dentro do formulário, senão fizer isso o Laravel registrar as informações no banco de dados

    }

}
