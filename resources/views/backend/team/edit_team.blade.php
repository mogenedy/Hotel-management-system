@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Add Team members</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Add Team</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->
        <div class="container">
            <div class="main-body">
                <div class="row">

                    <div class="col-lg-8">
                        <div class="card">

    <form action="{{route('team.update',$team->id)}}" method="POST" enctype="multipart/form-data">
     @csrf
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-sm-3">
                <h6 class="mb-0">Name</h6>
            </div>
            <div class="col-sm-9 text-secondary">
        <input type="text" class="form-control" name="name" value="{{$team->name}}"/>

            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-3">
                <h6 class="mb-0">Position</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <input type="text" class="form-control" name="position" value="{{$team->position}}"/>

            </div>
        </div>
        <div class="row mb-3">
            <div class="col-sm-3">
                <h6 class="mb-0">Facebook</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <input type="text" name="facebook" class="form-control" value="{{$team->facebook}}" />

            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-3">
                <h6 class="mb-0">photo</h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <input type="file" class="form-control" name="image" id="image" value="{{$team->image}}" />
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-3">
                <h6 class="mb-0"></h6>
            </div>
            <div class="col-sm-9 text-secondary">
                <img id="showImage"
                    src="{{url('upload/no_image.jpg') }}"
                    alt="Admin" class="rounded-circle p-1 bg-primary" width="80">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-9 text-secondary">
                <input type="submit" class="btn btn-primary px-4" value="Save Changes" />
            </div>
        </div>
    </div>
</form>

                        </div>
                    </div>
                    @include('admin.components.image-upload')
                @endsection
