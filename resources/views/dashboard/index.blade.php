@extends('includes.dash_layout')
@section('content')
{{-- <div class="main-content">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="font-weight-bold mb-0"> Dashboard</h4>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title text-md-center text-xl-left">Categories</p>
                    <div
                        class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{$categories_count}}</h3>
                        <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                    </div>
                    <p class="mb-0 mt-2 text-danger">0.12% <span class="text-black ml-1"><small>(30 days)</small></span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title text-md-center text-xl-left">Dishes</p>
                    <div
                        class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{$dishes_count}}</h3>
                        <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                    </div>
                    <p class="mb-0 mt-2 text-danger">0.47% <span class="text-black ml-1"><small>(30 days)</small></span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title text-md-center text-xl-left">User</p>
                    <div
                        class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">{{$users_count}}</h3>
                        <i class="ti-agenda icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                    </div>
                    <p class="mb-0 mt-2 text-success">64.00%<span class="text-black ml-1"><small>(30
                                days)</small></span></p>
                </div>
            </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title text-md-center text-xl-left">Returns</p>
                    <div
                        class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
                        <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">61344</h3>
                        <i class="ti-layers-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
                    </div>
                    <p class="mb-0 mt-2 text-success">23.00%<span class="text-black ml-1"><small>(30
                                days)</small></span></p>
                </div>
            </div>
        </div>
    </div>

</div> --}}
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

<div class="row">
                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Categories</span>
                                    <h4 class="mb-3">
                                        <span class="counter-value" data-target="{{$categories_count}}">0</span>
                                    </h4>
                                </div>
                            </div>
                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col -->

                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Admins</span>
                                    <h4 class="mb-3">
                                        <span class="counter-value" data-target="{{$admins_count}}">0</span>
                                    </h4>
                                </div>

                            </div>

                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col-->
                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Dishes</span>
                                    <h4 class="mb-3">
                                        <span class="counter-value" data-target="{{$dishes_count}}">0</span>
                                    </h4>
                                </div>

                            </div>

                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col-->
                <div class="col-xl-3 col-md-6">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <span class="text-muted mb-3 lh-1 d-block text-truncate">Users</span>
                                    <h4 class="mb-3">
                                        <span class="counter-value" data-target="{{$users_count}}">0</span>
                                    </h4>
                                </div>

                            </div>

                        </div><!-- end card body -->
                    </div><!-- end card -->
                </div><!-- end col-->

            </div><!-- end row-->
        </div>
    </div>
</div>

@endsection
