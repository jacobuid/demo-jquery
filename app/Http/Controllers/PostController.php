<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts(){
        $datatable = \File::json('data/posts.json' , JSON_THROW_ON_ERROR);
        // dd($data);
        return view('posts')->with($datatable);
    }
}
