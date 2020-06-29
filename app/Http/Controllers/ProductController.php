<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index($id)
    {
        $product =  Product::where('product_id',$id)->take(18)->get();

        return view('pages.product-detail', compact('product'));
    }
}