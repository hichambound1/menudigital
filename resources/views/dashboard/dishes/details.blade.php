@extends('includes.dash_layout')
@section('dash')

<div class="content-wrapper">
    <div class="col-md-12 grid-margin stretch-card mx-auto">
        <div class="row">
            <div class="card my-2">
                <div class="card-body">
                    <div class="card-title">
                        @lang('dish details')
                    </div>
                    <div class="card-body">
                        <div class="row">
                            {{-- photo --}}
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
                            {{-- info --}}
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
                            {{-- ingredients --}}
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
                <div class="row my-2
                ">

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
@endsection
