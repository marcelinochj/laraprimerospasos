@extends('dashboard.layout')

@section('content')
    <div>Post: {{$category->title}}</div>
    <div>Contenido: {{$category->slug}}</div>
@endsection