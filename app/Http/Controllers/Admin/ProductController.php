<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function showProducts(){
        return view('admin.product.product_list');
    }

    public function productEdit($productId){
        return view('admin.product.product_edit');
    }

    public function showAdd(){
        return view('admin.product.add_product');
    }
}
