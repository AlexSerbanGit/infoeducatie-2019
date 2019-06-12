<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function products(){
        return $this->hasMany('App\ProductToMenu', 'product_id');
    }
}