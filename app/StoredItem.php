<?php

namespace App;

class StoredItem
{
    public $qty;
    public $price;
    public $item;

    public function __construct($item){
        $this->qty = 0;
        $this->price = $item->product_price;
        $this->item = $item;
    }
}
