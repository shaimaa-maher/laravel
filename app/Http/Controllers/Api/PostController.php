<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Http\Resources\PostResource;


class PostController extends Controller
{
 
  public function index()
    {
        return PostResource::collection(Post::all());
    }

 public function show($id)
    {
        $post = Post::find($id);
        return new PostResource($post);
    }
 
}
