<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Hotel Dashboard Template</title>
    <link rel="shortcut icon" type="image/x-icon" href="admin/assets/img/favicon.png">
    <link rel="stylesheet" href="admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="admin/assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="admin/assets/css/feathericon.min.css">
    <link rel="stylehseet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css">
    <link rel="stylesheet" href="admin/assets/plugins/morris/morris.css">
    <link rel="stylesheet" href="admin/assets/css/style.css">

</head>

<body class="loading"
      data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>>
    <div class="main-wrapper">
        // header
        @include('admin.layouts.nav-bar')
        //side-bar
        @include('admin.layouts.side-bar')
        //page
    {{--    @include('admin.layouts.index')--}}

        <div class="content-page">
            <div class="content">
             @yield('content')
            </div>
    </div>
    </div>
</body>
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="admin/assets/js/jquery-3.5.1.min.js"></script>
<script src="admin/assets/js/popper.min.js"></script>
<script src="admin/assets/js/bootstrap.min.js"></script>
<script src="admin/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="admin/assets/plugins/raphael/raphael.min.js"></script>
<script src="admin/assets/plugins/morris/morris.min.js"></script>
<script src="admin/assets/js/chart.morris.js"></script>
<script src="admin/assets/js/script.js"></script>
</body>

</html>
