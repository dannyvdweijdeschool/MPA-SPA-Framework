<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //Defines all the fields which I want to be able to assign upon creation of this class.
    protected $fillable = ["product_name", "product_color", "product_materials", "product_price", "category_id"];

}
