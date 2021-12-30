@extends('includes.dash_layout')
@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">edit Infos</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Infos</a></li>
                                <li class="breadcrumb-item active">edit</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body p-4">

                            <form class="forms-sample" method="POST" action="{{route('infos.update',$info)}}"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf

                                <div class="row">



                                    <div class="col-lg-6 mb-3">
                                        <label for="example-text-input" class="form-label">@lang('email')</label>
                                        <input type="email" id="email" value="{{$info->email}}" name="email"
                                            class="form-control" placeholder="email">
                                        @error('email')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="example-text-input" class="form-label">@lang('phone')</label>
                                        <input type="text" id="phone" value="{{$info->phone}}" name="phone"
                                            class="form-control" placeholder="phone">
                                        @error('phone')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="example-text-input" class="form-label">@lang('address')</label>
                                        <input type="text" id="address" value="{{$info->address}}" name="address"
                                            class="form-control" placeholder="address">
                                        @error('address')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="example-text-input" class="form-label">@lang('description')</label>
                                        <input type="text" id="description" value="{{$info->description}}" name="description"
                                            class="form-control" placeholder="description">
                                        @error('description')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="example-text-input" class="form-label">@lang('facebook')</label>
                                        <input type="text" id="facebook" value="{{$info->facebook}}" name="facebook"
                                            class="form-control" placeholder="facebook">
                                        @error('facebook')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="example-text-input" class="form-label">@lang('insta')</label>
                                        <input type="text" id="insta" value="{{$info->insta}}" name="insta"
                                            class="form-control" placeholder="insta">
                                        @error('insta')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="example-text-input" class="form-label">@lang('linkdin')</label>
                                        <input type="text" id="linkdin" value="{{$info->linkdin}}" name="linkdin"
                                            class="form-control" placeholder="linkdin">
                                        @error('linkdin')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>


                                </div>
                        </div>


                    </div>
                    <button type="submit" class="btn btn-success waves-effect waves-light">edit Infos</button>
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

