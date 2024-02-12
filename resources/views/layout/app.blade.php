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
    <link href="{{asset('')}}assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="{{asset('')}}sass/main.css" rel="stylesheet">
    <link href="{{asset('')}}sass/dark-theme.css" rel="stylesheet">
    <link href="{{asset('')}}sass/semi-dark.css" rel="stylesheet">
    <link href="{{asset('')}}sass/bordered-theme.css" rel="stylesheet">
    <link href="{{asset('')}}sass/responsive.css" rel="stylesheet">

</head>
@include('layout.header')
<body>
<!--start mini sidebar-->
@include('layout.sidebar')
<!--end mini sidebar-->

<!--start main wrapper-->
<main class="main-wrapper">
    <div class="main-content">

    </div>
</main>
<!--end main wrapper-->



<!--start primary menu offcanvas-->
<div class="offcanvas offcanvas-start w-260" data-bs-scroll="true" tabindex="-1" id="offcanvasPrimaryMenu">
    <div class="offcanvas-header border-bottom h-70">
        <img src="assets/images/logo1.png" width="160" alt="">
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
                        <div class="menu-title">Dashboard</div>
                    </a>
                    <ul>
                        <li><a href="index.html"><i class="material-icons-outlined">arrow_right</i>eCommerce</a>
                        </li>
                        <li><a href="index2.html"><i class="material-icons-outlined">arrow_right</i>Alternate</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="material-icons-outlined">widgets</i>
                        </div>
                        <div class="menu-title">Widgets</div>
                    </a>
                    <ul>
                        <li><a href="widgets-data.html"><i class="material-icons-outlined">arrow_right</i>Data</a>
                        </li>
                        <li><a href="widgets-advance.html"><i class="material-icons-outlined">arrow_right</i>Advance</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-label">UI Elements</li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="material-icons-outlined">inventory_2</i>
                        </div>
                        <div class="menu-title">Cards</div>
                    </a>
                    <ul>
                        <li><a href="component-cards-basic.html"><i class="material-icons-outlined">arrow_right</i>Basic</a>
                        </li>
                        <li><a href="component-cards-advance.html"><i class="material-icons-outlined">arrow_right</i>Advance</a>
                        </li>
                        <li><a href="component-cards-contact.html"><i class="material-icons-outlined">arrow_right</i>Contacts</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="material-icons-outlined">shopping_bag</i>
                        </div>
                        <div class="menu-title">eCommerce</div>
                    </a>
                    <ul>
                        <li><a href="ecommerce-add-product.html"><i class="material-icons-outlined">arrow_right</i>Add Product</a>
                        </li>
                        <li><a href="ecommerce-products.html"><i class="material-icons-outlined">arrow_right</i>Products</a>
                        </li>
                        <li><a href="ecommerce-customers.html"><i class="material-icons-outlined">arrow_right</i>Customers</a>
                        </li>
                        <li><a href="ecommerce-customer-details.html"><i class="material-icons-outlined">arrow_right</i>Customer Details</a>
                        </li>
                        <li><a href="ecommerce-orders.html"><i class="material-icons-outlined">arrow_right</i>Orders</a>
                        </li>
                        <li><a href="ecommerce-customer-details.html"><i class="material-icons-outlined">arrow_right</i>Order Details</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="material-icons-outlined">card_giftcard</i>
                        </div>
                        <div class="menu-title">Components</div>
                    </a>
                    <ul>
                        <li><a href="component-alerts.html"><i class="material-icons-outlined">arrow_right</i>Alerts</a>
                        </li>
                        <li><a href="component-accordions.html"><i class="material-icons-outlined">arrow_right</i>Accordions</a>
                        </li>
                        <li><a href="component-badges.html"><i class="material-icons-outlined">arrow_right</i>Badges</a>
                        </li>
                        <li><a href="component-buttons.html"><i class="material-icons-outlined">arrow_right</i>Buttons</a>
                        </li>
                        <li><a href="component-carousels.html"><i class="material-icons-outlined">arrow_right</i>Carousels</a>
                        </li>
                        <li><a href="component-media-object.html"><i class="material-icons-outlined">arrow_right</i>Media
                                Objects</a>
                        </li>
                        <li><a href="component-modals.html"><i class="material-icons-outlined">arrow_right</i>Modals</a>
                        </li>
                        <li><a href="component-navs-tabs.html"><i class="material-icons-outlined">arrow_right</i>Navs & Tabs</a>
                        </li>
                        <li><a href="component-navbar.html"><i class="material-icons-outlined">arrow_right</i>Navbar</a>
                        </li>
                        <li><a href="component-paginations.html"><i class="material-icons-outlined">arrow_right</i>Pagination</a>
                        </li>
                        <li><a href="component-popovers-tooltips.html"><i class="material-icons-outlined">arrow_right</i>Popovers
                                & Tooltips</a>
                        </li>
                        <li><a href="component-progress-bars.html"><i class="material-icons-outlined">arrow_right</i>Progress</a>
                        </li>
                        <li><a href="component-spinners.html"><i class="material-icons-outlined">arrow_right</i>Spinners</a>
                        </li>
                        <li><a href="component-notifications.html"><i
                                    class="material-icons-outlined">arrow_right</i>Notifications</a>
                        </li>
                        <li><a href="component-avtars-chips.html"><i class="material-icons-outlined">arrow_right</i>Avatrs &
                                Chips</a>
                        </li>
                        <li><a href="component-typography.html"><i class="material-icons-outlined">arrow_right</i>Typography</a>
                        </li>
                        <li><a href="component-text-utilities.html"><i class="material-icons-outlined">arrow_right</i>Utilities</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="material-icons-outlined">view_agenda</i>
                        </div>
                        <div class="menu-title">Icons</div>
                    </a>
                    <ul>
                        <li><a href="icons-line-icons.html"><i class="material-icons-outlined">arrow_right</i>Line Icons</a>
                        </li>
                        <li><a href="icons-boxicons.html"><i class="material-icons-outlined">arrow_right</i>Boxicons</a>
                        </li>
                        <li><a href="icons-feather-icons.html"><i class="material-icons-outlined">arrow_right</i>Feather
                                Icons</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-label">Forms & Tables</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="material-icons-outlined">toc</i>
                        </div>
                        <div class="menu-title">Forms</div>
                    </a>
                    <ul>
                        <li><a href="form-elements.html"><i class="material-icons-outlined">arrow_right</i>Form Elements</a>
                        </li>
                        <li><a href="form-input-group.html"><i class="material-icons-outlined">arrow_right</i>Input Groups</a>
                        </li>
                        <li><a href="form-radios-and-checkboxes.html"><i class="material-icons-outlined">arrow_right</i>Radios &
                                Checkboxes</a>
                        </li>
                        <li><a href="form-layouts.html"><i class="material-icons-outlined">arrow_right</i>Forms Layouts</a>
                        </li>
                        <li><a href="form-validations.html"><i class="material-icons-outlined">arrow_right</i>Form Validation</a>
                        </li>
                        <li><a href="form-wizard.html"><i class="material-icons-outlined">arrow_right</i>Form Wizard</a>
                        </li>
                        <li><a href="form-file-upload.html"><i class="material-icons-outlined">arrow_right</i>File Upload</a>
                        </li>
                        <li><a href="form-date-time-pickes.html"><i class="material-icons-outlined">arrow_right</i>Date
                                Pickers</a>
                        </li>
                        <li><a href="form-select2.html"><i class="material-icons-outlined">arrow_right</i>Select2</a>
                        </li>
                        <li><a href="form-repeater.html"><i class="material-icons-outlined">arrow_right</i>Form Repeater</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="material-icons-outlined">api</i>
                        </div>
                        <div class="menu-title">Tables</div>
                    </a>
                    <ul>
                        <li><a href="table-basic-table.html"><i class="material-icons-outlined">arrow_right</i>Basic Table</a>
                        </li>
                        <li><a href="table-datatable.html"><i class="material-icons-outlined">arrow_right</i>Data Table</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="material-icons-outlined">apps</i>
                        </div>
                        <div class="menu-title">Apps</div>
                    </a>
                    <ul>
                        <li><a href="app-fullcalender.html"><i class="material-icons-outlined">arrow_right</i>Calendar</a>
                        </li>
                        <li><a href="app-to-do.html"><i class="material-icons-outlined">arrow_right</i>To do</a>
                        </li>
                        <li><a href="app-invoice.html"><i class="material-icons-outlined">arrow_right</i>Invoice</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-label">Pages</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="material-icons-outlined">lock</i>
                        </div>
                        <div class="menu-title">Authentication</div>
                    </a>
                    <ul>
                        <li><a class="has-arrow" href="javascript:;"><i class="material-icons-outlined">arrow_right</i>Basic</a>
                            <ul>
                                <li><a href="auth-basic-login.html" target="_blank"><i class="material-icons-outlined">arrow_right</i>Login</a></li>
                                <li><a href="auth-basic-register.html" target="_blank"><i class="material-icons-outlined">arrow_right</i>Register</a></li>
                                <li><a href="auth-basic-forgot-password.html" target="_blank"><i class="material-icons-outlined">arrow_right</i>Forgot Password</a></li>
                                <li><a href="auth-basic-reset-password.html" target="_blank"><i class="material-icons-outlined">arrow_right</i>Reset Password</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:;"><i class="material-icons-outlined">arrow_right</i>Cover</a>
                            <ul>
                                <li><a href="auth-cover-login.html" target="_blank"><i class="material-icons-outlined">arrow_right</i>Login</a></li>
                                <li><a href="auth-cover-register.html" target="_blank"><i class="material-icons-outlined">arrow_right</i>Register</a></li>
                                <li><a href="auth-cover-forgot-password.html" target="_blank"><i class="material-icons-outlined">arrow_right</i>Forgot Password</a></li>
                                <li><a href="auth-cover-reset-password.html" target="_blank"><i class="material-icons-outlined">arrow_right</i>Reset Password</a></li>
                            </ul>
                        </li>
                        <li><a class="has-arrow" href="javascript:;"><i class="material-icons-outlined">arrow_right</i>Boxed</a>
                            <ul>
                                <li><a href="auth-boxed-login.html" target="_blank"><i class="material-icons-outlined">arrow_right</i>Login</a></li>
                                <li><a href="auth-boxed-register.html" target="_blank"><i class="material-icons-outlined">arrow_right</i>Register</a></li>
                                <li><a href="auth-boxed-forgot-password.html" target="_blank"><i class="material-icons-outlined">arrow_right</i>Forgot Password</a></li>
                                <li><a href="auth-boxed-reset-password.html" target="_blank"><i class="material-icons-outlined">arrow_right</i>Reset Password</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="user-profile.html">
                        <div class="parent-icon"><i class="material-icons-outlined">person</i>
                        </div>
                        <div class="menu-title">User Profile</div>
                    </a>
                </li>
                <li>
                    <a href="timeline.html">
                        <div class="parent-icon"><i class="material-icons-outlined">join_right</i>
                        </div>
                        <div class="menu-title">Timeline</div>
                    </a>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="material-icons-outlined">report_problem</i>
                        </div>
                        <div class="menu-title">Pages</div>
                    </a>
                    <ul>
                        <li><a href="pages-error-404.html" target="_blank"><i class="material-icons-outlined">arrow_right</i>404
                                Error</a>
                        </li>
                        <li><a href="pages-error-505.html" target="_blank"><i class="material-icons-outlined">arrow_right</i>505
                                Error</a>
                        </li>
                        <li><a href="pages-coming-soon.html" target="_blank"><i
                                    class="material-icons-outlined">arrow_right</i>Coming Soon</a>
                        </li>
                        <li><a href="pages-starter-page.html" target="_blank"><i
                                    class="material-icons-outlined">arrow_right</i>Blank Page</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="faq.html">
                        <div class="parent-icon"><i class="material-icons-outlined">help_outline</i>
                        </div>
                        <div class="menu-title">FAQ</div>
                    </a>
                </li>
                <li>
                    <a href="pricing-table.html">
                        <div class="parent-icon"><i class="material-icons-outlined">sports_football</i>
                        </div>
                        <div class="menu-title">Pricing</div>
                    </a>
                </li>
                <li class="menu-label">Charts & Maps</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="material-icons-outlined">fitbit</i>
                        </div>
                        <div class="menu-title">Charts</div>
                    </a>
                    <ul>
                        <li><a href="charts-apex-chart.html"><i class="material-icons-outlined">arrow_right</i>Apex</a>
                        </li>
                        <li><a href="charts-chartjs.html"><i class="material-icons-outlined">arrow_right</i>Chartjs</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="material-icons-outlined">sports_football</i>
                        </div>
                        <div class="menu-title">Maps</div>
                    </a>
                    <ul>
                        <li><a href="map-google-maps.html"><i class="material-icons-outlined">arrow_right</i>Google Maps</a>
                        </li>
                        <li><a href="map-vector-maps.html"><i class="material-icons-outlined">arrow_right</i>Vector Maps</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-label">Others</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="material-icons-outlined">face_5</i>
                        </div>
                        <div class="menu-title">Menu Levels</div>
                    </a>
                    <ul>
                        <li><a class="has-arrow" href="javascript:;"><i class="material-icons-outlined">arrow_right</i>Level
                                One</a>
                            <ul>
                                <li><a class="has-arrow" href="javascript:;"><i class="material-icons-outlined">arrow_right</i>Level
                                        Two</a>
                                    <ul>
                                        <li><a href="javascript:;"><i class="material-icons-outlined">arrow_right</i>Level Three</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascrpt:;">
                        <div class="parent-icon"><i class="material-icons-outlined">description</i>
                        </div>
                        <div class="menu-title">Documentation</div>
                    </a>
                </li>
                <li>
                    <a href="javascrpt:;">
                        <div class="parent-icon"><i class="material-icons-outlined">support</i>
                        </div>
                        <div class="menu-title">Support</div>
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


</body>

</html>