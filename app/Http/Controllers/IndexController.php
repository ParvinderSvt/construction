<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $blogs = Blog::all();
        return view('visitors.index',compact('blogs'));
    }

    public function blog($id){
        $blog = Blog::findOrFail($id);
        return view('visitors.blog',compact('blog'));
    }
}
