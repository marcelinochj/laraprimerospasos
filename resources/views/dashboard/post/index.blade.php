@extends('dashboard.layout')

@section('content')
    <a href="{{route('post.create')}}">Nuevo Post</a>
    <table>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Posteado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{$post->title}}</td>
                    <td>{{$post->category->title}}</td>
                    <td>{{$post->posted}}</td>
                    <td> 
                        <a href="{{ route('post.edit', $post)}}">Editar</a>
                        <a href="{{ route('post.show', $post)}}">Ver</a>
                        <form action="{{ route('post.destroy', $post->id)}} " method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach  
        </tbody>
    </table>

    {{$posts->links()}}
@endsection

