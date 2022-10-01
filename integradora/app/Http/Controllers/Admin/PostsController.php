<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Post;
use App\Models\User;
use App\Models\Models\Category;
use Auth;
class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('soloadmin',['only'=>['index']]);
    }
   

    public function index()
    {   

        $posts = Post::where('user_id', auth()->user()->id)->paginate(2);
        //$posts= Post::all();
        $categories= Category::all();
       

        return view('Administrador.posts.index',compact('posts'), [
        'posts' => $posts,
        'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {   
       // $user_id=Auth::user()->id;
        $newPost = new Post();

        if( $request->hasFile('featured')){
            $file = $request->file('featured');
            $destinationPath = 'images/featureds/';
            $filename = time(). '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('featured')->move($destinationPath, $filename);
            $newPost->featured = $destinationPath . $filename;
        }

        $newPost->user_id = Auth::user()->id;
        $newPost->category_id = $request->category_id;
        $newPost->descripcion = $request->descripcion;
        $newPost->precio = $request->precio;
        $newPost->encabezado = $request->encabezado;
        $newPost->ubicacion = $request->ubicacion;
        $newPost->save();

        return redirect()->back();
    }

    public function update(Request $request, $postId)
    {   
        $post = post::find($postId);
        //$post->user_id = Auth::user()->id;
        $post->category_id = $request->category_id;
        $post->descripcion = $request->descripcion;
        $post->precio = $request->precio;
        $post->encabezado = $request->encabezado;
        $post->ubicacion = $request->ubicacion;


        if( $request->hasFile('featured') ){
            $file = $request->file('featured');
            $destinationPath = 'images/featureds/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('featured')->move($destinationPath, $filename);
            $post->featured = $destinationPath . $filename;
          }

        $post->save();
        
        return redirect()->back();
    }



    public function delete(Request $request, $postId)
    {
        $post = Post::find($postId);

        $post->titulo = $request->titulo;
        $post->delete();
        
        return redirect()->back();
    }
    
    
}
