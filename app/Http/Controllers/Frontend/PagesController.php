<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\Models\Product;

class PagesController extends Controller
{
    public function index()
    {
       
        $products = Product::orderBy('id', 'desc')->get();
        return view('shop.pages.index')->with('products', $products);

    }

   
    public function contact()
    {
        return view('shop.pages.contact');
    }

   
    public function blog()
    {
        return view('shop.pages.blog');
    }

   
   
}
