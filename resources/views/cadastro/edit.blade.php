@extends('layouts.colocarnoBD')

@section('container')
<h1>EDITAR REGISTRO</h1>

<form action="/cadastros/{{$cadastro->id}}" method="POST">
    @csrf 
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Nome</label>
        <input id ="nome" required  name ="nome"  type ="text"  class ="form-control"  value ="{{$cadastro ->nome}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Endereço</label>
        <input id = "endereco" required  name = "endereco"  type = "text"  class = "form-control"  value = "{{$cadastro->endereco}}">  
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Bairro</label>
        <input id = "bairro"  required  name = "bairro"  type = "text"  class = "form-control"  value = "{{$cadastro->bairro}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Municipo</label>
        <input id = "municipio" required  name = "municipio"  type ="text"  class = "form-control"  value = "{{$cadastro->municipio}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Estado</label>
        <input id = "estado" required  name = "estado"  type = "text"  class = "form-control"  value = "{{$cadastro->estado}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">CEP</label>
        <input id = "cep" required  name = "cep"  type = "number" class = "form-control"  value = "{{$cadastro->cep}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Telefone</label>
        <input id = "telefone" required  name = "telefone"  type = "number" class = "form-control"  value = "{{$cadastro->telefone}}">
    </div>

    <a href="/cadastros" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection