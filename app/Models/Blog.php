<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    private static $blog, $image, $imageNewName, $directory, $imgUrl;

    public static function saveBlog($request)
    {
        self::$blog = new Blog();
        self::$blog->seller_blog = $request->seller_name;

        self::$blog->blog_image = self::saveImage($request);
        self::$blog->save();
    }

    public static function saveImage($request)
    {
        self::$image = $request->file('blog_image');
        self::$imageNewName = 'blog-' . rand() . '.' . self::$image->Extension();
        self::$directory = 'admin-asset/upload-images/blog/';
        self::$imgUrl = self::$directory . self::$imageNewName;
        self::$image->move(self::$directory, self::$imageNewName);
        return self::$imgUrl;
    }

    public static function updateBlog($request)
    {
        self::$blog = Blog::find($request->id);
        self::$blog->seller_name = $request->seller_name;


        if ($request->file('seller_image')) {
            if (self::$blog->seller_image) {
                if (file_exists(self::$blog->seller_image)) {
                    unlink(self::$blog->seller_image);
                    self::$blog->seller_image = self::saveImage($request);
                }
            } else {
                self::$blog->seller_image = self::saveImage($request);
            }
        }
        self::$blog->save();
    }

    public static function deleteBlog($request)
    {
        self::$blog = Blog::find($request->id);
        if (self::$blog->blog_image) {
            if (file_exists(self::$blog->blog_image)) {
                unlink(self::$blog->blog_image);
                self::$blog->delete();
            }
        } else {
            self::$blog->delete();
        }
        self::$blog->delete();
    }
}
