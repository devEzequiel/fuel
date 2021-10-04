@extends('master')

@section('content')
    <div class="container my-5">
        <h1>Novo Abastecimento</h1>


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{url("/fueling")}}" method="post">
            @csrf

            <div class="form-group">
                <label for="vehicle">Veículo</label>
                <select id="vehicle" name="vehicle_id" class="form-control">
                    @if(isset($data['vehicles']))
                        @foreach($data['vehicles'] as $vehicle)
                            <option value={{$vehicle['id']}}>{{$vehicle['license_plate']}}</option>
                        @endforeach
                    @endif

                </select>
            </div>

            <div class="form-group">
                <label for="driver">Motorista</label>
                <select id="driver" name="driver_id" class="form-control">
                    @if(isset($data['drivers']))
                        @foreach($data['drivers'] as $driver)
                            <option value={{$driver['id']}}>{{$driver['name']}}</option>
                        @endforeach
                    @endif

                </select>
            </div>

            <div class="form-group">
                <label for="date">Data do Abastecimento</label>
                <input id="date" name="date" type="date" class="form-control">
            </div>

            <div class="form-group">
                <label for="fuel_type">Tipo de combustível</label>
                <select id="fuel_type" name="fuel_type" class="form-control">
                    <option value="1">Gasolina</option>
                    <option value="2">Etanol</option>
                    <option value="3">Diesel</option>
                </select>
            </div>

            <div class="form-group">
                <label for="quantity">Quantidade Abastecida (Litro)</label>
                <input id="quantity" name="quantity" type="text" class="form-control">
            </div>

            <input type="submit" class="btn btn-primary" value="Registrar">

        </form>
    </div>
@endsection
