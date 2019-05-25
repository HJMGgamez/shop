<?php

namespace App;

class cart {

    private $items = [];

    //checkt of i have something in my cart 
    public function __construct()
    {
        if (!Session::has('cart'))
        {
            $this->items = NULL;
        }else {
            $this->items = Session::get('cart');
        }
    }

    //add a item to the items array
    private function addToItems($id, $qty)
    {
        $this->items = ['id' => $id, 'qty' => $qty];
    }
    
    //ask the class to add a item
    public function addrequest(Type $var = null)
    {
        
    }
}