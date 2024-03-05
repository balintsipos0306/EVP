@extends("layout")
@section("content")
    @if($nev)
        <h2>Hello {{$nev}}</h2>
    @endif
@endsection