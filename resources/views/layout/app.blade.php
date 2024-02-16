<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Metoxi | Bootstrap 5 Admin Dashboard Template</title>
    <!--favicon-->
    <link rel="icon" href="{{asset('')}}assets/images/favicon-32x32.png" type="image/png">

    <!--plugins-->
    <link href="{{asset('')}}assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/plugins/metismenu/metisMenu.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}assets/plugins/metismenu/mm-vertical.css">
    <!--bootstrap css-->
    <link href="{{asset('')}}assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <!--main css-->
    <link rel="stylesheet" href="{{asset('')}}assets/css/extra-icons.css">
    <link href="{{asset('')}}assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="{{asset('')}}sass/main.css" rel="stylesheet">
    <link href="{{asset('')}}sass/dark-theme.css" rel="stylesheet">
    <link href="{{asset('')}}sass/semi-dark.css" rel="stylesheet">
    <link href="{{asset('')}}sass/bordered-theme.css" rel="stylesheet">
    <link href="{{asset('')}}sass/responsive.css" rel="stylesheet">
    @stack('post-styles')

</head>
@include('layout.header')
<body>
<!--start mini sidebar-->
@include('layout.sidebar')
<!--end mini sidebar-->
<!--start main wrapper-->
<main class="main-wrapper">
    <div class="main-content">
        @yield('content')
    </div>
</main>
<!--end main wrapper-->



<!--start primary menu offcanvas-->
<div class="offcanvas offcanvas-start w-260" data-bs-scroll="true" tabindex="-1" id="offcanvasPrimaryMenu">
    <div class="offcanvas-header border-bottom h-70">
        <img src="{{asset('')}}assets/images/logo1.png" width="160" alt="">
        <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas">
            <i class="material-icons-outlined">close</i>
        </a>
    </div>
    <div class="offcanvas-body">
        <nav class="sidebar-nav">
            <ul class="metismenu" id="sidenav">
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="material-icons-outlined">home</i>
                        </div>
                        <div class="menu-title">Daily Log</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="material-icons-outlined">task</i>
                        </div>
                        <div class="menu-title">Verification</div>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="offcanvas-footer p-3 border-top h-70">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="DarkMode">
            <label class="form-check-label" for="DarkMode">Dark Mode</label>
        </div>
    </div>
</div>
<!--end primary menu offcanvas-->

<!--start user details offcanvas-->
<div class="offcanvas offcanvas-start w-260" data-bs-scroll="true" tabindex="-1" id="offcanvasUserDetails">
    <div class="offcanvas-body">
        <div class="user-wrapper">
            <div class="text-center p-3 bg-light rounded">
                <img src="https://placehold.co/110x110" class="rounded-circle p-1 shadow mb-3" width="120" height="120"
                     alt="">
                <h5 class="user-name mb-0 fw-bold">Jhon David</h5>
                <p class="mb-0">Administrator</p>
            </div>
            <div class="list-group list-group-flush mt-3 profil-menu fw-bold">
                <a href="javascript:;"
                   class="list-group-item list-group-item-action d-flex align-items-center gap-2 border-top"><i
                        class="material-icons-outlined">person_outline</i>Profile</a>
                <a href="javascript:;" class="list-group-item list-group-item-action d-flex align-items-center gap-2"><i
                        class="material-icons-outlined">local_bar</i>Setting</a>
                <a href="javascript:;" class="list-group-item list-group-item-action d-flex align-items-center gap-2"><i
                        class="material-icons-outlined">dashboard</i>Dashboard</a>
                <a href="javascript:;" class="list-group-item list-group-item-action d-flex align-items-center gap-2"><i
                        class="material-icons-outlined">account_balance</i>Earning</a>
                <a href="javascript:;" class="list-group-item list-group-item-action d-flex align-items-center gap-2"><i
                        class="material-icons-outlined">cloud_download</i>Downloads</a>
                <a href="javascript:;"
                   class="list-group-item list-group-item-action d-flex align-items-center gap-2 border-bottom"><i
                        class="material-icons-outlined">power_settings_new</i>Logout</a>
            </div>
        </div>

    </div>
    <div class="offcanvas-footer p-3 border-top">
        <div class="text-center">
            <button type="button" class="btn d-flex align-items-center gap-2" data-bs-dismiss="offcanvas"><i
                    class="material-icons-outlined">close</i><span>Close Sidebar</span></button>
        </div>
    </div>
</div>
<!--end user details offcanvas-->

<!--bootstrap js-->
<script src="{{asset('')}}assets/js/bootstrap.bundle.min.js"></script>

<!--plugins-->
<script src="{{asset('')}}assets/js/jquery.min.js"></script>
<!--plugins-->
<script src="{{asset('')}}assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="{{asset('')}}assets/plugins/metismenu/metisMenu.min.js"></script>
<script src="{{asset('')}}assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="{{asset('')}}assets/js/index.js"></script>
<script src="{{asset('')}}assets/plugins/peity/jquery.peity.min.js"></script>
<script>
    $(".data-attributes span").peity("donut")
</script>
<script src="{{asset('')}}assets/js/main.js"></script>
@stack('post-scripts')


</body>

</html>
