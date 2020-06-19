<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * Is a relation to the user.
     */
    public function user(){
        return $this->belongsTo("App\User");
    }

    /**
     * Is a relation to the orderProducts.
     */
    public function orderProducts(){
        return $this->hasMany("App\OrderProduct");
    } 
}
