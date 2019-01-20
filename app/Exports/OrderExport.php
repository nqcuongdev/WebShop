<?php

namespace App\Exports;

use App\Bill;
use App\Customer;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class OrderExport implements FromView
{
    public function view(): View {
    	
    	$order = Bill::join('customer','customer.id','=','id_customer')->get();
    	return view('admin.export-order',compact('order'));
    }
}
