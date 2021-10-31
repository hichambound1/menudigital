@extends('includes.dash_layout')
@section('dash')

<div class="content-wrapper">
    <div class="col-md-12 grid-margin stretch-card mx-auto">

        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    @lang('category details')
                </div>
                <div class="card-body">
                    <div class="row">
                        {{-- photo --}}
                        <div class="col-md-6">
                            <img src="{{asset($category->photo)}}" width="100%" alt="">
                        </div>
                        {{-- info --}}
                        <div class="col-md-6">
                            <div class="row justify-content-between my-3">
                                <div class="col-4 text-uppercase">
                                  name en
                                </div>
                                <div class="col-4">
                                  {{$category->name_en}}
                                </div>
                            </div>
                            <div class="row justify-content-between my-3">
                                <div class="col-4 text-uppercase">
                                  name ar
                                </div>
                                <div class="col-4">
                                  {{$category->name_ar}}
                                </div>
                            </div>
                            <div class="row justify-content-between my-3">
                                <div class="col-4 text-uppercase">
                                  name fr
                                </div>
                                <div class="col-4">
                                  {{$category->name_fr}}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>


    </div>







</div>


@endsection
