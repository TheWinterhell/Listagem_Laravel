@extends('pages.layout')

@section('content')

    <button class="btn btn-primary" onClick="Test()">Lista</button>

    <script>
        function Test()
        {
            location.href = "/caes";
        }
    </script>
@endsection