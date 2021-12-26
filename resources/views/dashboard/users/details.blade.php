@extends('includes.dash_layout')
@section('content')

{{-- <div class="content-wrapper">
    <div class="col-md-12 grid-margin stretch-card mx-auto">
        <div class="row">
            <div class="card my-2">
                <div class="card-body">
                    <div class="card-title">
                        @lang('user details')
                    </div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-6">
                                <img src="{{asset($user->logo)}}" width="100%" alt="">
                            </div>

                            <div class="col-md-6">
                                <div class="row justify-content-between my-3">
                                    <div class="col-4 text-uppercase">
                                        name en
                                    </div>
                                    <div class="col-4">
                                        {{$user->name_en}}
                                    </div>
                                </div>
                                <div class="row justify-content-between my-3">
                                    <div class="col-4 text-uppercase">
                                        name ar
                                    </div>
                                    <div class="col-4">
                                        {{$user->name_ar}}
                                    </div>
                                </div>
                                <div class="row justify-content-between my-3">
                                    <div class="col-4 text-uppercase">
                                        name fr
                                    </div>
                                    <div class="col-4">
                                        {{$user->name_fr}}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="row justify-content-between my-2">
                                <div class="col-4">
                                  Phone
                                </div>
                                <div class="col-4">
                                  {{$user->phone}}
                                </div>
                            </div>
                            <div class="row justify-content-between my-2">
                                <div class="col-4">
                                  Statu
                                </div>
                                <div class="col-4">
                                  @if($user->statu == 0) False @else True @endif
                                </div>
                            </div>
                            <div class="row justify-content-between my-2">
                                <div class="col-4">
                                    Email :
                                </div>
                                <div class="col-4">
                                  {{$user->email}}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-12 p-0">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            @lang('description')
                        </div>
                        <div class="row justify-content-between my-2">
                            <div class="col-4 text-capitalize">
                                name en
                            </div>
                            <div class="col-4">
                                {{$user->description_en}}
                            </div>
                        </div>
                        <div class="row justify-content-between my-2">
                            <div class="col-4 text-capitalize">
                                name fr
                            </div>
                            <div class="col-4">
                                {{$user->description_fr}}
                            </div>
                        </div>
                        <div class="row justify-content-between my-2">
                            <div class="col-4 text-capitalize">
                                name ar
                            </div>
                            <div class="col-4">
                                {{$user->description_ar}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 my-3 p-0">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            @lang('address')
                        </div>
                        <div class="row justify-content-between my-2">
                            <div class="col-4 text-capitalize">
                                address en
                            </div>
                            <div class="col-4">
                                {{$user->address_en}}
                            </div>
                        </div>
                        <div class="row justify-content-between my-2">
                            <div class="col-4 text-capitalize">
                                address fr
                            </div>
                            <div class="col-4">
                                {{$user->address_fr}}
                            </div>
                        </div>
                        <div class="row justify-content-between my-2">
                            <div class="col-4 text-capitalize">
                                address ar
                            </div>
                            <div class="col-4">
                                {{$user->address_ar}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($user->dishes as $dish)
                <div class="col-md-4 my-3 p-1">
                    <div class="card m-1">
                        <div class="card-body">
                            <div class="card-title">
                                @lang('address')
                            </div>
                            <img src="{{asset($dish->photo)}}" width="100%" alt="">
                            <h4 class="mt-2 text-capitalize">{{$dish->name_en}}</h4>
                            <p class="text-secondary mt-3">{{$dish->description_en}}</p>
                            <p class="text-danger mt-3">{{$dish->prix}} Dhs</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
</div> --}}
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
                                                <img src="assets/images/users/avatar-2.jpg" alt="" class="img-fluid rounded-circle d-block">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div>
                                                <h5 class="font-size-16 mb-1">Name (en) : {{$user->name_en}}</h5>
                                                <h5 class="font-size-16 mb-1">Name (ar) : {{$user->name_ar}}</h5>
                                                <h5 class="font-size-16 mb-1">Name (fr) : {{$user->name_fr}}</h5>
                                                <p class="text-muted font-size-13">Full Stack Developer</p>

                                                <div class="d-flex flex-wrap align-items-start gap-2 gap-lg-3 text-muted font-size-13">
                                                    <div><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>{{$user->email}}</div>
                                                </div>
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
                                                        <h5 class="font-size-15">Bio (en):</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl">
                                                    <div class="text-muted">
                                                        {{$user->description_en}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pb-3">
                                            <div class="row">
                                                <div class="col-xl-2">
                                                    <div>
                                                        <h5 class="font-size-15">Bio (ar):</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl">
                                                    <div class="text-muted">
                                                        {{$user->description_ar}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pb-3">
                                            <div class="row">
                                                <div class="col-xl-2">
                                                    <div>
                                                        <h5 class="font-size-15">Bio (fr):</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl">
                                                    <div class="text-muted">
                                                        {{$user->description_fr}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pb-3">
                                            <div class="row">
                                                <div class="col-xl-2">
                                                    <div>
                                                        <h5 class="font-size-15">Bio (ar):</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl">
                                                    <div class="text-muted">
                                                        {{$user->description_ar}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pb-3">
                                            <div class="row">
                                                <div class="col-xl-2">
                                                    <div>
                                                        <h5 class="font-size-15">Address (ar):</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl">
                                                    <div class="text-muted">
                                                        {{$user->address_ar}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pb-3">
                                            <div class="row">
                                                <div class="col-xl-2">
                                                    <div>
                                                        <h5 class="font-size-15">Address (en):</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl">
                                                    <div class="text-muted">
                                                        {{$user->address_en}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pb-3">
                                            <div class="row">
                                                <div class="col-xl-2">
                                                    <div>
                                                        <h5 class="font-size-15">Address (fr):</h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl">
                                                    <div class="text-muted">
                                                        {{$user->address_fr}}
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
                </div>
                <!-- end col -->

                <!-- end col -->
            </div>
            <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
</div>
@endsection
