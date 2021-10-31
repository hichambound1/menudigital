@extends('includes.dash_layout')
@section('dash')

<div class="content-wrapper">
    <div class="col-md-12 grid-margin stretch-card mx-auto">
        <div class="row">
            <div class="card my-2">
                <div class="card-body">
                    <div class="card-title">
                        @lang('user details')
                    </div>
                    <div class="card-body">
                        <div class="row">
                            {{-- photo --}}
                            <div class="col-md-6">
                                <img src="{{asset($user->logo)}}" width="100%" alt="">
                            </div>
                            {{-- info --}}
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
</div>
@endsection
