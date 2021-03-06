<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <link rel="shortcut icon" href="favicon.ico">
    <base href="<?php echo base_url();?>">
    <title>{{ template.title }}</title>
    <?php Asset::css('font-awesome.min.css','','header');?>
    <?php Asset::css('simple-line-icons.min.css','','header');?>
    <?php Asset::css('simple-line-icons.min.css','','header');?>
    <?php Asset::css('bootstrap.min.css','','header');?>
    <?php Asset::css('uniform.default.css','','header');?>
    <?php Asset::css('components-rounded.css','','header');?>
    <?php Asset::css('plugins.css','','header');?>
    <?php Asset::css('layout.css','','header');?>
    <?php Asset::css('theme-default.css','','header');?>
    <?php Asset::css('custom.css','','header');?>
    <?php echo Asset::render('header') ?>
    {{ template.metadata }}
</head>
<body>
<!-- BEGIN HEADER -->
<div class="page-header">
    <!-- BEGIN HEADER TOP -->
    <div class="page-header-top">
        <div class="container">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href="index.html"><img src="<?php echo theme_image('logo-default.png'); ?>" alt="logo" class="logo-default"></a>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler"></a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                    <li class="dropdown dropdown-extended dropdown-dark dropdown-notification" id="header_notification_bar">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <i class="icon-bell"></i>
                            <span class="badge badge-default">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="external">
                                <h3>You have <strong>12 pending</strong> tasks</h3>
                                <a href="javascript:;">view all</a>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">just now</span>
										<span class="details">
										<span class="label label-sm label-icon label-success">
										<i class="fa fa-plus"></i>
										</span>
										New user registered. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">3 mins</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										Server #12 overloaded. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">10 mins</span>
										<span class="details">
										<span class="label label-sm label-icon label-warning">
										<i class="fa fa-bell-o"></i>
										</span>
										Server #2 not responding. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">14 hrs</span>
										<span class="details">
										<span class="label label-sm label-icon label-info">
										<i class="fa fa-bullhorn"></i>
										</span>
										Application error. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">2 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										Database overloaded 68%. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">3 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										A user IP blocked. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">4 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-warning">
										<i class="fa fa-bell-o"></i>
										</span>
										Storage Server #4 not responding dfdfdfd. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">5 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-info">
										<i class="fa fa-bullhorn"></i>
										</span>
										System Error. </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <span class="time">9 days</span>
										<span class="details">
										<span class="label label-sm label-icon label-danger">
										<i class="fa fa-bolt"></i>
										</span>
										Storage server failed. </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- END NOTIFICATION DROPDOWN -->
                    <!-- BEGIN TODO DROPDOWN -->
                    <li class="dropdown dropdown-extended dropdown-dark dropdown-tasks" id="header_task_bar">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <i class="icon-calendar"></i>
                            <span class="badge badge-default">3</span>
                        </a>
                        <ul class="dropdown-menu extended tasks">
                            <li class="external">
                                <h3>You have <strong>12 pending</strong> tasks</h3>
                                <a href="javascript:;">view all</a>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                    <li>
                                        <a href="javascript:;">
										<span class="task">
										<span class="desc">New release v1.2 </span>
										<span class="percent">30%</span>
										</span>
										<span class="progress">
										<span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">40% Complete</span></span>
										</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
										<span class="task">
										<span class="desc">Application deployment</span>
										<span class="percent">65%</span>
										</span>
										<span class="progress">
										<span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">65% Complete</span></span>
										</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
										<span class="task">
										<span class="desc">Mobile app release</span>
										<span class="percent">98%</span>
										</span>
										<span class="progress">
										<span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">98% Complete</span></span>
										</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
										<span class="task">
										<span class="desc">Database migration</span>
										<span class="percent">10%</span>
										</span>
										<span class="progress">
										<span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">10% Complete</span></span>
										</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
										<span class="task">
										<span class="desc">Web server upgrade</span>
										<span class="percent">58%</span>
										</span>
										<span class="progress">
										<span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">58% Complete</span></span>
										</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
										<span class="task">
										<span class="desc">Mobile development</span>
										<span class="percent">85%</span>
										</span>
										<span class="progress">
										<span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">85% Complete</span></span>
										</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
										<span class="task">
										<span class="desc">New UI release</span>
										<span class="percent">38%</span>
										</span>
										<span class="progress progress-striped">
										<span style="width: 38%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">38% Complete</span></span>
										</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- END TODO DROPDOWN -->
                    <li class="droddown dropdown-separator">
                        <span class="separator"></span>
                    </li>
                    <!-- BEGIN INBOX DROPDOWN -->
                    <li class="dropdown dropdown-extended dropdown-dark dropdown-inbox" id="header_inbox_bar">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <span class="circle">3</span>
                            <span class="corner"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="external">
                                <h3>You have <strong>7 New</strong> Messages</h3>
                                <a href="javascript:;">view all</a>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                    <li>
                                        <a href="inbox.html?a=view">
										<span class="photo">
										<img src="<?php echo theme_image('avatar2.jpg'); ?>" class="img-circle" alt="">
										</span>
										<span class="subject">
										<span class="from">
										Lisa Wong </span>
										<span class="time">Just Now </span>
										</span>
										<span class="message">
										Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="inbox.html?a=view">
										<span class="photo">
										<img src="<?php echo theme_image('avatar3.jpg'); ?>" class="img-circle" alt="">
										</span>
										<span class="subject">
										<span class="from">
										Richard Doe </span>
										<span class="time">16 mins </span>
										</span>
										<span class="message">
										Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="inbox.html?a=view">
										<span class="photo">
										<img src="<?php echo theme_image('avatar1.jpg'); ?>" class="img-circle" alt="">
										</span>
										<span class="subject">
										<span class="from">
										Bob Nilson </span>
										<span class="time">2 hrs </span>
										</span>
										<span class="message">
										Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="inbox.html?a=view">
										<span class="photo">
										<img src="<?php echo theme_image('avatar2.jpg'); ?>" class="img-circle" alt="">
										</span>
										<span class="subject">
										<span class="from">
										Lisa Wong </span>
										<span class="time">40 mins </span>
										</span>
										<span class="message">
										Vivamus sed auctor 40% nibh congue nibh... </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="inbox.html?a=view">
										<span class="photo">
										<img src="<?php echo theme_image('avatar3.jpg'); ?>" class="img-circle" alt="">
										</span>
										<span class="subject">
										<span class="from">
										Richard Doe </span>
										<span class="time">46 mins </span>
										</span>
										<span class="message">
										Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- END INBOX DROPDOWN -->
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class="dropdown dropdown-user dropdown-dark">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img alt="" class="img-circle" src="<?php echo theme_image('avatar9.jpg'); ?>">
                            <span class="username username-hide-mobile">Nick</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="extra_profile.html">
                                    <i class="icon-user"></i> My Profile </a>
                            </li>
                            <li>
                                <a href="page_calendar.html">
                                    <i class="icon-calendar"></i> My Calendar </a>
                            </li>
                            <li>
                                <a href="inbox.html">
                                    <i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
								3 </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-rocket"></i> My Tasks <span class="badge badge-success">
								7 </span>
                                </a>
                            </li>
                            <li class="divider">
                            </li>
                            <li>
                                <a href="extra_lock.html">
                                    <i class="icon-lock"></i> Lock Screen </a>
                            </li>
                            <li>
                                <a href="login.html">
                                    <i class="icon-key"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class="dropdown dropdown-extended quick-sidebar-toggler">
                        <span class="sr-only">Toggle Quick Sidebar</span>
                        <i class="icon-logout"></i>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
    </div>
    <!-- END HEADER TOP -->
    <!-- BEGIN HEADER MENU -->
    <div class="page-header-menu">
        <div class="container">
            <!-- BEGIN HEADER SEARCH BOX -->
            <form class="search-form" action="extra_search.html" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="query">
					<span class="input-group-btn">
					<a href="javascript:;" class="btn submit"><i class="icon-magnifier"></i></a>
					</span>
                </div>
            </form>
            <!-- END HEADER SEARCH BOX -->
            <!-- BEGIN MEGA MENU -->
            <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
            <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
            <div class="hor-menu ">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html">Dashboard</a>
                    </li>
                    <li class="menu-dropdown mega-menu-dropdown ">
                        <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">
                            Features <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu" style="min-width: 710px">
                            <li>
                                <div class="mega-menu-content">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="mega-menu-submenu">
                                                <li>
                                                    <h3>eCommerce</h3>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_index.html" class="iconify">
                                                        <i class="icon-home"></i>
                                                        eCommerce </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_orders.html" class="iconify">
                                                        <i class="icon-basket"></i>
                                                        Manage Orders </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_orders_view.html" class="iconify">
                                                        <i class="icon-tag"></i>
                                                        Order View </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_products.html" class="iconify">
                                                        <i class="icon-handbag"></i>
                                                        Manage Products </a>
                                                </li>
                                                <li>
                                                    <a href="ecommerce_products_edit.html" class="iconify">
                                                        <i class="icon-pencil"></i>
                                                        Product Edit </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="mega-menu-submenu">
                                                <li>
                                                    <h3>Layouts</h3>
                                                </li>
                                                <li>
                                                    <a href="layout_fluid.html" class="iconify">
                                                        <i class="icon-cursor-move"></i>
                                                        Fluid Layout </a>
                                                </li>
                                                <li>
                                                    <a href="layout_mega_menu_fixed.html" class="iconify">
                                                        <i class="icon-pin"></i>
                                                        Fixed Mega Menu </a>
                                                </li>
                                                <li>
                                                    <a href="layout_top_bar_fixed.html" class="iconify">
                                                        <i class="icon-bar-chart"></i>
                                                        Fixed Top Bar </a>
                                                </li>
                                                <li>
                                                    <a href="layout_light_header.html" class="iconify">
                                                        <i class="icon-paper-plane"></i>
                                                        Light Header Dropdowns </a>
                                                </li>
                                                <li>
                                                    <a href="layout_blank_page.html" class="iconify">
                                                        <i class="icon-doc"></i>
                                                        Blank Page Layout </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="mega-menu-submenu">
                                                <li>
                                                    <h3>More Layouts</h3>
                                                </li>
                                                <li>
                                                    <a href="layout_click_dropdowns.html" class="iconify">
                                                        <i class="icon-speech"></i>
                                                        Click vs. Hover Dropdowns </a>
                                                </li>
                                                <li>
                                                    <a href="layout_fontawesome_icons.html" class="iconify">
                                                        <i class="icon-link"></i>
                                                        Layout with Fontawesome </a>
                                                </li>
                                                <li>
                                                    <a href="layout_glyphicons.html" class="iconify">
                                                        <i class="icon-settings"></i>
                                                        Layout with Glyphicon </a>
                                                </li>
                                                <li>
                                                    <a href="layout_language_bar.html" class="iconify">
                                                        <i class="icon-globe"></i>
                                                        Language Switch Bar </a>
                                                </li>
                                                <li>
                                                    <a href="layout_disabled_menu.html" class="iconify">
                                                        <i class=" icon-lock"></i>
                                                        Disabled Menu Links </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown mega-menu-dropdown mega-menu-full ">
                        <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">
                            UI Components <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="mega-menu-content">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <ul class="mega-menu-submenu">
                                                <li>
                                                    <h3>UI Components</h3>
                                                </li>
                                                <li>
                                                    <a href="ui_general.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        General </a>
                                                </li>
                                                <li>
                                                    <a href="ui_buttons.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Buttons </a>
                                                </li>
                                                <li>
                                                    <a href="ui_icons.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Font Icons </a>
                                                </li>
                                                <li>
                                                    <a href="ui_colors.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Flat UI Colors </a>
                                                </li>
                                                <li>
                                                    <a href="ui_typography.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Typography </a>
                                                </li>
                                                <li>
                                                    <a href="ui_tabs_accordions_navs.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Tabs, Accordions & Navs </a>
                                                </li>
                                                <li>
                                                    <a href="ui_tree.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Tree View </a>
                                                </li>
                                                <li>
                                                    <a href="ui_page_progress_style_1.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Page Progress Bar <span class="badge badge-roundless badge-warning">new</span></a>
                                                </li>
                                                <li>
                                                    <a href="ui_blockui.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Block UI </a>
                                                </li>
                                                <li>
                                                    <a href="ui_bootstrap_growl.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Bootstrap Growl Notifications <span class="badge badge-roundless badge-warning">new</span></a>
                                                </li>
                                                <li>
                                                    <a href="ui_notific8.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Notific8 Notifications </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="mega-menu-submenu">
                                                <li>
                                                    <h3>More UI Components</h3>
                                                </li>
                                                <li>
                                                    <a href="ui_toastr.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Toastr Notifications </a>
                                                </li>
                                                <li>
                                                    <a href="ui_alert_dialog_api.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Alerts & Dialogs API <span class="badge badge-roundless badge-danger">new</span></a>
                                                </li>
                                                <li>
                                                    <a href="ui_session_timeout.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Session Timeout </a>
                                                </li>
                                                <li>
                                                    <a href="ui_idle_timeout.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        User Idle Timeout </a>
                                                </li>
                                                <li>
                                                    <a href="ui_modals.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Modals </a>
                                                </li>
                                                <li>
                                                    <a href="ui_extended_modals.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Extended Modals </a>
                                                </li>
                                                <li>
                                                    <a href="ui_tiles.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Tiles </a>
                                                </li>
                                                <li>
                                                    <a href="ui_datepaginator.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Date Paginator </a>
                                                </li>
                                                <li>
                                                    <a href="ui_nestable.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Nestable List </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="mega-menu-submenu">
                                                <li>
                                                    <h3>Form Stuff</h3>
                                                </li>
                                                <li>
                                                    <a href="form_controls_md.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Material Design<br>
                                                        Form Controls </a>
                                                </li>
                                                <li>
                                                    <a href="form_controls.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Bootstrap<br>
                                                        Form Controls </a>
                                                </li>
                                                <li>
                                                    <a href="form_icheck.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        iCheck Controls </a>
                                                </li>
                                                <li>
                                                    <a href="form_layouts.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Form Layouts </a>
                                                </li>
                                                <li>
                                                    <a href="form_editable.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Form X-editable <span class="badge badge-roundless badge-success">new</span></a>
                                                </li>
                                                <li>
                                                    <a href="form_wizard.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Form Wizard </a>
                                                </li>
                                                <li>
                                                    <a href="form_validation.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Form Validation </a>
                                                </li>
                                                <li>
                                                    <a href="form_image_crop.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Image Cropping </a>
                                                </li>
                                                <li>
                                                    <a href="form_fileupload.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Multiple File Upload </a>
                                                </li>
                                                <li>
                                                    <a href="form_dropzone.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Dropzone File Upload </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="mega-menu-submenu">
                                                <li>
                                                    <h3>Form Components</h3>
                                                </li>
                                                <li>
                                                    <a href="components_pickers.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Date & Time Pickers </a>
                                                </li>
                                                <li>
                                                    <a href="components_context_menu.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Context Menu </a>
                                                </li>
                                                <li>
                                                    <a href="components_dropdowns.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Custom Dropdowns </a>
                                                </li>
                                                <li>
                                                    <a href="components_form_tools.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Form Widgets & Tools </a>
                                                </li>
                                                <li>
                                                    <a href="components_form_tools2.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Form Widgets & Tools 2 </a>
                                                </li>
                                                <li>
                                                    <a href="components_editors.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Markdown & WYSIWYG Editors </a>
                                                </li>
                                                <li>
                                                    <a href="components_ion_sliders.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Ion Range Sliders </a>
                                                </li>
                                                <li>
                                                    <a href="components_noui_sliders.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        NoUI Range Sliders </a>
                                                </li>
                                                <li>
                                                    <a href="components_jqueryui_sliders.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        jQuery UI Sliders </a>
                                                </li>
                                                <li>
                                                    <a href="components_knob_dials.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Knob Circle Dials </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown classic-menu-dropdown ">
                        <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;">
                            Extra <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-left">
                            <li class=" dropdown-submenu">
                                <a href=":;">
                                    <i class="icon-briefcase"></i>
                                    Data Tables </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="table_basic.html">
                                            Basic Datatables </a>
                                    </li>
                                    <li class=" ">
                                        <a href="table_tree.html">
                                            Tree Datatables </a>
                                    </li>
                                    <li class=" ">
                                        <a href="table_responsive.html">
                                            Responsive Datatables </a>
                                    </li>
                                    <li class=" ">
                                        <a href="table_managed.html">
                                            Managed Datatables </a>
                                    </li>
                                    <li class=" ">
                                        <a href="table_editable.html">
                                            Editable Datatables </a>
                                    </li>
                                    <li class=" ">
                                        <a href="table_advanced.html">
                                            Advanced Datatables </a>
                                    </li>
                                    <li class=" ">
                                        <a href="table_ajax.html">
                                            Ajax Datatables </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" dropdown-submenu">
                                <a href=":;">
                                    <i class="icon-wallet"></i>
                                    Portlets </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="portlet_general.html">
                                            General Portlets </a>
                                    </li>
                                    <li class=" ">
                                        <a href="portlet_general2.html">
                                            New Portlets #1 <span class="badge badge-roundless badge-danger">new</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="portlet_general3.html">
                                            New Portlets #2 <span class="badge badge-roundless badge-danger">new</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="portlet_ajax.html">
                                            Ajax Portlets </a>
                                    </li>
                                    <li class=" ">
                                        <a href="portlet_draggable.html">
                                            Draggable Portlets </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" dropdown-submenu">
                                <a href=":;">
                                    <i class="icon-bar-chart"></i>
                                    Charts </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="charts_amcharts.html">
                                            amChart </a>
                                    </li>
                                    <li class=" ">
                                        <a href="charts_flotcharts.html">
                                            Flotchart </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" dropdown-submenu">
                                <a href=":;">
                                    <i class="icon-pointer"></i>
                                    Maps </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="maps_google.html">
                                            Google Maps </a>
                                    </li>
                                    <li class=" ">
                                        <a href="maps_vector.html">
                                            Vector Maps </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" dropdown-submenu">
                                <a href=":;">
                                    <i class="icon-puzzle"></i>
                                    Multi Level </a>
                                <ul class="dropdown-menu">
                                    <li class=" ">
                                        <a href="javascript:;">
                                            <i class="icon-settings"></i>
                                            Item 1 </a>
                                    </li>
                                    <li class=" ">
                                        <a href="javascript:;">
                                            <i class="icon-user"></i>
                                            Item 2 </a>
                                    </li>
                                    <li class=" ">
                                        <a href="javascript:;">
                                            <i class="icon-globe"></i>
                                            Item 3 </a>
                                    </li>
                                    <li class=" dropdown-submenu">
                                        <a href="#">
                                            <i class="icon-folder"></i>
                                            Sub Items </a>
                                        <ul class="dropdown-menu">
                                            <li class=" ">
                                                <a href="javascript:;">
                                                    Item 1 </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;">
                                                    Item 2 </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;">
                                                    Item 3 </a>
                                            </li>
                                            <li class=" ">
                                                <a href="javascript:;">
                                                    Item 4 </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=" ">
                                        <a href="javascript:;">
                                            <i class="icon-share"></i>
                                            Item 4 </a>
                                    </li>
                                    <li class=" ">
                                        <a href="javascript:;">
                                            <i class="icon-bar-chart"></i>
                                            Item 5 </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown mega-menu-dropdown mega-menu-full ">
                        <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">
                            Pages <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="mega-menu-content">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <ul class="mega-menu-submenu">
                                                <li>
                                                    <h3>User Pages</h3>
                                                </li>
                                                <li>
                                                    <a href="page_timeline.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        New Timeline <span class="badge badge-warning">2</span></a>
                                                </li>
                                                <li>
                                                    <a href="extra_profile.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        New User Profile <span class="badge badge-success badge-roundless">new</span></a>
                                                </li>
                                                <li>
                                                    <a href="page_todo.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Todo & Tasks <span class="badge badge-danger">4</span></a>
                                                </li>
                                                <li>
                                                    <a href="inbox.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        User Inbox <span class="badge badge-success">4</span></a>
                                                </li>
                                                <li>
                                                    <a href="page_calendar.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        User Calendar <span class="badge badge-warning">14</span></a>
                                                </li>
                                                <li>
                                                    <a href="page_timeline_old.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Old Timeline <span class="badge badge-warning">2</span></a>
                                                </li>
                                                <li>
                                                    <a href="extra_profile_old.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Old User Profile </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="mega-menu-submenu">
                                                <li>
                                                    <h3>General Pages</h3>
                                                </li>
                                                <li>
                                                    <a href="extra_faq.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        FAQ Page </a>
                                                </li>
                                                <li>
                                                    <a href="page_portfolio.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Portfolio </a>
                                                </li>
                                                <li>
                                                    <a href="page_timeline.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Timeline <span class="badge badge-info">4</span></a>
                                                </li>
                                                <li>
                                                    <a href="page_coming_soon.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Coming Soon </a>
                                                </li>
                                                <li>
                                                    <a href="extra_invoice.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Invoice </a>
                                                </li>
                                                <li>
                                                    <a href="page_blog.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Blog </a>
                                                </li>
                                                <li>
                                                    <a href="page_blog_item.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Blog Post </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="mega-menu-submenu">
                                                <li>
                                                    <h3>Custom Pages</h3>
                                                </li>
                                                <li>
                                                    <a href="page_news.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        News <span class="badge badge-success">9</span></a>
                                                </li>
                                                <li>
                                                    <a href="page_news_item.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        News View </a>
                                                </li>
                                                <li>
                                                    <a href="page_about.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        About Us </a>
                                                </li>
                                                <li>
                                                    <a href="page_contact.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Contact Us </a>
                                                </li>
                                                <li>
                                                    <a href="extra_search.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Search Results </a>
                                                </li>
                                                <li>
                                                    <a href="extra_pricing_table.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Pricing Tables </a>
                                                </li>
                                                <li>
                                                    <a href="login.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Login Form 1 </a>
                                                </li>
                                                <li>
                                                    <a href="login_2.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Login Form 2 </a>
                                                </li>
                                                <li>
                                                    <a href="login_3.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Login Form 3 </a>
                                                </li>
                                                <li>
                                                    <a href="login_soft.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Login Form 4 </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="mega-menu-submenu">
                                                <li>
                                                    <h3>Miscellaneous</h3>
                                                </li>
                                                <li>
                                                    <a href="extra_lock.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Lock Screen 1 </a>
                                                </li>
                                                <li>
                                                    <a href="extra_lock2.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        Lock Screen 2 </a>
                                                </li>
                                                <li>
                                                    <a href="extra_404_option1.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        404 Page Option 1 </a>
                                                </li>
                                                <li>
                                                    <a href="extra_404_option2.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        404 Page Option 2 </a>
                                                </li>
                                                <li>
                                                    <a href="extra_404_option3.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        404 Page Option 3 </a>
                                                </li>
                                                <li>
                                                    <a href="extra_500_option1.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        500 Page Option 1 </a>
                                                </li>
                                                <li>
                                                    <a href="extra_500_option2.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        500 Page Option 2 </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown">
                        <a href="angularjs" target="_blank" class="tooltips" data-container="body" data-placement="bottom" data-html="true" data-original-title="AngularJS version demo">
                            AngularJS Version </a>
                    </li>
                </ul>
            </div>
            <!-- END MEGA MENU -->
        </div>
    </div>
    <!-- END HEADER MENU -->
</div>
<!-- END HEADER -->
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
    <!-- BEGIN PAGE HEAD -->
    <div class="page-head">
        <div class="container">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Dashboard <small>statistics & reports</small></h1>
            </div>
            <!-- END PAGE TITLE -->
        </div>
    </div>
    <!-- END PAGE HEAD -->
    <!-- BEGIN PAGE CONTENT -->
    <div class="page-content">
        <div class="container">
            <!-- BEGIN PAGE BREADCRUMB -->
            <ul class="page-breadcrumb breadcrumb">
                <li>
                    <a href="#">Home</a><i class="fa fa-circle"></i>
                </li>
                <li class="active">
                    Dashboard
                </li>
            </ul>
            <!-- END PAGE BREADCRUMB -->
            <!-- BEGIN PAGE CONTENT INNER -->

            <!-- END PAGE CONTENT INNER -->
        </div>
        {{ template.body }}

        <!-- BEGIN QUICK SIDEBAR -->
        <a href="javascript:;" class="page-quick-sidebar-toggler"><i class="icon-login"></i></a>
        <div class="page-quick-sidebar-wrapper">
            <div class="page-quick-sidebar">
                <div class="nav-justified">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active">
                            <a href="#quick_sidebar_tab_1" data-toggle="tab">
                                Users <span class="badge badge-danger">2</span>
                            </a>
                        </li>
                        <li>
                            <a href="#quick_sidebar_tab_2" data-toggle="tab">
                                Alerts <span class="badge badge-success">7</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                                More<i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li>
                                    <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                        <i class="icon-bell"></i> Alerts </a>
                                </li>
                                <li>
                                    <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                        <i class="icon-info"></i> Notifications </a>
                                </li>
                                <li>
                                    <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                        <i class="icon-speech"></i> Activities </a>
                                </li>
                                <li class="divider">
                                </li>
                                <li>
                                    <a href="#quick_sidebar_tab_3" data-toggle="tab">
                                        <i class="icon-settings"></i> Settings </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                            <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd" data-wrapper-class="page-quick-sidebar-list">
                                <h3 class="list-heading">Staff</h3>
                                <ul class="media-list list-items">
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-success">8</span>
                                        </div>
                                        <img class="media-object" src="<?php echo theme_image('avatar3.jpg'); ?>" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Bob Nilson</h4>
                                            <div class="media-heading-sub">
                                                Project Manager
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="media-object" src="<?php echo theme_image('avatar1.jpg'); ?>" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Nick Larson</h4>
                                            <div class="media-heading-sub">
                                                Art Director
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-danger">3</span>
                                        </div>
                                        <img class="media-object" src="<?php echo theme_image('avatar4.jpg'); ?>" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Deon Hubert</h4>
                                            <div class="media-heading-sub">
                                                CTO
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="media-object" src="<?php echo theme_image('avatar2.jpg'); ?>" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Ella Wong</h4>
                                            <div class="media-heading-sub">
                                                CEO
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <h3 class="list-heading">Customers</h3>
                                <ul class="media-list list-items">
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-warning">2</span>
                                        </div>
                                        <img class="media-object" src="<?php echo theme_image('avatar6.jpg'); ?>" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Lara Kunis</h4>
                                            <div class="media-heading-sub">
                                                CEO, Loop Inc
                                            </div>
                                            <div class="media-heading-small">
                                                Last seen 03:10 AM
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="label label-sm label-success">new</span>
                                        </div>
                                        <img class="media-object" src="<?php echo theme_image('avatar7.jpg'); ?>" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Ernie Kyllonen</h4>
                                            <div class="media-heading-sub">
                                                Project Manager,<br>
                                                SmartBizz PTL
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="media-object" src="<?php echo theme_image('avatar8.jpg'); ?>" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Lisa Stone</h4>
                                            <div class="media-heading-sub">
                                                CTO, Keort Inc
                                            </div>
                                            <div class="media-heading-small">
                                                Last seen 13:10 PM
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-success">7</span>
                                        </div>
                                        <img class="media-object" src="<?php echo theme_image('avatar9.jpg'); ?>" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Deon Portalatin</h4>
                                            <div class="media-heading-sub">
                                                CFO, H&D LTD
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="media-object" src="<?php echo theme_image('avatar10.jpg'); ?>" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Irina Savikova</h4>
                                            <div class="media-heading-sub">
                                                CEO, Tizda Motors Inc
                                            </div>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-status">
                                            <span class="badge badge-danger">4</span>
                                        </div>
                                        <img class="media-object" src="<?php echo theme_image('avatar11.jpg'); ?>" alt="...">
                                        <div class="media-body">
                                            <h4 class="media-heading">Maria Gomez</h4>
                                            <div class="media-heading-sub">
                                                Manager, Infomatic Inc
                                            </div>
                                            <div class="media-heading-small">
                                                Last seen 03:10 AM
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="page-quick-sidebar-item">
                                <div class="page-quick-sidebar-chat-user">
                                    <div class="page-quick-sidebar-nav">
                                        <a href="javascript:;" class="page-quick-sidebar-back-to-list"><i class="icon-arrow-left"></i>Back</a>
                                    </div>
                                    <div class="page-quick-sidebar-chat-user-messages">
                                        <div class="post out">
                                            <img class="avatar" alt="" src="<?php echo theme_image('avatar3.jpg'); ?>"/>
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:15</span>
												<span class="body">
												When could you send me the report ? </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="<?php echo theme_image('avatar2.jpg'); ?>"/>
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Ella Wong</a>
                                                <span class="datetime">20:15</span>
												<span class="body">
												Its almost done. I will be sending it shortly </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="<?php echo theme_image('avatar3.jpg'); ?>"/>
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:15</span>
												<span class="body">
												Alright. Thanks! :) </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="<?php echo theme_image('avatar2.jpg'); ?>"/>
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Ella Wong</a>
                                                <span class="datetime">20:16</span>
												<span class="body">
												You are most welcome. Sorry for the delay. </span>
                                            </div>
                                        </div>
                                        <div class="post out">
                                            <img class="avatar" alt="" src="<?php echo theme_image('avatar3.jpg'); ?>"/>
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Bob Nilson</a>
                                                <span class="datetime">20:17</span>
												<span class="body">
												No probs. Just take your time :) </span>
                                            </div>
                                        </div>
                                        <div class="post in">
                                            <img class="avatar" alt="" src="<?php echo theme_image('avatar2.jpg'); ?>"/>
                                            <div class="message">
                                                <span class="arrow"></span>
                                                <a href="javascript:;" class="name">Ella Wong</a>
                                                <span class="datetime">20:40</span>
												<span class="body">
												Alright. I just emailed it to you. </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="page-quick-sidebar-chat-user-form">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Type a message here...">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn blue"><i class="icon-paper-clip"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane page-quick-sidebar-alerts" id="quick_sidebar_tab_2">
                            <div class="page-quick-sidebar-alerts-list">
                                <h3 class="list-heading">General</h3>
                                <ul class="feeds list-items">
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        New order received with <span class="label label-sm label-danger">
														Reference Number: DR23923 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                30 mins
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        You have 5 pending membership that requires a quick review.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                24 mins
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-danger">
                                                        <i class="fa fa-bell-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        Web server hardware needs to be upgraded. <span class="label label-sm label-warning">
														Overdue </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                2 hours
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-default">
                                                            <i class="fa fa-briefcase"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            IPO Report for year 2013 has been released.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    20 mins
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <h3 class="list-heading">System</h3>
                                <ul class="feeds list-items">
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-info">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        New order received with <span class="label label-sm label-success">
														Reference Number: DR23923 </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                30 mins
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-success">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        You have 5 pending membership that requires a quick review.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                24 mins
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="col1">
                                            <div class="cont">
                                                <div class="cont-col1">
                                                    <div class="label label-sm label-warning">
                                                        <i class="fa fa-bell-o"></i>
                                                    </div>
                                                </div>
                                                <div class="cont-col2">
                                                    <div class="desc">
                                                        Web server hardware needs to be upgraded. <span class="label label-sm label-default ">
														Overdue </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col2">
                                            <div class="date">
                                                2 hours
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <div class="col1">
                                                <div class="cont">
                                                    <div class="cont-col1">
                                                        <div class="label label-sm label-info">
                                                            <i class="fa fa-briefcase"></i>
                                                        </div>
                                                    </div>
                                                    <div class="cont-col2">
                                                        <div class="desc">
                                                            IPO Report for year 2013 has been released.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col2">
                                                <div class="date">
                                                    20 mins
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                            <div class="page-quick-sidebar-settings-list">
                                <h3 class="list-heading">General Settings</h3>
                                <ul class="list-items borderless">
                                    <li>
                                        Enable Notifications <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                    </li>
                                    <li>
                                        Allow Tracking <input type="checkbox" class="make-switch" data-size="small" data-on-color="info" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                    </li>
                                    <li>
                                        Log Errors <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                    </li>
                                    <li>
                                        Auto Sumbit Issues <input type="checkbox" class="make-switch" data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                    </li>
                                    <li>
                                        Enable SMS Alerts <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="success" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                    </li>
                                </ul>
                                <h3 class="list-heading">System Settings</h3>
                                <ul class="list-items borderless">
                                    <li>
                                        Security Level
                                        <select class="form-control input-inline input-sm input-small">
                                            <option value="1">Normal</option>
                                            <option value="2" selected>Medium</option>
                                            <option value="e">High</option>
                                        </select>
                                    </li>
                                    <li>
                                        Failed Email Attempts <input class="form-control input-inline input-sm input-small" value="5"/>
                                    </li>
                                    <li>
                                        Secondary SMTP Port <input class="form-control input-inline input-sm input-small" value="3560"/>
                                    </li>
                                    <li>
                                        Notify On System Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="danger" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                    </li>
                                    <li>
                                        Notify On SMTP Error <input type="checkbox" class="make-switch" checked data-size="small" data-on-color="warning" data-on-text="ON" data-off-color="default" data-off-text="OFF">
                                    </li>
                                </ul>
                                <div class="inner-content">
                                    <button class="btn btn-success"><i class="icon-settings"></i> Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END QUICK SIDEBAR -->
    </div>
    <!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->
<!-- BEGIN PRE-FOOTER -->
<div class="page-prefooter">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                <h2>About</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam dolore.
                </p>
            </div>
            <div class="col-md-3 col-sm-6 col-xs12 footer-block">
                <h2>Subscribe Email</h2>
                <div class="subscribe-form">
                    <form action="javascript:;">
                        <div class="input-group">
                            <input type="text" placeholder="mail@email.com" class="form-control">
							<span class="input-group-btn">
							<button class="btn" type="submit">Submit</button>
							</span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                <h2>Follow Us On</h2>
                <ul class="social-icons">
                    <li>
                        <a href="javascript:;" data-original-title="rss" class="rss"></a>
                    </li>
                    <li>
                        <a href="javascript:;" data-original-title="facebook" class="facebook"></a>
                    </li>
                    <li>
                        <a href="javascript:;" data-original-title="twitter" class="twitter"></a>
                    </li>
                    <li>
                        <a href="javascript:;" data-original-title="googleplus" class="googleplus"></a>
                    </li>
                    <li>
                        <a href="javascript:;" data-original-title="linkedin" class="linkedin"></a>
                    </li>
                    <li>
                        <a href="javascript:;" data-original-title="youtube" class="youtube"></a>
                    </li>
                    <li>
                        <a href="javascript:;" data-original-title="vimeo" class="vimeo"></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 footer-block">
                <h2>Contacts</h2>
                <address class="margin-bottom-40">
                    Phone: 800 123 3456<br>
                    Email: <a href="mailto:info@metronic.com">info@metronic.com</a>
                </address>
            </div>
        </div>
    </div>
</div>
<!-- END PRE-FOOTER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="container">
        2014 &copy; Metronic by keenthemes. <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
    </div>
</div>
<div class="scroll-to-top">
    <i class="icon-arrow-up"></i>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<?php Asset::js('global/plugins/respond.min.js','','footer'); ?>
<?php Asset::js('global/plugins/excanvas.min.js','','footer'); ?>
<![endif]-->
<?php Asset::js('global/plugins/jquery.min.js','','footer'); ?>
<?php Asset::js('global/plugins/jquery-migrate.min.js','','footer'); ?>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<?php Asset::js('global/plugins/jquery-ui/jquery-ui.min.js','','footer'); ?>
<?php Asset::js('global/plugins/bootstrap/js/bootstrap.min.js','','footer'); ?>
<?php Asset::js('global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js','','footer'); ?>
<?php Asset::js('global/plugins/jquery-slimscroll/jquery.slimscroll.min.js','','footer'); ?>
<?php Asset::js('global/plugins/jquery.blockui.min.js','','footer'); ?>
<?php Asset::js('global/plugins/jquery.cokie.min.js','','footer'); ?>
<?php Asset::js('global/plugins/uniform/jquery.uniform.min.js','','footer'); ?>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<?php Asset::js('global/scripts/metronic.js','','footer'); ?>
<?php Asset::js('admin/layout3/scripts/layout.js','','footer'); ?>
<?php Asset::js('admin/layout2/scripts/quick-sidebar.js','','footer'); ?>
<?php Asset::js('admin/layout3/scripts/demo.js','','footer'); ?>
<?php Asset::js('admin/pages/scripts/index3.js','','footer'); ?>
<?php Asset::js('admin/pages/scripts/tasks.js','','footer'); ?>
<!-- END PAGE LEVEL SCRIPTS -->
<?php echo Asset::render('footer');?>
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core componets
        Layout.init(); // init layout
        Demo.init(); // init demo(theme settings page)
        QuickSidebar.init(); // init quick sidebar
        Index.init(); // init index page
        Tasks.initDashboardWidget(); // init tash dashboard widget
    });
</script>
<?php echo Asset::render('footer2');?>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>