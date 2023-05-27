@extends('admin.master')

@section('title')
    Edit Seller
@endsection

@section('content')

    <div class="row">
        <div class="col-md-6 offset-3 my-5">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h2 class="mb-0 text-uppercase text-center" style="font-weight:500;">Seller Form</h2>
                        <h5 class="mb-0 text-center" style="color: green;">{{session('message')}}</h5>
                            <hr/>
                            <form class="row g-3" action="{{route('update-seller')}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" value="{{$seller->id}}" name="id">
                                <div class="col-12">
                                    <label class="form-label">Seller Name</label>
                                    <input type="text" name="seller_name" class="form-control" value="{{$seller->seller_name}}">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Phone Number</label>
                                    <input type="text" name="seller_phone" class="form-control" value="{{$seller->seller_phone}}">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Address</label>
                                    <textarea class="form-control" name="seller_address">{{$seller->seller_address}}</textarea>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Shop Name</label>
                                    <input type="text" name="shop_name" class="form-control" value="{{$seller->shop_name}}">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Seller Image</label>
                                    <input type="file" name="seller_image" class="form-control">
                                    <img src="{{ asset( $seller->seller_image) }}" alt="" class="img-fluid"
                                         style="height: 100px; width: 100px">
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Submit Seller</button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
