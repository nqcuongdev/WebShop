<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Exports\ProductExport;
use App\Exports\OrderExport;

class ExportExcelController extends Controller
{
    public function exportProducts(){
    	return Excel::download(new ProductExport, 'products-list.xlsx');
    }

    public function exportOrder(){
    	return Excel::download(new OrderExport, 'order-list.xlsx');
    }
}
