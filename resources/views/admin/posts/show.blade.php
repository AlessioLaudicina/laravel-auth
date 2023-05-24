
@extends('layouts.admin')

@section('page-title', $post->title)

@section('content')

<h1>{{$post->title}}</h1>
<h6><small>Slug: {{$post->slug}}</small></h6>

<h3>Categoria: {{$post->category?$post->category->name:'Nessuna categoria abbinata'}}</h3>

@if ($post->cover_image)
    <img class="img-thumbnail" src="{{$post->cover_image}}" alt="{{$post->title}}"/>
@endif

<p>{{$post->content}}</p>

<a class="btn btn-primary" href="{{route('admin.posts.index')}}">Torna alla lista</a>

@endsection