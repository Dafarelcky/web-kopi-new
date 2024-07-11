<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.section.product.index', [
            'product' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.section.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'image' => 'required|image|mimes:jpg,png,jpeg',
            'name'  => 'required|string|max:255',
            'price'  => 'required|string|max:10',
            'detail_product' => 'required|string|max:20'
        ];


        $validatedData = $request->validate($rules);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('image', 'public');
        }

        Product::create($validatedData);

        return redirect('/dashboard/product_list');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.section.product.edit', [
            'product' => Product::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'image' => 'required|image|mimes:jpg,png,jpeg',
            'name'  => 'required|string|max:255',
            'price'  => 'required|string|max:10',
            'detail_product' => 'required|string'
        ];
        $validatedData = $request->validate($rules);

        $product = Product::findOrFail($id);


        if ($request->hasFile('image')) {
            
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }

           
            $imagePath = $request->file('image')->store('image', 'public');
            $validatedData['image'] = $imagePath;
        } else {
           
            unset($validatedData['image']);
        }

        $product->update($validatedData);

        return redirect('/dashboard/product_list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::destroy($id);

        return redirect('/dashboard/product_list');
    }
}
