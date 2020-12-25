<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('type','ASC')->paginate(6);

        $data = [
            'products' => $products,
        ];
        return view('products.index',$data);
    }


    public function show(Product $product)
    {
        //$product = Product::find($id);
        $data = [
            'product' => $product,
        ];
        return view('products.show', $data);
   }
}
