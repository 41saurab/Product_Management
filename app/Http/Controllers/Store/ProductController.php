<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Models\Store\Category;
use App\Models\Store\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('store.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('store.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->actual_price = $request->actual_price;
        $product->discount_percent = $request->discount_percent;
        $product->description = $request->description;
        $product->selling_price = $request->actual_price - ($request->discount_percent * $request->actual_price) / 100;

        if ($request->hasFile('image')) {
            $file = $request->image;
            $newName = time() . "." . $file->getClientOriginalExtension();
            $file->move('products', $newName);
            $product->image = "products/$newName";
        }
        $product->category_id = $request->category_id;
        $product->save();
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('store.product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->actual_price = $request->actual_price;
        $product->discount_percent = $request->discount_percent;
        $product->description = $request->description;
        $product->selling_price = $request->actual_price - ($request->discount_percent * $request->actual_price) / 100;

        if ($request->hasFile('image')) {
            $file = $request->image;
            $newName = time() . "." . $file->getClientOriginalExtension();
            $file->move('products', $newName);
            $product->image = "products/$newName";
        }
        $product->category_id = $request->category_id;
        $product->update();
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
