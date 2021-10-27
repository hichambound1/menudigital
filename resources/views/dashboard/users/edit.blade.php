@extends('includes.dash_layout')
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
                    {{-- <div id="upload-demo" style=" display:none"></div> --}}
                    <button type="submit" class="btn btn-success mr-2  upload-result">@lang('edit')</button>
                </form>
            </div>
        </div>
    </div>







</div>


@endsection
