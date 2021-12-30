{{-- @extends('includes.dash_layout')
@section('dash')

<div class="content-wrapper">
    <div class="col-md-12 grid-margin stretch-card mx-auto">

        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    @lang('add category')
                </div>
                <form class="forms-sample" method="POST"  action="{{route('category.update',$category)}}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label>@lang('name')</label>
                        <input type="text" id="name_en" value="{{$category->name_en}}"  name="name_en" class="form-control" placeholder="name_en">
                        @error('name_en')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>@lang('name')</label>
                        <input type="text" id="name_ar" value="{{$category->name_ar}}"  name="name_ar" class="form-control" placeholder="name_ar">
                        @error('name_ar')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>@lang('name')</label>
                        <input type="text" id="name_fr" value="{{$category->name_fr}}"  name="name_fr" class="form-control" placeholder="name_fr">
                        @error('name_fr')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Photo</label>

                        <input type="file" name="photo"  data-default-file="{{asset($category->photo)}}" id="upload" class="form-control dropify ">
                        @error('photo')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success mr-2  upload-result">@lang('add')</button>

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
                        <h4 class="mb-sm-0 font-size-18">Edit Category</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Categories</a></li>
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

                            <form class="forms-sample" method="POST" action="{{route('category.update',$category)}}"
                                enctype="multipart/form-data">
                                @method('PUT')
                                @csrf

                                <div class="row">


                                    <div class="col-lg-6 mb-3">
                                        <label for="example-text-input" class="form-label">@lang('name')</label>
                                        <input type="text" id="name_en" value="{{$category->name_en}}" name="name_en"
                                            class="form-control" placeholder="name_en">
                                        @error('name_en')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="example-text-input" class="form-label">@lang('name')</label>
                                        <input type="text" id="name_ar" value="{{$category->name_ar}}" name="name_ar"
                                            class="form-control" placeholder="name_ar">
                                        @error('name_ar')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="example-text-input" class="form-label">@lang('name')</label>
                                        <input type="text" id="name_fr" value="{{$category->name_fr}}" name="name_fr"
                                            class="form-control" placeholder="name_fr">
                                        @error('name_fr')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="example-text-input" class="form-label">@lang('photo')</label>
                                        <input type="file" id="photo" data-default-file="{{asset($category->photo)}}" name="photo" class="form-control dropify">
                                        @error('photo')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                        </div>


                    </div>
                    <button type="submit" class="btn btn-success waves-effect waves-light">Edit Category</button>
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
    div.dropify-message>span>p {
        font-size: 12px;
    }

</style>
@endpush
@push('script')
<script src="{{asset('js/dropify.js')}}"></script>
<script>
    $('.dropify').dropify();

</script>
@endpush
@endsection

