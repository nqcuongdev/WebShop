<?php

namespace App\Http\Controllers;

use App\TypeProduct;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getIndex(){
        return view('admin.index');
    }
    public function logIn(){
        return view('admin.login');
    }
}
