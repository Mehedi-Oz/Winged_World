<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory()
    {
        return view('admin.category.add-category');
    }

    public function saveCategory(Request $request)
    {
        Category::saveCategory($request);
        return back()->with('message', 'Category Saved!');
    }

    public function manageCategory()
    {
        return view('admin.category.manage-category', [
            'categories' => Category::all()
        ]);
    }

    public function statusCategory($id)
    {
        Category::statusCategory($id);
        return back();
    }

    public function editCategory($id)
    {
        return view('admin.category.edit-category', [
            'category' => Category::find($id)
        ]);
    }

    public function updateCategory(Request $request)
    {
        Category::updateCategory($request);
        return back()->with('message', 'Category Updated!');
    }

    public function deleteCategory(Request $request)
    {
        Category::deleteCategory($request);
        return back();
    }
}


