@extends('dashboard.layout')

@section('content')
<h1>Crear post</h1>

@include('dashboard.fragment._errors-form')
    <form action="{{ route('post.store')}} " method="POST">
        @include('dashboard.post._form')
    </form>
@endsection