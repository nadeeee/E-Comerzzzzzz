<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id = null){
        
        $categories = Category::all();

        // Pageination
        $products =Product::paginate(6);
        return view('shop.index', compact('products','categories','id'));
    }

    public function category($id){
        $categories = Category::all();
        $products = Product::where('category_id', $id)->paginate(6);
        return view('shop.index', compact('products','categories','id'));

    }

    public function show($id){

        $product =Product::findOrFail($id);
        return view('shop.show',compact('product'));
    }
}
