@extends('includes.dash_layout')
@section('dash')

<div class="content-wrapper">
    <div class="col-md-12 grid-margin stretch-card mx-auto">

        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    @lang('add role')
                </div>
                <form class="forms-sample" method="POST"  action="{{route('role.update',$role)}}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label>@lang('name')</label>
                        <input type="text" id="name" value="{{$role->name}}"  name="name" class="form-control" placeholder="name">
                        @error('name')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    {{-- <div id="upload-demo" style=" display:none"></div> --}}
                    <button type="submit" class="btn btn-warning mr-2  upload-result">@lang('update')</button>

                </form>

            </div>
        </div>

    </div>







</div>


@endsection