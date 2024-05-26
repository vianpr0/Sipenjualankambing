<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Section;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function category() {
        $sections = Section::all();
        $articles = null;

        return view('page.category', compact('sections', 'articles'));
    }
    public function categorys($id) {
        $section = Section::find($id);
        $articles = $section->article()->paginate(5); // Paginate articles

        return view('page.categorys', compact('section', 'articles'));
    }
    public function index()
    {
        $sections = Section::all();
        $articles =  Article::latest()->filters(request(['search']))->paginate(6);

        return view('page.index', compact('sections', 'articles'));
    }

    public function show($category)
    {
        $sections = Section::all();
        $section = Section::find($category);
        $articles = $section->article()->paginate(5);

        return view('page.index', compact('sections', 'articles', 'section'));
    }
    

    
}
