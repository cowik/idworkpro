<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IWP</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="mazer/css/bootstrap.css">

    <!-- DataTables -->
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link rel="stylesheet" href="mazer/vendors/iconly/bold.css">

    <link rel="stylesheet" href="mazer/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="mazer/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="mazer/css/app.css">
    <link rel="shortcut icon" href="mazer/images/favicon.svg" type="image/x-icon">
</head>

<body>
    <div id="app">
        @include('layouts.leftside')
        <div id="main" class='layout-navbar'>
            @include('layouts.navbar')
            <div id="main-content">
                @yield('page-heading')
                @include('layouts.footer')
            </div>
        </div>
    </div>
    <script src="mazer/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="mazer/js/bootstrap.bundle.min.js"></script>

    <!-- DataTables -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
    $(function () {
        
        var table = $('#jobseekers').DataTable({
            "processing": true,
            "serverside":true,
            "ajax": "{{route('ajax.get.data.jobseekers')}}",
            "columns":[
                {data:'name',name:'name'},
                {data:'email',email:'email'},
                {data:'phonenumber',phonenumber:'phonenumber'},
                {data:'action',action:'action'}
            ],
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": true,
            "responsive": true
        });
        
    });
    </script>

    <!-- SweetAlert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
    @if(Session::has('success'))
        swal("Good job!", "{{Session::get('success')}}", "success");
    @endif
    </script>
</body>

</html>