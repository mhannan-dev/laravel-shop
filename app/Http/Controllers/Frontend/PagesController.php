<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;

class PagesController extends Controller
{
    public function index()
    {
      $products = Product::orderBy('id', 'desc')->paginate(3);
      return view('frontend.pages.index', compact('products'));
    }

    public function contact()
    {
      return view('frontend.pages.contact');
    }

    public function search(Request $request)
    {
      $search = $request->search;
      $products = Product::orWhere('title', 'like', '%'.$search.'%')
      ->orWhere('price', 'like', '%'.$search.'%')
      ->orWhere('description', 'like', '%'.$search.'%')
      ->orWhere('description', 'like', '%'.$search.'%')
      ->paginate(3);
      return view('frontend.pages.product.search', compact('products','search'));
    }
}
