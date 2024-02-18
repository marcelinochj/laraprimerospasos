@extends('dashboard.layout')

@section('content')


    <div>Post: {{$post->title}}</div>
    <div>Contenido: {{$post->content}}</div>
    <div>Posteado: {{$post->posted}}</div>
    <div>Descripción: {{$post->description}}</div>

@endsection