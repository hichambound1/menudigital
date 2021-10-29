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
                <form class="forms-sample" method="POST"  action="{{route('dish.update',$dish)}}" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label>@lang('name')</label>
                        <input type="text" id="name_en" value="{{$dish->name_en}}"  name="name_en" class="form-control" placeholder="name_en">
                        @error('name_en')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>@lang('name')</label>
                        <input type="text" id="name_ar" value="{{$dish->name_ar}}"  name="name_ar" class="form-control" placeholder="name_ar">
                        @error('name_ar')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>@lang('name')</label>
                        <input type="text" id="name_fr" value="{{$dish->name_fr}}"  name="name_fr" class="form-control" placeholder="name_fr">
                        @error('name_fr')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label>@lang('description')</label>
                        <input type="text" id="description_fr" value="{{$dish->description_fr}}"  name="description_fr" class="form-control" placeholder="description_fr">
                        @error('description_fr')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>@lang('description')</label>
                        <input type="text" id="description_en" value="{{$dish->description_en}}"  name="description_en" class="form-control" placeholder="description_en">
                        @error('description_en')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>@lang('description')</label>
                        <input type="text" id="description_ar" value="{{$dish->description_ar}}"  name="description_ar" class="form-control" placeholder="description_ar">
                        @error('description_ar')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label>@lang('ingredients')</label>
                        <textarea name="ingredients_en" class="form-control" placeholder="ingredients_en">{{$dish->ingredients_en}}</textarea>
                        @error('ingredients_en')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>@lang('ingredients')</label>
                        <textarea name="ingredients_fr" class="form-control" placeholder="ingredients_fr">{{$dish->ingredients_fr}}</textarea>
                        @error('ingredients_fr')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>@lang('ingredients')</label>
                        <textarea name="ingredients_ar" class="form-control" placeholder="ingredients_ar">{{$dish->ingredients_ar}}</textarea>
                        @error('ingredients_ar')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    {{-- category --}}
                    <div class="form-group">
                        <label>@lang('ingredients')</label>
                        <select name="category" class="form-control">
                            @forelse ($categories as $item)
                                <option @if ($dish->category_id==$item->id) selected @endif value="{{$item->id}}">{{$item->name_en}}</option>
                            @empty
                                <option value="">@lang('no record')</option>
                            @endforelse
                        </select>
                    </div>

                      <div class="form-group">
                        <label>@lang('price')</label>
                        <input type="number" value="{{$dish->prix}}" min="0.00" name="price" class="form-control ">
                        @error('price')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>@lang('solde')</label>
                        <input type="number" value="{{$dish->solde}}" min="0.00" name="solde" class="form-control">
                        @error('solde')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Photo</label>

                        <input type="file" name="photo"  data-default-file="{{asset($dish->photo)}}" id="upload" class="form-control dropify ">
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
