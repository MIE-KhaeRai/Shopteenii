<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {

        $category_all = [];
        $category =  Category::orderBy('category_name','ASC')->get();
        foreach ($category as $key => $value) {
            if($value->data_subdets!="[]"){
                $value['data_subdets'] = json_decode($value->data_subdets);

            }else{
                $value['data_subdets'] = [['sub_name'=>'no']];
            }
            array_push($category_all,json_decode($value));
        }
        // return $category_all;
        return view('pages.category', compact('category_all'));
    }
}