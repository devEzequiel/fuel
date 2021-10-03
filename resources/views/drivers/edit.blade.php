@extends('master')
@section('content')

    <div class="container my-5">

        @if(!empty($driver))
            <h1>Editar Motorista {{$driver->name}}</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{url("/driver", ['id'=> $driver->id])}}" method="post">

                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Nome</label>
                    <input id="name" name="name" type="text" class="form-control" value={{$driver->name}} required>
                </div>

                <div class="form-group">
                    <label for="document">CPF</label>
                    <input id="document" name="document" type="text" class="form-control" value={{$driver->document}} required>
                </div>

                <div class="form-group">
                    <label for="cnh_number">Número da CNH</label>
                    <input id="cnh_number" name="cnh_number" type="text" class="form-control" value={{$driver->cnh_number}} required>
                </div>

                <div class="form-group">
                    <label for="cnh_category">Categoria CNH</label>
                    <input id="cnh_category" name="cnh_category" type="text" class="form-control" value={{$driver->cnh_category}} required>
                </div>

                <div class="form-group">
                    <label for="birth_date">Data de Nascimento</label>
                    <input id="birth_date" name="birth_date" type="date" class="form-control" value={{$driver->birth_date}} required>
                </div>

                <div class="form-group">
                    <label for="birth_date">Status</label>
                    <select id="status" name="status" type="date" class="form-control">
                        <option value="1" @if($driver->status == 1) selected @endif>Ativo</option>
                        <option value="2" @if($driver->status == 2) selected @endif>Inativo</option>
                    </select>
                </div>

                <input type="submit" value="Atualizar" class="btn btn-primary">
            </form>
        @endif

    </div>
@endsection
