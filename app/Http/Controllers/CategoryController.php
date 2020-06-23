<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {



        $category_all =  Category::where('category_name','เสื้อผ้าแฟชั่นผู้ชาย')->pluck('data_subdets');
        // return view('pages.home', compact('category_all', 'category_all'));

        return view('pages.category', compact('category_all'));
    }
}
