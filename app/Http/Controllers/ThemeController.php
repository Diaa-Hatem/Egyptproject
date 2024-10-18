<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContantRequest;
use App\Models\contact;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;
use App\Models\Subscribe;
use App\Models\User;

class ThemeController extends Controller
{
    public function home()
    {
        $items=Item::take(3)->get();
        $users=User::take(3)->get();
        return view('themes.home' , compact('items' , 'users'));
    }

    public function about()
    {
        $users=User::take(3)->get();
        return view('themes.about' ,compact('users'));
    }

    public function services()
    {
        $items=Item::take(3)->get();
        $users=User::take(3)->get();
        return view('themes.services' , compact('items' , 'users'));
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
        $items=Item::get();

        return view('themes.shop' ,compact('items'));
    }

    public function blog()
    {

        return view('themes.blog' );
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