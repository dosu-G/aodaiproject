<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>uAdmin - Professional, Responsive and Flat Admin Template</title>

        <meta name="description" content="uAdmin is a Professional, Responsive and Flat Admin Template created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="css/bootstrap.css">

        <!-- Related styles of various javascript plugins -->
        <link rel="stylesheet" href="css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="css/main.css">

        <!-- Load a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
        <script src="js/vendor/modernizr-respond.min.js"></script>
    </head>

    <!-- Add the class .fixed to <body> for a fixed layout on large resolutions (min: 1200px) -->
    <!-- <body class="fixed"> -->
    <body>
        <!-- Page Container -->
        <div id="page-container">
            <!-- Header -->
            <!-- Add the class .navbar-fixed-top or .navbar-fixed-bottom for a fixed header on top or bottom respectively -->
            <!-- <header class="navbar navbar-inverse navbar-fixed-top"> -->
            <!-- <header class="navbar navbar-inverse navbar-fixed-bottom"> -->
            <header class="navbar navbar-inverse">
                <!-- Mobile Navigation, Shows up  on smaller screens -->
                <ul class="navbar-nav-custom pull-right hidden-md hidden-lg">
                    <li class="divider-vertical"></li>
                    <li>
                        <!-- It is set to open and close the main navigation on smaller screens. The class .navbar-main-collapse was added to aside#page-sidebar -->
                        <a href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-main-collapse">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                </ul>
                <!-- END Mobile Navigation -->

                <!-- Logo -->
                <a href="index.html" class="navbar-brand"><img src="img/template/logo.png" alt="logo"></a>

                <!-- Loading Indicator, Used for demostrating how loading of widgets could happen, check main.js - uiDemo() -->
                <div id="loading" class="pull-left"><i class="fa fa-certificate fa-spin"></i></div>

                <!-- Header Widgets -->
                <!-- You can create the widgets you want by replicating the following. Each one exists in a <li> element -->
                <ul id="widgets" class="navbar-nav-custom pull-right">
                    <!-- Just a divider -->
                    <li class="divider-vertical"></li>

                    <!-- RSS Widget -->
                    <!-- Add .dropdown-left-responsive class to align the dropdown menu left (so its visible on mobile) -->
                    <li id="rss-widget" class="dropdown dropdown-left-responsive">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-rss"></i>
                            <span class="badge badge-warning display-none"></span>
                        </a>
                        <!-- By adding the class .widget-fluid, dropdown width will be set to auto with min value 180px and max value 250px -->
                        <ul class="dropdown-menu dropdown-menu-right widget widget-fluid">
                            <li class="widget-heading text-center">Web Design</li>
                            <li class="li-hover"><a href="javascript:void(0)" class="widget-link"><i class="fa fa-umbrella"></i>This is a headline</a></li>
                            <li class="divider"></li>
                            <li class="li-hover"><a href="javascript:void(0)" class="widget-link"><i class="fa fa-trophy"></i>Another headline</a></li>
                            <li class="divider"></li>
                            <li class="li-hover"><a href="javascript:void(0)" class="widget-link"><i class="fa fa-suitcase"></i>Headlines keep coming!</a></li>
                            <li class="widget-heading text-center">Web Developent</li>
                            <li class="li-hover"><a href="javascript:void(0)" class="widget-link"><i class="fa fa-phone"></i>New headline</a></li>
                            <li class="divider"></li>
                            <li class="li-hover"><a href="javascript:void(0)" class="widget-link"><i class="fa fa-pencil"></i>Another one</a></li>
                            <li class="divider"></li>
                            <li><a href="javascript:void(0)" class="text-center">All News</a></li>
                        </ul>
                    </li>
                    <!-- END RSS Widget -->

                    <li class="divider-vertical"></li>

                    <!-- Twitter Widget -->
                    <!-- Add .dropdown-left-responsive class to align the dropdown menu left (so its visible on mobile) -->
                    <li id="twitter-widget" class="dropdown dropdown-left-responsive">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-twitter"></i>
                            <span class="badge badge-info display-none"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right widget">
                            <li class="widget-heading"><i class="fa fa-comments-o pull-right"></i>Latest Tweets</li>
                            <li class="li-hover">
                                <div class="media">
                                    <a class="pull-left" href="javascript:void(0)">
                                        <img src="img/placeholders/image_dark_64x64.png" alt="fakeimg">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="javascript:void(0)">Michael</a><span class="label label-info">just now</span></h6>
                                        <div class="media">Web design all the way!</div>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li class="li-hover">
                                <div class="media">
                                    <a class="pull-left" href="javascript:void(0)">
                                        <img src="img/placeholders/image_dark_64x64.png" alt="fakeimg">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="javascript:void(0)">Monica</a><span class="label label-info">3 min ago</span></h6>
                                        <div class="media">Download free PSDs at <a href="http://bit.ly/YUs4SQ" target="_blank">http://bit.ly/YUs4SQ</a></div>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li class="li-hover">
                                <div class="media">
                                    <a class="pull-left" href="javascript:void(0)">
                                        <img src="img/placeholders/image_dark_64x64.png" alt="fakeimg">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="javascript:void(0)">Steven</a><span class="label label-info">45 min ago</span></h6>
                                        <div class="media">Be sure to check out my portfolio!</div>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li class="li-hover">
                                <div class="media">
                                    <a class="pull-left" href="javascript:void(0)">
                                        <img src="img/placeholders/image_dark_64x64.png" alt="fakeimg">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="javascript:void(0)">Tim</a><span class="label label-info">1 hour ago</span></h6>
                                        <div class="media">Get all our themes for free for the next 2 hours! <a href="javascript:void(0)">#freebies</a></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- END Twitter Widget -->

                    <li class="divider-vertical"></li>

                    <!-- Messages Widget -->
                    <!-- Add .dropdown-left-responsive class to align the dropdown menu left (so its visible on mobile) -->
                    <li id="messages-widget" class="dropdown dropdown-left-responsive">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope"></i>
                            <!-- If the <span> element with .badge class has no content it will disappear (not in IE8 and below because of using :empty in CSS) -->
                            <span class="badge badge-success">1</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right widget">
                            <li class="widget-heading"><i class="fa fa-comment pull-right"></i>Latest Messages</li>
                            <li class="new-on">
                                <div class="media">
                                    <a class="pull-left" href="javascript:void(0)">
                                        <img src="img/placeholders/image_light_64x64.png" alt="fakeimg">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="javascript:void(0)">George</a><span class="label label-success">2 min ago</span></h6>
                                        <div class="media">Thanks for your help! The tutorial really helped me a lot!</div>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="media">
                                    <a class="pull-left" href="javascript:void(0)">
                                        <img src="img/placeholders/image_light_64x64.png" alt="fakeimg">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="javascript:void(0)">Mike</a><span class="label label-default">6 hours ago</span></h6>
                                        <div class="media">The logo is ready, have a look and let me know what you think!</div>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="media">
                                    <a class="pull-left" href="javascript:void(0)">
                                        <img src="img/placeholders/image_light_64x64.png" alt="fakeimg">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="javascript:void(0)">Julia</a><span class="label label-default">1 day ago</span></h6>
                                        <div class="media">We should better consider our social media marketing strategy!</div>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li class="text-center"><a href="page_inbox.html">View All Messages</a></li>
                        </ul>
                    </li>
                    <!-- END Messages Widget -->

                    <li class="divider-vertical"></li>

                    <!-- Notifications Widget -->
                    <!-- Add .dropdown-center-responsive class to align the dropdown menu center (so its visible on mobile) -->
                    <li id="notifications-widget" class="dropdown dropdown-center-responsive">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag"></i>
                            <span class="badge badge-danger">1</span>
                            <span class="badge badge-warning">2</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right widget">
                            <li class="widget-heading"><a href="javascript:void(0)" class="pull-right widget-link"><i class="fa fa-cog"></i></a><a href="javascript:void(0)" class="widget-link">System</a></li>
                            <li>
                                <ul>
                                    <li class="label label-danger">20 min ago</li>
                                    <li class="text-danger">Support system is down for maintenance!</li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li class="label label-warning">3 hours ago</li>
                                    <li class="text-warning">PHP upgrade started!</li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li class="label label-warning">5 hours ago</li>
                                    <li class="text-warning"><a href="javascript:void(0)" class="widget-link">1 support ticket</a> just opened!</li>
                                </ul>
                            </li>
                            <li class="widget-heading"><a href="javascript:void(0)" class="pull-right widget-link"><i class="fa fa-bookmark"></i></a><a href="javascript:void(0)" class="widget-link">Project #3</a></li>
                            <li>
                                <ul>
                                    <li class="label label-success">3 weeks ago</li>
                                    <li class="text-success">Project #3 <a href="javascript:void(0)" class="widget-link">published</a> successfully!</li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li class="label label-info">1 month ago</li>
                                    <li class="text-info">Milestone #3 achieved!</li>
                                    <li class="text-info"><a href="javascript:void(0)" class="widget-link">John Doe</a> joined the project!</li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li class="label label-default">1 year ago</li>
                                    <li class="text-muted">This is an old notification</li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li class="text-center"><a href="javascript:void(0)">View All Notifications</a></li>
                        </ul>
                    </li>
                    <!-- END Notifications Widget -->

                    <li class="divider-vertical"></li>

                    <!-- User Menu -->
                    <li class="dropdown pull-right dropdown-user">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><img src="img/template/avatar.png" alt="avatar"> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <!-- Just a button demostrating how loading of widgets could happen, check main.js- - uiDemo() -->
                            <li>
                                <a href="javascript:void(0)" class="loading-on"><i class="fa fa-refresh"></i> Refresh</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <!-- Modal div is at the bottom of the page before including javascript code -->
                                <a href="#modal-user-settings" role="button" data-toggle="modal"><i class="fa fa-user"></i> User Profile</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="fa fa-wrench"></i> App Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="page_login.html"><i class="fa fa-lock"></i> Log out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- END User Menu -->
                </ul>
                <!-- END Header Widgets -->
            </header>
            <!-- END Header -->

            <!-- Inner Container -->
            <div id="inner-container">
                <!-- Sidebar -->
                <aside id="page-sidebar" class="collapse navbar-collapse navbar-main-collapse">
                    <!-- Sidebar search -->
                    <form id="sidebar-search" action="page_search_results.html" method="post">
                        <div class="input-group">
                            <input type="text" id="sidebar-search-term" name="sidebar-search-term" placeholder="Search..">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                    <!-- END Sidebar search -->

                    <!-- Primary Navigation -->
                    <nav id="primary-nav">
                        <ul>
                        <li>
                                <a href="index.php"><i class="fa fa-fire"></i>QUẢN LÍ LOẠI HÀNG</a>
                            </li>
                            <li>
                                <a href="index.php?act=addnew"></i>THÊM LOẠI HÀNG</a>
                            </li>
                            <li>
                                <a href="index.php?act=view_sanpham">QUẢN LÍ SẢN PHẨM</a>
                            </li>
                            <li>
                                <a href="index.php?act=add_sanpham">THÊM SẢN PHẨM</a>
                            </li>
                            <!-- <li>
                                <a href="page_typography.html"><i class="fa fa-font"></i>Typography</a>
                            </li>
                            <li class="active">
                                <a href="#"><i class="fa fa-th-list"></i>Forms</a>
                                <ul>
                                    <li>
                                        <a href="page_form_components.html"><i class="fa fa-file-text"></i>Components</a>
                                    </li>
                                    <li>
                                        <a href="page_form_validation.html"><i class="fa fa-exclamation-triangle"></i>Validation</a>
                                    </li>
                                    <li>
                                        <a href="page_form_wizard.html" class="active"><i class="fa fa-magic"></i>Wizard</a>
                                    </li>
                                    <li>
                                        <a href="page_form_masked.html"><i class="fa fa-flask"></i>Masked Inputs</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-table"></i>Tables</a>
                                <ul>
                                    <li>
                                        <a href="page_tables.html"><i class="fa fa-tint"></i>Styles</a>
                                    </li>
                                    <li>
                                        <a href="page_datatables.html"><i class="fa fa-th"></i>DataTables</a>
                                    </li>
                                    <li>
                                        <a href="page_datatables_editable.html"><i class="fa fa-pencil"></i>Editable DataTables</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-leaf"></i>Components</a>
                                <ul>
                                    <li>
                                        <a href="page_animations.html"><i class="fa fa-certificate animation-pulse"></i>CSS3 Animations</a>
                                    </li>
                                    <li>
                                        <a href="page_gallery.html"><i class="fa fa-picture-o"></i>Gallery</a>
                                    </li>
                                    <li>
                                        <a href="page_inbox.html"><i class="fa fa-envelope"></i>Inbox</a>
                                    </li>
                                    <li>
                                        <a href="page_chatui.html"><i class="fa fa-comments"></i>ChatUI</a>
                                    </li>
                                    <li>
                                        <a href="page_charts.html"><i class="fa fa-bar-chart-o"></i>Charts</a>
                                    </li>
                                    <li>
                                        <a href="page_calendar.html"><i class="fa fa-calendar"></i>Calendar</a>
                                    </li>
                                    <li>
                                        <a href="page_maps.html"><i class="fa fa-map-marker"></i>Maps</a>
                                    </li>
                                    <li>
                                        <a href="page_syntax_highlighting.html"><i class="fa fa-flask"></i>Syntax Highlighting</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-tint"></i>Icons</a>
                                <ul>
                                    <li>
                                        <a href="page_glyphicons_pro.html"><i class="gi gi-heart"></i>Glyphicons Pro</a>
                                    </li>
                                    <li>
                                        <a href="page_fontawesome.html"><i class="fa fa-gift"></i>FontAwesome</a>
                                    </li>
                                    <li>
                                        <a href="page_gemicon.html"><i class="fa fa-smile-o"></i>Gemicon</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-file-o"></i>Pages</a>
                                <ul>
                                    <li>
                                        <a href="page_search_results.html"><i class="fa fa-search"></i>Search Results</a>
                                    </li>
                                    <li>
                                        <a href="page_price_tables.html"><i class="fa fa-ticket"></i>Price Tables</a>
                                    </li>
                                    <li>
                                        <a href="page_forum.html"><i class="fa fa-comment"></i>Forum</a>
                                    </li>
                                    <li>
                                        <a href="page_article.html"><i class="fa fa-pencil"></i>Article</a>
                                    </li>
                                    <li>
                                        <a href="page_invoice.html"><i class="fa fa-book"></i>Invoice</a>
                                    </li>
                                    <li>
                                        <a href="page_profile.html"><i class="fa fa-user"></i>Profile</a>
                                    </li>
                                    <li>
                                        <a href="page_faq.html"><i class="fa fa-flag"></i>FAQ</a>
                                    </li>
                                    <li>
                                        <a href="page_errors.html"><i class="fa fa-exclamation-triangle"></i>Errors</a>
                                    </li>
                                    <li>
                                        <a href="page_blank.html"><i class="fa fa-circle-o"></i>Blank</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="page_login.html"><i class="fa fa-power-off"></i>Login Page</a>
                            </li>
                            <li>
                                <a href="page_landing.html"><i class="fa fa-rocket"></i>Landing Page</a>
                            </li> -->
                        </ul>
                    </nav>
                    <!-- END Primary Navigation -->

                    <!-- Demo Theme Options -->
                    <div id="theme-options" class="text-left visible-md visible-lg">
                        <a href="javascript:void(0)" class="btn btn-theme-options"><i class="fa fa-cog"></i> Theme Options</a>
                        <div id="theme-options-content">
                            <h5>Color Themes</h5>
                            <ul class="theme-colors clearfix">
                                <li class="active">
                                    <a href="javascript:void(0)" class="themed-background-default themed-border-default" data-theme="default" data-toggle="tooltip" title="Default"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-deepblue themed-border-deepblue" data-theme="css/themes/deepblue.css" data-toggle="tooltip" title="DeepBlue"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-deepwood themed-border-deepwood" data-theme="css/themes/deepwood.css" data-toggle="tooltip" title="DeepWood"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-deeppurple themed-border-deeppurple" data-theme="css/themes/deeppurple.css" data-toggle="tooltip" title="DeepPurple"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-deepgreen themed-border-deepgreen" data-theme="css/themes/deepgreen.css" data-toggle="tooltip" title="DeepGreen"></a>
                                </li>
                            </ul>
                            <h5>Header</h5>
                            <label id="topt-fixed-header-top" class="switch switch-success" data-toggle="tooltip" title="Top fixed header"><input type="checkbox"><span></span></label>
                            <label id="topt-fixed-header-bottom" class="switch switch-success" data-toggle="tooltip" title="Bottom fixed header"><input type="checkbox"><span></span></label>
                            <label id="topt-fixed-layout" class="switch switch-success" data-toggle="tooltip" title="Fixed layout (for large resolutions)"><input type="checkbox"><span></span></label>
                        </div>
                    </div>
                    <!-- END Demo Theme Options -->
                </aside>
                <!-- END Sidebar -->

                <!-- Page Content -->
                <div id="page-content">
                    <!-- Navigation info -->
                    <ul id="nav-info" class="clearfix">
                        <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                        <li><a href="javascript:void(0)">Forms</a></li>
                        <li class="active"><a href="">Wizard</a></li>
                    </ul>
                    <!-- END Navigation info -->

                   
                    <!-- END Basic Form Wizard -->
                    
                    <!-- Advanced Form Wizard -->
                    <?php foreach($ds as $row) {?>
                    <form method="POST" action="index.php?act=update&id=<?=$row['idmaloai']?>">
                    <li class="active"><a href="">Sửa loại hàng</a></li>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">TÊN LOẠI HÀNG</label>
                        <input type="text" class="form-control" name="tenloai" placeholder="<?=$row['tenloai']?>">
                    </div>
                    <button type="submit" class="btn btn-primary" name="send">GỬI</button>
                    </form>
                    <?php } ?>
                    <!-- END Advanced Form Wizard -->
                </div>
                <!-- END Page Content -->

                <!-- Footer -->
                <footer>
                    <span id="year-copy"></span> &copy; <strong><a href="http://goo.gl/9QhXQ">uAdmin 2.1</a></strong> - Crafted with <i class="fa fa-heart text-danger"></i> by <strong><a href="http://goo.gl/vNS3I" target="_blank">pixelcave</a></strong>
                </footer>
                <!-- END Footer -->
            </div>
            <!-- END Inner Container -->
        </div>
        <!-- END Page Container -->

        <!-- Scroll to top link, check main.js - scrollToTop() -->
        <a href="javascript:void(0)" id="to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- User Modal Settings, appears when clicking on 'User Settings' link found on user dropdown menu (header, top right) -->
        <div id="modal-user-settings" class="modal">
            <!-- Modal Dialog -->
            <div class="modal-dialog">
                <!-- Modal Content -->
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4>Profile Settings</h4>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Content -->
                    <div class="modal-body">
                        <!-- Tab links -->
                        <ul id="example-user-tabs" class="nav nav-tabs" data-toggle="tabs">
                            <li class="active"><a href="#example-user-tabs-account"><i class="fa fa-cogs"></i> Account</a></li>
                            <li><a href="#example-user-tabs-profile"><i class="fa fa-user"></i> Profile</a></li>
                        </ul>
                        <!-- END Tab links -->

                        <!-- END Tab Content -->
                        <div class="tab-content">
                            <!-- First Tab -->
                            <div class="tab-pane active" id="example-user-tabs-account">
                                <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>Success!</strong> Password changed!
                                </div>
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Username</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static">administrator</p>
                                            <span class="help-block">You can't change your username!</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="example-user-pass">Password</label>
                                        <div class="col-md-9">
                                            <input type="password" id="example-user-pass" name="example-user-pass" class="form-control">
                                            <span class="help-block">if you want to change your password enter your current for confirmation!</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="example-user-newpass">New Password</label>
                                        <div class="col-md-9">
                                            <input type="password" id="example-user-newpass" name="example-user-newpass" class="form-control">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- END First Tab -->

                            <!-- Second Tab -->
                            <div class="tab-pane" id="example-user-tabs-profile">
                                <h4 class="page-header-sub">Image</h4>
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <img src="img/placeholders/image_dark_120x120.png" alt="image" class="img-responsive push">
                                        </div>
                                        <div class="col-md-9">
                                            <form action="index.html" class="dropzone">
                                                <div class="fallback">
                                                    <input name="file" type="file">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <form class="form-horizontal">
                                    <h4 class="page-header-sub">Details</h4>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="example-user-firstname">Firstname</label>
                                        <div class="col-md-9">
                                            <input type="text" id="example-user-firstname" name="example-user-firstname" class="form-control" value="John">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="example-user-lastname">Lastname</label>
                                        <div class="col-md-9">
                                            <input type="text" id="example-user-lastname" name="example-user-lastname" class="form-control" value="Doe">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="example-user-gender">Gender</label>
                                        <div class="col-md-9">
                                            <select id="example-user-gender" name="example-user-gender" class="form-control">
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="example-user-bio">Bio</label>
                                        <div class="col-md-9">
                                            <textarea id="example-user-bio" name="example-user-bio" class="form-control textarea-elastic" rows="3">Bio Information..</textarea>
                                        </div>
                                    </div>
                                    <h5 class="page-header-sub">Social</h5>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="example-user-fb">Facebook</label>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <input type="text" id="example-user-fb" name="example-user-fb" class="form-control">
                                                <span class="input-group-addon"><i class="fa fa-facebook fa-fw"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="example-user-twitter">Twitter</label>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <input type="text" id="example-user-twitter" name="example-user-twitter" class="form-control">
                                                <span class="input-group-addon"><i class="fa fa-twitter fa-fw"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="example-user-pinterest">Pinterest</label>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <input type="text" id="example-user-pinterest" name="example-user-pinterest" class="form-control">
                                                <span class="input-group-addon"><i class="fa fa-pinterest fa-fw"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3" for="example-user-github">Github</label>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <input type="text" id="example-user-github" name="example-user-github" class="form-control">
                                                <span class="input-group-addon"><i class="fa fa-github fa-fw"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- END Second Tab -->
                        </div>
                        <!-- END Tab Content -->
                    </div>
                    <!-- END Modal Content -->

                    <!-- Modal footer -->
                    <div class="modal-footer remove-margin">
                        <button class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        <button class="btn btn-success"><i class="fa fa-spinner fa-spin"></i> Save changes</button>
                    </div>
                    <!-- END Modal footer -->
                </div>
                <!-- END Modal Content -->
            </div>
            <!-- END Modal Dialog -->
        </div>
        <!-- END User Modal Settings -->

        <!-- Excanvas for canvas support on IE8 -->
        <!--[if lte IE 8]><script src="js/helpers/excanvas.min.js"></script><![endif]-->

        <!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>!window.jQuery && document.write(decodeURI('%3Cscript src="js/vendor/jquery-1.11.1.min.js"%3E%3C/script%3E'));</script>

        <!-- Bootstrap.js -->
        <script src="js/vendor/bootstrap.min.js"></script>

        <!-- Jquery plugins and custom javascript code -->
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Javascript code only for this page -->
        <script>
            $(function () {
                /* For advanced usage and examples please check out
                 *  Jquery Wizard       -> http://www.thecodemine.org
                 *  Jquery Form         -> http://malsup.com/jquery/form/
                 *  Jquery Validation   -> https://github.com/jzaefferer/jquery-validation
                 */

                /* Initialize Basic Wizard */
                $('#basic-wizard').formwizard({
                    focusFirstInput: true,
                    disableUIStyles: true
                });

                /* Initialize Advanced Wizard */
                $('#advanced-wizard').formwizard({
                    disableUIStyles: true,
                    formPluginEnabled: true,
                    validationEnabled: true,
                    validationOptions: {
                        errorClass: 'help-block',
                        errorElement: 'span',
                        errorPlacement: function (error, e) {
                            e.parents('.form-group > div').append(error);
                        },
                        highlight: function (e) {
                            $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                            $(e).closest('.help-block').remove();
                        },
                        success: function (e) {
                            // You can use the following if you would like to highlight with green color the input after successful validation!
                            e.closest('.form-group').removeClass('has-success has-error'); // e.closest('.form-group').removeClass('has-success has-error').addClass('has-success');
                            e.closest('.help-block').remove();
                            e.closest('.help-inline').remove();
                        },
                        rules: {
                            val_username: {
                                required: true,
                                minlength: 2
                            },
                            val_password: {
                                required: true,
                                minlength: 5
                            },
                            val_confirm_password: {
                                required: true,
                                minlength: 5,
                                equalTo: '#val_password'
                            },
                            val_email: {
                                required: true,
                                email: true
                            },
                            val_terms: {
                                required: true
                            }
                        },
                        messages: {
                            val_username: {
                                required: 'Please enter a username',
                                minlength: 'Your username must consist of at least 2 characters'
                            },
                            val_password: {
                                required: 'Please provide a password',
                                minlength: 'Your password must be at least 5 characters long'
                            },
                            val_confirm_password: {
                                required: 'Please provide a password',
                                minlength: 'Your password must be at least 5 characters long',
                                equalTo: 'Please enter the same password as above'
                            },
                            val_email: 'Please enter a valid email address',
                            val_terms: 'Please accept the terms to continue'
                        }
                    },
                    formOptions: {
                        success: function (data) {
                            // On success status returned
                        },
                        beforeSubmit: function (data) {
                            alert('Form Submitted!');
                        },
                        dataType: 'json',
                        resetForm: true
                    },
                    inAnimation: {height: 'show'},
                    outAnimation: {height: 'hide'}
                });
            });
        </script>
    </body>
</html>