@extends('master')

@section('content')
    <div class="container my-5">
        <h1>Cadastro Motoristas</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{url("/driver")}}" method="post">
            @csrf

            <div class="form-group">
                <label for="name">Nome</label>
                <input id="name" name="name" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="document">CPF</label>
                <input id="document" name="document" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="cnh_number">Número da CNH</label>
                <input id="cnh_number" name="cnh_number" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="cnh_category">Categoria CNH</label>
                <input id="cnh_category" name="cnh_category" type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="birth_date">Data de Nascimento</label>
                <input id="birth_date" name="birth_date" type="date" class="form-control">
            </div>

            <input type="submit" class="btn btn-primary" value="Cadastrar Motorista">

        </form>
    </div>
@endsection
