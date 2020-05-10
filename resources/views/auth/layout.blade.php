<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Agroxa - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="admin/images/favicon.ico">

    <link href="admin/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="admin/css/metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="admin/css/icons.css" rel="stylesheet" type="text/css">
    <link href="admin/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>

<!-- Background -->
<div class="account-pages"></div>
<!-- Begin page -->
<div class="wrapper-page">

    <div class="card">
        <div class="card-body">

            <h3 class="text-center m-0">
                <a href="index.html" class="logo logo-admin"><img src="admin/images/logo.png" height="30" alt="logo"></a>
            </h3>
            @yield('content')

        </div>
    </div>

</div>
<!-- END wrapper -->


<!-- jQuery  -->
<script src="admin/js/jquery.min.js"></script>
<script src="admin/js/bootstrap.bundle.min.js"></script>
<script src="admin/js/metisMenu.min.js"></script>
<script src="admin/js/jquery.slimscroll.js"></script>
<script src="admin/js/waves.min.js"></script>

<script src="admin/jquery-sparkline/jquery.sparkline.min.js"></script>

<!-- App js -->
<script src="admin/js/app.js"></script>

</body>

</html>
