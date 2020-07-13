<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    function get_category(){

        return $this->belongsTo('App\Category','category_id');
    }

    function get_subcategory(){

        return $this->belongsTo('App\subCategory','category_id');
    }
}
