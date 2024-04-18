@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Services</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Service</li>
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
                                <h3 class="card-title"><a href="{{ route('service.create') }}"><button type="button"
                                            class="btn btn-block bg-gradient-primary">Add Service</button></a></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($services as $service)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <a href="{{ url( 'images/' . $service->image_path . '/' . $service->image) }}" class="mx-auto">
                                                        <img src="{{ url( 'images/' . $service->image_path . '/' . $service->image) }}"height="100" width="100"/>
                                                    </a>
                                                </td>
                                                <td>{{ $service->service_title }}</td>
                                                <td>{{ $service->service_description }}</td>
                                                <td>
                                                    <div class="row" style="width: fit-content">
                                                        <div class="me-3">
                                                            <a href="{{ route('service.edit', ['service' => $service]) }}" class="btn btn-info">Edit</a>
                                                        </div>
                                                        <form action="{{ route('service.destroy', ['service' => $service]) }}" method="POST" style="width: fit-content">
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
