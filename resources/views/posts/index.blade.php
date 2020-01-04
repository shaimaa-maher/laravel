@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">ITI Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/posts">All Posts <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

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
      <th scope="col">Created at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

    @foreach($posts as $index => $value) 
      <tr>
      <th scope="row">{{$value['id']}}</th>
      <td>{{$value['title']}}</td>
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
      <button onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</button>
      </form>
      </td>
      @endforeach

  </tbody>
</table>
@endsection


