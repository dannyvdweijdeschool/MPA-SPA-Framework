<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $fillable = ["order_id", "product_id", "product_amount", "total_price"];

    /**
     * Is a relation to the user.
     */
    public function order(){
        return $this->belongsTo("App\Order");
    }
}
