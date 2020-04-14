<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin 4.0</title>
    <link href="/public/admin/app/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="/public/admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/public/admin/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="/public/admin/assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="/public/admin/assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="/public/admin/assets/css/colors.min.css" rel="stylesheet" type="text/css">

    <link href="/public/admin/app/css/icons/icomoon/styles.min.css" media="all" rel="stylesheet" type="text/css">
    <link href="/public/admin/assets/css/bootstrap.min.css" media="all" rel="stylesheet" type="text/css">
    <link href="/public/admin/assets/css/bootstrap_limitless.min.css" media="all" rel="stylesheet" type="text/css">
    <link href="/public/admin/assets/css/layout.min.css" media="all" rel="stylesheet" type="text/css">
    <link href="/public/admin/assets/css/components.min.css" media="all" rel="stylesheet" type="text/css">
    <link href="/public/admin/assets/css/colors.min.css" media="all" rel="stylesheet" type="text/css">
    <link href="/public/admin/assets/css/erp.css?v={{ rand() }}" media="all" rel="stylesheet" type="text/css">

    <script src="/public/admin/app/js/main/jquery.min.js"></script>
    <script src="/public/admin/app/js/main/bootstrap.bundle.min.js"></script>
    <script src="/public/admin/app/js/plugins/loaders/blockui.min.js"></script>

    <script src="/public/admin/app/js/plugins/forms/styling/uniform.min.js"></script>
    <script src="/public/admin/app/js/plugins/forms/styling/switchery.min.js"></script>
    <script src="/public/admin/app/js/plugins/ui/moment/moment.min.js"></script>
    <script src="/public/admin/app/js/plugins/pickers/daterangepicker.js"></script>
    <script src="/public/admin/app/js/plugins/forms/selects/select2.min.js"></script>
    <script src="/public/admin/app/js/plugins/forms/selects/bootstrap_multiselect.js"></script>

    <script src="/public/admin/assets/js/app.js"></script>

</head>
<body>
    @include('app::admin.layouts.header')
    <div class="page-content">
        <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">
            @include('app::admin.layouts.sidebar')
        </div>
        <div class="content-wrapper">
            @yield('navbar')
            <div class="content" style="padding-top: 4em">
                @yield('content')
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(window).scroll(function() {
            if ($(this).scrollTop() > 20) {
                $('#page-header-light').css('top', '0');
            } else {
                $('#page-header-light').css('top', '');
            }
        });
    </script>
</body>
</html>
