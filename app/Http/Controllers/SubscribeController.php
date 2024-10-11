<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscribeRequest;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function subscribe(SubscribeRequest $request)
    {
        
        $validation=$request->validated();
        Subscribe::create($validation);


        return back()->with('status' , 'Subscribed successfully');
    }
}
