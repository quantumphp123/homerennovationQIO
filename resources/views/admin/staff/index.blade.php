@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>User</h1>
                    </div> 
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">User</li>
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
                                <h3 class="card-title"><a href="{{ route('staff.create') }}"><button type="button"
                                            class="btn btn-block bg-gradient-primary">Add User</button></a></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Profile Pic</th>
                                            <th>Name</th>
                                            <th>Email-Id</th>
                                            <th>Mobile Number</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($staffs as $staff)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <a href="{{ url( 'images/' . $staff->profile_pic_path . '/' . $staff->profile_pic) }}" class="mx-auto">
                                                        <img src="{{ url( 'images/' . $staff->profile_pic_path . '/' . $staff->profile_pic) }}"height="100" width="100"/>
                                                    </a>
                                                </td>
                                                <td>{{ $staff->name }}</td>
                                                <td>{{ $staff->email }}</td>
                                                <td>{{ $staff->phone }}</td>
                                                <td> 
                            						<div class="form-group">
                            							<div class="custom-control custom-switch">
                            							<input type="checkbox" class="custom-control-input" id="status<?php echo $staff->id;?>" <?php if($staff->status=='1'){echo 'checked';} ?>>
                            							<label class="custom-control-label" for="status<?php echo $staff->id;?>"></label>
                            							</div>
                            						</div>
                            					</td>
                            					<td>
                                                    <div class="row" style="width: fit-content">
                                                        <div class="me-3">
                                                            <a href="{{ route('staff.show', ['staff' => $staff]) }}" class="btn btn-warning">Contracts</a>
                                                        </div>
                                                        <div class="me-3">
                                                            <a href="{{ route('staff.edit', ['staff' => $staff]) }}" class="btn btn-info">Edit</a>
                                                        </div>
                                                        <form action="{{ route('staff.destroy', ['staff' => $staff]) }}" method="POST" style="width: fit-content">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type='submit' class="btn btn-danger">Delete</a>
                                                        </form>
                                                    </div>
                                                </td>
                                                <script>
                                					$(document).ready(function(){
                                					$("#status{{$staff->id}}").change(function(){
                                						var id = {{$staff->id}}
                                						$.ajax({
                                        					url:'{{url("change-status")}}',
                                        					method:'POST',
                                        					data:{'id':id,'_token':"{{csrf_token()}}"},
                                        					success:function(data){}
                                        					});
                                					    });
                                					});
                                				</script>
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

    <style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
@endsection