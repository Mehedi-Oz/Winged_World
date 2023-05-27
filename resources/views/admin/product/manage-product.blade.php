@extends('admin.master')

@section('title')
    Manage Products
@endsection

@section('content')

    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h2 class="mb-0 text-uppercase text-center" style="font-weight:500;">Product Table</h2>
                        <hr>
                        <table class="table table-striped table-bordered table-hover text-center bg-success-subtle">
                            <tr>
                                <th>sl</th>
                                <th>Bird name</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Seller</th>
                                <th>Action</th>
                            </tr>

                            @php $i=1 @endphp
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$product->bird_name}}</td>
                                    <td><img src="{{ asset( $product->bird_image) }}" alt="" class="img-fluid"
                                             style="height: 100px; width: 100px"></td>
                                    <td>{{$product->bird_price}}</td>
                                    <td>{{$product->category->category_name}}</td>
                                    <td>{{$product->seller->seller_name}}</td>

                                    <td class=" my-5 btn-group">
                                        <a href="{{route('edit-product', ['id'=>$product->id])}}"
                                           class="btn btn-primary btn-sm mx-1"> Edit </a>

                                        <form action="{{route('delete-product')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$product->id}}">
                                            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
