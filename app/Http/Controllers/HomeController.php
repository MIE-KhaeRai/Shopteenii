<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function index()
    {
        $category_all =  Category::get();
        return view('pages.home', compact('category_all', 'category_all'));
    }
}
