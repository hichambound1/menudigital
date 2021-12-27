
@extends('includes.dash_layout')
@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Edit Admin</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admins</a></li>
                                <li class="breadcrumb-item active">Edit</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            @if($errors)
            @foreach ($errors->all() as $error)
                <div class="text-red">{{ $error }}</div>
            @endforeach
        @endif
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body p-4">

                            <form class="forms-sample" method="POST" action="{{route('admin.update',$admin)}}"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf

                                <div class="row">



                                    <div class="col-lg-6 mb-3">
                                        <label for="example-text-input" class="form-label">@lang('name')</label>
                                        <input type="text" id="name" value="{{$admin->name}}" name="name"
                                            class="form-control" placeholder="name">
                                        @error('name')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="example-text-input" class="form-label">@lang('email')</label>
                                        <input type="email" id="email" value="{{$admin->email}}" name="email"
                                            class="form-control" placeholder="email">
                                        @error('email')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>


                                </div>
                        </div>


                    </div>
                    <button type="submit" class="btn btn-success waves-effect waves-light">Edit Admin</button>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div>
</div> <!-- container-fluid -->
</div>
<!-- End Page-content -->



</div>
@endsection

