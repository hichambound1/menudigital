{{-- @extends('includes.dash_layout')
@section('dash')

<div class="content-wrapper">
    <div class="col-md-12 grid-margin stretch-card mx-auto">
        <div class="row">
            <div class="col-md-12">
                @if (session('added'))
                    <div class="alert alert-success">
                        {{ session('added') }}
                        <span class="close" data-dismiss="alert">&times;</span>
                    </div>
                @endif
                @if (session('updated'))
                    <div class="alert alert-success">
                        {{ session('updated') }}
                        <span class="close" data-dismiss="alert">&times;</span>
                    </div>
                @endif
                @if (session('deleted'))
                    <div class="alert alert-danger">
                        {{ session('deleted') }}
                        <span class="close" data-dismiss="alert">&times;</span>
                    </div>
                @endif
            </div>
            <div class="card my-2">
                <div class="card-body">
                    <div class="card-title">
                        @lang('dish details')
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-6">
                                <img src="{{asset($dish->photo)}}" width="100%" alt="">
                                <div class="">
                                    <div class="row justify-content-between my-3">
                                        <div class="col-4 text-uppercase">
                                            description en
                                        </div>
                                        <div class="col-4">
                                            {{$dish->description_en}}
                                        </div>
                                    </div>
                                    <div class="row justify-content-between my-3">
                                        <div class="col-4 text-uppercase">
                                            description ar
                                        </div>
                                        <div class="col-4">
                                            {{$dish->description_ar}}
                                        </div>
                                    </div>
                                    <div class="row justify-content-between my-3">
                                        <div class="col-4 text-uppercase">
                                            description fr
                                        </div>
                                        <div class="col-4">
                                            {{$dish->description_fr}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="row justify-content-between my-3">
                                    <div class="col-4 text-uppercase">
                                        name en
                                    </div>
                                    <div class="col-4">
                                        {{$dish->name_en}}
                                    </div>
                                </div>
                                <div class="row justify-content-between my-3">
                                    <div class="col-4 text-uppercase">
                                        name ar
                                    </div>
                                    <div class="col-4">
                                        {{$dish->name_ar}}
                                    </div>
                                </div>
                                <div class="row justify-content-between my-3">
                                    <div class="col-4 text-uppercase">
                                        name fr
                                    </div>
                                    <div class="col-4">
                                        {{$dish->name_fr}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="btn btn-info text-whitemx-2 ">Price : {{$dish->prix}} Dhs</div>
                                    <div class="btn btn-danger text-whitemx-2 ">Price : {{$dish->solde}} Dhs</div>

                                    <span class="badge mx-2 @if($dish->statu==1)badge-primary @else badge-danger @endif">@if($dish->statu==1) Active @else unactive @endif</span>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="">
                                    <div class="row justify-content-between my-3">
                                        <div class="col-4 text-uppercase">
                                            ingredients en
                                        </div>
                                        <div class="col-4">
                                            {{$dish->ingredients_en}}
                                        </div>
                                    </div>
                                    <div class="row justify-content-between my-3">
                                        <div class="col-4 text-uppercase">
                                            ingredients ar
                                        </div>
                                        <div class="col-4">
                                            {{$dish->ingredients_ar}}
                                        </div>
                                    </div>
                                    <div class="row justify-content-between my-3">
                                        <div class="col-4 text-uppercase">
                                            ingredients fr
                                        </div>
                                        <div class="col-4">
                                            {{$dish->ingredients_fr}}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
            <div class="my-5">
                <div class="card w-100">
                    <div class="card-body">
                        <div class="card-title">
                            <h4 class="text-capitalize">@lang('add to gallery')</h4>
                        </div>
                        <form method="post" action="{{route('dish.photo')}}" enctype="multipart/form-data" class="forms-sample w-100">
                            @csrf
                            <input type="hidden"  name="dish" value="{{$dish->id}}">
                            <div class="form-group">
                              <label for="">PHOTO</label>
                              <input type="file"  name="photo" class="form-control">
                              @error('photo')
                                {{$message}}
                              @enderror
                            </div>
                            <button type="submit" class="btn btn-primary text-capitalize mr-2">@lang('add')</button>

                          </form>
                    </div>

                </div>
                <div class="row my-2">
                        @foreach ($dish->media as $item)
                            <div class="col-md-4">
                                <img src="{{asset($item->photo)}}" width="100%" alt="">
                            </div>
                        @endforeach
                    </div>
            </div>
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
                        <h4 class="mb-sm-0 font-size-18">Profile</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm order-2 order-sm-1">
                                    <div class="d-flex align-items-start mt-3 mt-sm-0">
                                        <div class="flex-shrink-0">
                                            <div class="avatar-xl me-3">
                                                <img src="{{asset($dish->photo)}}" alt="" class="img-fluid -block">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div>
                                                <h5 class="font-size-16 mb-1">Name (en) :<br> <div class="font-size-12">
                                                    {{$dish->name_en}}
                                                </div>
                                                </h5>
                                                <h5 class="font-size-16 mb-1">Name (ar) :<br> <div class="font-size-12">
                                                    {{$dish->name_ar}}
                                                </div>
                                                </h5>
                                                <h5 class="font-size-16 mb-1">Name (fr) :<br> <div class="font-size-12">
                                                    {{$dish->name_fr}}
                                                </div>
                                                </h5>
                                                <h5 class="font-size-16 mb-1">Price :<br> <div class="font-size-12">
                                                    {{$dish->prix}} {{$dish->currency}}
                                                </div>
                                                </h5>
                                                <h5 class="font-size-16 mb-1">solde :<br> <div class="font-size-12">
                                                    {{$dish->solde}} {{$dish->currency}}
                                                </div>
                                                </h5>
                                                <div><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>{{$dish->user->name_en}}</div>

                                                <button type="button" class="btn btn-soft-light"><i class="me-1"></i> {{$dish->category->name_en}}</button>


                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>


                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                    <div class="tab-content">
                        <div class="tab-pane active" id="overview" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">About</h5>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <div class="pb-3">
                                            <div class="row">
                                                <div class="col-xl-2">
                                                    <div>
                                                        <h5 class="font-size-15">Discription (en):</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl">
                                                    <div class="text-muted">
                                                        {{$dish->description_en}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pb-3">
                                            <div class="row">
                                                <div class="col-xl-2">
                                                    <div>
                                                        <h5 class="font-size-15">Discription (fr):</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl">
                                                    <div class="text-muted">
                                                        {{$dish->description_fr}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pb-3">
                                            <div class="row">
                                                <div class="col-xl-2">
                                                    <div>
                                                        <h5 class="font-size-15">Discription (ar):</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl">
                                                    <div class="text-muted">
                                                        {{$dish->description_ar}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pb-3">
                                            <div class="row">
                                                <div class="col-xl-2">
                                                    <div>
                                                        <h5 class="font-size-15">Ingredients (ar):</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl">
                                                    <div class="text-muted">
                                                        {{$dish->ingredients_ar}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pb-3">
                                            <div class="row">
                                                <div class="col-xl-2">
                                                    <div>
                                                        <h5 class="font-size-15">Ingredients (en):</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl">
                                                    <div class="text-muted">
                                                        {{$dish->ingredients_en}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pb-3">
                                            <div class="row">
                                                <div class="col-xl-2">
                                                    <div>
                                                        <h5 class="font-size-15">Ingredients (fr):</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl">
                                                    <div class="text-muted">
                                                        {{$dish->ingredients_fr}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->



                        <!-- end tab pane -->
                    </div>

                    <!-- end tab content -->
                    {{-- gallery --}}
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <h5 class="card-title mb-0">Gallery</h5>
                                </div>
                                <div class="flex-shrink-0">
                                    <button type="button" class="btn btn-primary waves-effect waves-light"
                                            data-bs-toggle="modal" data-bs-target="#myModal">Add to Gallery</button>

                                        <!-- sample modal content -->
                                        <div id="myModal" class="modal fade" tabindex="-1"
                                            aria-labelledby="myModalLabel" aria-hidden="true" data-bs-scroll="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="myModalLabel">Add to Gallery
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <form method="post" action="{{route('dish.photo')}}" enctype="multipart/form-data" class="forms-sample w-100">
                                                            @csrf
                                                            <input type="hidden"  name="dish" value="{{$dish->id}}">
                                                            <div class="form-group">
                                                              <label for="">PHOTO</label>
                                                              <input type="file"  name="photo" class="form-control dropify">
                                                              @error('photo')
                                                                {{$message}}
                                                              @enderror
                                                            </div>
                                                            <button type="submit" class="btn btn-primary text-capitalize m-2">@lang('add')</button>

                                                          </form>
                                                    </div>

                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="row">

                                    @foreach ($dish->media as $item)
                                        <div class="col-md-4">
                                            <img src="{{asset($item->photo)}}" width="100%" alt="">
                                        </div>
                                    @endforeach
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    {{-- end gallery --}}

                </div>
                <!-- end col -->

                <!-- end col -->
            </div>
            <!-- end row -->

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


