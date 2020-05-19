<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        //prendiamo i dati
        $products = new Product;
        $products->all();
        dd($products);
        return view('home');
    }

    public function show($id)
    {
        return view('prodotto', compact('id'));
    }
}
