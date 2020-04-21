<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Defines all the fields which I want to be able to assign upon creation of this class.
    protected $fillable = ["category_name"];
}
