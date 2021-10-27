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
            <h4 class="card-title">@lang('table categories')</h4>
            <p class="card-description">
                <!-- Button trigger modal -->
            <a href="{{route('category.create')}}" class="btn btn-dark" >
               @lang('add category')
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
                        @forelse ($categories as $item)
                        <tr>
                            <td class="py-1">
                                <img src="{{asset($item->photo)}}" alt="">
                            </td>
                            <td class="py-1">
                                {{$item->name_en}}
                            </td>
                            <td class="d-flex">



                                <form action="{{ route('category.destroy', [$item->id?? '']) }}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger p-2 text-white delete-confirm" data-name="{{ $item->name_en }}" type="submit">
                                        <i class="ti-trash "></i>
                                    </button>
                                </form>


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


