<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Http\Requests\StoreContantRequest;
use App\Models\contact;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Checkout;
use App\Models\Invoice;
use App\Models\Item;
use App\Models\Subscribe;
use App\Models\User;

class ThemeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['checkout', 'thankyou', 'destroysession']);
    }


    public function home()
    {
        $items = Item::take(3)->get();
        $users = User::take(3)->get();
        return view('themes.home', compact('items', 'users'));
    }

    public function about()
    {
        $users = User::take(3)->get();
        return view('themes.about', compact('users'));
    }

    public function services()
    {
        $items = Item::take(3)->get();
        $users = User::take(3)->get();
        return view('themes.services', compact('items', 'users'));
    }



    //===================================start cart==============================================
    public function cart($id)
    {
        $items = Item::find($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'image' => $items->image,
                'title' => $items->title,
                'price' => $items->price,
                'quantity' => 1,
                'description' => $items->description
            ];
        }

        session()->put('cart', $cart);
        // return back();
        return redirect()->action([ThemeController::class ,'showcart']);

    }

    public function showcart()
    {
        $cart = session()->get('cart');
        $total = 0;
        return view('themes.cart', compact('cart', 'total'));
    }

    public function cartupdate()
    {
        session()->forget('cart');
        return back();
    }

    public function cartdelete($id)
    {
        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
        return back();
    }

    //========================================End Cart============================================================


    public function checkout()
    {
        $cart = session()->get('cart');
        $total = 0;
        return view('themes.checkout', compact('cart', 'total'));
    }

    public function shop()
    {
        $items = Item::get();

        return view('themes.shop', compact('items'));
    }

    public function blog()
    {

        return view('themes.blog');
    }


    //======================================== Contact ============================================================

    public function contact()
    {
        $categories = Category::get();
        return view('themes.contact', compact('categories'));
    }


    public function contactstore(StoreContantRequest $request)
    {
        $validateData = $request->validated();

        contact::create($validateData);

        return back()->with('status', 'Your data has been received successfully.');
    }

    //========================================Thank you============================================================

    public function thankyou(CheckoutRequest $request)
    {
        $data = $request->validated();
        Checkout::create($data);
        
        $id=Checkout::where('phone',$request->phone)->first()->id;

        $invoiceDetails = session()->get('cart');
        foreach ($invoiceDetails as $item)
         {
            Invoice::create([
                'item_name' => $item['title'],
                'quantity' => $item['quantity'],
                'total' => $item['price'] * $item['quantity'],
                'checkout_id' => $id,
            ]);
        }



        return view('themes.thankyou');
    }
    public function destroysession()
    {
        session()->forget('cart');
        return redirect()->route('homepage');
    }
}
