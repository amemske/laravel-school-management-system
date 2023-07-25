@extends('admin.admin_master')

@section('admin')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->


            <!-- Main content -->
            <section class="content">

                <div class="row">

                    <div class="col-12">
                        <div class="box">
                            <form action="{{route('user.update', $editData->id)}}" method="post">




                                <div class="box-header with-border">
                                    <h4 class="box-title">Edit User</h4>

                                </div>


                                @csrf
                                <div class="box-body pb-0">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label>User role</label>
                                                <select name="usertype" class="form-control select2" style="width: 100%;">
                                                    <option>Select Role</option>
                                                    <option value="Admin" {{$editData->usertype == "Admin" ? "selected" : ""}}>Admin</option>
                                                    <option value="User" {{$editData->usertype == "User" ? "selected" : ""}}>User</option>
                                                </select>
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label>User name</label>
                                                <input class="form-control" type="text" name="name" value="{{$editData->name}}">
                                                @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                        <!-- /.col -->

                                        <!-- /.col -->

                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label>User email</label>
                                                <input class="form-control" type="email" name="email" value="{{$editData->email}}">
                                                @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                        <!-- /.col -->

                                        <!-- /.col -->

                                        <!-- /.col -->

                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->

                                    <button type="submit" class="btn btn-rounded btn-primary mb-4">Update</button>
                                </div>
                                <!-- /.box-body -->



                            </form>

                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- ./col -->

                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->


@endsection

