<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    private static $product, $image, $imageNewName, $directory, $imgUrl;

    public static function saveProduct($request)
    {
        self::$product = new Product();
        self::$product->category_id = $request->category_id;
        self::$product->seller_id = $request->seller_id;
        self::$product->bird_name = $request->bird_name;
        self::$product->bird_price = $request->bird_price;
        self::$product->bird_image = self::saveImage($request);
        self::$product->save();
    }

    public static function saveImage($request)
    {
        self::$image = $request->file('bird_image');
        self::$imageNewName = 'product-' . rand() . '.' . self::$image->Extension();
        self::$directory = 'admin-asset/upload-images/product/';
        self::$imgUrl = self::$directory . self::$imageNewName;
        self::$image->move(self::$directory, self::$imageNewName);
        return self::$imgUrl;
    }

    public static function updateProduct($request)
    {
        self::$product = Product::find($request->id);
        self::$product->category_id = $request->category_id;
        self::$product->seller_id = $request->seller_id;
        self::$product->bird_name = $request->bird_name;
        self::$product->bird_price = $request->bird_price;
        if ($request->file('bird_image')) {
            if (self::$product->bird_image) {
                if (file_exists(self::$product->bird_image)) {
                    unlink(self::$product->bird_image);
                    self::$product->bird_image = self::saveImage($request);
                }
            } else {
                self::$product->bird_image = self::saveImage($request);
            }
        }
        self::$product->save();
    }

    public static function deleteProduct($request)
    {
        self::$product = Product::find($request->id);
        if (self::$product->bird_image) {
            if (file_exists(self::$product->bird_image)) {
                unlink(self::$product->bird_image);
                self::$product->delete();
            }
        } else {
            self::$product->delete();
        }
        self::$product->delete();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
