@extends('template.main')

@section('title', 'Cadastro')

@section('content')


    <form action="realizarCadastro" method="post" class="cadastro">

        @csrf

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input required type="nome" name="nome" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input required type="email" name="email" class="form-control" placeholder="name@example.com">
        </div>

        <div class="mb-3">
            <label class="form-label">Telefone com DDD</label>
            <input required type="number" name="telefone" class="form-control" placeholder="99123456789">
        </div>            
        
        <input class="btn btn-primary" type="submit" value="Cadastrar">
        
    
            <a class="btn btn-primary" href="listarCadastro">Listar os contatos no banco de dados</a>
        

    </form>

    @if( isset($contatos) )

        @foreach ($contatos as $contato) 
            <div class="contatos">

                <p>Nome: {{$contato->nome}} </p>
                <p>Email: {{$contato->email}} </p>
                <p>WhatsApp: {{$contato->telefone}} </p>

                <div>
                        
                    <a class="btn btn-info" href="editarCadastro">Editar</a>
                   
                    <form action="deletarCadastro/{{$contato->id}}" method="post">

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Remover {{$contato->nome}} dos seus contatos.</button>
                    
                    </form>

                </div>

            </div>
            
            

        @endforeach


    @endif

@endsection


