@extends('layouts.app')

@section('content')

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
    <span class="card-text"> {{$post->user->name}} </span>
    <h5 class="card-title"> email:-</h5>
    <span class="card-text">{{$post->user->email}}</span>
    <h5 class="card-title"> Created At:-</h5>
    <span class="card-text"> {{$post->user->created_at}} </span>
  </div>
</div>

@endsection