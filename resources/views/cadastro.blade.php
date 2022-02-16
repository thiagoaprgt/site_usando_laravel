@extends('template.main')

@section('title', 'Cadastro')

@section('content')

<form action="" method="post" class="cadastro">

    <div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="email" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="email" class="form-control" placeholder="name@example.com">
    </div>

    <div class="mb-3">
        <label class="form-label">Whatsapp com DDD</label>
        <input type="number" class="form-control" placeholder="99123456789">
    </div>            
    
    <input class="btn btn-primary" type="submit" value="Cadastrar">

</form>


@endsection
