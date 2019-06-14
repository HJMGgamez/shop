<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\articles;
use App\categorie;

class categorieController extends Controller
{
    public function index($category)
    {
        $articles = articles::where('categories', $category)->get();
        $categories = categorie::all();
        
        return view('shopIndex', [
            'articles' => $articles,
            'categories' => $categories,
        ]);
    }
}
