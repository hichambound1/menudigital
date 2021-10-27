@extends('includes.dash_layout')
@section('dash')

<div class="content-wrapper">
    <div class="col-md-12 grid-margin stretch-card mx-auto">

        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    @lang('add category')
                </div>
                <form class="forms-sample" method="POST"  action="{{route('category.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>@lang('name')</label>
                        <input type="text" id="name_en"  name="name_en" class="form-control" placeholder="name_en">
                        @error('name_en')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>@lang('name')</label>
                        <input type="text" id="name_ar"  name="name_ar" class="form-control" placeholder="name_ar">
                        @error('name_ar')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>@lang('name')</label>
                        <input type="text" id="name_fr"  name="name_fr" class="form-control" placeholder="name_fr">
                        @error('name_fr')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Photo</label>
                        <input type="file" name="photo"  id="upload" class="form-control dropify ">
                        @error('photo')
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
