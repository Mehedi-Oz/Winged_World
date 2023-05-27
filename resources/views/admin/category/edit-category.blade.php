@extends('admin.master')

@section('title')
    Edit Category
@endsection

@section('content')

    <div class="row">
        <div class="col-md-6 offset-3 my-5">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h2 class="mb-0 text-uppercase text-center" style="font-weight:500;">Category Form</h2>
                        <h5 class="mb-0 text-center" style="color: green;">{{session('message')}}</h5>
                        <hr/>
                        <form class="row g-3" action="{{route('update-category')}}" method="post">
                            @csrf
                            <input type="hidden" value="{{$category->id}}" name="id">
                            <div class="col-12">
                                <label class="form-label">Category Name</label>
                                <input type="text" name="category_name" class="form-control"
                                       value="{{$category->category_name}}">
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Submit Category</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
