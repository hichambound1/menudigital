<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Dahboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('dash/vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('dash/vendors/base/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('dash/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/dropify.css')}}">
  <!-- endinject -->
  {{-- <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" /> --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" integrity="sha512-2eMmukTZtvwlfQoG8ztapwAH5fXaQBzaMqdljLopRSA0i6YKM8kBAOrSSykxu9NN9HrtD45lIqfONLII2AFL/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('includes.header_dash')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
        @include('includes.dash_sidebar')
      <!-- partial -->
      <div class="main-panel">

        @yield('dash')

        <!-- content-wrapper ends -->

          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{asset('dash/vendors/base/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{asset('dash/vendors/chart.js/Chart.min.js')}}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{asset('dash/js/off-canvas.js')}}"></script>
    <script src="{{asset('dash/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('dash/js/template.js')}}"></script>
    <script src="{{asset('dash/js/todolist.js')}}"></script>
    <script src="{{asset('js/dropify.js')}}"></script>
    <script >
        $('.dropify').dropify();
    </script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('dash/js/dashboard.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

     <script>
        $('.delete-confirm').click(function (event) {
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
    <!-- End custom js for this page-->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js" integrity="sha512-Gs+PsXsGkmr+15rqObPJbenQ2wB3qYvTHuJO6YJzPe/dTLvhy0fmae2BcnaozxDo5iaF8emzmCZWbQ1XXiX2Ig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
{{--
<script >


    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });


    $uploadCrop = $('#upload-demo').croppie({
        enableExif: true,
        viewport: {
            width: 400,
            height: 400,
            type: 'square'
        },
        boundary: {
            width: 500,
            height: 500
        }
    });


    $('#upload').on('change', function () {
        $('#upload-demo').css("display", "block");
        var name = document.getElementById('name').value;

        var reader = new FileReader();
        reader.onload = function (e) {
            $uploadCrop.croppie('bind', {
                url: e.target.result
            }).then(function(){
                console.log('jQuery bind complete');
            });
        }
        reader.readAsDataURL(this.files[0]);
    });


    $('.upload-result').on('click', function (ev) {
        $uploadCrop.croppie('result', {
            type: 'canvas',
            size: 'viewport'
        }).then(function (resp) {
            var name = document.getElementById('name').value;
            $.ajax({
                url: "{{route('categories.store')}}",
                type: "POST",
                data: {"photo":resp,'name':name},
                success: function (data) {
                    window.location.href = '{{route("categories.index")}}';
                }
            });
                    location.replace('{{route("categories.index")}}');
        });
    });


</script> --}}


</body>

  </html>

