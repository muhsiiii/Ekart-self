@extends('admin.layouts.master')
@include('admin.productjs.product_js')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Products ({{ $products->total() }})</h1>
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

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-end">
                            <a href="{{ route('productcreate') }}" class="btn btn-primary">Add Product</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">Sl.No</th>
                                        <th>Product Name</th>
                                        <th>Image</th>
                                        <th>Product Category</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Favourite</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td><img src="{{ asset($product->image) }}" alt="" width="60px" height="60px"></td>
                                            <td>{{ $product->category_id }}</td>
                                            <td>{{ number_format($product->price, 2) }}</td>
                                            <td>{{ $product->status }}</td>
                                            <td>{{ $product->is_favourite }}</td>
                                            <td>
                                                <a href="#" class="btn btn-info btn-sm">Edit</a>
                                                <a class="btn btn-danger btn-sm" onclick="ProductDelete('{{ $product->id }}')">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="d-flex justify-content-center"> {{ $products->links() }}</div>

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
@endsection
