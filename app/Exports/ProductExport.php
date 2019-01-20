<?php

namespace App\Exports;

use App\Products;
use App\TypeProduct;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ProductExport implements FromView
{
    public function view(): View
    {
        $products = Products::join('type_products','type_products.id','=','id_type')
        					->orderby('products.id','asc')
        					->get();
        return view('admin.export-product',compact('products'));
    }
}
