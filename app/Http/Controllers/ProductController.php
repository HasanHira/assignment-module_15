<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $products = Product::all();
        return view('products.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Store a newly created product
        return view('products.store');
    }

    // /**
    //  * Display the specified resource.
    //  */
    public function show(string $id)
    {
        return view('products.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Display the form to edit an existing product
         return view('products.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $product = Product::findOrFail($id);
        // $product->update($validatedData);

        // Update the specified product
        return 'Success, Product updated successfully.';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        // $product = Product::findOrFail($id);
        // $product->delete();


        return 'Success, Product deleted successfully.';
    }
}
