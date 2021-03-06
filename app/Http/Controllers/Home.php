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

        return redirect('/listarCadastro')->with('msg', 'Novo contato adicionado.');

        // adicionar a diretiva @csrf dentro do formulário, senão fizer isso o Laravel não registrará as informações no banco de dados.

    }

    public function deletarCadastro($id) {
        
        Contato::findOrFail($id)->delete();

        return redirect('/listarCadastro')->with('msg', 'Contato excluído com sucesso.');

    }


    public function editarCadastro(Request $request) {
        
        $obj = Contato::findOrFail($request->id);   
        
        return view('editarCadastro', ['editar' => $obj]);
    }


    public function atualizarCadastro(Request $request) {

        $obj = Contato::findOrFail($request->id);

        $obj->update( $request->all() );

        return redirect('/listarCadastro')->with('msg', 'Contato atualizado com sucesso.');

        

    }


    

}
