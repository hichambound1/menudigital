@extends('includes.dash_layout')
@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

           <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Add Dish</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Categories</a></li>
                                <li class="breadcrumb-item active">Add</li>
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

                            <form class="forms-sample" method="POST" action="{{route('dish.store')}}"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="row">


                                    <div class="col-lg-6 mb-3">
                                        <label for="example-text-input" class="form-label">@lang('name')</label>
                                        <input type="text" id="name_en" value="{{old('name_en')}}" name="name_en"
                                            class="form-control" placeholder="name_en">
                                        @error('name_en')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="example-text-input" class="form-label">@lang('name')</label>
                                        <input type="text" id="name_ar" value="{{old('name_ar')}}" name="name_ar"
                                            class="form-control" placeholder="name_ar">
                                        @error('name_ar')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="example-text-input" class="form-label">@lang('name')</label>
                                        <input type="text" id="name_fr" value="{{old('name_fr')}}" name="name_fr"
                                            class="form-control" placeholder="name_fr">
                                        @error('name_fr')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="example-date-input" class="form-label">@lang('description')</label>
                                        <input type="text" id="description_en" value="{{old('description_en')}}"  name="description_en" class="form-control" placeholder="description_en">
                                        @error('description_en')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="example-date-input" class="form-label">@lang('description')</label>
                                        <input type="text" id="description_ar" value="{{old('description_ar')}}"  name="description_ar" class="form-control" placeholder="description_ar">
                                        @error('description_ar')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="example-date-input" class="form-label">@lang('description')</label>
                                        <input type="text" id="description_fr" value="{{old('description_fr')}}"  name="description_fr" class="form-control" placeholder="description_fr">
                                        @error('description_fr')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="example-date-input" class="form-label">@lang('ingredients')</label>
                                        <input type="text" id="ingredients_en" value="{{old('ingredients_en')}}"  name="ingredients_en" class="form-control" placeholder="ingredients_en">
                                        @error('ingredients_en')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="example-date-input" class="form-label">@lang('ingredients')</label>
                                        <input type="text" id="ingredients_fr" value="{{old('ingredients_fr')}}"  name="ingredients_fr" class="form-control" placeholder="ingredients_fr">
                                        @error('ingredients_fr')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="example-date-input" class="form-label">@lang('ingredients')</label>
                                        <input type="text" id="ingredients_ar" value="{{old('ingredients_ar')}}"  name="ingredients_ar" class="form-control" placeholder="ingredients_ar">
                                        @error('ingredients_ar')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <label for="example-date-input" class="form-label">@lang('solde')</label>
                                        <input type="number" id="solde" value="{{old('solde')}}"  name="solde" class="form-control" placeholder="solde">
                                        @error('solde')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="example-date-input" class="form-label">@lang('price')</label>
                                        <input type="number" min="0.00" name="price" value="{{old('price')}}" class="form-control" placeholder="0.00" >
                                        @error('price')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="example-date-input" class="form-label">@lang('currency')</label>
                                        <input type="text" name="currency" class="form-control" value="{{old('currency')}}" placeholder="$/MAD/..." >
                                        @error('currency')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <label for="example-date-input" class="form-label">@lang('category')</label>

                                        <select name="category" class="form-control">
                                            @forelse ($categories as $item)
                                                <option value="{{$item->id}}">{{$item->name_en}}</option>
                                            @empty
                                                <option value="">@lang('no record')</option>
                                            @endforelse
                                        </select>
                                        @error('category')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="example-date-input" class="form-label">@lang('user')</label>

                                        <select name="user_id" class="form-control">
                                            <option disabled selected>Choose user</option>
                                            @forelse ($users as $item)
                                                <option value="{{$item->id}}">{{$item->name_en}}</option>
                                            @empty
                                                <option value="">@lang('no record')</option>
                                            @endforelse
                                        </select>
                                        @error('user_id')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <label for="example-text-input" class="form-label">@lang('photo')</label>
                                        <input type="file" id="photo" name="photo" class="form-control dropify">
                                        @error('photo')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                        </div>


                    </div>
                    <button type="submit" class="btn btn-success waves-effect waves-light">Add Dish</button>
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
