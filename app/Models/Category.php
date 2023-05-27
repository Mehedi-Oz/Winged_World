<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    private static $category;

    public static function saveCategory($request)
    {
        self::$category = new Category();
        self::$category->category_name = $request->category_name;
        self::$category->save();
    }

    public static function statusCategory($id)
    {
        self::$category = Category::find($id);
        if (self::$category->status == 1) {
            self::$category->status = 0;
        } else {
            self::$category->status = 1;
        }
        self::$category->save();
    }

    public static function updateCategory($request)
    {
        self::$category = Category::find($request->id);
        self::$category->category_name = $request->category_name;
        self::$category->save();
    }

    public static function deleteCategory($request)
    {
        self::$category = Category::find($request->id);
        self::$category->delete();
    }
}
