<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Product;
use App\Models\ProductImage;


class ProductsController extends Controller
{
    public function index()
    {
       
        //$products = Product::orderBy('id', 'desc')->get();
        $products = Product::orderBy('id', 'desc')->paginate(1);
        return view('shop.pages.index')->with('products', $products);
    }
    

}
