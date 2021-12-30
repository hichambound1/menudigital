{{-- @extends('includes.dash_layout')
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
            <h4 class="card-title">@lang('table dishes')</h4>
            <p class="card-description">
                <!-- Button trigger modal -->
            <a href="{{route('dish.create')}}" class="btn btn-dark" >
               @lang('add dish')
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
                                @lang('category')
                            </th>
                            <th>
                                @lang('actions')
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($dishes as $item)
                        <tr>
                            <td class="py-1">
                                <img src="{{asset($item->photo)}}" alt="">
                            </td>
                            <td class="py-1">
                                {{$item->name_en}}
                            </td>
                            <td class="py-1">
                                {{$item->category->name_en}}
                            </td>
                            <td class="d-flex">
                                <div class="dropdown">
                                    <p class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <i class="ti-more"></i>
                                    </p>
                                    <div class="dropdown-menu shadow rounded" style="min-width: 72px !important;border:none" aria-labelledby="dropdownMenuButton">
                                        <p class="dropdown-item" >
                                          <form action="{{ route('dish.destroy', [$item->id?? '']) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button class=" text-danger delete-confirm" style="background: none;border:none" data-name="{{ $item->name_en }}" type="submit">
                                                   Delete <i class="ti-trash text-danger"></i>
                                                </button>
                                            </form>
                                        </p>
                                        <p class="dropdown-item " style="padding: 7px;">
                                            <a href="{{route('dish.edit',$item->id)}}" class="text-warning">Edit<i class="ti-pencil"></i></a>
                                        </p>
                                        <p class="dropdown-item " style="padding: 7px;">
                                            <a href="{{route('dish.show',$item->id)}}" class="text-info">Details<i class="ti-more"></i></a>
                                        </p>

                                    </div>
                                </div>
                            </td>

                        </tr>
                        @empty
                        <tr class="text-center">
                            <td colspan="4">@lang('No record')
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

 --}}
 @extends('includes.dash_layout')
 @section('content')


 <div class="main-content">

     <div class="page-content">
         <div class="container-fluid">

             <!-- start page title -->
             <div class="row">
                 <div class="col-12">
                     <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                         <h4 class="mb-sm-0 font-size-18">Dishes</h4>

                         <div class="page-title-right">
                             <ol class="breadcrumb m-0">
                                 <li class="breadcrumb-item"><a href="javascript: void(0);">Dishes</a></li>
                                 <li class="breadcrumb-item active">List</li>
                             </ol>
                         </div>

                     </div>
                 </div>
             </div>
             <!-- end page title -->
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
             <h4 class="card-title">@lang('table dishes')</h4>
             <p class="card-description">
                 <!-- Button trigger modal -->
             <a href="{{route('dish.create')}}" class="btn btn-dark" >
                @lang('add Dish')
             </a>


             <div class="row">
                 <div class="col-12">
                     <div class="card">
                         <div class="card-header">

                         </div>
                         <div class="card-body">
                             <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                                 <thead>
                                 <tr>
                                    <th>
                                        @lang('photo')
                                    </th>
                                    <th>
                                        @lang('name')
                                    </th>
                                    <th>
                                        @lang('user')
                                    </th>
                                    <th>
                                        @lang('category')
                                    </th>
                                    <th>
                                        @lang('statu')
                                    </th>
                                    <th>
                                        @lang('actions')
                                    </th>
                                 </tr>
                                 </thead>


                                 <tbody>
                                     @forelse ($dishes as $item)
                                 <tr>
                                    <td >
                                        <img src="{{asset($item->photo)}}" height="100px" width="100px" alt="">
                                    </td>
                                      <td >
                                          {{$item->name_en}}
                                      </td>
                                      <td >
                                          {{$item->user->name_en}}
                                      </td>
                                      <td class="py-1">
                                        {{$item->category->name_en}}
                                    </td>
                                    <td class="py-1">

                                          <form action="{{route('dishstatu',$item->id)}}" id="etat{{$item->id}}" method="post">
                                              @method('PUT')
                                              @csrf

                                              <div class="form-check form-switch form-switch-lg mb-3" dir="ltr">
                                                <input type="checkbox" name="etat" class="form-check-input" onchange="changedfun({{$item->id}})" id="customSwitchsizelg{{$item->id}}" @if ($item->statu==1)checked @endif >
                                              </div>
                                          </form>
                                          <script>
                                              function changedfun(id){

                                                  document.getElementById(`etat${id}`).submit();
                                              }
                                          </script>



                                    </td>
                                      <td class="">
                                         <div class="dropdown mt-4 mt-sm-0">
                                             <a href="#" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                 Actions <i class="mdi mdi-chevron-down"></i>
                                             </a>

                                             <div class="dropdown-menu">
                                                 <a class="dropdown-item" href="#">
                                                     <form action="{{route('dish.destroy', [$item->id?? '']) }}" method="post">
                                                         @method('DELETE')
                                                         @csrf
                                                         <button class=" text-danger delete-confirm-dish" style="background: none;border:none" data-name="{{ $item->name_en }}" type="submit">
                                                           <i class=" bx bx-trash-alt"></i> Delete
                                                         </button>
                                                     </form>
                                                 </a>
                                                 <a href="{{route('dish.edit',$item->id)}}" class="dropdown-item text-warning"><i class=" bx bx-pencil"></i> Edit<i class="ti-pencil"></i></a>
                                                 <a href="{{route('dish.show',$item->id)}}" class="dropdown-item"><i class="bx bxs-user-detail"></i> Details<i class="ti-more"></i></a>
                                             </div>
                                         </div>

                                      </td>
                                 </tr>
                                 @empty
                                 <tr class="text-center">
                                     <td colspan="4">@lang('No record')
                                     </td>
                                     </tr>
                                 @endforelse

                                 </tbody>
                             </table>
                         </div>
                     </div>
                     <!-- end cardaa -->
                 </div> <!-- end col -->
             </div> <!-- end row -->
         </div> <!-- container-fluid -->
     </div>
     <!-- End Page-content -->



 </div>
 @push('script')
 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

      <script>
         $('.delete-confirm-dish').click(function (event) {
             var form = $(this).closest("form");
             var name = $(this).data("name");
             event.preventDefault();
             swal({
                     title: `Are you sure you want to delete ${name}?`,
                     text: "If you delete this, it will be gone forever.",
                     icon: "warning",
                     buttons: true,
                     dangerMode: true,
                 })
                 .then((willDelete) => {
                     if (willDelete) {
                         form.submit();
                     }
                 });
         });

     </script>
     <script>
         $('#datatable').DataTable( {
             dom: 'Bfrtip',
             buttons: [
                 'copy', 'excel', 'pdf'
             ]
         } );
     </script>
 @endpush
 @endsection

