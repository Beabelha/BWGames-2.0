<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Tag;

class HomeController extends Controller
{
    public function index(Product $products)
    {
        return view('home')->with('products', $products->paginate(8));
    }

    public function show(Product $products){
        return view('welcome')->with('products', $products->paginate(8));
    }

    public function searchCategory(Category $category){
        return view('store.search')->with('products', $category->products()->paginate(4))->with('title', $category->name);
    }

    public function showProduct(Product $product){
        return view('store.product')->with('product',$product);
    }
}
