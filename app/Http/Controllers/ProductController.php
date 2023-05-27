<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function addProduct()
    {
        return view('admin.product.add-product', [
            'categories' => Category::where('status', 1)->orderBy('category_name')->get(),
            'sellers' => Seller::orderBy('seller_name')->get()
        ]);
    }

    public function saveProduct(Request $request)
    {
        Product::saveProduct($request);
        return back()->with('message', 'Product Saved!');
    }

    public function manageProduct()
    {
        $products = Product::with('category:id,category_name', 'seller')->get();
        return view('admin.product.manage-product', [
            'products' => Product::all()
        ]);
    }

    public function editProduct($id)
    {
        return view('admin.product.edit-product', [
            'product' => Product::find($id),
            'categories' => Category::all(),
            'sellers' => Seller::all()
        ]);
    }

    public function updateProduct(Request $request)
    {
        Product::updateProduct($request);
        return back()->with('message', 'Product Updated!');
    }

    public function deleteProduct(Request $request)
    {
        Product::deleteProduct($request);
        return back();
    }
}
