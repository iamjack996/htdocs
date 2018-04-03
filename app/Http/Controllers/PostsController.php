<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class PostsController extends Controller
{
    public function index()
    {
        $Posts = Posts::all();
        return view('index', [
          'Posts' => $Posts
        ]);
    }
}
