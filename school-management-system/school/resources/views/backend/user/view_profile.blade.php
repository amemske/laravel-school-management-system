@extends('admin.admin_master')

@section('admin')

    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->

            <!-- Main content -->
            <section class="content">
    <div class="row">
        <div class="col-md-12">
<div class="box box-widget widget-user">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div class="widget-user-header bg-black" >
        <h3 class="widget-user-username">{{$profileData->name}}</h3>
        <h6 class="widget-user-desc">{{$profileData->usertype}}</h6>

        <a href="{{route('profile.edit')}}" class="btn btn-primary mb-5 pull-right">Edit Profile</a>

    </div>
    <div class="widget-user-image">
        <img class="rounded-circle"
             src="{{(!empty($profileData->image)) ? url('upload/user_images/'.$profileData->image) : url('upload/no_image.jpg' )}}"
             alt="User Avatar">
    </div>
    <div class="box-footer">
        <div class="row">
            <div class="col-sm-4">
                <div class="description-block">
                    <h5 class="description-header">Mobile No.</h5>
                    <span class="description-text">{{$profileData->mobile}}</span>
                </div>
                <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-4 br-1 bl-1">
                <div class="description-block">
                    <h5 class="description-header">Gender</h5>
                    <span class="description-text">{{$profileData->gender}}</span>
                </div>
                <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-4">
                <div class="description-block">
                    <h5 class="description-header">Address</h5>
                    <span class="description-text">{{$profileData->address}}</span>
                </div>
                <!-- /.description-block -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
</div>
        </div>
    </div>
                </section>
        </div>
    </div>
@endsection
