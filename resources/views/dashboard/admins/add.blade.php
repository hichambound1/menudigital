@extends('includes.dash_layout')
@section('dash')

<div class="content-wrapper">
    <div class="col-md-12 grid-margin stretch-card mx-auto">

        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    @lang('add admin')
                </div>
                <form class="forms-sample" method="POST"  action="{{route('admin.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>@lang('name')</label>
                        <input type="text" id="name" value="{{old('name')}}"  name="name" class="form-control" placeholder="name">
                        @error('name')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>@lang('email')</label>
                        <input type="email" id="email" value="{{old('email')}}"  name="email" class="form-control" placeholder="email">
                        @error('email')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>@lang('password')</label>
                        <input type="password" id="password"   name="password" class="form-control" placeholder="********">
                        @error('password')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>@lang('confirm password')</label>
                        <input type="password" id="password_confirmation"   name="password_confirmation" class="form-control" placeholder="********">
                        @error('password_confirmation')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>


                    {{-- <div id="upload-demo" style=" display:none"></div> --}}
                    <button type="submit" class="btn btn-success mr-2  upload-result">@lang('add')</button>

                </form>

            </div>
        </div>

    </div>







</div>


@endsection
