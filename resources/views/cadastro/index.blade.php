@extends('layouts.colocarnoBD')

@section('container')
<a href="cadastros/create" class="btn btn-success">Novo</a>

<table class="table table-secundary table-bordered table-sm  table-striped mt-2"> 
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">ENDEREÇO</th>
            <th scope="col">BAIRRO</th>
            <th scope="col">MUNICIPIO</th>
            <th scope="col">ESTADO</th>
            <th scope="col">CEP</th>
            <th scope="col">TELEFONE</th>
            <th scope="col">OPÇÕES</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cadastros as $cadastro)
            <tr>
                <td>{{$cadastro ->id}}</td>
                <td>{{$cadastro ->nome}}</td>
                <td>{{$cadastro ->endereco}}</td>
                <td>{{$cadastro ->bairro}}</td>
                <td>{{$cadastro ->municipio}}</td>
                <td>{{$cadastro ->estado}}</td>
                <td>{{$cadastro ->cep}}</td>
                <td>{{$cadastro ->telefone}}</td>
                <td>
                    <form action="{{ route('cadastros.destroy',$cadastro->id) }}" method="POST">
                        <a href="/cadastros/{{$cadastro ->id}}/edit" class="btn btn-info btn-sm">Editar</a>
                            @csrf
                            @method('DELETE')
                        <button class="btn btn-danger btn-sm">Exluir</button>         
                    </form>  
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection