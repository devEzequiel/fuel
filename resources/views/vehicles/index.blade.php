@extends('master')


@section('content')
    <div class="container my-5">
        <h1>Listagem de Veículos | <a href="vehicle/create">Novo</a></h1>

        @if(!empty($vehicles))
            <table class="table table-striped table-hover my-4">
                <thead class="bg-primary text-white">
                <th>Placa</th>
                <th>Nome</th>
                <th>Tipo de Combustível</th>
                <th>Fabricante</th>
                <th>Ano de Fabricação</th>
                <th>Capacidade do Tanque</th>
                <th>Observações</th>
                <th>Ações</th>
                </thead>
                @foreach($vehicles as $vehicle)
                    <tr>
                        <td>{{$vehicle->license_plate}}</td>
                        <td>{{$vehicle->name}}</td>
                        <td>@switch($vehicle->fuel_type)
                                @case(1)
                                Gasolina
                                @break

                                @case(2)
                                Etanol
                                @break

                                @case(3)
                                Diesel
                                @break

                                @default
                                Gasolina
                            @endswitch</td>
                        <td>{{$vehicle->manufacturer}}</td>
                        <td>{{$vehicle->manufacture_year}}</td>
                        <td>{{$vehicle->tank_capacity}}</td>
                        <td>{{$vehicle->comments}}</td>
                        <td>
                            <a href="{{url('vehicle/'.$vehicle->id)}}"> Editar </a>|
                            <a href="{{ route('vehicles.delete', ['id' => $vehicle->id]) }}"> Deletar</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        @endif
    </div>
@endsection
