@extends('dashboard.layout')

@section('content')
    <a href="{{route('category.create')}}">Nueva Categoria</a>
    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Slug</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{$category->title}}</td>
                    <td>{{$category->slug}}</td>
                    <td> 
                        <a href="{{ route('category.edit', $category)}}">Editar</a>
                        <a href="{{ route('category.show', $category)}}">Ver</a>
                        <form action="{{ route('category.destroy', $category->id)}} " method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach  
        </tbody>
    </table>

    {{$categories->links()}}
@endsection

