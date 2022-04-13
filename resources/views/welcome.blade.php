@extends('layouts.main')

@section("title", "HDC Events")

@section("content")

<h1>Title</h1>
@if(10 > 5)
<p>Verdadeiro</p>
@endif
<p>{{$nome}}</p>

@endsection