@extends('layouts.app')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

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
  </div>
  <button type="submit" name ="submit" class="btn btn-success">Update</button>

</form>

@endsection