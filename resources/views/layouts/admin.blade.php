<!doctype html>
<html class="no-js " lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title>Tableau de bord</title>
    <link rel="icon" href="{{asset('admin/favicon.ico')}}" type="image/x-icon"> <!-- Favicon-->
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/morrisjs/morris.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css')}}"/>
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/color_skins.css')}}">
</head>
<body class="theme-black">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img src="{{asset('admin/assets/images/logo.svg')}}" width="48" height="48" alt="Alpino"></div>
        <p>Please wait...</p>
    </div>
</div>
<div class="overlay_menu">
    <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-close"></i></button>
    <div class="container">
        <div class="row clearfix">
            <div class="card">
                <div class="body">
                    <div class="input-group m-b-0">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-search"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="card links">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h6>App</h6>
                            <ul class="list-unstyled">
                                <li><a href="mail-inbox.html">Inbox</a></li>
                                <li><a href="chat.html">Chat</a></li>
                                <li><a href="events.html">Calendar</a></li>
                                <li><a href="file-dashboard.html">File Manager</a></li>
                                <li><a href="contact.html">Contact list</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h6>User Interface (UI)</h6>
                            <ul class="list-unstyled">
                                <li><a href="ui_kit.html">UI KIT</a></li>
                                <li><a href="tabs.html">Tabs</a></li>
                                <li><a href="range-sliders.html">Range Sliders</a></li>
                                <li><a href="modals.html">Modals</a></li>
                                <li><a href="alerts.html">Alerts</a></li>
                                <li><a href="dialogs.html">Dialogs</a></li>
                                <li><a href="collapse.html">Collapse</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h6>Sample Pages</h6>
                            <ul class="list-unstyled">
                                <li><a href="image-gallery.html">Image Gallery</a></li>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="timeline.html">Timeline</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="invoices.html">Invoices</a></li>
                                <li><a href="faqs.html">FAQs</a></li>
                                <li><a href="search-results.html">Search Results</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h6>About</h6>
                            <ul class="list-unstyled">
                                <li><a href="http://thememakker.com/about/" target="_blank">About</a></li>
                                <li><a href="http://thememakker.com/contact/" target="_blank">Contact Us</a></li>
                                <li><a href="http://thememakker.com/admin-templates/" target="_blank">Admin Templates</a></li>
                                <li><a href="http://thememakker.com/services/" target="_blank">Services</a></li>
                                <li><a href="http://thememakker.com/portfolio/" target="_blank">Portfolio</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="social">
                    <a class="icon" href="https://www.facebook.com/thememakkerteam" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                    <a class="icon" href="https://www.behance.net/thememakker" target="_blank"><i class="zmdi zmdi-behance"></i></a>
                    <a class="icon" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                    <a class="icon" href="javascript:void(0);"><i class="zmdi zmdi-linkedin"></i></a>
                    <p><br> Developed by <a href="http://ikaedigital.com/" target="_blank">Ikae Digital</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="overlay"></div><!-- Overlay For Sidebars -->

<!-- Left Sidebar -->
<aside id="minileftbar" class="minileftbar">
    <ul class="menu_list">
        <li>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('admin/assets/images/logo.svg')}}" alt="Alpino"></a>
        </li>
        <li><a href="javascript:void(0);" class="btn_overlay hidden-sm-down"><i class="zmdi zmdi-search"></i></a></li>
        <li><a href="javascript:void(0);" class="menu-sm"><i class="zmdi zmdi-swap"></i></a></li>
        <li class="menuapp-btn"><a href="javascript:void(0);"><i class="zmdi zmdi-apps"></i></a></li>
        <li class="notifications badgebit">
            <a href="javascript:void(0);">
                <i class="zmdi zmdi-notifications"></i>
                <div class="notify">
                    <span class="heartbit"></span>
                    <span class="point"></span>
                </div>
            </a>
        </li>
        <li class="task badgebit">
            <a href="javascript:void(0);">
                <i class="zmdi zmdi-flag"></i>
                <div class="notify">
                    <span class="heartbit"></span>
                    <span class="point"></span>
                </div>
            </a>
        </li>
        <li><a href="#" title="Events"><i class="zmdi zmdi-calendar"></i></a></li>
        <li><a href="#" title="Inbox"><i class="zmdi zmdi-email"></i></a></li>
        <li><a href="#" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a></li>
        <li><a href="#"><i class="zmdi zmdi-comments"></i></a></li>
        <li><a href="javascript:void(0);" class="fullscreen" data-provide="fullscreen"><i class="zmdi zmdi-fullscreen"></i></a></li>
        <li class="power">
            <a href="javascript:void(0);" class="js-right-sidebar"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a>
            <a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
               class="mega-menu">
                <i class="zmdi zmdi-power"></i>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</aside>

<aside class="right_menu">
    <div class="menu-app">
        <div class="slim_scroll">
            <div class="card">
                <div class="header">
                    <h2><strong>App</strong> Menu</h2>
                </div>
                <div class="body">
                    <ul class="list-unstyled menu">
                        <li><a href="events.html"><i class="zmdi zmdi-calendar-note"></i><span>Calendar</span></a></li>
                        <li><a href="file-dashboard.html"><i class="zmdi zmdi-file-text"></i><span>File Manager</span></a></li>
                        <li><a href="blog-dashboard.html"><i class="zmdi zmdi-blogger"></i><span>Blog</span></a></li>
                        <li><a href="javascript:void(0)"><i class="zmdi zmdi-arrows"></i><span>Notes</span></a></li>
                        <li><a href="javascript:void(0)"><i class="zmdi zmdi-view-column"></i><span>Taskboard</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="notif-menu">
        <div class="slim_scroll">
            <div class="card">
                <div class="header">
                    <h2><strong>Messages</strong></h2>
                </div>
                <div class="body">
                    <ul class="messages list-unstyled">
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object rounded-circle" src="{{asset('admin/assets/images/xs/avatar1.jpg')}}" alt="">
                                    <div class="media-body">
                                        <span class="name">Alexander <small class="time">35min ago</small></span>
                                        <p class="message">New tasks needs to be done</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object rounded-circle" src="{{asset('admin/assets/images/xs/avatar2.jpg')}}" alt="">
                                    <div class="media-body">
                                        <span class="name">Grayson <small class="time">1hr ago</small></span>
                                        <p class="message">New tasks needs to be done</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object rounded-circle" src="{{asset('admin   /assets/images/xs/avatar3.jpg')}}" alt="">
                                    <div class="media-body">
                                        <span class="name">Sophia <small class="time">31min ago</small></span>
                                        <p class="message">New tasks needs to be done</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="header">
                    <h2><strong>Notifications</strong></h2>
                </div>
                <div class="body">
                    <ul class="notification list-unstyled">
                        <li>
                            <i class="zmdi zmdi-balance-wallet text-success"></i>
                            <strong>+$30 New sale</strong>
                            <p><a href="javascript:void(0)">Admin Template</a></p>
                            <small class="text-muted">7 min ago</small>
                        </li>
                        <li>
                            <i class="zmdi zmdi-edit text-info"></i>
                            <strong>You Edited file</strong>
                            <p><a href="javascript:void(0)">Docs.doc</a></p>
                            <small class="text-muted">15 min ago</small>
                        </li>
                        <li>
                            <i class="zmdi zmdi-delete text-danger"></i>
                            <strong>Project removed</strong>
                            <p><a href="javascript:void(0)">AdminX BS4</a></p>
                            <small class="text-muted">1 hours ago</small>
                        </li>
                        <li>
                            <i class="zmdi zmdi-account text-success"></i>
                            <strong>New user</strong>
                            <p><a href="javascript:void(0)">UI Designer</a></p>
                            <small class="text-muted">1 hours ago</small>
                        </li>
                        <li>
                            <i class="zmdi zmdi-flag text-warning"></i>
                            <strong>Alpino v1.0.0 is available</strong>
                            <p><a href="javascript:void(0)">Update now</a></p>
                            <small class="text-muted">5 hours ago</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="task-menu">
        <div class="slim_scroll">
            <div class="card tasks">
                <div class="header">
                    <h2><strong>Project</strong> Status</h2>
                </div>
                <div class="body m-b-10">
                    <a href="javascript:void(0);">
                        <span class="text-muted">Project Name 1 <span class="float-right">29%</span></span>
                        <div class="progress">
                            <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%;"></div>
                        </div>
                        <ul class="list-unstyled team-info">
                            <li class="m-r-15"><small class="text-muted">Team</small></li>
                            <li><img src="{{asset('admin/assets/images/xs/avatar2.jpg')}}" alt="Avatar"></li>
                            <li><img src="{{asset('admin/assets/images/xs/avatar3.jpg')}}" alt="Avatar"></li>
                            <li><img src="{{asset('admin/assets/images/xs/avatar4.jpg')}}" alt="Avatar"></li>
                        </ul>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="leftsidebar" class="sidebar">
        <div class="menu">
            <ul class="list">
                <li>
                    <div class="user-info m-b-20">
                        <div class="image">
                            <a href="#"><img src="{{asset('admin/assets/images/profile_av.jpg')}}" alt="User"></a>
                        </div>
                        <div class="detail">
                            <h6>Admin</h6>
                            <p class="m-b-0">admin@gmail.com</p>
                            <a href="javascript:void(0);" title="" class=" waves-effect waves-block"><i class="zmdi zmdi-facebook-box"></i></a>
                            <a href="javascript:void(0);" title="" class=" waves-effect waves-block"><i class="zmdi zmdi-linkedin-box"></i></a>
                            <a href="javascript:void(0);" title="" class=" waves-effect waves-block"><i class="zmdi zmdi-instagram"></i></a>
                            <a href="javascript:void(0);" title="" class=" waves-effect waves-block"><i class="zmdi zmdi-twitter-box"></i></a>
                        </div>
                    </div>
                </li>
                <li class="header">MAIN</li>
                <li class="active open"> <a href="{{route('home')}}"><i class="zmdi zmdi-home"></i><span>Tableau de bord</span></a></li>
                <li><a href="{{route('admin.websites')}}" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>Sites Internet</span> <span class="badge badge-success float-right"></span></a>

                </li>
            </ul>
        </div>
    </div>
</aside>
<!-- Main Content -->
<section class="content home">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <h2>Tableau de bord</h2>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="input-group m-b-0">
                        <input type="text" class="form-control" placeholder="Chercher...">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-search"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
@yield('content')
    </div>
</section>
<!-- Jquery Core Js -->
<script src="{{asset('admin/assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
<script src="{{asset('admin/assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="{{asset('admin/assets/bundles/knob.bundle.js')}}"></script> <!-- Jquery Knob-->
<script src="{{asset('admin/assets/bundles/jvectormap.bundle.js')}}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{asset('admin/assets/bundles/morrisscripts.bundle.js')}}"></script> <!-- Morris Plugin Js -->
<script src="{{asset('admin/assets/bundles/sparkline.bundle.js')}}"></script> <!-- sparkline Plugin Js -->
<script src="{{asset('admin/assets/bundles/doughnut.bundle.js')}}"></script>

<script src="{{asset('admin/assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('admin/assets/js/pages/index.js')}}"></script>
</body>
</html>