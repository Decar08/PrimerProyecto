@extends('template')

@section('content')

<h1>Listado</h1>

<!-- para recorrer el array post elemento por elemento tomando la variable $post que esta en las-->
@foreach ($posts as  $post)

<p>
    <strong>{{ $post['id'] }}</strong>
    <a href="{{ route('post', $post['slug']) }}"> 
        {{$post['title']}} </a>
</p>
    
@endforeach

@endsection