<?php

namespace App\Http\Controllers;

use App\Models\Adconfig;
use App\Models\Article;
use App\Models\Section;
use App\Models\tagging_tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;


class CategoryController extends Controller
{
    //
    public function category() {
        $sections =  Cache::rememberForever('sections', function() {
            return Section::all();
        });
        $articles = null;

        return view('page.category', compact('sections', 'articles'));
    }
    public function categorys($id) {
        $section = Section::find($id);
        $articles = $section->article()->paginate(5); // Paginate articles
        $toptag = tagging_tag::orderBy('count', 'DESC')->take(5)->get();
        $adconfig = Adconfig::with('ad')->where('Halaman', 'Depan')->get();

        return view('page.categorys', compact('section', 'articles', 'toptag', 'adconfig'));
    }
    public function index()
    {
        $sections = Section::all();
        $articles = Article::latest()->filters(request(['search']))->paginate(6);

        return view('page.index', compact('sections', 'articles'));
    }

    public function show($category)
    {
        $sections = Section::all();
        $section =  Section::find($category);
        $articles = $section->article()->paginate(5);

        return view('page.index', compact('sections', 'articles', 'section'));
    }

    public function indextag($post)
    {
        $sections =  Section::all();
        $articles = Article::withAnyTag($post)->where("Status", 'Y')->latest('published_at')->simplePaginate(6);      
        return view ('page.index', ['sections' => $sections,'articles' => $articles]); 
    }

}
