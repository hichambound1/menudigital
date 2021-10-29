@extends('includes.dash_layout')
@section('dash')

<div class="content-wrapper">
    <div class="col-md-12 grid-margin stretch-card mx-auto">

        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    @lang('add dish')
                </div>
                @if($errors)
            @foreach ($errors->all() as $error)
                <div class="text-red">{{ $error }}</div>
            @endforeach
        @endif
                <form class="forms-sample" method="POST"  action="{{route('dish.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>@lang('name')</label>
                        <input type="text" id="name_en" value="{{old('name_en')}}"  name="name_en" class="form-control" placeholder="name_en">
                        @error('name_en')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>@lang('name')</label>
                        <input type="text" id="name_ar" value="{{old('name_ar')}}"  name="name_ar" class="form-control" placeholder="name_ar">
                        @error('name_ar')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>@lang('name')</label>
                        <input type="text" id="name_fr" value="{{old('name_fr')}}"  name="name_fr" class="form-control" placeholder="name_fr">
                        @error('name_fr')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label>@lang('description')</label>
                        <input type="text" id="description_fr" value="{{old('description_fr')}}"  name="description_fr" class="form-control" placeholder="description_fr">
                        @error('description_fr')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>@lang('description')</label>
                        <input type="text" id="description_en" value="{{old('description_en')}}"  name="description_en" class="form-control" placeholder="description_en">
                        @error('description_en')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>@lang('description')</label>
                        <input type="text" id="description_ar" value="{{old('description_ar')}}"  name="description_ar" class="form-control" placeholder="description_ar">
                        @error('description_ar')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label>@lang('ingredients')</label>
                        <textarea name="ingredients_en" class="form-control" placeholder="ingredients_en">{{old('ingredients_en')}}</textarea>
                        @error('ingredients_en')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>@lang('ingredients')</label>
                        <textarea name="ingredients_fr" class="form-control" placeholder="ingredients_fr">{{old('ingredients_fr')}}</textarea>
                        @error('ingredients_fr')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>@lang('ingredients')</label>
                        <textarea name="ingredients_ar" class="form-control" placeholder="ingredients_ar">{{old('ingredients_ar')}}</textarea>
                        @error('ingredients_ar')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    {{-- category --}}
                    <div class="form-group">
                        <label>@lang('ingredients')</label>
                        <select name="category" class="form-control">
                            @forelse ($categories as $item)
                                <option value="{{$item->id}}">{{$item->name_en}}</option>
                            @empty
                                <option value="">@lang('no record')</option>
                            @endforelse
                        </select>
                    </div>

                    <div class="form-group">
                        <label>@lang('price')</label>

                        <input  type="number" min="0.00" name="price"  placeholder="0.00"  class="form-control ">
                        @error('price')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>@lang('solde')</label>

                        <input  type="number" min="0.00" name="solde"   placeholder="0.00" class="form-control">
                        @error('solde')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    {{-- photo --}}
                    <div class="form-group">
                        <label>Photo</label>
                        <input type="file" name="photo" id="upload" class="form-control dropify ">
                        @error('photo')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    {{-- <div id="upload-demo" style=" display:none"></div> --}}
                    <button type="submit" class="btn btn-success mr-2  upload-result">@lang('add')</button>

                </form>

            </div>
        </div>

    </div>







</div>


@endsection
