<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = "products";

    public function product_type(){return $this->belongsTo('App\TypeProduct','id_type','id');}
    
    public function bill_detail(){return $this->hasMany('App\BillDetails','id_product','id');}
}
