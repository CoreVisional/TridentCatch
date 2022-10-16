<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagination = 8;
        $categories = Category::all();

        if (request()->category) {
            $products = Product::with('categories')->whereHas('categories', function ($query) {
                $query->where('slug', request()->category);
            });
            $categoryName = optional($categories->where('slug', request()->category)->first())->name;
        }

        if (request()->sort == "low_high") {
            $products = $products->orderBy('price')->paginate($pagination);
        } elseif (request()->sort == "high_low") {
            $products = $products->orderBy('price', 'desc')->paginate($pagination);
        } else {
            $products = Product::paginate();
        }

        return view('shop')->with([
            'products' => $products,
            'categories' => $categories,
            'categoryName' => $categoryName ?? null,
        ]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $image = json_decode($product->image);
        $relatedProducts = Product::where('slug', '!=', $slug)->relatedProducts()->get();

        $stockLevel = getStockLevel($product->quantity);

        return view('product')->with([
            'product' => $product,
            'image' => $image,
            'relatedProducts' => $relatedProducts,
            'stockLevel' => $stockLevel,
        ]);
    }

    // Search for products
    public function search() {
        return view('search-results');
    }

}
