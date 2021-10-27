@extends('includes.dash_layout')
@section('dash')

<div class="content-wrapper">
    <div class="col-md-12 grid-margin stretch-card mx-auto">

        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    Ajouter une sport
                </div>


                <form
                    class="forms-sample">
                    @csrf
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" id="name" required name="name" class="form-control" placeholder="Nom">
                        @error('name')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Photo</label>
                        <input type="file" name="photo"  id="upload" class="form-control ">
                        @error('photo')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <div id="upload-demo" style=" display:none"></div>
                    <button type="submit" class="btn btn-success mr-2  upload-result">Submit</button>

                </form>

            </div>
        </div>

    </div>







</div>


@endsection
