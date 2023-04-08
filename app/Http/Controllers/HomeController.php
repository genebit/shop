<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $admin = false;

        // get all the products
        $products = Product::all();

        //pass the data to th view
        return view('home', ['products' => $products, 'admin' => $admin]);
    }
}
