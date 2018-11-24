<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer";
    public function bill_details(){return $this->hasMany('App\BillDetails','id_bill','id');}
    public function bill(){return $this->belongsTo('App\Bill','id_customer','id');}
}
