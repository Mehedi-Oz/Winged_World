@extends('admin.master')

@section('title')
    Add Blog
@endsection

@section('content')

    <div class="row">
        <div class="col-md-6 offset-3 my-5">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h2 class="mb-0 text-uppercase text-center" style="font-weight:500;">Blog Form</h2>
                        <h5 class="mb-0 text-center" style="color: green;">{{session('message')}}</h5>
                        <hr/>
                        <form class="row g-3" action="{{route('new-blog')}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <label class="form-label">Category Name</label>
                                <input type="text" name="blog_category" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Author Name</label>
                                <input type="text" name="blog_author" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Address</label>
                                <textarea class="form-control" name="seller_address"></textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Blog Image</label>
                                <input type="file" name="blog_image" class="form-control">
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Submit Blog</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
