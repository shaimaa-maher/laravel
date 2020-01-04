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



<form method="POST" action="/posts/{{$id['id']}}" class="pl-5 pt-5">
 @csrf
 @method('PUT')
  <div class="form-group">
    <label>Title</label>
    <input type="text" value="{{$id['title']}}" name="title" class="form-control" id="title" >
   </div>
  <div class="form-group">
    <label >description</label>
    <input type="text" class="form-control" value="{{$id['description']}}" name = "description" >
    <!-- <label>Author</label>
    <input type="text" name="posted_at" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   -->
  </div>
  <button type="submit" name ="submit" class="btn btn-success">Update</button>

</form>

@endsection