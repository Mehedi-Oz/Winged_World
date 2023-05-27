<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function addBlog()
    {
        return view('admin.blog.add-blog');
    }

    public function saveBlog(Request $request)
    {
        Blog::saveBlog($request);
        return back()->with('message', 'Blog Saved!');
    }

    public function manageBlog()
    {
        return view('admin.blog.manage-blog', [
            'blogs' => Blog::all()
        ]);
    }

    public function editBlog($id)
    {
        return view('admin.blog.edit-blog', [
            'blog' => Blog::find($id)
        ]);
    }

    public function updateBlog(Request $request)
    {
        Blog::updateBlog($request);
        return back()->with('message', 'Blog Updated!');
    }

    public function deleteBlog(Request $request)
    {
        Blog::deleteBlog($request);
        return back();
    }
}
