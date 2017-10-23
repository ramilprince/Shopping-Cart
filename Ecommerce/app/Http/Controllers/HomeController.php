<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products_show = Product::get();
        return view('home', compact('products_show'));
    }

    public function cartShow() {
        $cart_show = Cart::get();
        return view('cart', compact ('cart_show'));
    }

    public function addProduct(Request $request) {
        $product_id = $request -> product_id;
        $productname = $request -> productname;
        $productphoto = $request -> productphoto;
        $productprice = $request -> productprice;
        $productquantity = $request -> productquantity;
        $user_id = Auth::user()->id;

        $new_product = new Cart;
        $new_product -> product_id = $product_id;
        $new_product -> productphoto = $productphoto;
        $new_product -> productname = $productname;
        $new_product -> productprice = $productprice;
        $new_product -> user_id = $user_id;
        $new_product -> productquantity = $productquantity;
        $new_product -> save();

        return redirect('/home');
    }

    public function removeProduct (Request $request) {
        $product_id = $request -> product_id;
        $user_id = Auth::user()->id;

        $delete = Cart::where([['product_id', '=', $product_id],['user_id', '=', $user_id]])->delete();

        return redirect('/my-cart');

    }
}
