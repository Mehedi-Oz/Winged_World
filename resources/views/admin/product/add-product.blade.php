@extends('admin.master')

@section('title')
    Add Product
@endsection

@section('content')

    <div class="row">
        <div class="col-md-6 offset-3 my-5">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h2 class="mb-0 text-uppercase text-center" style="font-weight:500;">Add Bird</h2>
                        <h5 class="mb-0 text-center" style="color: green;">{{session('message')}}</h5>
                        <hr/>
                        <form class="row g-3" action="{{route('new-product')}}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="col-12">
                                <label class="form-label">Category Name</label>
                                <select name="category_id" id="" class="form-control">
                                    <option value="">Select A Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">
                                            {{$category->category_name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Seller Name</label>
                                <select name="seller_id" id="" class="form-control">
                                    <option value="">Select Seller</option>
                                    @foreach($sellers as $seller)
                                        <option value="{{$seller->id}}">
                                            {{$seller->seller_name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Bird Name</label>
                                <input type="text" name="bird_name" class="form-control">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Bird Price</label>
                                <input type="text" name="bird_price" class="form-control">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Bird Image</label>
                                <input type="file" name="bird_image" class="form-control">
                            </div>

                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Submit Product</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
