<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetails extends Model
{
    protected $table = "bill_details";

    public function product(){return $this->belongsTo('App\Products','id_product','id');}
    public function bill(){return $this->belongsTo('App\Bill','id_bill','id');}
}
