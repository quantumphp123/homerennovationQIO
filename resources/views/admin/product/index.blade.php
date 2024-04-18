@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Product</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Product</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"><a href="{{ route('product.create') }}"><button type="button"
                                            class="btn btn-block bg-gradient-primary">Add Product</button></a></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Category Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <a href="{{ url( 'images/' . $product->image_path . '/' . $product->image) }}" class="mx-auto">
                                                        <img src="{{ url( 'images/' . $product->image_path . '/' . $product->image) }}"height="100" width="100"/>
                                                    </a>
                                                </td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->category->name }}</td>
                                                <td>
                                                    <div class="row" style="width: fit-content">
                                                        <div class="me-3">
                                                            <a href="{{ route('product.edit', ['product' => $product]) }}" class="btn btn-info">Edit</a>
                                                        </div>
                                                        <form action="{{ route('product.destroy', ['product' => $product]) }}" method="POST" style="width: fit-content">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type='submit' class="btn btn-danger">Delete</a>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>

                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>
@endsection
