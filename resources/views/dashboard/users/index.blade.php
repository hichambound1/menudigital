@extends('includes.dash_layout')
@section('dash')
<div class="content-wrapper">

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
    </div>
<div class="row ">

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">@lang('table users')</h4>
            <p class="card-description">
                <!-- Button trigger modal -->
            <a href="{{route('user.create')}}" class="btn btn-dark" >
               @lang('add user')
            </a>


            </p>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>

                            <th>
                                @lang('photo')
                            </th>
                            <th>
                                @lang('name')
                            </th>
                            <th>
                                @lang('actions')
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $item)
                        <tr>

                            <td class="py-1">
                               <img src="{{asset($item->logo)}}" class="rounded-pill" alt="">
                            </td>
                            <td class="py-1">
                                {{$item->name_en}}
                            </td>
                            <td class="d-flex">
                                <div class="dropdown">
                                    <p class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="ti-more"></i>
                                    </p>
                                    <div class="dropdown-menu shadow rounded" style="min-width: 72px !important;border:none" aria-labelledby="dropdownMenuButton">
                                        <p class="dropdown-item" >
                                          <form action="{{ route('user.destroy', [$item->id?? '']) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button class=" text-danger delete-confirm" style="background: none;border:none" data-name="{{ $item->name_en }}" type="submit">
                                                   Delete <i class="ti-trash text-danger"></i>
                                                </button>
                                            </form>
                                        </p>
                                        <p class="dropdown-item " style="padding: 7px;">
                                            <a href="{{route('user.edit',$item->id)}}" class="text-warning">Edit<i class="ti-pencil"></i></a>
                                        </p>

                                    </div>
                                </div>
                            </td>

                        </tr>
                        @empty
                        <tr class="text-center">
                            <td colspan="3">@lang('No record')
                            </td>
                            </tr>
                        @endforelse


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection


