@extends('master')

@section('content')
    <div class="container my-5">
        <h1>Cadastro de Veículos</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{url("/vehicle")}}" method="post">
            @csrf

            <div class="form-group">
                <label for="license">Placa</label>
                <input id="license" name="license_plate" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="name">Nome do Veículo</label>
                <input id="name" name="name" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="fuel_type">Tipo de Combustível</label>
                <select id="fuel_type" name="fuel_type" class="form-control">
                    <option value="1">Gasolina</option>
                    <option value="2">Etanol</option>
                    <option value="3">Diesel</option>
                </select>
            </div>

            <div class="form-group">
                <label for="manufacturer">Fabricante</label>
                <input id="manufacturer" name="manufacturer" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="manufacture_year">Ano de Fabricação</label>
                <input id="manufacture_year" name="manufacture_year" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="tank_capacity">Capacidade Máxima do Tanque</label>
                <input id="tank_capacity" name="tank_capacity" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="comments">Observações</label>
                <textarea id="comments" name="comments" type="date" class="form-control"></textarea>
            </div>

            <input type="submit" class="btn btn-primary" value="Cadastrar">

        </form>
    </div>
@endsection

