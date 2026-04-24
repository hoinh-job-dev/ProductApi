<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // GET /products
    public function index()
    {        
        
        return response()->json([
            'success' => true,
            'data' => Product::all()
        ]);
    }

    // POST /products (admin only)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric|min:1',
            'quantity' => 'required|integer|min:0'
        ]);

        $exists = Product::where('name', $request->name)->first();
        if ($exists) {
            return response()->json([
                'success' => false,
                'message' => 'Product already exists'
            ]);
        }

        $product = Product::create($request->all());

        return response()->json([
            'success' => true,
            'data' => $product
        ]);
    }

    // PUT /products/{id}
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());

        return response()->json(['success' => true]);
    }

    // DELETE /products/{id}
    public function destroy($id)
    {
        Product::destroy($id);
        return response()->json(['success' => true]);
    }
}

