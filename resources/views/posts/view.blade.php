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


<div class="card mt-5">
  <div class="card-header">
    Post Info
  </div>
  <div class="card-body">
    <h5 class="card-title"> title:-</h5>
    <span class="card-text">{{$post['title']}}</span>
    <h5 class="card-title"> description:-</h5>
    <span class="card-text">{{$post['description']}}</span>
  </div>
</div>

<div class="card mt-5">
  <div class="card-header">
    Author Info
  </div>
  <div class="card-body">
    <h5 class="card-title"> name:-</h5>
    <span class="card-text"> </span>
    <h5 class="card-title"> email:-</h5>
    <span class="card-text"></span>
    <h5 class="card-title"> Created At:-</h5>
    <span class="card-text"></span>
  </div>
</div>

@endsection