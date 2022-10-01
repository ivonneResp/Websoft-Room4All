<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Category;
use App\Models\Models\Post;

class HomeUserController extends Controller
{



    public function index()
    {
       $categories = Category::all();
       $posts = Post::all();
       //dd($category->posts);
        return view('posts', [
            'categories' => $categories,
            'posts' => $posts
        ]);
        
    }


    public function postByCategory($category)
    {
        $categories= Category::all();
        $category = Category::where('titulo', '=' ,$category)->first();
        $categoryIdSelected = $category->id;
        $posts = Post::where('category_id', '=', $categoryIdSelected)->get();

        return view('posts', [
            'categories' => $categories,
            'posts' => $posts,
            'categoryIdSelected' => $categoryIdSelected

        ]);

      //  dd($category);
    }

}
