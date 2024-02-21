@extends('dashboard.layout')

@section('content')
<h1>Editar Categoria</h1>

@include('dashboard.fragment._errors-form')

<h1>Actualizar Categoria: {{$category->title}}</h1>

    <form action="{{ route('category.update', $category->id)}} " method="POST" enctype="multipart/form-data">
        @method("PUT")
        @include('dashboard.category._form', ["task" => "edit"])
    </form>
@endsection