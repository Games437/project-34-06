@extends('layouts.back-end.master')
@section('sup_title')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Product</h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/dashboard">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Product type</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
@section('admin')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Product<a href="{{ route('admin.product.create') }}" class="btn btn-success mx-3 text-white"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a></h4>
                <div class="table-responsive-sm">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Product Type</th>
                                <th scope="col">Image</th>
                                <th scope="col">created_at</th>
                                <th scope="col">updated_at</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $item)
                            <tr>
                                <td>{{ $product->firstItem()+$loop->index }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->product_type->name }}</td>
                                <td>
                                    <img src="{{asset('images/'.$item->image)}}" width="150px" alt="">
                                </td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->updated_at }}</td>
                                <td>
                                    <a href="{{ route('admin.product.edit',$item->product_id) }}"><i class='ti-pencil-alt'></i></a>
                                    <a href="{{ route('admin.product.delete',$item->product_id) }}"><i class='ti-trash'></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{ $product->links('pagination::bootstrap-5') }}
</div>
@endsection