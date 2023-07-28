<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home() {
        return view('home');
    }

    public function features() {
        return view('features');
    }

    public function pricing() {
        return view('pricing');
    }

    public function reviews() {
        $reviews = new Contact();
        return view('reviews', ['reviews' => $reviews->all()]);
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
}
