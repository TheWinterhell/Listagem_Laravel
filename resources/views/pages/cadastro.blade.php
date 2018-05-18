@extends('pages.layout')

@section('content')

        <h1> Cadastro de Cães </h1>
    <form method="post" action="{{action('CaesController@store')}}">
      @csrf
            <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="form-group">
              <label for="raca">Raça</label>
              <input type="text" class="form-control" id="raca" name="raca">
            </div>
            <input type="submit" class="btn btn-primary" value="Salvar">
          </form>
            @foreach($errors->all() as $error)
            <div class="mt-5 alert alert-danger">
            <ul>
                <li>{{$error}}</li>
                </ul>
            </div>
            @endforeach 
@endsection