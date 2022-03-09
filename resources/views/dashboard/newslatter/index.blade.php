 @extends('includes.dash_layout')
 @section('content')


 <div class="main-content">

     <div class="page-content">
         <div class="container-fluid">

             <!-- start page title -->
             <div class="row">
                 <div class="col-12">
                     <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                         <h4 class="mb-sm-0 font-size-18">Newslatter</h4>

                         <div class="page-title-right">
                             <ol class="breadcrumb m-0">
                                 <li class="breadcrumb-item"><a href="javascript: void(0);">Newslatter</a></li>
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
             <h4 class="card-title">@lang('table roles')</h4>
             <p class="card-description">
                 <!-- Button trigger modal -->



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
                                         @lang('actions')
                                     </th>

                                 </tr>
                                 </thead>


                                 <tbody>
                                     @forelse ($newslatters as $item)
                                 <tr>

                                      <td class="py-1">
                                          {{$item->email}}
                                      </td>
                                      <td class="">
                                         <div class="dropdown mt-4 mt-sm-0">
                                             <a href="#" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                 Actions <i class="mdi mdi-chevron-down"></i>
                                             </a>

                                             <div class="dropdown-menu">
                                                 <a class="dropdown-item" href="#">
                                                     <form action="{{route('newslatter.destroy', [$item->id?? '']) }}" method="post">
                                                         @method('DELETE')
                                                         @csrf
                                                         <button class=" text-danger delete-confirm-newslatter" style="background: none;border:none" data-name="{{ $item->name_en }}" type="submit">
                                                           <i class=" bx bx-trash-alt"></i> Delete
                                                         </button>
                                                     </form>
                                                 </a>
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
         $('.delete-confirm-newslatter').click(function (event) {
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
