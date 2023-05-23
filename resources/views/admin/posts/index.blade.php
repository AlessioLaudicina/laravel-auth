@extends('layouts.admin')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titolo</th>
      <th scope="col">Content</th>
      <th scope="col">Immagine</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <th scope="row">1</th>
      <td>{{$post->id}}</td>
      <td>{{$post->title}}</td>
      <td>{{$post->slug}} </td>
      <td>
        <a href="{{route('admin.posts.show', $post->slug)}}">VEDI</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection