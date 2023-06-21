<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function layout(){
        $data = \File::json('data/layout.json' , JSON_THROW_ON_ERROR);
        // dd($data);
        return view('layout')->with($data);
    }
}
