<?php

namespace App\Http\Controllers;

use App\articles;
use Illuminate\Http\Request;
use session;
use app\cart;


class articlesController extends Controller
{   
    
    
    public function index()
    {
        $articles = articles::all();
        return view('shopIndex',[
            'articles' => $articles,
        ]);
    }
    public function addToCart(request $reqeust,$id)
    {
        $shoppingcart = new cart();
    }
}
