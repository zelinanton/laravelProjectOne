<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        $products = new Product();
        return view('home', ['products' => $products->all()]);
    }

    public function reviews() {
        $reviews = new Contact();
        return view('reviews', ['reviews' => $reviews->all()]);
    }

    public function products() {
        $products = new Product();
        return view('products', ['products' => $products->all()]);
    }

    public function reviews_check(Request $request){
        $valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'subject' => 'required|min:4|max:100',
            'message' => 'required|min:15|max:500'
        ]);
        $review = new Contact();
        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('reviews');
    }

    public function products_edit(Request $request){
        $product = new Product();
        $product->image = $request->input('image');
        $product->name = $request->input('name');
        $product->price = $request->input('price');

        $product->save();

        return redirect()->route('products');
    }

    public function basket() {
        return view('basket');
    }
}
