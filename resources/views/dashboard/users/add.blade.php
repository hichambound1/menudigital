@extends('includes.dash_layout')
@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Add User</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Users</a></li>
                                <li class="breadcrumb-item active">Add</li>
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

                            <form class="forms-sample" method="POST"  action="{{route('user.store')}}" enctype="multipart/form-data">
                            @csrf

                            <div class="row">


                                        <div class="col-lg-6 mb-3">
                                            <label for="example-text-input" class="form-label">@lang('name')</label>
                                            <input type="text" id="name_en" value="{{old('name_en')}}"  name="name_en" class="form-control" placeholder="name_en" >
                                            @error('name_en')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="example-text-input" class="form-label">@lang('name')</label>
                                            <input type="text" id="name_ar" value="{{old('name_ar')}}"  name="name_ar" class="form-control" placeholder="name_ar" >
                                            @error('name_ar')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="example-text-input" class="form-label">@lang('name')</label>
                                            <input type="text" id="name_fr" value="{{old('name_fr')}}"  name="name_fr" class="form-control" placeholder="name_fr" >
                                            @error('name_fr')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6 mb-3">
                                            <label for="example-text-input" class="form-label">@lang('address')</label>
                                            <input type="text" id="address_fr" value="{{old('address_fr')}}"  name="address_fr" class="form-control" placeholder="address_fr" >
                                            @error('address_fr')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="example-text-input" class="form-label">@lang('address')</label>
                                            <input type="text"  value="{{old('address_en')}}"  name="address_en" class="form-control" placeholder="address_en" >
                                            @error('address_en')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="example-text-input" class="form-label">@lang('address')</label>
                                            <input type="text" id="address_ar" value="{{old('address_ar')}}"  name="address_ar" class="form-control" placeholder="address_ar" >
                                            @error('address_ar')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6 mb-3">
                                            <label for="example-text-input" class="form-label">@lang('email')</label>
                                            <input  type="email" id="email" name="email" class="form-control" placeholder="email" >
                                            @error('email')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="example-text-input" class="form-label">@lang('password')</label>
                                            <input type="password" id="password"  name="password" class="form-control" placeholder="*********" >
                                            @error('password')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="example-text-input" class="form-label">@lang('password confirmation')</label>
                                            <input type="password" id="password_confirmation"  name="password_confirmation" class="form-control" placeholder="*********" >
                                            @error('password_confirmation')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>








                                        <div class="col-lg-6 mb-3">
                                            <label for="example-date-input" class="form-label">@lang('description')</label>
                                            <input type="text" id="description_en" value="{{old('description_en')}}"  name="description_en" class="form-control" placeholder="description_en">
                                            @error('description_en')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="example-date-input" class="form-label">@lang('description')</label>
                                            <input type="text" id="description_ar" value="{{old('description_ar')}}"  name="description_ar" class="form-control" placeholder="description_ar">
                                            @error('description_ar')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6 mb-3">
                                            <label for="example-date-input" class="form-label">@lang('description')</label>
                                            <input type="text" id="description_fr" value="{{old('description_fr')}}"  name="description_fr" class="form-control" placeholder="description_fr">
                                            @error('description_fr')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6 mb-3">
                                            <label for="example-text-input" class="form-label">@lang('phone')</label>
                                            <input type="text" id="phone" value="{{old('phone')}}"  name="phone" class="form-control" placeholder="phone" >
                                            @error('phone')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>





                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg-6 mb-3">
                                                    <label for="example-text-input" class="form-label">@lang('logo')</label>
                                                    <input type="file" id="logo"  name="logo" class="form-control dropify" >
                                                    @error('logo')
                                                    <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                </div>
                                                <div class="col-lg-6 mb-3">
                                                    <label for="example-text-input" class="form-label">@lang('cover')</label>
                                                    <input type="file" id="cover"  name="cover" class="form-control dropify" >
                                                    @error('cover')
                                                    <p class="text-danger">{{$message}}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>


                            </div>
                            <button type="submit" class="btn btn-success waves-effect waves-light">Add User</button>
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
