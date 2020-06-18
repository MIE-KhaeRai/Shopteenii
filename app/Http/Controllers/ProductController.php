<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $product_all = [];
        return $product =  Product::select('title')->get();

        // foreach ($category as $key => $value) {
        //     if($value->data_subdets!="[]"){
        //         $value['data_subdets'] = json_decode($value->data_subdets);

        //     }else{
        //         $value['data_subdets'] = [['sub_name'=>'no']];
        //     }
        //     array_push($category_all,json_decode($value));
        // }
        // // return $category_all;
        // return view('pages.home', compact('category_all', 'category_all'));
    }
}