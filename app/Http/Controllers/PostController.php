<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\Http\Requests\StorePostRequest;
use  App\User;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => post::all()
        ]);
    }


    public function view($post)
    {   
        

        return view('posts.view',[
            'post'=>post::find($post),
        
        ]);
        // another way return request()->post;
    }


    public function edit($id)
    {
        return view('posts.edit',[
            'id'=>post::find($id)
        ]);
          
           
    }
    
    
    public function update(StorePostRequest $request)
    {   
        $id = $request->id;
        post::where('id',$id)
        ->update(['title'=>request()->title,'description'=>request()->description]);
        return redirect()->route('posts.index');
    }

    public function delete($id)
    {
        post::where('id', $id)->delete();
        return redirect()->route('posts.index');
    }

    public function create()
    {   
        return view('posts.create');
    }


    public  function store(StorePostRequest $request)
    { 
        //create part.
        post::create([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user()->id
            ]);

        return redirect()->route('posts.index');
    }

}


