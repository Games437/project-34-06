@extends('layouts.back-end.master')
@section('sup_title')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Edit Product Type</h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/dashboard">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Product Type</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection
@section('admin')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-md-12">
          <div class="card mb-9">

            <div class="card-body">
              <div>
                <form action="{{ route('admin.product_type.update',$product_type->product_type_id) }}" method="POST">
                    @csrf
                <label for="defaultFormControlInput" class="form-label">Name</label>
                <input
                  type="text"
                  class="form-control"
                  name="name"
                  value="{{ $product_type->name }}"
                  id="defaultFormControlInput"
                  aria-describedby="defaultFormControlHelp"/>
                  <div class="row mt-2">
                    @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                    @endif       
                  </div>    
                <input type="submit" value="อัพเดท" class="btn btn-primary mt-3 "></input>
                <a href="{{ route('admin.product_type') }}" class="btn btn-danger mt-3 mx-2 text-white">ย้อนกลับ</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection