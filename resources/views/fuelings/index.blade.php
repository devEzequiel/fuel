@extends('master')


@section('content')
    <div class="container my-5">
        <h1>Registro de Abastecimentos | <a href="fueling/create">Novo</a></h1>

        @if(!empty($fuelings))
            <table class="table table-striped table-hover my-4">
                <thead class="bg-primary text-white">
                <th>Placa do Veículo</th>
                <th>Nome do Motorista</th>
                <th>Tipo de Combustível</th>
                <th>Data do Abastecimento</th>
                <th>Quantidade(L)</th>
                </thead>
                @foreach($fuelings as $f)
                    <tr>
                        <td>{{$f->vehicle->license_plate}}</td>
                        <td>{{$f->driver->name}}</td>
                        <td>@switch($f->fuel_type)
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
                            @endswitch
                        </td>
                        <td>{{\Carbon\Carbon::parse($f->date)->format('d/m/Y')}}</td>
                        <td>{{$f->quantity}} L</td>

                    </tr>
                @endforeach
            </table>
        @endif
    </div>
@endsection
