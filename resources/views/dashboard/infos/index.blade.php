 @extends('includes.dash_layout')
 @section('content')


 <div class="main-content">

     <div class="page-content">
         <div class="container-fluid">

             <!-- start page title -->
             <div class="row">
                 <div class="col-12">
                     <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                         <h4 class="mb-sm-0 font-size-18">Infos</h4>

                         <div class="page-title-right">
                             <ol class="breadcrumb m-0">
                                 <li class="breadcrumb-item"><a href="javascript: void(0);">Infos</a></li>
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
             <h4 class="card-title">@lang('table infos')</h4>
             <p class="card-description">
                 <!-- Button trigger modal -->
             {{-- <a href="{{route('infos.create')}}" class="btn btn-dark" >
                @lang('add infos')
             </a> --}}


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
                                         @lang('email')
                                     </th>
                                     <th>
                                         @lang('address')
                                     </th>
                                     <th>
                                         @lang('phone')
                                     </th>
                                     <th>
                                         @lang('description')
                                     </th>
                                     <th>
                                         @lang('facebook')
                                     </th>
                                     <th>
                                         @lang('instagram')
                                     </th>
                                     <th>
                                         @lang('linkdin')
                                     </th>
                                     <th>
                                         @lang('actions')
                                     </th>

                                 </tr>
                                 </thead>


                                 <tbody>
                                     @forelse ($infos as $item)
                                 <tr>

                                      <td class="py-1">
                                        {{substr($item->email, 0, 10).'...'}}
                                      </td>
                                      <td class="py-1">
                                        {{substr($item->address, 0, 10).'...'}}
                                      </td>
                                      <td class="py-1">
                                        {{substr($item->phone, 0, 10).'...'}}
                                      </td>
                                      <td class="py-1">
                                        {{substr($item->description, 0, 10).'...'}}
                                      </td>
                                      <td class="py-1">
                                        {{substr($item->facebook, 0, 10).'...'}}
                                      </td>
                                      <td class="py-1">
                                        {{substr($item->insta, 0, 10).'...'}}
                                      </td>
                                      <td class="py-1">
                                        {{substr($item->linkdin, 0, 10).'...'}}
                                      </td>
                                      <td class="">
                                         <div class="dropdown mt-4 mt-sm-0">
                                             <a href="#" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                 Actions <i class="mdi mdi-chevron-down"></i>
                                             </a>

                                             <div class="dropdown-menu">

                                                 <a href="{{route('infos.edit',$item->id)}}" class="dropdown-item text-warning"><i class=" bx bx-pencil"></i> Edit<i class="ti-pencil"></i></a>
                                                  </div>
                                         </div>

                                      </td>
                                 </tr>
                                 @empty
                                 <tr class="text-center">
                                     <td colspan="8">@lang('No record')
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

