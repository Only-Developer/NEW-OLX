<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">

    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MartPlace - Complete Online Multipurpose Marketplace HTML Template">
    <meta name="keywords" content="marketplace, easy digital download, digital product, digital, html5">


    <title>0Lx</title>

    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('User/css/plugins.min.css')}}">
    <link rel="stylesheet" href="{{asset('User/style.css')}}">
    <!-- endinject -->

    <!-- Favicon -->
    <link rel="icon" type="{{asset('User/images/png')}}" sizes="16x16" href="User/images/23_OLX-512.png">
</head>

<body class="preload home1 mutlti-vendor">

    <!-- ================================
    START MENU AREA
================================= -->
    <!-- start menu-area -->
    <div class="menu-area">
        <!-- start .top-menu-area -->
        <div class="top-menu-area">
            <!-- start .container -->
            <div class="container-fluid">
                <!-- start .row -->
                <div class="row">
                    <!-- start .col-md-3 -->
                    <div class="col-lg-1 col-md-1 col-2">
                        <div class="logo">
                            <a href="index.html">
                                <img src=" {{asset('User/images/23_OLX-512.png')}}" alt="logo image" class=""
                                    style="margin-left: 20px; margin-bottom: 10px;">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-2">
                        <div class="field-wrapper">
                            <input class="relative-field rounded" type="text" placeholder="Pakistan">
                            <button class="btn btn--round" style="padding: 0 15px; background-color: black;"
                                type="submit">Search</button>
                        </div>
                    </div>
                    <!-- end /.col-md-3 -->
                    <div class="col-lg-4 col-md-4 col-4">
                        <div class="field-wrapper">
                            <input class="relative-field rounded" type="text" placeholder="Search your products">
                            <button class="btn btn--round" type="submit"
                                style="background-color: black;">Search</button>
                        </div>
                    </div>
                    <!-- start .col-md-5 -->
                    <div class="col-lg-5 col-md-5 col-5 " style="margin-top: 10px;">
                        <!-- start .author-area -->
                        <div class="author-area">

                            <!-- <a href="login.html" class="author-area__seller-btn inline"  style="background-color: black;">LogIn</a> -->
                            <button type="button" class="author-area__seller-btn inline" data-toggle="modal"
                                data-target="#loginModal" style="background-color: black; font-weight: bold;">
                                Login
                            </button>
                            <div class="modal fade" id="loginModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content ">
                                        <div class="modal-header border-bottom-0 p-0">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body p-0">
                                            <div class="row">
                                                <div class="col-md-12 col-12">
                                                    <div class="form-title text-center">
                                                        <h4 class="py-1 font-weight-bold">LogIn</h4>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row p-1">
                                                <div class="col-md-12 col-sm-12">
                                                    <a href="contact.html"
                                                        class="btn btn-md btn-block omb_btn-google border border-dark">
                                                        <span class="hidden-xs">Continue with Number</span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="row p-1">
                                                <div class="col-md-12 col-sm-12">
                                                    <a href="#"
                                                        class="btn btn-md btn-block omb_btn-facebook border border-dark">
                                                        <i class="fa fa-facebook"></i>
                                                        <span class="hidden-xx">Facebook</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row p-1">
                                                <div class="col-md-12 col-sm-12">
                                                    <a href="#"
                                                        class="btn btn-md btn-block omb_btn-twitter border border-dark">
                                                        <i class="fa fa-twitter"></i>
                                                        <span class="hidden-xx">Twitter</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="row p-1">
                                                <div class="col-md-12 col-sm-12">
                                                    <a href="#"
                                                        class="btn btn-md btn-block omb_btn-google border border-dark">
                                                        <i class="fa fa-google-plus"></i>
                                                        <span class="hidden-xx">Google+</span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="row p-1">
                                                <div class="col-md-12 col-sm-12">
                                                    <a href="login.html"
                                                        class="btn btn-md btn-block omb_btn-google border border-dark">
                                                        <span class="hidden-xs">Continue with Email</span>
                                                    </a>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="signup.html" class="author-area__seller-btn inline"
                                style="background-color: black;">+ Seller</a>

                            <div class="author__notification_area">
                                <ul>
                                    <li class="has_dropdown">
                                        <div class="icon_wrap">
                                            <span class="lnr lnr-alarm"></span>
                                            <span class="notification_count noti">25</span>
                                        </div>

                                        <div class="dropdowns notification--dropdown">

                                            <div class="dropdown_module_header">
                                                <h4>My Notifications</h4>
                                                <a href="notification.html">View All</a>
                                            </div>

                                            <div class="notifications_module">
                                                <div class="notification">
                                                    <div class="notification__info">
                                                        <div class="info_avatar">
                                                            <img src="{{asset('User/images/notification_head.png')}}" alt="">
                                                        </div>
                                                        <div class="info">
                                                            <p>
                                                                <span>Anderson</span> added to Favourite
                                                                <a href="#">Mccarther Coffee Shop</a>
                                                            </p>
                                                            <p class="time">Just now</p>
                                                        </div>
                                                    </div>
                                                    <!-- end /.notifications -->

                                                    <div class="notification__icons ">
                                                        <span class="lnr lnr-heart loved noti_icon"></span>
                                                    </div>
                                                    <!-- end /.notifications -->
                                                </div>
                                                <!-- end /.notifications -->

                                                <div class="notification">
                                                    <div class="notification__info">
                                                        <div class="info_avatar">
                                                            <img src="{{asset('User/images/notification_head2.png')}}" alt="">
                                                        </div>
                                                        <div class="info">
                                                            <p>
                                                                <span>Michael</span> commented on
                                                                <a href="#">MartPlace Extension Bundle</a>
                                                            </p>
                                                            <p class="time">Just now</p>
                                                        </div>
                                                    </div>
                                                    <!-- end /.notifications -->

                                                    <div class="notification__icons ">
                                                        <span class="lnr lnr-bubble commented noti_icon"></span>
                                                    </div>
                                                    <!-- end /.notifications -->
                                                </div>
                                                <!-- end /.notifications -->

                                                <div class="notification">
                                                    <div class="notification__info">
                                                        <div class="info_avatar">
                                                            <img src="{{asset('User/images/notification_head3.png')}}" alt="">
                                                        </div>
                                                        <div class="info">
                                                            <p>
                                                                <span>Khamoka </span>purchased
                                                                <a href="#"> Visibility Manager Subscriptions</a>
                                                            </p>
                                                            <p class="time">Just now</p>
                                                        </div>
                                                    </div>
                                                    <!-- end /.notifications -->

                                                    <div class="notification__icons ">
                                                        <span class="lnr lnr-cart purchased noti_icon"></span>
                                                    </div>
                                                    <!-- end /.notifications -->
                                                </div>
                                                <!-- end /.notifications -->

                                                <div class="notification">
                                                    <div class="notification__info">
                                                        <div class="info_avatar">
                                                            <img src="{{asset('User/images/notification_head4.png')}}" alt="">
                                                        </div>
                                                        <div class="info">
                                                            <p>
                                                                <span>Anderson</span> added to Favourite
                                                                <a href="#">Mccarther Coffee Shop</a>
                                                            </p>
                                                            <p class="time">Just now</p>
                                                        </div>
                                                    </div>
                                                    <!-- end /.notifications -->

                                                    <div class="notification__icons ">
                                                        <span class="lnr lnr-star reviewed noti_icon"></span>
                                                    </div>
                                                    <!-- end /.notifications -->
                                                </div>
                                                <!-- end /.notifications -->
                                            </div>
                                            <!-- end /.dropdown -->
                                        </div>
                                    </li>

                                    <li class="has_dropdown">
                                        <div class="icon_wrap">
                                            <span class="lnr lnr-envelope"></span>
                                            <span class="notification_count msg">6</span>
                                        </div>

                                        <div class="dropdowns messaging--dropdown">
                                            <div class="dropdown_module_header">
                                                <h4>My Messages</h4>
                                                <a href="message.html">View All</a>
                                            </div>

                                            <div class="messages">
                                                <a href="message.html" class="message recent">
                                                    <div class="message__actions_avatar">
                                                        <div class="avatar">
                                                            <img src="{{asset('User/images/notification_head4.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <!-- end /.actions -->

                                                    <div class="message_data">
                                                        <div class="name_time">
                                                            <div class="name">
                                                                <p>NukeThemes</p>
                                                                <span class="lnr lnr-envelope"></span>
                                                            </div>

                                                            <span class="time">Just now</span>
                                                            <p>Hello John Smith! Nunc placerat mi ...</p>
                                                        </div>
                                                    </div>
                                                    <!-- end /.message_data -->
                                                </a>
                                                <!-- end /.message -->

                                                <a href="message.html" class="message recent">
                                                    <div class="message__actions_avatar">
                                                        <div class="avatar">
                                                            <img src="{{asset('User/images/notification_head5.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <!-- end /.actions -->

                                                    <div class="message_data">
                                                        <div class="name_time">
                                                            <div class="name">
                                                                <p>Crazy Coder</p>
                                                                <span class="lnr lnr-envelope"></span>
                                                            </div>

                                                            <span class="time">Just now</span>
                                                            <p>Hi! Nunc placerat mi id nisi interum ...</p>
                                                        </div>
                                                    </div>
                                                    <!-- end /.message_data -->
                                                </a>
                                                <!-- end /.message -->

                                                <a href="message.html" class="message">
                                                    <div class="message__actions_avatar">
                                                        <div class="avatar">
                                                            <img src="{{asset('User/images/notification_head6.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <!-- end /.actions -->

                                                    <div class="message_data">
                                                        <div class="name_time">
                                                            <div class="name">
                                                                <p>Hybrid Insane</p>
                                                            </div>

                                                            <span class="time">Just now</span>
                                                            <p>Hi! Nunc placerat mi id nisi interum ...</p>
                                                        </div>
                                                    </div>
                                                    <!-- end /.message_data -->
                                                </a>
                                                <!-- end /.message -->

                                                <a href="message.html" class="message">
                                                    <div class="message__actions_avatar">
                                                        <div class="avatar">
                                                            <img src="{{asset('User/images/notification_head3.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <!-- end /.actions -->

                                                    <div class="message_data">
                                                        <div class="name_time">
                                                            <div class="name">
                                                                <p>ThemeXylum</p>
                                                            </div>

                                                            <span class="time">Just now</span>
                                                            <p>Hi! Nunc placerat mi id nisi interum ...</p>
                                                        </div>
                                                    </div>
                                                    <!-- end /.message_data -->
                                                </a>
                                                <!-- end /.message -->

                                                <a href="message.html" class="message">
                                                    <div class="message__actions_avatar">
                                                        <div class="avatar">
                                                            <img src="{{asset('User/images/notification_head4.png')}}" alt="">
                                                        </div>
                                                    </div>
                                                    <!-- end /.actions -->

                                                    <div class="message_data">
                                                        <div class="name_time">
                                                            <div class="name">
                                                                <p>NukeThemes</p>
                                                                <span class="lnr lnr-envelope"></span>
                                                            </div>

                                                            <span class="time">Just now</span>
                                                            <p>Hello John Smith! Nunc placerat mi ...</p>
                                                        </div>
                                                    </div>
                                                    <!-- end /.message_data -->
                                                </a>
                                                <!-- end /.message -->
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--start .author__notification_area -->

                            <!--start .author-author__info-->
                            <div class="author-author__info inline has_dropdown">
                                <div class="author__avatar">
                                    <img src="User/images/usr_avatar.png" alt="user avatar">

                                </div>
                                <div class="autor__info">
                                    <p class="name">
                                        Qasim Ali
                                    </p>
                                    <p class="ammount">$20.45</p>
                                </div>

                                <div class="dropdowns dropdown--author">
                                    <ul>
                                        <li>
                                            <a href="author.html">
                                                <span class="lnr lnr-user"></span>Profile</a>
                                        </li>
                                        <li>
                                            <a href="dashboard-setting.html">
                                                <span class="lnr lnr-cog"></span> Setting</a>
                                        </li>

                                        <li>
                                            <a href="dashboard-upload.html">
                                                <span class="lnr lnr-upload"></span>Upload Item</a>
                                        </li>


                                        <li>
                                            <a href="#">
                                                <span class="lnr lnr-exit"></span>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--end /.author-author__info-->
                        </div>
                        <!-- end .author-area -->

                        <!-- author area restructured for mobile -->
                        <div class="mobile_content ">
                            <span class="lnr lnr-user menu_icon"></span>

                            <!-- offcanvas menu -->
                            <div class="offcanvas-menu closed">
                                <span class="lnr lnr-cross close_menu"></span>
                                <div class="author-author__info">
                                    <div class="author__avatar v_middle">
                                        <img src="{{asset('User/images/usr_avatar.png')}}" alt="user avatar">
                                    </div>
                                    <div class="autor__info v_middle">
                                        <p class="name">
                                            Jhon Doe
                                        </p>
                                        <p class="ammount">$20.45</p>
                                    </div>
                                </div>
                                <!--end /.author-author__info-->

                                <div class="author__notification_area">
                                    <ul>
                                        <li>
                                            <a href="notification.html">
                                                <div class="icon_wrap">
                                                    <span class="lnr lnr-alarm"></span>
                                                    <span class="notification_count noti">25</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="message.html">
                                                <div class="icon_wrap">
                                                    <span class="lnr lnr-envelope"></span>
                                                    <span class="notification_count msg">6</span>
                                                </div>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="cart.html">
                                                <div class="icon_wrap">
                                                    <span class="lnr lnr-cart"></span>
                                                    <span class="notification_count purch">2</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                       

                                <div class="text-center">
                                    <a href="signup.html" class="author-area__seller-btn inline">Become a Seller</a>
                                </div>
                            </div>
                        </div>
                        <!-- end /.mobile_content -->
                    </div>
                    <!-- end /.col-md-5 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end  -->

        <!-- start .mainmenu_area -->
        <div class="mainmenu">
            <!-- start .container -->
            <div class="container">
                <!-- start .row-->
                <div class="row">
                    <!-- start .col-md-12 -->
                    <div class="col-md-12 col-12" style="box-sizing: initial; margin-left: -100px;">
                        <div class="navbar-header">
                            <!-- start mainmenu__search -->

                            <!-- start mainmenu__search -->
                        </div>

                        <nav class="navbar navbar-expand-md navbar-light mainmenu__menu">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>