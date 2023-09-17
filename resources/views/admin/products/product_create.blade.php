@extends('admin.layouts.master')
@section('content')
@include('admin.productjs.product_js')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Products</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Products</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Add Product</h3>

          </div>
          <form>
            <div class="card-body">
              <div class="form-group">
                <label for="">Category</label>
                <select class="form-control" id="category">
                  <option value="">choose category</option>
                  @foreach($Categories as $item)
                  <option value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach
                </select>
                <div class="categoryerror" style="color:red;font-size:16px"></div>
              </div>
              <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" class="form-control" id="product_name" placeholder="Enter Product Name">
                <div class="productnameerror" style="color:red;font-size:16px"></div>
              </div>
              <div class="form-group">
                <label for="">Price</label>
                <input type="text" class="form-control" id="product_price" placeholder="Enter Price">
                <div class="priceerror" style="color:red;font-size:16px"></div>
              </div>

              <div class="form-group ">
                <label for="exampleInputFile">Product Image</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="product_image">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleCheck1">Status:</label>
                <div class="form-check-inline">
                  <input class="form-check-input" type="radio" value="1" name="status" id="status-active">
                  <label class="form-check-label" for="exampleCheck1">Active</label>
                </div>
                <div class="form-check-inline">
                  <input class="form-check-input" type="radio" value="0" name="status" id="status-inactive">
                  <label class="form-check-label" for="exampleCheck2">Inactive</label>
                </div>
                <div class="statuserror" style="color:red;font-size:16px"></div>
              </div>

              <div class="form-group">
                <label for="exampleCheck1">Favourite:</label>
                <div class="form-check-inline">
                  <input class="form-check-input" type="radio" value="1" id="" name="favourite">
                  <label class="form-check-label" for="exampleCheck1">Yes</label>
                </div>
                <div class="form-check-inline">
                  <input class="form-check-input" type="radio" value="0" id="" name="favourite">
                  <label class="form-check-label" for="exampleCheck2">No</label>
                </div>
                <div class="favouriteerror" style="color:red;font-size:16px"></div>
              </div>
            </div>
            <div class="card-footer d-flex justify-content-center ">
              <button type="button"  class="btn btn-primary" onclick="ProductSave()">save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
