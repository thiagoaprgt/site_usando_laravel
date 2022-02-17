@extends('template.main')

@section('title', 'Editar Cadastro')

@section('content')

        <link rel="stylesheet" href="../resources/css/fonts.css">
        <link rel="stylesheet" href="../resources/css/home.css">
        <link rel="stylesheet" href="../resources/css/cadastro.css">


    <form action="atualizarCadastro" method="post" class="cadastro">

        @csrf
        @method('PUT')
        

         <input type="text" hidden name="id" value="{{$editar->id}}"> 

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input required type="nome" name="nome" value="{{$editar->nome}}" class="form-control">
            
        </div>

        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input required type="email" name="email" value="{{$editar->email}}" class="form-control" placeholder="name@example.com">
        </div>

        <div class="mb-3">
            <label class="form-label">Telefone com DDD</label>
            <input required type="number" name="telefone" value="{{$editar->telefone}}" class="form-control" placeholder="99123456789">
        </div>            
        
        <input class="btn btn-primary" type="submit" value="Atualizar">
        
    </form>

@endsection