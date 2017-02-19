<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('products.index', compact('products'));
    }

    public function show()
    {
        $product = Products::all();
//        dd($product);
        return view('products.show', compact('product'));
    }

    public function addProducts()
    {
        return view('products.add');
    }
    public function store(){
        $this->validate(request(), [
           'title' => 'required',
           'alias' => 'required',
           'price' => 'required',
           'short_description' => 'required',
           'description' => 'required',
        ]);
        Products::create([
            'title' => request('title'),
            'alias' => request('alias'),
            'price' => request('price'),
            'category_id' => request('categories_id'),
            'short_description' => request('short_description'),
            'description' => request('description'),
        ]);
        return redirect('/products');
    }
}
