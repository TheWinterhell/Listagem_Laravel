@extends('pages.layout')

@section('content')
    @if(old('nome'))
    <div class="alert alert-success">
        <strong>Sucesso!</strong> O cão {{old('nome')}} foi adicionado.
    </div>
    @endif
            <h1> Listagem de Cães </h1>
            <a class="btn btn-primary float-right mb-2" href="/caes/create">Cadastrar cães</a>
        <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>Nome</th>
            <th>Raça</th>
            <th>Ação</th>
        </tr>
        @foreach($caes as $c)
        <tr>
        <td>{{$c->Nome}}</td>
        <td>{{$c->raca}}</td>
        <td><form method="post"  action="{{action('CaesController@destroy', [$c->id])}}">
            @csrf
            <input type="hidden" name="_method" value="DELETE">

            <input type="submit" class="btn btn-danger" value="Apagar">
            </form>
        </td>

        @endforeach
        </table>
@endsection