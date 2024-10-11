<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContantRequest;
use App\Models\contact;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subscribe;

class ThemeController extends Controller
{
    public function home()
    {
        return view('themes.home');
    }

    public function about()
    {
        return view('themes.about');
    }

    public function services()
    {
        return view('themes.services');
    }

    public function cart()
    {
        return view('themes.cart');
    }

    public function checkout()
    {
        return view('themes.checkout');
    }

    public function shop()
    {
        return view('themes.shop');
    }

    public function blog()
    {
        return view('themes.blog');
    }

    public function contact()
    {
        $categories = Category::get();
        return view('themes.contact', compact('categories'));
    }


    public function contactstore(StoreContantRequest $request)
    {
        $validateData = $request->validated();

        contact::create($validateData);

        return back()->with('status' , 'Your data has been received successfully.');
        
    }

    
}