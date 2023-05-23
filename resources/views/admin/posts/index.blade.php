@extends('layouts.admin')


@section('content')

<a href="{{route('admin.posts.create')}}" class="btn btn-primary my-4">Crea nuovo post</a>

<table class="table my-4">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Slug</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->slug}}</td>
                <td class="flex">
                    <a class="btn btn-primary" href="{{route('admin.posts.show', $post->slug)}}">VEDI</a>
                    <a class="btn btn-warning" href="{{route('admin.posts.edit', $post->slug)}}">MODIFICA</a>

                    <form class="form_delete_post" action="{{route('admin.posts.destroy', ['post' => $post->slug])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Elimina</button>
                    </form>


                </td>
            </tr>
        @endforeach
    </tbody>
  </table>



  <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Conferma eliminazione</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Confermi di voler eliminare l'elemento selezionato?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-danger">Conferma eliminazione</button>
        </div>
        </div>
    </div>
</div>


@endsection