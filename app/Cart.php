<?php

namespace App;

use Session;

class Cart{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct(){
        $oldCart = Session::has("cart") ? Session::get("cart") : null;
        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }
    /**
     * @param $storedItem = the item that is gonna be added.
     */
    public function add($item, $id){
        $storedItem = ["qty" => 0, "price" => $item->product_price, "item" => $item];
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }
        $storedItem["qty"]++;
        $storedItem["price"] = $item->product_price * $storedItem["qty"];
        $this->items[$id] = $storedItem;
        $this->totalQty++;
        // += = $this->totalPrice = $this->totalPrice + $item->price
        $this->totalPrice += $storedItem["price"];
    }
} 