<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IWP</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="mazer/css/bootstrap.css">
    <link rel="stylesheet" href="mazer/vendors/simple-datatables/style.css">

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
    <script src="mazer/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="mazer/js/main.js"></script>
</body>

</html>