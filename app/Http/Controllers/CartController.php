<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Models\Product;
use Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relatedProducts = Product::relatedProducts()->get();
        return view('cart')->with('relatedProducts', $relatedProducts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $duplicates = Cart::instance('default')->find(function($cartItem, $rowID) {
            return $cartItem->id == request()->id;
        });

        if ($duplicates->isNotEmpty()) {
            session()->flash('success', "Item is already in your cart!");
            return redirect()->route('cart.index');
        }

        Cart::instance('default')->add(request()->id, request()->name, 1, request()->price)->associate('App\Product');

        session()->flash("success", "Item has been added to your cart");

        return redirect()->route('cart.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        if (request()->productQuantity >= request()->quantity) {
            Cart::instance('default')->update($id, request()->quantity);
            session()->flash("success", "Cart updated");
            return response()->json(['error' => true], 200);
        }

        session()->flash('error', 'You have reached the maximum quantity available for this item');
        return response()->json(['error' => ''], 400);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $cart)
    {
        if ($cart == 'default') {
            Cart::instance('default')->remove($id);
        }

        session()->flash('success', 'Your cart is currently empty');
        return back();
    }
}
