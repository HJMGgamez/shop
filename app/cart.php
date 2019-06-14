<?php

namespace App;
use Session;
use Illuminate\Http\Request;

class cart {

    private $items = [];

    //checkt of i have something in my cart 
    public function __construct($request)
    {
        if($request->session()->has('cart')){
            $this->items = $request->session()->get('cart');
        } else {
            $this->items = NULL;
        }
    }
      
    //add a item to the items array
    public function addToItems($request,$product ,$qty)
    {   
        if (empty($this->items[$product->id]))
        {
            $this->items[$product->id] = ['id' => $product->id,'name' => $product->name, 'qty' => $qty, 'price' => $product->price];
        } else {
            $this->items[$product->id]['qty'] += $qty;
        }
        $this->saveCart($request);
    }
    private function saveCart($request)
    {
        $request->session()->put('cart', $this->items);
        $request->session()->save();
    }
    public function removeAItem($request, $id)
    {
        unset($this->items[$id]);;
        $this->saveCart($request);
    }
    public function forgetItem($request)
    {
    	$request->session()->flush('cart');
    }
    private function addCount($id, $qty)
    {
        $this->items[$id]['qty'] += $qty;
    }
    private function removeCount($id, $qty)
    {
        $this->items[$id]['qty'] -= $qty;
    }
    public function getItems()
    {
        return $this->items;
    }

}