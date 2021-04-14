@extends('layouts.colocarnoBD')

@section('container')
<h2>CRIAR REGISTRO</h2>

<form action="/cadastros" method="POST">

 @csrf
 
 <div class="mb-3">
    <label for="" class="form-label">Nome</label>
    <input id="nome" required name="nome" type="text" class="form-control" tabindex="1">
 </div>

 <div class="mb-3">
    <label for="" class="form-label">Endereco</label>
    <input id="endereco" required name="endereco" type="text" class="form-control" tabindex="2">
 </div>

 <div class="mb-3">
    <label for="" class="form-label">Bairro</label>
    <input id="bairro" required  name="bairro" type="text" class="form-control" tabindex="3">
 </div>

 <div class="mb-3">
    <label for="" class="form-label">Municipo</label>
    <input id="municipio" required  name="municipio" type="text" class="form-control" tabindex="4">
 </div>

 <div class="mb-3">
    <label for="" class="form-label">Estado</label>
    <input id="estado" required  name="estado" type="text" class="form-control" tabindex="5">
 </div>

 <div class="mb-3">
    <label for="" class="form-label">CEP</label>
    <input id="cep" required name="cep" type="number" class="form-control" tabindex="6">
 </div>

 <div class="mb-3">
    <label for="" class="form-label">Telefone</label>
    <input id="telefone" required  name="telefone" type="number"  class="form-control" tabindex="7">
 </div>


<a href="/cadastros" class="btn btn-secondary" tabindex="9">Cancelar</a>
<button type="submit" class="btn btn-success" tabindex="10">Salvar</button>
  
</form>
@endsection