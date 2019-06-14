<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categorie;
use Session;
use App\cart;

class shopingcartcontroller extends Controller
{
    public function index(Request $request)
    {
        $categories = categorie::all();
        $product = $request->session()->get('cart');
        return view('cart',[
            'products' => $product,
            'categories' => $categories,
        ]);
    }
    public function info(Request $request)
    {
        $categories = categorie::all();
        return view('info',[
            'categories' => $categories,
        ]);
    }
}
