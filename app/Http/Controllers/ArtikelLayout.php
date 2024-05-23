<?php

namespace App\Http\Controllers;

use App\Models\Postt;
use App\Models\Article;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;


class ArtikelLayout extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function artikel()
    {
        return view('page.artikelLayout');
    }
    public function post()
    {  
            return view('page.post', ['tile' => 'blog post', 'posts' =>Article::latest()->filters(request(['search']))->paginate(5)]);
    }
        // return view('page.post', ['tile' => 'blog post', 'posts' =>Article::all() ]);

    public function posts($id)
    {
        {
 
            $post = Article::find($id);

            // dd($post);
            return view('page.posts', ['post' => $post]);
        }
    }

    public function search(){

    }
    public function home()
    {  
            return view('home', ['tile' => 'blog post', 'posts' =>Article::latest()->filters(request(['search']))->paginate(5)]);
    }
            
    
}
