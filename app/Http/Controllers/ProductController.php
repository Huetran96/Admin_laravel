<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::paginate(20);
        return view('admin.product.index', compact('products'));

    }
    public function create()
    {
        return view('admin.product.create');
    }
    public function input(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:products',
            'price'=>'required|min:0',
            'size'=>'required',
            'unit'=>'required',
            'producer'=>'required',
            'quanity'=>'required|min:0',
            'status'=>'required',
        ]);
        $data = $request->all('name','price','size','unit','producer','quanity','status');
        Product::create($data);
        return redirect()->route('product-index')->with('success','Thêm mới thành công');

    }
    public function edit(int $id)
    {
        $product = Product::findOrFail($id);
        return view('admin.product.edit',compact('product'));

    }
    public function update(Request $request, int $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect()->route('product.index')->with('success', 'product updated successfully');
    }
    public function destroy(int $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product-index')->with('success', 'product deleted successfully');

    }

}
