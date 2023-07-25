@extends('admin.admin_master')

@section('admin')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->


            <!-- Main content -->
            <section class="content">

                <div class="row">

                    <div class="col-12">
                        <div class="box">
                            <form action="{{route('profile.store')}}" method="post" enctype="multipart/form-data">




                                <div class="box-header with-border">
                                    <h4 class="box-title">Edit Profile</h4>

                                </div>


                                @csrf
                                <div class="box-body pb-0">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label>User Name</label>
                                                <input class="form-control" type="text" name="name" value="{{$editProfileData->name}}">
                                                @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label>User Email</label>
                                                <input class="form-control" type="text" name="email" value="{{$editProfileData->email}}">
                                                @error('email')
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
                                                <label>User Mobile</label>
                                                <input class="form-control" type="text" name="mobile" value="{{$editProfileData->mobile}}">
                                                @error('mobile')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                        <!-- /.col -->

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label>User Address</label>
                                                <input class="form-control" type="textarea" name="address" value="{{$editProfileData->address}}">
                                                @error('address')
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

                                    <!-- /.row -->
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label>User Gender</label>
                                                <select name="gender" class="form-control select2" style="width: 100%;">
                                                    <option>Select Gender</option>
                                                    <option value="Male" {{$editProfileData->gender == "Male" ? "selected" : ""}}>Male</option>
                                                    <option value="Female" {{$editProfileData->gender == "Female" ? "selected" : ""}}>Female</option>
                                                </select>
                                                @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                        <!-- /.col -->

                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Profile Image</label>
                                                <input class="form-control" type="file" name="image"  id="image">

                                            </div>

                                            <div class="form-group">

                                                <img id="showImage"  width="100" height="100" src="{{(!empty($user->image)) ? url('upload/user_images/'.$user->image) : url('upload/no_image.jpg' )}}" alt="">


                                            </div>
                                            <!-- /.form-group -->
                                        </div>

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
<script type="text/javascript">
    $(document).ready(function (){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function (e){
                $('#showImage').attr('src', e.target.result)
            }
            reader.readAsDataURL(e.target.files['0']);

        })
    });
</script>

@endsection


