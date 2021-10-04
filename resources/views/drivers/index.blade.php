@extends('master')


@section('content')
    <div class="container my-5">
        <h1>Listagem de Motoristas | <a href="driver/create">Novo</a></h1>

        @if(!empty($drivers))
            <table class="table table-striped table-hover my-4">
                <thead class="bg-primary text-white">
                <th>Nome</th>
                <th>CPF</th>
                <th>Número da CNH</th>
                <th>Categoria da CNH</th>
                <th>Nascimento</th>
                <th>Ações</th>
                </thead>
                @foreach($drivers as $driver)
                    <tr>
                        <td>{{$driver->name}}</td>
                        <td>{{$driver->document}}</td>
                        <td>{{$driver->cnh_number}}</td>
                        <td>{{$driver->cnh_category}}</td>
                        <td>{{\Carbon\Carbon::parse($driver->birth_date)->format('d/m/Y')}}</td>
                        <td>
                            <a href="{{url('driver/'.$driver->id)}}"> Editar </a>|
                            <a href="{{ route('drivers.delete', ['id' => $driver->id]) }}"> Deletar</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        @endif
    </div>
@endsection
