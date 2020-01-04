@extends('layouts.app')

@section('content')
<form action ="/posts/create">
<div class="container">
  <div class="row">
    <div class="col text-center pt-5 pb-5">
    <button type="submit" class="btn btn-success btn-lg">Create Post</button>
    </div>
  </div>
</div>
</form>

<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Slug</th>
      <th scope="col">Created at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach($posts as $index => $value) 
      <tr>
      <th scope="row">{{$value['id']}}</th>
      <td>{{$value['title']}}</td>
      <td>{{$value['slug']}}</td>
      <td>{{$value['created_at']->format('g:ia \o\n l jS F Y')}}</td>
      <td> 
      <a href="{{route('posts.view',['post' => $value['id'] ])}}" class="btn btn-info" >
      View
      </a>
      <a href="{{route('posts.edit',['post' => $value['id'] ])}}" class="btn btn-primary">
      Edit
      </a>

      <form method="POST" action ="/posts/{{$value['id']}}/delete" class="d-inline">
      @csrf
      @method('DELETE')
      <button onclick="return confirm('Are you sure that you want to delete?')" class="btn btn-danger">Delete</button>
      </form>
      </td>
      @endforeach

  </tbody>
</table>
@endsection


