<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\Item;
use App\Models\items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('create', 'myitems');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('themes.items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ItemRequest $request)
    {
        $data = $request->validated();

        $image = $request->image;
        $newimage = time() . '-' . $image->getClientOriginalName();
        $image->storeAs('itemsphoto', $newimage, 'public');
        $data['image'] = $newimage;

        $data['user_id'] = Auth::user()->id;
        Item::create($data);

        return back()->with('add-status','Added successfully');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        if ($item->user_id == Auth::user()->id) {
            return view('themes.items.edit', compact('item'));
        }
        abort(403);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        if ($item->user_id == Auth::user()->id) {

            $data = $request->validated();
            if ($request->hasFile('image')) {

                Storage::delete("storage/itemsphoto/$item->image");
                $image = $request->image;
                $newimage = time() . "-" . $image->getClientOriginalName();
                $image::storeAs('itemsphoto', $newimage, 'public');
                $data['image'] = $newimage;
            }
            $item->update($data);
            return redirect()->route('items.my-items')->with('update-status', 'updated successfully');
        }
        abort(403);

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        if ($item->user_id == Auth::user()->id) {

            Storage::delete("storage/itemsphoto/$item->image");
            $item->delete();
            return redirect()->route('items.my-items')->with('delete-status', 'deleted successfully');
        }
        abort(403);

    }


    public function myitems()
    {
        $items = Item::where('user_id', Auth::user()->id)->get();
        return view('themes.items.my-item', compact('items'));
    }
}
