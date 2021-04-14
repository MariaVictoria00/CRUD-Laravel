@extends('layouts.colocarnoBD')

@section('css')
<linkhref="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
@endsection


@section('container')
<a href="cadastros/create" class="btn btn-success">Novo</a>

<table id="cadastros" class="table true table-striped table-bordered  shadow-lg mt-3 table-sm" style="width:100%"> 
    <thead class="bg-primary text-white">
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
                        <a href="/cadastros/{{$cadastro ->id}}/edit" class="btn btn-info btn-sm mb-1 mr-1">Editar</a>
                            @csrf
                            @method('DELETE')
                        <button class="btn btn-danger btn-sm">Exluir</button>         
                    </form>  
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#cadastros').DataTable({
         "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]]
    });
    
} );

</script>
@endsection


@endsection


