<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class RentacuartosController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('postsRenta', ['posts' => $posts]);
    }
}
