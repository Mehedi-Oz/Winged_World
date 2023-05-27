<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    private static $seller, $image, $imageNewName, $directory, $imgUrl;

    public static function saveSeller($request)
    {
        self::$seller = new Seller();
        self::$seller->seller_name = $request->seller_name;
        self::$seller->seller_phone = $request->seller_phone;
        self::$seller->seller_address = $request->seller_address;
        self::$seller->shop_name = $request->shop_name;
        self::$seller->seller_image = self::saveImage($request);
        self::$seller->save();
    }

    public static function saveImage($request)
    {
        self::$image = $request->file('seller_image');
        self::$imageNewName = 'seller-' . rand() . '.' . self::$image->Extension();
        self::$directory = 'admin-asset/upload-images/seller/';
        self::$imgUrl = self::$directory . self::$imageNewName;
        self::$image->move(self::$directory, self::$imageNewName);
        return self::$imgUrl;
    }

    public static function updateSeller($request)
    {
        self::$seller = Seller::find($request->id);
        self::$seller->seller_name = $request->seller_name;
        self::$seller->seller_phone = $request->seller_phone;
        self::$seller->seller_address = $request->seller_address;
        self::$seller->shop_name = $request->shop_name;
        if ($request->file('seller_image')) {
            if (self::$seller->seller_image) {
                if (file_exists(self::$seller->seller_image)) {
                    unlink(self::$seller->seller_image);
                    self::$seller->seller_image = self::saveImage($request);
                }
            } else {
                self::$seller->seller_image = self::saveImage($request);
            }
        }
        self::$seller->save();
    }

    public static function deleteSeller($request)
    {
        self::$seller = Seller::find($request->id);
        if (self::$seller->seller_image) {
            if (file_exists(self::$seller->seller_image)) {
                unlink(self::$seller->seller_image);
                self::$seller->delete();
            }
        } else {
            self::$seller->delete();
        }
        self::$seller->delete();
    }
}
