{{-- @extends('includes.dash_layout')
@section('dash')

<div class="content-wrapper">
    <div class="col-md-12 grid-margin stretch-card mx-auto">

        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    @lang('edit user')
                </div>
                <form class="forms-sample" method="POST"  action="{{route('user.update',$user)}}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('name')</label>
                                <input type="text" id="name_en" value="{{$user->name_en}}"  name="name_en" class="form-control" placeholder="name_en">
                                @error('name_en')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('name')</label>
                                <input type="text" id="name_ar" value="{{$user->name_ar}}"  name="name_ar" class="form-control" placeholder="name_ar">
                                @error('name_ar')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('name')</label>
                                <input type="text" id="name_fr" value="{{$user->name_fr}}"  name="name_fr" class="form-control" placeholder="name_fr">
                                @error('name_fr')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('description')</label>
                                <input type="text" id="description_en" value="{{$user->description_en}}"  name="description_en" class="form-control" placeholder="description_en">
                                @error('description_en')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('description')</label>
                                <input type="text" id="description_fr" value="{{$user->description_fr}}"  name="description_fr" class="form-control" placeholder="description_fr">
                                @error('description_fr')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('description')</label>
                                <input type="text" id="description_ar" value="{{$user->description_ar}}"  name="description_ar" class="form-control" placeholder="description_ar">
                                @error('description_ar')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('address')</label>
                                <input type="text" id="address_en" value="{{$user->address_en}}"  name="address_en" class="form-control" placeholder="address_en">
                                @error('address_en')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('address')</label>
                                <input type="text" id="address_ar" value="{{$user->address_ar}}"  name="address_ar" class="form-control" placeholder="address_ar">
                                @error('address_ar')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('address')</label>
                                <input type="text" id="address_fr" value="{{$user->address_fr}}"  name="address_fr" class="form-control" placeholder="address_fr">
                                @error('address_fr')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('phone')</label>
                                <input type="text" id="phone" value="{{$user->phone}}"  name="phone" class="form-control" placeholder="phone">
                                @error('phone')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('email')</label>
                                <input type="email" id="email" value="{{$user->email}}" name="email" class="form-control" placeholder="email">
                                @error('email')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>@lang('logo')</label>
                                <input type="file"  name="logo" data-default-file="{{asset($user->logo)}}" class="form-control dropify" >
                                @error('logo')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success mr-2  upload-result">@lang('edit')</button>
                </form>
            </div>
        </div>
    </div>







</div>


@endsection --}}
@extends('includes.dash_layout')
@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Edit User</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Users</a></li>
                                <li class="breadcrumb-item active">Edit</li>
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

                            <form class="forms-sample" method="POST"  action="{{route('user.update',$user)}}" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf

                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">@lang('name')</label>
                                            <input type="text" id="name_en" value="{{$user->name_en}}"  name="name_en" class="form-control" placeholder="name_en" >
                                            @error('name_en')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">@lang('name')</label>
                                            <input type="text" id="name_ar" value="{{$user->name_ar}}"  name="name_ar" class="form-control" placeholder="name_ar" >
                                            @error('name_ar')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">@lang('name')</label>
                                            <input type="text" id="name_fr" value="{{$user->name_ar}}"  name="name_fr" class="form-control" placeholder="name_fr" >
                                            @error('name_fr')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">@lang('address')</label>
                                            <input type="text" id="address_fr" value="{{$user->address_fr}}"  name="address_fr" class="form-control" placeholder="address_fr" >
                                            @error('address_fr')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">@lang('address')</label>
                                            <input type="text" id="address_en" value="{{$user->address_en}}"  name="address_en" class="form-control" placeholder="address_en" >
                                            @error('address_en')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">@lang('email')</label>
                                            <input  type="email" id="email" value="{{$user->email}}" name="email" class="form-control" placeholder="email" >
                                            @error('email')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>




                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mt-3 mt-lg-0">
                                        <div class="mb-3">
                                            <label for="example-date-input" class="form-label">@lang('description')</label>
                                            <input type="text" id="description_en" value="{{$user->description_en}}"  name="description_en" class="form-control" placeholder="description_en">
                                            @error('description_en')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-date-input" class="form-label">@lang('description')</label>
                                            <input type="text" id="description_ar" value="{{$user->description_ar}}"  name="description_ar" class="form-control" placeholder="description_ar">
                                            @error('description_ar')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-date-input" class="form-label">@lang('description')</label>
                                            <input type="text" id="description_fr" value="{{$user->description_fr}}"  name="description_fr" class="form-control" placeholder="description_fr">
                                            @error('description_fr')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">@lang('address')</label>
                                            <input type="text" id="address_ar" value="{{$user->address_ar}}"  name="address_ar" class="form-control" placeholder="address_ar" >
                                            @error('address_ar')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-text-input" class="form-label">@lang('phone')</label>
                                            <input type="text" id="phone" value="{{$user->phone}}"  name="phone" class="form-control" placeholder="phone" >
                                            @error('phone')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <label for="example-text-input" class="form-label">@lang('facebook')</label>
                                    <input type="text" id="facebook" value="{{$user->facebook}}"  name="facebook" class="form-control" placeholder="facebook" >
                                    @error('facebook')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="example-text-input" class="form-label">@lang('instagram')</label>
                                    <input type="text" id="insta" value="{{$user->insta}}"  name="insta" class="form-control" placeholder="insta" >
                                    @error('insta')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="example-text-input" class="form-label">@lang('youtube')</label>
                                    <input type="text" id="youtube" value="{{$user->youtube}}"  name="youtube" class="form-control" placeholder="youtube" >
                                    @error('youtube')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="example-text-input" class="form-label">@lang('twitter')</label>
                                    <input type="text" id="twitter" value="{{$user->twitter}}"  name="twitter" class="form-control" placeholder="twitter" >
                                    @error('twitter')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="example-text-input"  class="form-label">@lang('logo')</label>
                                        <input type="file" id="logo" data-default-file="{{asset($user->logo)}}"  name="logo" class="form-control dropify" >
                                        @error('logo')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="example-text-input" class="form-label">@lang('cover')</label>
                                        <input type="file" id="cover" data-default-file="{{asset($user->cover)}}" name="cover" class="form-control dropify" >
                                        @error('cover')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success waves-effect waves-light">Update User</button>
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->



</div>
@push('style')
    <link rel="stylesheet" href="{{asset('css/dropify.css')}}">
    <style>
     div.dropify-message > span > p{
        font-size: 12px;
        }
    </style>
@endpush
@push('script')
    <script src="{{asset('js/dropify.js')}}"></script>
    <script >
        $('.dropify').dropify();
    </script>
@endpush
@endsection

