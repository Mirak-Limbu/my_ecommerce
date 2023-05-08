<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    //
    function index()
    {
        $category = Category::all();
        $product = Product::all();
        return view('frontend.index', compact('category', 'product'));
    }

    function cart()
    {
        if (Auth::user()) {
            $category = Category::all();
            $product = Product::all();
            return view('frontend.cart.index', compact('category', 'product'));
        } else {
            return redirect('/login');
        }
    }
    function checkout()
    {
        return view('frontend.checkout.index');
    }
}
