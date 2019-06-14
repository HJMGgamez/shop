<?php

namespace App\Http\Controllers;

use App\articles;
use App\categorie;
use Illuminate\Http\Request;
use session;
use App\cart;


class articlesController extends Controller
{   

    public function index()
    {
        $articles = articles::all();
        $categories = categorie::all();
        
        return view('shopIndex',[
            'articles' => $articles,
            'categories' => $categories,
        ]);
    }
    public function addToCart(Request $request,$id)
    {
        $product = articles::findOrFail($id);
        $shoppingcart = new cart($request);
        $qty = $request->input('qty', 1);
        $shoppingcart->addToItems($request,$product, $qty);
        return redirect()->back();
    }
    public function show($article)
    {
        $article = 	articles::find($article);
        $categories = categorie::all();
        return view('product', [
            'article' => $article,
            'categories' => $categories,
        ]);
    }
    public function deleteItem(Request $request, $id)
    {
        $shoppingcart = new cart($request);
        $shoppingcart->removeAItem($request, $id);
        return redirect()->back();
    }
    public function flushShoppingcart(Request $request)
    {
        $shoppingcart = new cart($request);
        $shoppingcart->forgetItem($request);
        return redirect()->back();
    }
}
