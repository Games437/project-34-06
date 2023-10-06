@extends('layouts.back-end.master')
@section('sup_title')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Edit Product</h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/dashboard">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
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
                <form action="{{ route('admin.product.update',$product->product_id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <label for="name" class="form-label">Name</label>
                    <input
                      type="text"
                      class="form-control"
                      name="name"
                      value="{{ $product->name }}"
                      id="name"
                      aria-describedby="defaultFormControlHelp"
                    />
    
                    
                    <label for="price" class="form-label">Price</label>
                    <input
                      type="text"
                      class="form-control"
                      name="price"
                      value="{{ $product->price }}"
                      id="price"
                      aria-describedby="defaultFormControlHelp"
                    />
    
                    <label for="product_type" class="form-label">Product Type</label>
                    <select class="form-select" id="product_type" name="product_type" aria-label="Default select example">
                        @foreach ($product_types as $product_type)
                        <option value="{{ $product_type->product_type_id }}">{{$product_type->name}}</option>
                        @endforeach
                    </select>
    
                    <label for="image" class="form-label" name="image">Images</label>
                      <div class="input-group">
                        <input type="file" class="form-control" name="image" id="image" value="{{ $product->image }}"/>
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                      </div>
                      <div class="mt-4">
                        <img id='showImage' src="{{asset('/images/'.$product->image)}}" width="150px" >
                      </div>
    
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

                    <input href="" type="submit" value="อัพเดท" class="btn btn-primary mt-3"></input>
                    <a href="{{ route('admin.product') }}" class="btn btn-danger mt-3 mx-2 text-white" >ย้อนกลับ</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
<script type="text/javascript">
  $('#image').change(function(e){
    var reader = new FileReader();
    reader.onload = function(e){
      $('#showImage').attr('src',e.target.result);
    }
    reader.readAsDataURL(e.target.files['0']);
  });
</script>
@endsection