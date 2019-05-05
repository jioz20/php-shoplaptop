    <!-- <link href="<?=template_user1_path?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=template_user1_path?>/assets/css/paper-kit.css?v=2.1.0" rel="stylesheet"/>
    <link href="<?=template_user1_path?>/assets/css/demo.css" rel="stylesheet" /> -->

    <!--     Fonts and icons     -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=template_user1_path?>/assets/css/nucleo-icons.css" rel="stylesheet"> -->


<!-- Core JS Files -->
<!-- <script src="<?=template_user1_path?>/assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?=template_user1_path?>/assets/js/jquery-ui-1.12.1.custom.min.js" type="text/javascript"></script>
<script src="<?=template_user1_path?>/assets/js/popper.js" type="text/javascript"></script>
<script src="<?=template_user1_path?>/assets/js/bootstrap.min.js" type="text/javascript"></script> -->

<!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
<!-- <script src="<?=template_user1_path?>/assets/js/paper-kit.js?v=2.1.0"></script> -->

<!--  Plugins for Select -->
<!-- <script src="<?=template_user1_path?>/assets/js/bootstrap-select.js"></script> -->

<!--  Plugins for Map -->
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script> -->
<!-- <script src="<?=template_user1_path?>/assets/js/demo.js"></script> -->

<!-- <script type="text/javascript">
    $().ready(function(){
        demo.initContactUsMap()
    });
</script> -->


<!--  for fileupload -->
<!-- <script src="<?=template_user1_path?>/assets/js/jasny-bootstrap.min.js"></script> -->

<!-- Switches -->
<!-- <script src="<?=template_user1_path?>/assets/js/bootstrap-switch.min.js"></script> -->

<body class="off-canvas-menu">
    <!-- menu 1  -->
    <!-- <nav class="navbar navbar-expand-md bg-danger">
        <div class="container">
            <a class="navbar-brand" href="#paper-kit">Navbar with notification</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#paper-kit">
                            Discover
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#paper-kit">
                            Wishlist
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="btn btn-just-icon btn-warning  " data-toggle="dropdown">
                            <i class="nc-icon nc-sound-wave"></i>
                        </a>

                            <ul class="dropdown-menu dropdown-menu-right dropdown-notification">
                            <li class="no-notification">
                                    You're all clear!
                            </li>

                            </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="btn btn-just-icon btn-danger  " data-toggle="dropdown">
                            <i class="nc-icon nc-email-85"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right dropdown-wide dropdown-notification">
                            <li class="dropdown-header">
                                You have 7 unread notifications
                            </li>
                            <li>
                            <ul class="dropdown-notification-list scroll-area">
                                <a href="#paper-kit" class="notification-item">
                                    <div class="notification-text">
                                        <span class="label label-icon label-success"><i class="nc-icon nc-chat-33"></i></span>
                                        <span class="message"><b>Patrick</b> mentioned you in a comment.</span>
                                        <br>
                                        <span class="time">20min ago</span>

                                        <button class="btn btn-just-icon read-notification btn-round">
                                            <i class="nc-icon nc-check-2"></i>
                                        </button>
                                    </div>
                                </a>


                                <a href="#paper-kit" class="notification-item">
                                    <div class="notification-text">
                                        <span class="label label-icon label-info"><i class="nc-icon nc-alert-circle-i"></i></span>

                                        <span class="message">Our privacy policy changed!</span>
                                        <br>
                                        <span class="time">1day ago</span>
                                    </div>
                                </a>

                                <a href="#paper-kit" class="notification-item">
                                    <div class="notification-text">
                                        <span class="label label-icon label-warning"><i class="nc-icon nc-ambulance"></i></span>

                                        <span class="message">Please confirm your email address.</span>
                                        <br>
                                        <span class="time">2days ago</span>
                                    </div>
                                </a>
                                <a href="#paper-kit" class="notification-item">
                                    <div class="notification-text">
                                        <span class="label label-icon label-primary"><i class="nc-icon nc-paper"></i></span>
                                        <span class="message">Have you thought about marketing?</span>
                                        <br>
                                        <span class="time">3days ago</span>
                                    </div>
                                </a>
                                </ul>
                                </li>
                                

                            <li class="dropdown-footer">
                                <ul class="dropdown-footer-menu">
                                    <li>
                                        <a href="#paper-kit">Mark all as read</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#paper-kit" class="nav-link navbar-brand" data-toggle="dropdown" width="30" height="30">
                            <div class="profile-photo-small">
                                <img src="assets/img/faces/erik-lucatero-2.jpg" alt="Circle Image" class="img-circle img-responsive img-no-padding">
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
                            <div class="dropdown-header">Dropdown header</div>
                            <a class="dropdown-item" href="#paper-kit">Action</a>
                            <a class="dropdown-item" href="#paper-kit">Another action</a>
                            <a class="dropdown-item" href="#paper-kit">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#paper-kit">Separated link</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#paper-kit">Another separated link</a>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->
    
    
    <!-- menu 2 -->
    <nav class="navbar navbar-expand-lg fixed-top nav-down">
        <div class="container">
            <div class="navbar-translate">
                <div class="navbar-header">
                    <a class="navbar-brand" href="presentation.html">Laptop Bao Ngoc</a>
                </div>
                <button class="navbar-toggler navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">Trang Chủ</a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
	                        <a class="dropdown-item" href=""><i class="nc-icon nc-tile-56"></i>&nbsp; Laptop Mới</a>
	                        <a class="dropdown-item" href=""><i class="nc-icon nc-settings"></i>&nbsp; Laptop USD 2nd</a>
	                        <a class="dropdown-item" href=""><i class="nc-icon nc-bullet-list-67"></i>&nbsp; PC for office</a>
	                        <a class="dropdown-item" href=""><i class="nc-icon nc-single-02"></i>&nbsp; PC for workstation</a>
	                        <a class="dropdown-item" href=""><i class="nc-icon nc-calendar-60"></i>&nbsp; Linh kiện</a>
							<!-- <a class="dropdown-item" href=""><i class="nc-icon nc-money-coins"></i>&nbsp; Phụ Kiện </a> -->
							<a class="dropdown-item" href=""><i class="nc-icon nc-badge"></i>&nbsp; Smartphones 2nd</a>
							<a class="dropdown-item" href=""><i class="nc-icon nc-mobile"></i>&nbsp; Tablet 2nd</a>
	                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">Tài Khoản</a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
	                        <a class="dropdown-item" href=""><i class="nc-icon nc-tile-56"></i>&nbsp; Đơn hàng của tôi</a>
	                        <a class="dropdown-item" href=""><i class="nc-icon nc-settings"></i>&nbsp; Thông báo của tôi</a>
	                        <a class="dropdown-item" href=""><i class="nc-icon nc-bullet-list-67"></i>&nbsp; Tài khoản</a>
	                        <a class="dropdown-item" href=""><i class="nc-icon nc-single-02"></i>&nbsp; Sản phẩm đã xem</a>
	                        <a class="dropdown-item" href=""><i class="nc-icon nc-calendar-60"></i>&nbsp; Sản phẩm yêu thích</a>
							<a class="dropdown-item" href=""><i class="nc-icon nc-money-coins"></i>&nbsp; Thoát</a>
							<!-- <a class="dropdown-item" href=""><i class="nc-icon nc-badge"></i>&nbsp; Testimonials</a>
							<a class="dropdown-item" href=""><i class="nc-icon nc-mobile"></i>&nbsp; Contacts</a> -->
	                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="" data-scroll="true" href="javascript:void(0)">Giỏ hàng</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link" href="" data-scroll="true" href="javascript:void(0)">Giỏ hàng</a>
                    </li> -->
                    <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">Giỏ Hàng</a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
	                        <a class="dropdown-item" href=""><i class="nc-icon nc-tile-56"></i>&nbsp; Headers</a>
	                        <a class="dropdown-item" href=""><i class="nc-icon nc-settings"></i>&nbsp; Features</a>
	                        <a class="dropdown-item" href=""><i class="nc-icon nc-bullet-list-67"></i>&nbsp; Blogs</a>
	                        <a class="dropdown-item" href=""><i class="nc-icon nc-single-02"></i>&nbsp; Teams</a>
	                        <a class="dropdown-item" href=""><i class="nc-icon nc-calendar-60"></i>&nbsp; Projects</a>
							<a class="dropdown-item" href=""><i class="nc-icon nc-money-coins"></i>&nbsp; Pricing</a>
							<a class="dropdown-item" href=""><i class="nc-icon nc-badge"></i>&nbsp; Testimonials</a>
							<a class="dropdown-item" href=""><i class="nc-icon nc-mobile"></i>&nbsp; Contacts</a>
	                    </ul>
                    </li> -->

                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link" href="" data-scroll="true" href="javascript:void(0)">Tài khoản</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="" data-scroll="true" href="javascript:void(0)">Giỏ hàng</a>
                    </li> -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">Sections</a>
						<ul class="dropdown-menu dropdown-menu-right dropdown-danger">
	                        <a class="dropdown-item" href="sections.html#headers"><i class="nc-icon nc-tile-56"></i>&nbsp; Headers</a>
	                        <a class="dropdown-item" href="sections.html#features"><i class="nc-icon nc-settings"></i>&nbsp; Features</a>
	                        <a class="dropdown-item" href="sections.html#blogs"><i class="nc-icon nc-bullet-list-67"></i>&nbsp; Blogs</a>
	                        <a class="dropdown-item" href="sections.html#teams"><i class="nc-icon nc-single-02"></i>&nbsp; Teams</a>
	                        <a class="dropdown-item" href="sections.html#projects"><i class="nc-icon nc-calendar-60"></i>&nbsp; Projects</a>
							<a class="dropdown-item" href="sections.html#pricing"><i class="nc-icon nc-money-coins"></i>&nbsp; Pricing</a>
							<a class="dropdown-item" href="sections.html#testimonials"><i class="nc-icon nc-badge"></i>&nbsp; Testimonials</a>
							<a class="dropdown-item" href="sections.html#contact-us"><i class="nc-icon nc-mobile"></i>&nbsp; Contacts</a>
	                    </ul>
					</li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  data-toggle="dropdown" href="javascript:void(0)">Examples</a>
						<ul class="dropdown-menu dropdown-menu-right dropdown-danger">
	                        <a class="dropdown-item" href="examples/about-us.html"><i class="nc-icon nc-bank"></i>&nbsp; About Us</a>
	                        <a class="dropdown-item" href="examples/add-product.html"><i class="nc-icon nc-basket"></i>&nbsp; Add Product</a>
	                        <a class="dropdown-item" href="examples/blog-post.html"><i class="nc-icon nc-badge"></i>&nbsp; Blog Post</a>
	                        <a class="dropdown-item" href="examples/blog-posts.html"><i class="nc-icon nc-bullet-list-67"></i>&nbsp; Blog Posts</a>
	                        <a class="dropdown-item" href="examples/contact-us.html"><i class="nc-icon nc-mobile"></i>&nbsp; Contact Us</a>
							<a class="dropdown-item" href="examples/discover.html"><i class="nc-icon nc-world-2"></i>&nbsp; Discover</a>
							<a class="dropdown-item" href="examples/ecommerce.html"><i class="nc-icon nc-send"></i>&nbsp; Ecommerce</a>
							<a class="dropdown-item" href="examples/landing.html"><i class="nc-icon nc-spaceship"></i>&nbsp; Landing</a>
							<a class="dropdown-item" href="examples/login.html"><i class="nc-icon nc-lock-circle-open"></i>&nbsp; Login</a>
							<a class="dropdown-item" href="examples/product-page.html"><i class="nc-icon nc-album-2"></i>&nbsp; Product Page</a>
							<a class="dropdown-item" href="examples/profile.html"><i class="nc-icon nc-single-02"></i>&nbsp; Profile</a>
							<a class="dropdown-item" href="examples/register.html"><i class="nc-icon nc-bookmark-2"></i>&nbsp; Register</a>
							<a class="dropdown-item" href="examples/search-with-sidebar.html"><i class="nc-icon nc-zoom-split"></i>&nbsp; Search</a>
							<a class="dropdown-item" href="examples/settings.html"><i class="nc-icon nc-settings-gear-65"></i>&nbsp; Settings</a>
							<a class="dropdown-item" href="examples/twitter-redesign.html"><i class="nc-icon nc-tie-bow"></i>&nbsp; Twitter</a>
	                    </ul>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="btn btn-round btn-danger" href="#">
                            <i class="nc-icon nc-cart-simple"></i> Buy now
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <div class="cd-section" id="headers">

        <!--     *********     HEADER 1      *********      -->
        <!-- <div class="header-1">
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
                <div class="container">
                    <a class="navbar-brand mb-0" href="www.creative-tim.com">Creative Tim</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar"></span>
                        <span class="navbar-toggler-bar"></span>
                        <span class="navbar-toggler-bar"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <a href="#paper-kit" class="btn btn-link btn-neutral">Components</a>
                            <a href="#paper-kit" class="btn btn-link btn-neutral">Tutorial</a>
                            <a href="#paper-kit" target="_blank" class="btn btn-link btn-neutral"><i class="fa fa-twitter"></i></a>
                            <a href="#paper-kit" target="_blank" class="btn btn-link btn-neutral"><i class="fa fa-facebook"></i></a>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="page-header" style="background-image: url('https://images.unsplash.com/photo-1486310662856-32058c639c65?dpr=2&auto=format&fit=crop&w=1500&h=1125&q=80&cs=tinysrgb&crop=');">
                <div class="filter"></div>
                <div class="content-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="iframe-container">
                                    <iframe src="https://www.youtube.com/embed/RcmrbNRK-jY?modestbranding=1&autohide=1&showinfo=0" frameborder="0" allowfullscreen height="250"></iframe>
                                </div>
                            </div>
                            <div class="col-md-6  ml-auto">
                                <h2 class="title">Travel with us</h2>
                                <h5 class="description">There's no doubt that Tesla is delighted with the interest, but the data also raises a few questions. How long will it take for Tesla to fulfill all those extra orders?</h5>
                                <br />
                                <a href="https://www.youtube.com/watch?v=RcmrbNRK-jY" target="_blank" class="btn btn-danger">
                                    <i class="nc-icon nc-cart-simple"></i> Order Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!--     *********     HEADER 2      *********      -->
        <!-- <div class="header-2">
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
                <div class="container">
                    <a class="navbar-brand mb-0" href="www.creative-tim.com">Creative Tim</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar"></span>
                        <span class="navbar-toggler-bar"></span>
                        <span class="navbar-toggler-bar"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <a href="#paper-kit" class="btn btn-link btn-neutral">Components</a>
                            <a href="#paper-kit" class="btn btn-link btn-neutral">Tutorial</a>
                            <a href="#paper-kit" target="_blank" class="btn btn-link btn-neutral"><i class="fa fa-twitter"></i></a>
                            <a href="#paper-kit" target="_blank" class="btn btn-link btn-neutral"><i class="fa fa-facebook"></i></a>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="page-header" style="background-image: url('https://images.unsplash.com/photo-1498475932703-000eb46e6375?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=');">
                <div class="filter"></div>
                <div class="content-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 ml-auto mr-auto text-center">
                                <h1 class="title"> Find your next trip</h1>
                                <h5 class="description">Now you have no excuses, it's time to surprise your clients, your competitors, and why not, the world. You probably won't have a better chance to show off all your potential if it's not by designing a website for your own agency or web studio.</h5>
                                <br />
                            </div>
                            <div class="col-md-10 ml-auto mr-auto">
                                <div class="card card-raised card-form-horizontal no-transition">
                                    <div class="card-body">
                                        <form method="" action="">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="text" value="" placeholder="City" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="text" value="" placeholder="Country" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="text" value="" placeholder="Date" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <button type="button" class="btn btn-danger btn-block"><i class="nc-icon nc-zoom-split"></i> &nbsp; Search</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!--     *********     HEADER 3      *********      -->

        <div class="header-3">
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
                <div class="container">
                    <a class="navbar-brand mb-0" href="www.creative-tim.com">Creative Tim</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar"></span>
                        <span class="navbar-toggler-bar"></span>
                        <span class="navbar-toggler-bar"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <a href="#paper-kit" class="btn btn-link btn-neutral">Components</a>
                            <a href="#paper-kit" class="btn btn-link btn-neutral">Tutorial</a>
                            <a href="#paper-kit" target="_blank" class="btn btn-link btn-neutral"><i class="fa fa-twitter"></i></a>
                            <a href="#paper-kit" target="_blank" class="btn btn-link btn-neutral"><i class="fa fa-facebook"></i></a>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="page-carousel">
                <div class="filter"></div>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="page-header" style="background-image: url('https://images.unsplash.com/photo-1498063401574-13cbee350467?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=');">
                                <div class="filter"></div>
                                <div class="content-center">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6 text-left">
                                                <h1 class="title">Paper Kit 2 PRO</h1>
                                                <h5>Now you have no excuses, it's time to surprise your clients, your competitors, and why not, the world. You probably won't have a better chance to show off all your potential if it's not by designing a website for your own agency or web studio.</h5>
                                                <br />
                                                <div class="buttons">
                                                    <a href="#pablo" class="btn btn-danger btn-round  btn-lg">
                                                        Read More
                                                    </a>
                                                    <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon">
                                                        <i class="fa fa-facebook-square"></i>
                                                    </a>
                                                    <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon">
                                                        <i class="fa fa-get-pocket"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="page-header" style="background-image: url('https://images.unsplash.com/photo-1482690205767-61deebe15ef7?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=')">
                                <div class="filter"></div>
                                <div class="content-center">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-8 ml-auto mr-auto text-center">
                                                <h1 class="title">Awesome Experiences</h1>
                                                <h5>Now you have no excuses, it's time to surprise your clients, your competitors, and why not, the world. You probably won't have a better chance to show off all your potential if it's not by designing a website for your own agency or web studio.</h5>
                                                <br />
                                                <h6>Connect with us:</h6>
                                                <div class="buttons">
                                                    <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon">
                                                        <i class="fa fa-facebook-square"></i>
                                                    </a>
                                                    <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                    <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="page-header" style="background-image: url('https://images.unsplash.com/photo-1498063669468-89723a87123d?dpr=2&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=')">
                                <div class="filter"></div>
                                <div class="content-center">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-7 ml-auto text-right">
                                                <h2 class="title">Premium Offers for Venice</h1>
                                                <h5>Now you have no excuses, it's time to surprise your clients, your competitors, and why not, the world. You probably won't have a better chance to show off all your potential if it's not by designing a website for your own agency or web studio.</h5>
                                                <br />
                                                <div class="buttons">

                                                    <a href="#pablo" class="btn btn-neutral btn-link btn-lg">
                                                        <i class="fa fa-share-alt"></i> Share Offer
                                                    </a>
                                                    <a href="#pablo" class="btn btn-success btn-round btn-lg">
                                                        <i class="fa fa-shopping-cart"></i> Shop Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a class="left carousel-control carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="fa fa-angle-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="fa fa-angle-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <!--     *********     HEADER 4 (w/ video)      *********      -->

        <!-- <div class="header-4">
            <div class="header-wrapper">
                <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
                    <div class="container">
                        <a class="navbar-brand mb-0" href="www.creative-tim.com">Creative Tim</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-bar"></span>
                            <span class="navbar-toggler-bar"></span>
                            <span class="navbar-toggler-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <a href="#paper-kit" class="btn btn-link btn-neutral">Components</a>
                                <a href="#paper-kit" class="btn btn-link btn-neutral">Tutorial</a>
                                <a href="#paper-kit" target="_blank" class="btn btn-link btn-neutral"><i class="fa fa-twitter"></i></a>
                                <a href="#paper-kit" target="_blank" class="btn btn-link btn-neutral"><i class="fa fa-facebook"></i></a>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="page-header header-video">
                    <div class="filter filter-danger"></div> -->
                    <!-- We show the video image placeholder instead of the video for small devices  -->
                    <!-- <div class="video-image visible-xs visible-sm" style="background-image: url('assets/img/video-placeholder.png')"></div>

                    <video id="video-source" preload="auto" loop="loop" muted="muted" volume="0">
                        <source src="<?=template_user1_path?>/assets/video/fireworks.mp4" type="video/mp4">
                            Video not supported
                    </video>
                    <div class="content-center">
                        <div class="container upper-container text-center">
                            <div class="video-text">
                                <h2>Make it</h2>
                                <h1 class="title-uppercase title-no-upper-margin">Stand out</h1>
                            </div>
                            <br /> -->
                            <!--  We hide the play button on small devices -->
                            <!-- <button type="button" data-video="video-source" data-toggle="video" class="btn btn-lg btn-neutral">
                                <i class="fa fa-play"></i> Play Video
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>

    <div class="cd-section section-white" id="features">

    <!--     *********     FEATURES 1      *********      -->
        <!-- <div class="features-1">
            <div class="container">
                <div class="row">
    				<div class="col-md-8 ml-auto mr-auto text-center">
    					<h2 class="title">Why our product is the best</h2>
    					<h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here.</h5>
    				</div>
    			</div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="nc-icon nc-palette"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Beautiful Gallery</h4>
                                <p class="description">Spend your time generating new ideas. You don't have to think of implementing.</p>
                                <a href="#pkp" class="btn btn-link btn-danger">See more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="nc-icon nc-bulb-63"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">New Ideas</h4>
                                <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient.</p>
                                <a href="#pkp" class="btn btn-link btn-danger">See more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="nc-icon nc-chart-bar-32"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Statistics</h4>
                                <p>Choose from a veriety of many colors resembling sugar paper pastels.</p>
                                <a href="#pkp" class="btn btn-link btn-danger">See more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="nc-icon nc-sun-fog-29"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Delightful design</h4>
                                <p>Find unique and handmade delightful designs related items directly from our sellers.</p>
                                <a href="#pkp" class="btn btn-link btn-danger">See more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!--     *********     FEATURES 2      *********      -->
        <!-- <div class="features-2">
            <div class="container">
                <div class="row">
    				<div class="col-md-8 ml-auto mr-auto text-center">
    					<h2 class="title">Is this what you are looking for?</h2>
    					<h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here.</h5>
                        <br/>
                    </div>
    			</div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card" data-background="image" style="background-image: url('assets/img/sections/jan-sendereks.jpg')">
							<div class="card-body">
								<h6 class="card-category">Design</h6>
                                <div class="card-icon">
									<i class="nc-icon nc-world-2"></i>
								</div>
                                <p class="card-description">Unlike fashionable design, it lasts many years – even in today’s throwaway society.</p>

                                <div class="card-footer">
                                    <a href="#pablo" class="btn btn-link btn-neutral">
                                        <i class="fa fa-book" aria-hidden="true"></i> Show more
                                    </a>
                                </div>
							</div>
						</div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" data-background="image" style="background-image: url('assets/img/sections/anders-jilden.jpg')">
							<div class="card-body">
								<h6 class="card-category">UI Kits</h6>
                                <div class="card-icon">
									<i class="nc-icon nc-single-copy-04"></i>
								</div>
                                <p class="card-description">Imagine if you could go to the profile of a friend and instead of scrolling through...</p>

                                <div class="card-footer">
                                    <a href="#pablo" class="btn btn-link btn-neutral">
                                        <i class="fa fa-book" aria-hidden="true"></i> Show more
                                    </a>
                                </div>
							</div>
						</div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" data-background="image" style="background-image: url('assets/img/sections/uriel-soberanes.jpg')">
							<div class="card-body">
								<h6 class="card-category">Development</h6>
                                <div class="card-icon">
									<i class="nc-icon nc-time-alarm"></i>
								</div>
                                <p class="card-description"> For starters, it seemed like a good idea to keep a running list of Vision investments.</p>

                                <div class="card-footer">
                                    <a href="#pablo" class="btn btn-link btn-neutral">
                                        <i class="fa fa-book" aria-hidden="true"></i> Show more
                                    </a>
                                </div>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div> -->

    <!--     *********     FEATURES 3      *********      -->
        <div class="features-3">
            <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="container">
                                    <h2 class="title">Your life will be much easier</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="info info-horizontal">
                                        <div class="icon icon-success">
                                            <i class="nc-icon nc-layout-11"></i>
                                        </div>
                                        <div class="description">
                                            <h4 class="info-title">Components</h4>
                                            <p>The kit comes with a huge number of components designed to look perfect together.</p>
                                            <a href="#paper-kit" class="btn btn-link">See more</a>
                                        </div>
                                    </div>
                                    <div class="info info-horizontal">
                                        <div class="icon icon-warning">
                                            <i class="nc-icon nc-palette"></i>
                                        </div>
                                        <div class="description">
                                            <h4 class="info-title">Beautiful Gallery</h4>
                                            <p>Spend your time generating new ideas. You don't have to think of implementing anymore.</p>
                                            <a href="#paper-kit" class="btn btn-link">See more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="info info-horizontal">
                                        <div class="icon icon-danger">
                                            <i class="nc-icon nc-touch-id"></i>
                                        </div>
                                        <div class="description">
                                            <h4 class="info-title">Secured</h4>
                                            <p>Larger, yet dramatically thinner. More powerful, but remarkably power is efficient.</p>
                                            <a href="#paper-kit" class="btn btn-link">See more</a>
                                        </div>
                                    </div>
                                    <div class="info info-horizontal">
                                        <div class="icon icon-primary">
                                            <i class="nc-icon nc-delivery-fast"></i>
                                        </div>
                                        <div class="description">
                                            <h4 class="info-title">Fast Prototyping</h4>
                                            <p>Medium has a new head of product, while the startup behind the defunct texting app...</p>
                                            <a href="#paper-kit" class="btn btn-link">See more</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-5 ml-auto">
                            <div class="iphone-container">
                                <img src="<?=template_user1_path?>/assets/img/sections/iphone.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    <!--     *********     FEATURES 4     *********      -->
        <div class="features-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h2 class="title">Is this what you are looking for?</h2>
                        <h5 class="description">The more formalized version launching today brings a slate of corporate partners and a more structured application review process.</h5>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-6">
    					<div class="ipad-container">
    						<img src="<?=template_user1_path?>/assets/img/sections/ipad.png" />
    					</div>
    				</div>

                    <div class="col-md-4 offset-1">
    		           	<div class="info info-horizontal">
    						<div class="icon icon-info">
    							<i class="nc-icon nc-atom" aria-hidden="true"></i>
    						</div>
    						<div class="description">
    							<h4 class="info-title">For Developers</h4>
    							<p>The moment you use Paper Kit, you know you’ve never felt anything like it. With a single use, is's a powerfull UI Kit</p>
    						</div>
    		        	</div>

    					<div class="info info-horizontal">
    						<div class="icon icon-success">
    							<i class="nc-icon nc-ruler-pencil" aria-hidden="true"></i>
    						</div>
    						<div class="description">
    							<h4 class="info-title">For Designers Only</h4>
    							<p>The moment you use Paper Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before.</p>
    						</div>
    					</div>
                        <div class="info info-horizontal">
                            <div class="icon icon-danger">
                                <i class="nc-icon nc-tie-bow" aria-hidden="true"></i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Beautiful Examples</h4>
                                <p>Speed up your development time or get inspired with the large number of example pages.</p>
                            </div>
                        </div>
				    </div>
                </div>
            </div>
        </div>


    <!--     *********     FEATURES 5      *********      -->
    

	    <!-- <div class="features-5 section-image" style="background-image: url('assets/img/sections/the-how-photographer.jpg')">
    		<div class="container">
                <div class="row">
                    <div class="ml-auto mr-auto">
                        <h2 class="title text-center">Your life will be much easier</h2>
                    </div>
                </div>
    			<div class="row">
    				<div class="col-sm-5 ml-auto">
    					<div class="info">
    						<div class="icon">
    							<i class="nc-icon nc-atom" aria-hidden="true"></i>
    						</div>
    						<h4 class="title">For Developers</h4>
    						<p>While everyone technically has the feature now, that doesn’t mean you’ll see it all the time. But in this case, the feature wasn’t just randomly A/B tested.</p>
    					</div>
    				</div>

    				<div class="col-sm-5 mr-auto">
    					<div class="info">
    						<div class="icon">
    							<i class="nc-icon nc-ruler-pencil" aria-hidden="true"></i>
    						</div>
    						<h4 class="title">For Designers</h4>
    						<p>Loveflutter has actually been around for a while, pivoting from matches based on shared interests (innovative!) to now focus on analyzing.</p>
    					</div>
    				</div>
    			</div>

    			<div class="row bottom-line">
    				<div class="col-sm-5 ml-auto">
    					<div class="info">
    						<div class="icon">
    							<i class="nc-icon nc-paper" aria-hidden="true"></i>
    						</div>
    						<h4 class="title">Example Pages Included</h4>
    						<p>As for the user backlash, it comes to the challenges faces in building features to aid newcomers, which can impact its growth and bottom line.</p>
    					</div>
    				</div>

    				<div class="col-sm-5 mr-auto">
    					<div class="info">
    						<div class="icon">
    							<i class="nc-icon nc-time-alarm" aria-hidden="true"></i>
    						</div>
    						<h4 class="title">Save Time</h4>
    						<p>The feature itself had been developed via experimental account, where it had tested how to better personalize its service to end users.</p>
    					</div>
    				</div>
    			</div>
    		</div>
        </div> -->
    
    
    </div>


    <div class="cd-section section-white" id="blog">

    <!--     *********     BLOGS 1      *********      -->
        <div class="blog-1" id="blog-1">
            <div class="container">
    			<div class="row">
    				<div class="col-md-10 ml-auto mr-auto">
    					<h2 class="title">Latest Blogposts</h2>
    					<br />
    					<div class="card card-plain card-blog">
    						<div class="row">
    							<div class="col-md-5">
    								<div class="card-image">
    									<img class="img" src="<?=template_user1_path?>/assets/img/sections/stephanie-krist.jpg" />
    								</div>
    							</div>
    							<div class="col-md-7">
                                    <div class="card-body">
                                        <h6 class="card-category text-info">Enterprise</h6>
        								<h3 class="card-title">
        									<a href="#pablo">The four waves of augmented reality</a>
        								</h3>
        								<p class="card-description">
        									Sharing processing, display and sensors across smartphones and tethered smartglasses gives you two batteries, each powering fewer individual systems. If they’re connected by a cable, this could give a healthy bump to battery life — and… <a href="#pablo"> Read More </a>
        								</p>
        								<p class="author">
        									by <a href="#pablo"><b>Tim Merel</b></a>, 11 hours ago
        								</a>
                                    </div>

    							</div>
    						</div>
    					</div>

    					<div class="card card-plain card-blog">
    						<div class="row">
    							<div class="col-md-7">
                                    <div class="card-body">
        								<h6 class="card-category text-danger">
        									<i class="fa fa-free-code-camp" aria-hidden="true"></i> Trending
        								</h6>
        								<h3 class="card-title">
        									<a href="#pablo">Okoli connects you with tour guides around the world</a>
        								</h3>
        								<p class="card-description">
        									Okoli is a new service by developer Jack Deneut that aims to replace those ugly little cards you find in tourist hotels. The web app, which currently works in Prague, Budapest, Berlin and Paris, lets you reserve a nearly private tour with a professional guid — and… <a href="#pablo"> Read More </a>
        								</p>
        								<p class="author">
        									by <a href="#pablo"><b>John Biggs</b></a>, 3 seconds ago
        								</a>
                                    </div>
    							</div>
    							<div class="col-md-5">
    								<div class="card-image">
    									<img class="img" src="<?=template_user1_path?>/assets/img/sections/federico-beccari.jpg" />
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
        </div>

    <!--     *********     BLOGS 2      *********      -->

        <!-- <div class="blog-2 section section-gray">
            <div class="container">
    			<div class="row">
    				<div class="col-md-10 ml-auto mr-auto">
    					<h2 class="title">Latest Blogposts 2</h2>
    					<br />
    					<div class="row">
    						<div class="col-md-4">
    							<div class="card card-blog">
    								<div class="card-image">
    									<a href="#pablo">
    										<img class="img img-raised" src="<?=template_user1_path?>/assets/img/sections/miguel-perales.jpg" />
    									</a>
    								</div>
    								<div class="card-body">
    									<h6 class="card-category text-info">Enterprise</h6>
    									<h5 class="card-title">
    										<a href="#pablo">LinkedIn’s new desktop app arrives</a>
    									</h5>
    									<p class="card-description">
    										LinkedIn is today launching its official desktop application for Windows 10, allowing the professional social networking service to... <br/>
    									</p>
                                        <hr>
                                        <div class="card-footer">
                                            <div class="author">
        	                                    <a href="#pablo">
        	                                       <img src="<?=template_user1_path?>/assets/img/faces/ayo-ogunseinde-2.jpg" alt="..." class="avatar img-raised">
        	                                       <span>Mike John</span>
        	                                    </a>
        	                                </div>
                                            <div class="stats">
         	                                    <i class="fa fa-clock-o" aria-hidden="true"></i> 5 min read
         	                                </div>
        	                            </div>
    								</div>
    							</div>
    						</div>

    						<div class="col-md-4">
    							<div class="card card-blog">
    								<div class="card-image">
    									<a href="#pablo">
    										<img class="img img-raised" src="<?=template_user1_path?>/assets/img/sections/roger-keller.jpg" />
    									</a>
    								</div>
    								<div class="card-body">
    									<h6 class="card-category text-success">
    										Startups
    									</h6>
    									<h5 class="card-title">
    										<a href="#pablo">MIT’s Cheetah 3 robot is built to save lives</a>
    									</h5>
    									<p class="card-description">
    										The latest version of MIT’s Cheetah robot made its stage debut today at TC Sessions: Robotics in Cambridge, Mass. It’s a familiar project... <br/>
    									</p>
                                        <hr>
                                        <div class="card-footer">
                                            <div class="author">
        	                                    <a href="#pablo">
        	                                       <img src="<?=template_user1_path?>/assets/img/faces/kaci-baum-2.jpg" alt="..." class="avatar img-raised">
        	                                       <span>Nickie Kelly</span>
        	                                    </a>
        	                                </div>
                                            <div class="stats">
         	                                    <i class="fa fa-clock-o" aria-hidden="true"></i> 5 min read
         	                                </div>
        	                            </div>
    								</div>
    							</div>
    						</div>

    						<div class="col-md-4">
    							<div class="card card-blog">
    								<div class="card-image">
    									<a href="#pablo">
    										<img class="img img-raised" src="<?=template_user1_path?>/assets/img/sections/joshua-earlesz.jpg" />
    									</a>
    								</div>

    								<div class="card-body">
    									<h6 class="card-category text-danger">
    										<i class="fa fa-free-code-camp" aria-hidden="true"></i> Enterprise
    									</h6>
    									<h5 class="card-title">
    										<a href="#pablo">Lionel Richie says “Hello” to startup investors</a>
    									</h5>
    									<p class="card-description">
    										Because developing a doctor-on-demand service that would allow personalized medical visits, booked through an app on a user’s phone is... <br/>
    									</p>
                                        <hr>
                                        <div class="card-footer">
                                            <div class="author">
        	                                    <a href="#pablo">
        	                                       <img src="<?=template_user1_path?>/assets/img/faces/erik-lucatero-2.jpg" alt="..." class="avatar img-raised">
        	                                       <span>Mike John</span>
        	                                    </a>
        	                                </div>
                                            <div class="stats">
         	                                    <i class="fa fa-clock-o" aria-hidden="true"></i> 5 min read
         	                                </div>
        	                            </div>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
		    </div>
        </div> -->


    <!--     *********     BLOGS 3      *********      -->
        <!-- <div class="blog-3">
            <div class="container">
    			<div class="row">
    				<div class="col-md-10 ml-auto mr-auto">
    					<h2 class="title">Latest Blogposts 3</h2>
    					<br />
    					<div class="card card-plain card-blog">
    						<div class="row">
    							<div class="col-md-4">
    								<div class="card-image">
    									<img class="img" src="<?=template_user1_path?>/assets/img/sections/jeff-sheldon.jpg" />
    								</div>
    							</div>
    							<div class="col-md-8">
                                    <div class="card-body">
                                        <h6 class="card-category text-info">Enterprise</h6>
        								<h3 class="card-title">
        									<a href="#pablo">SoundCloud says it’s going to survive, but how?</a>
        								</h3>
        								<p class="card-description">
        									No matter what happens — funding versus acquisition versus who knows what — Ljung says SoundCloud is not going away “anytime in the foreseeable future.” I hope that’s true, but I can’t help but feel a bit skeptical. — and… <a href="#pablo"> Read More </a>
        								</p>
        								<p class="author">
        									by <a href="#pablo"><b>Megan Rose Dickey</b></a>, 11 days ago
        								</a>
                                    </div>
    							</div>
    						</div>
    					</div>

    					<div class="card card-plain card-blog">
    						<div class="row">
    							<div class="col-md-8">
                                    <div class="card-body">
                                        <h6 class="card-category text-danger">
        									<i class="fa fa-free-code-camp" aria-hidden="true"></i> Trending
        								</h6>
        								<h3 class="card-title">
        									<a href="#pablo">Uber acqui-hires social app studio Swipe Labs</a>
        								</h3>
        								<p class="card-description">
        									These issues might be making it a bit harder for Uber to hire right now in the competitive Silicon Valley job market. Acqui-hiring companies like it’s doing here with Swipe Labs lets it roll up a bunch of good talent — and… <a href="#pablo"> Read More </a>
        								</p>
        								<p class="author">
        									by <a href="#pablo"><b>Josh Constine</b></a>, 2 days ago
        								</a>
                                    </div>
    							</div>
                                <div class="col-md-4">
    								<div class="card-image">
    									<a href="#pablo">
    										<img class="img" src="<?=template_user1_path?>/assets/img/sections/rawpixel-comm.jpg" />
    									</a>
    								</div>
    							</div>
    						</div>
    					</div>

    					<div class="card card-plain card-blog">
    						<div class="row">
    							<div class="col-md-4">
    								<div class="card-image">
    									<a href="#pablo">
    										<img class="img" src="<?=template_user1_path?>/assets/img/sections/jeremy-yap.jpg" />
    									</a>
    								</div>
    							</div>
    							<div class="col-md-8">
                                    <div class="card-body">
                                        <h6 class="card-category text-success">
        									Startups
        								</h6>
        								<h3 class="card-title">
        									<a href="#pablo">HBO and Netflix lead this year’s nominations</a>
        								</h3>
        								<p class="card-description">
        									Streaming services once again top the list of this year’s Emmy nominations – another indicator of the shift in how today’s consumers are watching TV. HBO, which has been available. <a href="#pablo"> Read More </a>
        								</p>
        								<p class="author">
        									by <a href="#pablo"><b>Sarah Perez</b></a>, 14 Jul 2017
        								</a>
                                    </div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
		    </div>
        </div> -->


    <!--     *********     BLOGS 4      *********      -->
        <!-- <div class="blog-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="title text-center">Latest Blogposts 4</h2>
                        <br />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-plain card-blog text-center">
                            <div class="card-image">
                                <a href="#pablo">
                                    <img class="img img-raised" src="<?=template_user1_path?>/assets/img/sections/val-vesa.jpg" />
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-warning">Travel</h6>
                                <h3 class="card-title">
                                    <a href="#pablo">Learning different cultures through travel</a>
                                </h3>
                                <p class="card-description">
                                    A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot.
                                </p>
                                <br/>
                                <a href="#pablo" class="btn btn-warning btn-round"> Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-plain card-blog text-center">
                            <div class="card-image">
                                <a href="#pablo">
                                    <img class="img img-raised" src="<?=template_user1_path?>/assets/img/sections/rodrigo-ardilha.jpg" />
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-info">Travel</h6>
                                <h3 class="card-title">
                                    <a href="#pablo">Kick-Ass ways to disappear like a Ninja!</a>
                                </h3>
                                <p class="card-description">
                                    In the end, the judge ruled that Levandowski could be brought in and examined, but that each question asked to him would be vetted in advance and should have some basis in evidence.
                                </p>
                                <br/>
                                <a href="#pablo" class="btn btn-primary btn-round"> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-plain card-blog text-center">
                            <div class="card-image">
                                <a href="#pablo">
                                    <img class="img img-raised" src="<?=template_user1_path?>/assets/img/sections/federico-beccari.jpg" />
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-danger">Lifestyle</h6>
                                <h3 class="card-title">
                                    <a href="#pablo">We will breathe clean air and exercise</a>
                                </h3>
                                <p class="card-description">
                                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is too high for the beams and angle of the ceiling...
                                </p>
                                <br/>
                                <a href="#pablo" class="btn btn-danger btn-round"> Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-plain card-blog text-center">
                            <div class="card-image">
                                <a href="#pablo">
                                    <img class="img img-raised" src="<?=template_user1_path?>/assets/img/sections/pedro-lastra.jpg" />
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-success">Best Seller</h6>
                                <h3 class="card-title">
                                    <a href="#pablo">Readers Pick of The Month</a>
                                </h3>
                                <p class="card-description">
                                    “Raising equity is very expensive” In essence, it lets new consumer businesses apply to raise funding on its platform, and gives investors a new way to find and back those tricks to finance their growing businesses.
                                </p>
                                <br/>
                                <a href="#pablo" class="btn btn-success btn-round"> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div> -->


        <!--     *********     BLOGS 5      *********      -->

        <!-- <div class="blog-5">
            <div class="container">
                <h2 class="title text-center">Your Latest Blogpost 5</h2>
                <div class="row">
                    <div class="col-md-7">
                        <div class="card" data-background="image" style="background-image: url('assets/img/sections/uriel-soberanes.jpg')">
							<div class="card-body">
								<h6 class="card-category">
                                    <i class="fa fa-newspaper-o"></i> Lifestyle</h6>
								<a href="#pablo">
									<h3 class="card-title">Twenty-Something Travel - Virtual Wayfarer</h3>
								</a>
								<p class="card-description">
									As happens in most of these hearings so far, that argument led to a back-and-forth between Uber and Waymo’s lawyers over the pre-trial discovery...
								</p>
                                <div class="card-footer">
	                                <div class="author">
	                                    <a href="#pablo">
	                                       <img src="<?=template_user1_path?>/assets/img/faces/joe-gardner-2.jpg" alt="..." class="avatar img-raised">
	                                       <span>Lynne Barrett</span>
	                                    </a>
	                                </div>
	                            </div>
							</div>
						</div>
                    </div>
                    <div class="col-md-5">
                        <div class="card" data-background="image" style="background-image: url('assets/img/sections/forest-bg.jpg')">
							<div class="card-body">
								<h6 class="card-category">
                                    <i class="fa fa-newspaper-o"></i> Media</h6>
								<a href="#pablo">
									<h3 class="card-title">The aesthetic quality of a product</h3>
								</a>
								<p class="card-description">
									 It clarifies the product’s structure. Better still, it can make the product clearly express its function by making use of the user’s intuition.
								</p>
                                <div class="card-footer">
	                                <div class="author">
	                                    <a href="#pablo">
	                                       <img src="<?=template_user1_path?>/assets/img/faces/erik-lucatero-2.jpg" alt="..." class="avatar img-raised">
	                                       <span>Eric J Barnes</span>
	                                    </a>
	                                </div>
	                            </div>
							</div>
						</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card" data-background="image" style="background-image: url('<?=template_user1_path?>/assets/img/sections/pavel-kosov.jpg')">
							<div class="card-body">
								<h6 class="card-category">
                                    <i class="fa fa-newspaper-o"></i>Design</h6>
								<a href="#pablo">
									<h3 class="card-title">“Good Design”</h3>
								</a>
								<p class="card-description">
									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Jay-z...
								</p>
                                <div class="card-footer">
	                                <div class="author">
	                                    <a href="#pablo">
	                                       <img src="<?=template_user1_path?>/assets/img/faces/kaci-baum-2.jpg" alt="..." class="avatar img-raised">
	                                       <span>Patricia Beatty</span>
	                                    </a>
	                                </div>
	                            </div>
							</div>
						</div>
                    </div>
                    <div class="col-md-6">
                        <div class="card" data-background="image" style="background-image: url('<?=template_user1_path?>/assets/img/sections/ilya-yakover.jpg')">
							<div class="card-body">
								<h6 class="card-category">
                                    <i class="fa fa-newspaper-o"></i> Development</h6>
								<a href="#pablo">
									<h3 class="card-title">In need of a good development</h3>
								</a>
								<p class="card-description">
									Speed up your development time or get inspired with the large number of example pages. You can jump start your development with our pre-built example pages.
								</p>
                                <div class="card-footer">
	                                <div class="author">
	                                    <a href="#pablo">
	                                       <img src="<?=template_user1_path?>/assets/img/faces/clem-onojeghuo-3.jpg" alt="..." class="avatar img-raised">
	                                       <span>Robert Brandon</span>
	                                    </a>
	                                </div>
	                            </div>
							</div>
						</div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" data-background="image" style="background-image: url('assets/img/sections/vincent-versluis.jpg')">
							<div class="card-body">
								<h6 class="card-category">
                                    <i class="fa fa-newspaper-o"></i> Technology</h6>
								<a href="#pablo">
									<h3 class="card-title">A Little Adrift</h3>
								</a>
								<p class="card-description">
									But from the perspective of founders, there’s bound to be some confusion. In an ideal world we will see a meeting of the minds
								</p>
                                <div class="card-footer">
	                                <div class="author">
	                                    <a href="#pablo">
	                                       <img src="<?=template_user1_path?>/assets/img/faces/ayo-ogunseinde-2.jpg" alt="..." class="avatar img-raised">
	                                       <span>Ayo Michael</span>
	                                    </a>
	                                </div>
	                            </div>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div> -->


        <!--     *********     BLOGS 6     *********      -->
        <div class="blog">
            <div class="wrapper">
                <div class="main">
                    <div class="section section-white">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 ml-auto mr-auto text-center title">
                                    <h2>A place for storytelling</h2>
                                    <h3 class="title-uppercase"><small>Written by designers for designers</small></h3>
                                </div>
                            </div>
                            <div class="article">
                                <div class="row">
                                    <div class="col-md-8 ml-auto mr-auto">
                                        <div class="card card-blog card-plain text-center">
                                            <div class="card-image">
                                                <a href="#pablo">
                                                    <img class="img img-raised" src="<?=template_user1_path?>/assets/img/sections/bruno-abatti.jpg">
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-category">
                                                    <span class="label label-primary main-tag">Featured</span>
                                                </div>
                                                <a href="javascrip: void(0);">
                                                    <h3 class="card-title">My Review of Pitchfork’s ‘Indie 500’ Album Review</h3>
                                                </a>
                                                <div class="card-description">
                                                    <p>In the first sentence of Pitchfork’s review of my collaborative project with 9th Wonder, INDIE 500, a reviewer who is associated with music review site rhapsody.com writes about how I criticize and then distance myself from “celebrity straw men” with the line “celebrities be making money...</p>
                                                </div>
                                            </div>
                                            <button class="btn btn-danger btn-round btn-sm">Read more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="article">
                                <div class="row">
                                    <div class="col-md-8 ml-auto mr-auto">
                                        <div class="card card-blog card-plain text-center">
                                            <div class="card-image">
                                                <a href="#pablo">
                                                    <img class="img img-raised" src="<?=template_user1_path?>/assets/img/sections/federico-beccari.jpg">
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <div class="card-category">
                                                    <span class="label label-info main-tag">Popular</span>
                                                </div>
                                                <a href="javascrip: void(0);">
                                                    <h3 class="card-title">You Should Get Excited About Virtual Reality.</h3>
                                                    <h6 class="title-uppercase">October 20, 2016</h6>
                                                </a>
                                                <div class="card-description">
                                                    <p>In the first sentence of Pitchfork’s review of my collaborative project with 9th Wonder, INDIE 500, a reviewer who is associated with music review site rhapsody.com writes about how I criticize and then distance myself from “celebrity straw men” with the line “celebrities be making money...</p>
                                                </div>
                                            </div>
                                            <button class="btn btn-danger btn-round btn-sm">Read more</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="article">
                                <div class="col-md-8 ml-auto mr-auto">
                                    <div class="card card-blog card-plain text-center">
                                        <div class="card-image">
                                            <a href="#pablo">
                                                <img class="img img-raised" src="<?=template_user1_path?>/assets/img/sections/leonard-cotte.jpg">
                                                <p class="image-thumb">Photo by Cam Adams</p>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-category">
                                                <span class="label label-warning main-tag">Trending</span>
                                            </div>
                                            <a href="javascrip: void(0);">
                                                <h3 class="card-title">Make Somebody Nervous Before You Die</h3>
                                                <h6 class="title-uppercase">October 20, 2016</h6>
                                            </a>
                                            <div class="card-description">
                                                <p>You won’t find many concepts that are very useful or important if you insist on having a worldview that’s void of controversy, invulnerable to criticism, and incapable of making others feel confused...</p>
                                            </div>
                                        </div>
                                        <button class="btn btn-danger btn-round btn-sm">Read more</button>
                                    </div>
                                </div>

                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <button class="btn btn-link btn-default btn-move-left btn-sm"> <i class="fa fa-angle-left"></i> Older Posts</button>
                                    </div>
                                    <div class="pull-right">
                                        <button class="btn btn-link btn-default btn-move-right btn-sm">Newer Posts  <i class="fa fa-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--     *********     BLOGS 7     *********      -->

         <div class="blog-page">
                <!-- <div class="page-header" data-parallax="true" style="background-image: url('<?=template_user1_path?>/assets/img/sections/uriel-soberanes.jpg')">
                    <div class="filter"></div>
                    <div class="content-center">
                        <div class="motto">
                            <h1 class="title-uppercase text-center">Paper Kit</h1>
                            <h3 class="text-center">Make your mark with a new design.</h3>
                            <br/>
                            <a href="#pablo" class="btn btn-warning btn-round btn-lg">
                                <i class="fa fa-share-alt" aria-hidden="true"></i> Share Article
                            </a>
                        </div>
                    </div>
                </div> -->

                <div class="wrapper">
                    <div class="main">
                        <div class="section section-white">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 ml-auto mr-auto text-center title">
                                        <h2>A place for storytelling</h2>
                                        <h3 class="title-uppercase"><small>Written by designers for designers</small></h3>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10 ml-auto mr-auto">
                                        <div class="text-center">
                                            <span class="label label-warning main-tag">Trending</span>
                                            <a href="javascrip: void(0);"><h3 class="title">Make Somebody Nervous Before You Die</h3></a>
                                            <h6 class="title-uppercase">October 10, 2016</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-8 ml-auto mr-auto">
                                        <a href="javascrip: void(0);">
                                            <div class="card" data-radius="none" style="background-image: url('<?=template_user1_path?>/assets/img/sections/daniel-olahs.jpg');"></div>
                                            <p class="image-thumb text-center">Photo by Cam Adams</p>
                                        </a>
                                        <div class="article-content">
                                            <h4>Follow unconventional beliefs</h4>
                                            <p>
                                            You won’t find many concepts that are very useful or important if you insist on having a worldview that’s void of controversy, invulnerable to criticism, and incapable of making others feel confused.
                                            </p>

                                            <p>
                                                Interesting ideas are a reward for not being afraid to have unconventional beliefs.
                                                You can’t grow if you’re never willing to turn your back on the status quo. You can’t expand if you’re never willing to take an unorthodox stand. You can’t have a beautiful mind if you’re never willing to leave the crowd behind.
                                            </p>
                                            <blockquote class="blockquote">
                                            <p>"Don’t settle: Don’t finish crappy books. If you don’t like the menu, leave the restaurant. If you’re not on the right path, get off it."</p>
                                            <footer>- Chris Brogan in <cite title="Source Title">Trust Agents</cite></footer>
                                            </blockquote>
                                            <p>
                                            It’s easier to fear rejection than it is to open our minds to something new, but doing what’s easy doesn’t always equal doing what’s authentic, enriching, and meaningful.
                                            </p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a href="javascrip: void(0);">
                                                        <div class="card" data-radius="none" style="background-image: url('<?=template_user1_path?>/assets/img/sections/sebastien-gabrieles.jpg');">
                                                            </div> <!-- end card -->
                                                    </a>
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="javascrip: void(0);">
                                                        <div class="card" data-radius="none" style="background-image: url('<?=template_user1_path?>/assets/img/sections/john-towner.jpg');"></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <p>

                                            </p>
                                            <h4>Ideas Worth Mentioning</h4>
                                            <p>The stories, ideas and lessons are enough to fill a year’s worth of articles, but for now I wanted to share the ideas straight from the people creating the disruption. Below are my most impactful takeaways from the last few days: </p>
                                            <p><strong>No one belongs here more than me.</strong> When in doubt of your surroundings, this is the mantra.</p>
                                            <p><strong>The ultimate currency is being uncool.</strong> Be vulnerably you and watch how you connect.</p>
                                            <p><strong>The opposite of scarcity is enough.</strong> Be confident that if you’re doing work that matters to you, you are enough. There is no comparison.</p>
                                            <p><strong>Unused creativity is not benign</strong> – it turns into grief. Do something with it.</p>
                                            <p><strong>Get in the arena</strong>, show up, do your thing and don’t be afraid to get your ass kicked a little bit.</p>
                                            <p>Who you are will always trump who you think people want you to be.</p>
                                            <p><strong>You can’t control if someone loves you back.</strong> Love them anyway.</p>

                                            <h4><strong>Conclusions</strong></h4>
                                            <p>If all of your convictions can be expressed in a sound bite on mainstream television without provoking the slightest bit of anger or annoyance in anyone whatsoever, I think it’s safe to say that your outlook on life offers you very few opportunities for the remarkable.
                                            </p>
                                        </div>
                                        <br/>
                                        <div class="article-footer">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h5>Tags:</h5>
                                                        <span class="label label-default">Motivational</span>
                                                        <span class="label label-default">Newsletter</span>
                                                        <span class="label label-warning">Trending</span>
                                                    </div>
                                                    <div class="col-md-4 ml-auto">
                                                        <div class="sharing">
                                                            <h5>Spread the word</h5>
                                                            <button class="btn btn-just-icon btn-twitter">
                                                                <i class="fa fa-twitter"></i>
                                                            </button>
                                                            <button class="btn btn-just-icon btn-facebook">
                                                                <i class="fa fa-facebook"> </i>
                                                            </button>
                                                            <button class="btn btn-just-icon btn-google">
                                                                <i class="fa fa-google"> </i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="container">
                                            <div class="row">
                                                <div class="media">
                                                    <a class="pull-left" href="#paper-kit">
                                                        <div class="avatar big-avatar">
                                                            <img class="media-object" alt="64x64" src="<?=template_user1_path?>/assets/img/faces/kaci-baum-2.jpg">
                                                        </div>
                                                    </a>
                                                    <div class="media-body">
                                                        <h4 class="media-heading">Sophie Banks</h4>
                                                        <div class="pull-right">
                                                            <a href="#paper-kit" class="btn btn-default btn-round "> <i class="fa fa-reply"></i> Follow</a>
                                                        </div>
                                                        <p>Hello guys, nice to have you on the platform! There will be a lot of great stuff coming soon. We will keep you posted for the latest news.</p>
                                                        <p> Don't forget, You're Awesome!</p>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="comments media-area">
                                                    <h3 class="text-center">Comments</h3>
                                                    <div class="media">
                                                        <a class="pull-left" href="#paper-kit">
                                                            <div class="avatar">
                                                                <img class="media-object" alt="Tim Picture" src="<?=template_user1_path?>/assets/img/faces/clem-onojeghuo-3.jpg">
                                                            </div>
                                                        </a>
                                                        <div class="media-body">
                                                            <h5 class="media-heading">John Lincoln</h5>
                                                            <div class="pull-right">
                                                                <h6 class="text-muted">Sep 11, 11:54 AM</h6>
                                                                <a href="#paper-kit" class="btn btn-info btn-link pull-right "> <i class="fa fa-reply"></i> Reply</a>

                                                            </div>

                                                            <p>Hello guys, nice to have you on the platform! There will be a lot of great stuff coming soon. We will keep you posted for the latest news.</p>

                                                            <div class="media">
                                                                <a class="pull-left" href="#paper-kit">
                                                                    <div class="avatar">
                                                                        <img class="media-object" alt="64x64" src="<?=template_user1_path?>/assets/img/faces/clem-onojeghuo-2.jpg">
                                                                    </div>
                                                                </a>
                                                                <div class="media-body">
                                                                    <h5 class="media-heading">Erik P.</h5>
                                                                    <div class="pull-right">
                                                                        <h6 class="text-muted">Sep 11, 11:56 AM</h6>
                                                                        <a href="#paper-kit" class="btn btn-info btn-link pull-right "> <i class="fa fa-reply"></i> Reply</a>

                                                                    </div>
                                                                    <p>Hello guys, nice to have you on the platform! There will be a lot of great stuff coming soon. We will keep you posted for the latest news.</p>
                                                                    <p> Don't forget, You're Awesome!</p>

                                                                </div>
                                                            </div> <!-- end media -->
                                                        </div>
                                                    </div> <!-- end media -->
                                                    <div class="media">
                                                        <a class="pull-left" href="#paper-kit">
                                                            <div class="avatar">
                                                                <img class="media-object" alt="64x64" src="<?=template_user1_path?>/assets/img/faces/joe-gardner-2.jpg">
                                                            </div>
                                                        </a>
                                                        <div class="media-body">
                                                            <h5 class="media-heading">Joe</h5>
                                                            <div class="pull-right">
                                                                <h6 class="text-muted">Sep 11, 11:57 AM</h6>
                                                                <a href="#paper-kit" class="btn btn-info btn-link pull-right "> <i class="fa fa-reply"></i> Reply</a>

                                                            </div>
                                                            <p>Hello guys, nice to have you on the platform! There will be a lot of great stuff coming soon. We will keep you posted for the latest news.</p>
                                                            <p> Don't forget, You're Awesome!</p>
                                                        </div>
                                                    </div> <!-- end media -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="related-articles">
                                        <h3 class="title">Related articles</h3>
                                        <legend></legend>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <a href="pkp"><img src="<?=template_user1_path?>/assets/img/sections/damir-bosnjak.jpg" alt="Rounded Image" class="img-rounded img-responsive"></a>
                                                    <p class="blog-title">My Review of Pitchfork’s ‘Indie 500’ Album Review</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="pkp"><img src="<?=template_user1_path?>/assets/img/sections/por7o.jpg" alt="Rounded Image" class="img-rounded img-responsive"></a>
                                                    <p class="blog-title">Top Events This Month</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="pkp"><img src="<?=template_user1_path?>/assets/img/sections/jeff-sheldon.jpg" alt="Rounded Image" class="img-rounded img-responsive"></a>
                                                    <p class="blog-title">You Should Get Excited About Virtual Reality. Here’s Why.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>                     
    

    </div>

    <div class="cd-section section-white" id="teams">

    <!--     *********    TEAM 1     *********      -->
        <!-- <div class="team-1">
            <div class="container">
    			<div class="row">
    				<div class="col-md-8 ml-auto mr-auto text-center">
    					<h2 class="title">Our Stunning Team 1</h2>
    					<h5 class="description">This is the paragraph where you can write more details about your team. Keep you user engaged by providing meaningful information.</h5>
    				</div>
    			</div>
    			<div class="row">
    				<div class="col-md-3">
                        <div class="card card-profile card-plain">
                            <div class="card-avatar">
                                <a href="#avatar"><img src="<?=template_user1_path?>/assets/img/faces/clem-onojeghuo-3.jpg" alt="..."></a>
                            </div>
                            <div class="card-body">
                                <a href="#paper-kit">
                                    <div class="author">
                                        <h4 class="card-title">Henry Ford</h4>
                                        <h6 class="card-category text-muted">Product Manager</h6>
                                    </div>
                                </a>
                                <p class="card-description text-center">
                                Teamwork is so important that it is virtually impossible for you to reach the heights of your capabilities or make the money that you want without becoming very good at it.
                                </p>
                            </div>
                            <div class="card-footer text-center">
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-dribbble"><i class="fa fa-dribbble"></i></a>
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
    				</div>

    				<div class="col-md-3">
                        <div class="card card-profile card-plain">
                            <div class="card-avatar">
                                <a href="#avatar"><img src="<?=template_user1_path?>/assets/img/faces/joe-gardner-2.jpg" alt="..."></a>
                            </div>
                            <div class="card-body">
                                <a href="#paper-kit">
                                    <div class="author">
                                        <h4 class="card-title">Sophie West</h4>
                                        <h6 class="card-category text-muted">Designer</h6>
                                    </div>
                                </a>
                                <p class="card-description text-center">
                                A group becomes a team when each member is sure enough of himself and his contribution to praise the skill of the others. No one can whistle a symphony. It takes an orchestra to play it.
                                </p>
                            </div>
                            <div class="card-footer text-center">
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-dribbble"><i class="fa fa-dribbble"></i></a>
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
    				</div>

    				<div class="col-md-3">
                        <div class="card card-profile card-plain">
                            <div class="card-avatar">
                                <a href="#avatar"><img src="<?=template_user1_path?>/assets/img/faces/erik-lucatero-2.jpg" alt="..."></a>
                            </div>
                            <div class="card-body">
                                <a href="#paper-kit">
                                    <div class="author">
                                        <h4 class="card-title">Robert Orben</h4>
                                        <h6 class="card-category text-muted">Developer</h6>
                                    </div>
                                </a>
                                <p class="card-description text-center">
                                The strength of the team is each individual member. The strength of each member is the team. If you can laugh together, you can work together, silence isn’t golden, it’s deadly.
                                </p>
                            </div>
                            <div class="card-footer text-center">
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-dribbble"><i class="fa fa-dribbble"></i></a>
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
    				</div>

    				<div class="col-md-3">
                        <div class="card card-profile card-plain">
                            <div class="card-avatar">
                                <a href="#avatar"><img src="<?=template_user1_path?>/assets/img/faces/ayo-ogunseinde-2.jpg" alt="..."></a>
                            </div>
                            <div class="card-body">
                                <a href="#paper-kit">
                                    <div class="author">
                                        <h4 class="card-title">Patrick Lencioni</h4>
                                        <h6 class="card-category text-muted">Brand Manager</h6>
                                    </div>
                                </a>
                                <p class="card-description text-center">
                                Great teams do not hold back with one another. They are unafraid to air their dirty laundry. They admit their mistakes, their weaknesses and their concerns without fear of reprisal.
                                </p>
                            </div>
                            <div class="card-footer text-center">
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-dribbble"><i class="fa fa-dribbble"></i></a>
                                <a href="#pablo" class="btn btn-link btn-just-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
    				</div>
    			</div>
		    </div>
        </div> -->


    <!--     *********    TEAM 2     *********      -->
        <!-- <div class="team-2 section-image" style="background-image: url('assets/img/sections/jan-sendereks.jpg')">
            <div class="container">
    			<div class="row">
    				<div class="col-md-8 ml-auto mr-auto text-center">
    					<h2 class="title">The Executive Team 2</h2>
    					<h5 class="description">This is the paragraph where you can write more details about your team. Keep you user engaged by providing meaningful information.</h5>
    				</div>
    			</div>

    			<div class="row">
    				<div class="col-md-4">
    					<div class="card card-profile card-plain">
    						<div class="card-img-top">
    							<a href="#pablo">
    								<img class="img" src="<?=template_user1_path?>/assets/img/faces/kaci-baum-1.jpg" />
    							</a>
    						</div>
    						<div class="card-body">
    							<h4 class="card-title">Alec Thompson</h4>
    							<h6 class="card-category">Managing Partner</h6>
    							<div class="card-footer">
    								<a href="#pablo" class="btn btn-neutral btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
    								<a href="#pablo" class="btn btn-neutral btn-link btn-just-icon"><i class="fa fa-facebook"></i></a>
    								<a href="#pablo" class="btn btn-neutral btn-link btn-just-icon"><i class="fa fa-dribbble"></i></a>
    							</div>
    						</div>
    					</div>
    				</div>

    				<div class="col-md-4">
    					<div class="card card-profile card-plain">
    						<div class="card-img-top">
    							<a href="#pablo">
    								<img class="img" src="<?=template_user1_path?>/assets/img/faces/clem-onojeghuo-1.jpg" />
    							</a>
    						</div>
    						<div class="card-body">
    							<h4 class="card-title">George Lincoln</h4>
    							<h6 class="card-category">Backend Hacker</h6>

    							<div class="card-footer">
    								<a href="#pablo" class="btn btn-neutral btn-link btn-just-icon"><i class="fa fa-linkedin"></i></a>
    								<a href="#pablo" class="btn btn-neutral btn-link btn-just-icon"><i class="fa fa-facebook"></i></a>
    								<a href="#pablo" class="btn btn-neutral btn-link btn-just-icon"><i class="fa fa-dribbble"></i></a>
    							</div>
    						</div>
    					</div>
    				</div>

    				<div class="col-md-4">
    					<div class="card card-profile card-plain">
    						<div class="card-img-top">
    							<a href="#pablo">
    								<img class="img" src="<?=template_user1_path?>/assets/img/faces/joe-gardner-1.jpg" />
    							</a>
    						</div>
    						<div class="card-body">
    							<h4 class="card-title">Sophie West</h4>
    							<h6 class="card-category">Photographer</h6>

    							<div class="card-footer">
    								<a href="#pablo" class="btn btn-neutral btn-link btn-just-icon"><i class="fa fa-dribbble"></i></a>
    								<a href="#pablo" class="btn btn-neutral btn-link btn-just-icon"><i class="fa fa-twitter"></i></a>
                                    <a href="#pablo" class="btn btn-neutral btn-link btn-just-icon"><i class="fa fa-linkedin"></i></a>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
		    </div>
        </div> -->


    <!--     *********    TEAM 3     *********      -->
        <!-- <div class="team-3">
            <div class="container">
    			<div class="row">
    				<div class="col-md-8 ml-auto mr-auto text-center">
    					<h2 class="title">The Executive Team 3</h2>
    					<h5 class="description">This is the paragraph where you can write more details about your team. Keep you user engaged by providing meaningful information.</h5>
    				</div>
    			</div>
                <div class="space-top"></div>
    			<div class="row">
    				<div class="col-md-6">
    					<div class="card card-profile card-plain">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="card-img-top">
                                        <a href="#pablo">
                                            <img class="img" src="<?=template_user1_path?>/assets/img/faces/clem-onojeghuo-3.jpg" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body text-left">
                                        <h4 class="card-title">Alec Thompson</h4>
                                        <h6 class="card-category">Founder</h6>
                                        <p class="card-description">
                                            Individual commitment to a group effort – that’s what makes a team work, a society work...
                                        </p>
                                        <div class="card-footer pull-left">
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-facebook"><i class="fa fa-facebook"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-google"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
    					</div>
    				</div>

    				<div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="card-img-top">
                                        <a href="#pablo">
                                            <img class="img" src="<?=template_user1_path?>/assets/img/faces/ayo-ogunseinde-2.jpg" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body text-left">
                                        <h4 class="card-title">Ethan Smith</h4>
                                        <h6 class="card-category">Founder</h6>
                                        <p class="card-description">
                                            Don't be scared of the truth because we need to restart the human foundation in truth...
                                        </p>
                                        <div class="card-footer pull-left">
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-pinterest"><i class="fa fa-pinterest"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
    					</div>
    				</div>

    				<div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="card-img-top">
                                        <a href="#pablo">
                                            <img class="img" src="<?=template_user1_path?>/assets/img/faces/clem-onojeghuo-2.jpg" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body text-left">
                                        <h4 class="card-title">Lucas Andrew</h4>
                                        <h6 class="card-category">Web Designer</h6>
                                        <p class="card-description">
                                            I love you like Kanye loves Kanye. Don't be scared of the truth. Kanye loves himself like Kanye loves Kanye.
                                        </p>
                                        <div class="card-footer pull-left">
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-youtube"><i class="fa fa-youtube"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-instagram"><i class="fa fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
    					</div>
    				</div>

    				<div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="card-img-top">
                                        <a href="#pablo">
                                            <img class="img" src="<?=template_user1_path?>/assets/img/faces/kaci-baum-2.jpg" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body text-left">
                                        <h4 class="card-title">Sophie West</h4>
                                        <h6 class="card-category">Backend Hacker</h6>
                                        <p class="card-description">
                                            It is literally true that you can succeed best and quickest by helping others to succeed because they care about.
                                        </p>
                                        <div class="card-footer pull-left">
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-instagram"><i class="fa fa-instagram"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
    					</div>
    				</div>
    			</div>
    		</div>
        </div> -->


    <!--     *********    TEAM 4     *********      -->
        <!-- <div class="team-4 section-image" style="background-image: url('assets/img/sections/fabio-mangione.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h2 class="title">The Executive Team 4</h2>
                        <h5 class="description">This is the paragraph where you can write more details about your team. Keep you user engaged by providing meaningful information.</h5>
                        <br />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-profile">
                            <div class="card-body">
                                <div class="card-avatar">
                                    <a href="#avatar">
                                        <img src="<?=template_user1_path?>/assets/img/faces/ayo-ogunseinde-2.jpg" alt="..."/>
                                        <h4 class="card-title">Eric Thomson</h4>
                                    </a>
                                </div>
                                <p class="card-description text-center">
                                    A group becomes a team when each member is sure enough of himself and his contribution to praise the skill of the others. No one can whistle a symphony. It takes an orchestra to play it.
                                </p>
                            </div>
                            <div class="card-footer text-center">
                                <a href="#pablo" class="btn btn-just-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-dribbble"><i class="fa fa-dribbble"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-profile">
                            <div class="card-body">
                                <div class="card-avatar">
                                    <a href="#avatar">
                                        <img src="<?=template_user1_path?>/assets/img/faces/joe-gardner-2.jpg" alt="..."/>
                                        <h4 class="card-title">Sophia West</h4>
                                    </a>
                                </div>
                                <p class="card-description text-center">
                                    The strength of the team is each individual member. The strength of each member is the team. If you can laugh together, you can work together, silence isn’t golden, it’s deadly.
                                </p>
                            </div>
                            <div class="card-footer text-center">
                                <a href="#pablo" class="btn btn-just-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-dribbble"><i class="fa fa-dribbble"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-pinterest"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-profile">
                            <div class="card-body">
                                <div class="card-avatar">
                                    <a href="#avatar">
                                        <img src="<?=template_user1_path?>/assets/img/faces/clem-onojeghuo-2.jpg" alt="..."/>
                                        <h4 class="card-title">Lucas Andrew</h4>
                                    </a>
                                </div>
                                <p class="card-description text-center">
                                    Great teams do not hold back with one another. They are unafraid to air their dirty laundry. They admit their mistakes, their weaknesses and their concerns without fear of reprisal.
                                </p>
                            </div>
                            <div class="card-footer text-center">
                                <a href="#pablo" class="btn btn-just-icon btn-youtube"><i class="fa fa-youtube"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->


    <!--     *********    TEAM 5     *********      -->
        <div class="team-5 section-image" style="background-image: url('<?=template_user1_path?>/assets/img/sections/martin-knize.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h2 class="title">The Executive Team 5</h2>
                        <h5 class="description">This is the paragraph where you can write more details about your team. Keep you user engaged by providing meaningful information.</h5>
                    </div>
                </div>
                <div class="row">
    				<div class="col-md-6">
    					<div class="card card-profile card-plain">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="card-img-top">
                                        <a href="#pablo">
                                            <img class="img" src="<?=template_user1_path?>/assets/img/faces/erik-lucatero-2.jpg" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body text-left">
                                        <h4 class="card-title">Andrew Carnegie</h4>
                                        <h6 class="card-category">Project Manager</h6>
                                        <p class="card-description">
                                            If a team is to reach its potential, each player must be willing to subordinate his personal goals.
                                        </p>
                                        <div class="card-footer">
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-neutral"><i class="fa fa-twitter"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-neutral"><i class="fa fa-facebook"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-neutral"><i class="fa fa-google-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
    					</div>
    				</div>

    				<div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="card-img-top">
                                        <a href="#pablo">
                                            <img class="img" src="<?=template_user1_path?>/assets/img/faces/kaci-baum-2.jpg" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body text-left">
                                        <h4 class="card-title">Alec Thompson</h4>
                                        <h6 class="card-category">Founder</h6>
                                        <p class="card-description">
                                            Interdependent people combine their own efforts with the efforts of others to achieve their greatest success.
                                        </p>
                                        <div class="card-footer">
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-neutral"><i class="fa fa-linkedin"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-neutral"><i class="fa fa-dribbble"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-neutral"><i class="fa fa-pinterest"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
    					</div>
    				</div>

    				<div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="card-img-top">
                                        <a href="#pablo">
                                            <img class="img" src="<?=template_user1_path?>/assets/img/faces/clem-onojeghuo-3.jpg" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body text-left">
                                        <h4 class="card-title">Gine Andrew</h4>
                                        <h6 class="card-category">Web Designer</h6>
                                        <p class="card-description">
                                            When he took time to help the man up the mountain, lo, he scaled it himself. Sticks in a bundle are unbreakable.
                                        </p>
                                        <div class="card-footer">
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-neutral"><i class="fa fa-youtube"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-neutral"><i class="fa fa-twitter"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-neutral"><i class="fa fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
    					</div>
    				</div>

    				<div class="col-md-6">
                        <div class="card card-profile card-plain">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="card-img-top">
                                        <a href="#pablo">
                                            <img class="img" src="<?=template_user1_path?>/assets/img/faces/clem-onojeghuo-2.jpg" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body text-left">
                                        <h4 class="card-title">George West</h4>
                                        <h6 class="card-category">Backend Hacker</h6>
                                        <p class="card-description">
                                            I love you like Kanye loves Kanye. Don't be scared of the truth because we need to restart the human foundation.
                                        </p>
                                        <div class="card-footer">
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-neutral"><i class="fa fa-linkedin"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-neutral"><i class="fa fa-instagram"></i></a>
                                            <a href="#pablo" class="btn btn-just-icon btn-link btn-neutral"><i class="fa fa-dribbble"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
    					</div>
    				</div>
    			</div>
            </div>
        </div>
    </div>


    <div class="cd-section section-white" id="projects">

    <!--     *********    PROJECTS 1     *********      -->

    	<div class="projects-1">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-8 ml-auto mr-auto text-center">
    					<h2 class="title">Some of Our Awesome Products - 1</h2>
                        <h5 class="description"> This is the paragraph where you can write more details about your projects. Keep you user engaged by providing meaningful information.</h5>
    				</div>
                    <div class="project-pills">
                        <ul class="nav nav-pills nav-pills-danger">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#pill-1" role="tab">All categories</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#pill-2" role="tab">Marketing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#pill-3" role="tab">Development</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#pill-4" role="tab">Productivity</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#pill-5" role="tab">Web Design</a>
                            </li>
                        </ul>
                        <!-- Pill panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="pill-1" role="tabpanel"></div>
                            <div class="tab-pane" id="pill-2" role="tabpanel"></div>
                            <div class="tab-pane" id="pill-3" role="tabpanel"></div>
                            <div class="tab-pane" id="pill-4" role="tabpanel"></div>
                            <div class="tab-pane" id="pill-5" role="tabpanel"></div>
                            <div class="tab-pane" id="pill-6" role="tabpanel"></div>
                        </div>
                    </div>
    			</div>
                <div class="space-top"></div>
    			<div class="row">
                    <div class="col-md-5">
						<div class="card" data-background="image" style="background-image: url('<?=template_user1_path?>/assets/img/sections/pavel-kosov.jpg')">
							<div class="card-body">
								<h6 class="card-category">Productivy Apps</h6>
								<a href="#pablo">
									<h3 class="card-title">The Best Productivity Apps</h3>
								</a>
								<p class="card-description">
									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
								</p>
                                <br/>
                                <a href="#pablo" class="btn btn-danger btn-round">
                                    <i class="fa fa-book" aria-hidden="true"></i> Read Article
                                </a>
							</div>
						</div>
					</div>
                    <div class="col-md-7">
						<div class="card" data-background="image" style="background-image: url('<?=template_user1_path?>/assets/img/sections/gukhwa-jang.jpg')">
							<div class="card-body">
								<h6 class="card-category">Materials</h6>
								<h3 class="card-title">US venture investment ticks up</h3>
								<p class="card-description">
									Venture investment in U.S. startups rose sequentially in the second quarter of 2017, boosted by large, late-stage financings and a few outsized early-stage rounds....
								</p>
                                <br/>
								<a href="#pablo" class="btn btn-primary btn-round">
                                    <i class="fa fa-book" aria-hidden="true"></i> Read Article
								</a>
							</div>
						</div>
					</div>
    			</div>
                <div class="row">
                    <div class="col-md-7">
						<div class="card" data-background="image" style="background-image: url('<?=template_user1_path?>/assets/img/sections/joshua-stannard.jpg')">
							<div class="card-body">
								<h6 class="card-category">Productivy Apps</h6>
								<a href="#pablo">
									<h3 class="card-title">MateLabs mixes machine</h3>
								</a>
								<p class="card-description">
									If you’re not familiar with IFTTT, it’s an automation tool for creating your own if/then statements without any programming knowledge. The service makes it possible...
								</p>
                                <br/>
                                <a href="#pablo" class="btn btn-info btn-round">
                                    <i class="fa fa-book" aria-hidden="true"></i> Read Article
								</a>
							</div>
						</div>
					</div>
                    <div class="col-md-5">
						<div class="card" data-background="image" style="background-image: url('<?=template_user1_path?>/assets/img/sections/ilya-yakover.jpg')">
							<div class="card-body">
								<h6 class="card-category">Materials</h6>
								<h3 class="card-title">How to find the ‘right’ contacts.</h3>
								<p class="card-description">
									Boom, the invitations start flying and Brella makes it easy to accept/decline, schedule a time and reserve a meeting space in Disrupt’s white-glove CrunchMatch meeting...
								</p>
                                <br/>
								<a href="#pablo" class="btn btn-warning btn-round">
                                    <i class="fa fa-book" aria-hidden="true"></i> Read Article
								</a>
							</div>
						</div>
					</div>
    			</div>
    		</div>
    	</div>


        <!--     *********    PROJECTS 2     *********      -->

    	<!-- <div class="projects-2 section section-dark">

    		<div class="container">
    			<div class="row">
    				<div class="col-md-8 ml-auto mr-auto text-center">
    					<h6 class="text-muted">Our work</h6>
    					<h2 class="title">Some of Our Awesome Products - 2</h2>
    					<h5 class="description">This is the paragraph where you can write more details about your projects. Keep you user engaged by providing meaningful information.</h5>
    				</div>
    			</div>
                <div class="space-top"></div>
    			<div class="row">
    				<div class="col-md-4">
                        <div class="card card-plain">
    						<div class="card-img-top">
    							<a href="http://www.creative-tim.com/product/paper-kit">
    								<img class="img" src="<?=template_user1_path?>/assets/img/sections/opt_pk_thumbnail.jpg" />
    							</a>
    						</div>
    						<div class="card-body">
    							<a href="http://www.creative-tim.com/product/paper-kit" target="_blank"><h4 class="card-title">Paper Kit Free</h4></a>
    							<h6 class="card-category text-muted">Free Ui kit</h6>
                                <p class="card-description">
    								Paper Kit is a free Bootstrap UI kit that can get you going in a new creative direction! To say the least, it's different since it's not material, flat or iOS inspired.
    							</p>
    						</div>
    					</div>
    				</div>

    				<div class="col-md-4">
                        <div class="card card-plain">
    						<div class="card-img-top">
    							<a href="https://www.creative-tim.com/product/light-bootstrap-dashboard-pro">
    								<img class="img" src="<?=template_user1_path?>/assets/img/sections/opt_lbd_pro_new_thumbnail.jpg" />
    							</a>
    						</div>
    						<div class="card-body">
    							<a href="https://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank"><h4 class="card-title">Light Bootstrap Dashboard </h4></a>
    							<h6 class="card-category text-muted">Premium template</h6>
                                <p class="card-description">
    								Light Bootstrap Dashboard PRO is a Bootstrap Admin Theme designed to look simple and beautiful. Forget about boring dashboards and grab yourself a copy to kickstart new project!
    							</p>
    						</div>
    					</div>
    				</div>

    				<div class="col-md-4">
                        <div class="card card-plain">
    						<div class="card-img-top">
    							<a href="https://www.creative-tim.com/product/get-shit-done-pro">
    								<img class="img" src="<?=template_user1_path?>/assets/img/sections/opt_gsdk_new_thumbnail.jpg" />
    							</a>
    						</div>
    						<div class="card-body">
    							<a href="https://www.creative-tim.com/product/get-shit-done-pro" target="_blank"><h4 class="card-title">Get Shit Done Kit Pro</h4></a>
    							<h6 class="card-category text-muted">Premium UI kit</h6>
                                <p class="card-description">
    								Get Shit Done Kit Pro it's a Bootstrap Kit that comes with a huge number of customisable components. They are pixel perfect, light and easy to use and combine with other elements.
    							</p>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div> -->


    	<!--     *********    PROJECTS 3     *********      -->

    	<div class="projects-3" id="projects-3">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-8 ml-auto mr-auto text-center">
                        <div class="space-top"></div>
    					<h6 class="category">Our work</h6>
    					<h2 class="title">Some of Our Awesome Projects - 3</h2>
    				</div>
    			</div>

    			<div class="row">
                    <div class="col-md-4">
                        <div class="card card-profile card-plain">
                            <div class="card-img-top">
                                <a href="http://www.creative-tim.com/product/paper-kit">
                                    <img class="img" src="<?=template_user1_path?>/assets/img/sections/angelo-pantazis.jpg" />
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category">Productivity tools</h6>
                                <h4 class="card-title">Beautiful Desktop for Designers</h4>
                                <p class="card-description">
                                    As this technology matures it will be cool to see what hackers are able to do with it.
                                </p>
                            </div>
                        </div>
    				</div>

    				<div class="col-md-4 ">
                        <div class="card card-profile card-plain">
                            <div class="card-img-top">
                                <a href="http://www.creative-tim.com/product/paper-kit">
                                    <img class="img" src="<?=template_user1_path?>/assets/img/sections/patrick-tomasso.jpg" />
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category">Web Design</h6>
                                <h4 class="card-title">Famous Website Redesign Implementation</h4>
                                <p class="card-description">
                                    Streaming services once again top the list of this year’s Emmy nominations
                                </p>
                            </div>
                        </div>
    				</div>

                    <div class="col-md-4">
                        <div class="card card-profile card-plain">
                            <div class="card-img-top">
                                <a href="http://www.creative-tim.com/product/paper-kit">
                                    <img class="img" src="<?=template_user1_path?>/assets/img/sections/luke-chesser.jpg" />
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category">Marketing tools</h6>
                                <h4 class="card-title">The Best Productivity Applications</h4>
                                <p class="card-description">
                                    Dietary supplements don’t need approval from the Food and Drug Administration.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-profile card-plain">
                            <div class="card-img-top">
                                <a href="http://www.creative-tim.com/product/paper-kit">
                                    <img class="img" src="<?=template_user1_path?>/assets/img/sections/rawpixel-coms.jpg" />
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category">Website</h6>
                                <h4 class="card-title">Behance Redesign</h4>
                                <p class="card-description">
                                    The HDR rollout is being enabled via support from two major studio partners.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-profile card-plain">
                            <div class="card-img-top">
                                <a href="http://www.creative-tim.com/product/paper-kit">
                                    <img class="img" src="<?=template_user1_path?>/assets/img/sections/patrick-tomasso.jpg" />
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category">Android App</h6>
                                <h4 class="card-title">Analytics for Android</h4>
                                <p class="card-description">
                                    Google did not offer an estimate as to when HDR support reaches its other global markets.
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="card card-profile card-plain">
                            <div class="card-img-top">
                                <a href="http://www.creative-tim.com/product/paper-kit">
                                    <img class="img" src="<?=template_user1_path?>/assets/img/sections/rawpixel-coms.jpg" />
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category">Material</h6>
                                <h4 class="card-title">How to find the contacts.</h4>
                                <p class="card-description">
                                    Boom, the invitations start flying and Brella makes it easy to accept/decline
                            </div>
                        </div>
                    </div>
    			</div>
    		</div>
    	</div>

    	<!--     *********    PROJECTS 4     *********      -->

    	<!-- <div class="project-4 section section-dark">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-8 ml-auto mr-auto text-center">
    					<h2 class="title">Some of Our Awesome Projects - 4</h2>
    					<h5 class="description">This is the paragraph where you can write more details about your projects. Keep you user engaged by providing meaningful information.</h5>
    				</div>
    			</div>
                <div class="space-top"></div>
    			<div class="row">
    				<div class="col-md-5 ml-auto">
                        <div class="card" data-background="image" style="background-image: url('assets/img/sections/sebastien-gabrieles.jpg')">
                            <div class="card-icon">
								<i class="nc-icon nc-mobile"></i>
							</div>
						</div>
    				</div>

    				<div class="col-md-5 mr-auto">
                        <div class="card card-plain">
                            <div class="card-body">
                                <h6 class="card-category">Technology</h6>
                                <a href="#pablo">
                                    <h3 class="card-title">The need of a great product</h3>
                                </a>
                                <p class="card-description">Artificial intelligence-focused investment funds are a dime a dozen these days. Everyone knows there’s money to be made from AI, but to capture value, good VCs know they need to back products and not technologies.</p>

                                <div class="card-footer">
                                    <a href="#pablo" class="btn btn-link btn-neutral">
                                        <i class="fa fa-book" aria-hidden="true"></i> Read More
                                    </a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-neutral">
                                        <i class="fa fa-apple" aria-hidden="true"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-neutral">
                                        <i class="fa fa-android" aria-hidden="true"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-neutral">
                                        <i class="fa fa-windows" aria-hidden="true"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
    				</div>
    			</div>
    			<br/><hr /><br/>
    			<div class="row">
    				<div class="col-md-5 ml-auto">
    					<div class="card card-plain">
                            <div class="card-body">
								<h6 class="card-category">Design</h6>
                                <a href="#pablo">
									<h3 class="card-title">The aesthetic quality of a product</h3>
								</a>
                                <p class="card-description">Eventually, the data collected from the grant program could allow the two to play a bit of machine learning moneyball — valuing machine learning engineers without traditional metrics (like having a PhD from Stanford)...</p>

                                <div class="card-footer">
                                    <a href="#pablo" class="btn btn-link btn-neutral">
                                        <i class="fa fa-book" aria-hidden="true"></i> Read More
                                    </a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-neutral">
                                        <i class="fa fa-apple" aria-hidden="true"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-neutral">
                                        <i class="fa fa-android" aria-hidden="true"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-neutral">
                                        <i class="fa fa-windows" aria-hidden="true"></i>
                                    </a>
                                </div>
							</div>
    					</div>
    				</div>

                    <div class="col-md-5 mr-auto">
                        <div class="card" data-background="image" style="background-image: url('assets/img/sections/john-towner.jpg')">
                            <div class="card-icon">
								<i class="nc-icon nc-controller-modern"></i>
							</div>
						</div>
    				</div>
    			</div>
    		</div>
    	</div> -->
    </div>


    <div class="cd-section section-white" id="pricing">

    <!--     *********    PRICING 1     *********      -->
        <!-- <div class="pricing-1 section">
            <div class="container">
    			<div class="row">
    				<div class="col-md-6 ml-auto mr-auto text-center">
    					<h2 class="title">Pick the best plan for you</h2>
    					<h5 class="description">You have Free Unlimited Updates and Premium Support on each package.</h5>
    				</div>
    			</div>
                <div class="space-top"></div>
    			<div class="row">
                    <div class="col-md-3">
                        <div class="card card-pricing" data-color="orange">
							<div class="card-body">
								<div class="card-icon">
									<span class="icon-simple"><i class="nc-icon nc-basket"></i></span>
								</div>
								<h3 class="card-title">$199</h3>

								<p class="card-description">
									This is good if your company size is between 5 and 20 employees.
								</p>
                                <div class="card-footer">
                                    <a href="#pablo" class="btn btn-neutral btn-round">Choose Plan</a>
                                </div>
							</div>
						</div>
				    </div>

                    <div class="col-md-3">
                        <div class="card card-pricing" data-color="yellow">
							<div class="card-body">
								<div class="card-icon">
									<span class="icon-simple"><i class="nc-icon nc-watch-time"></i></span>
								</div>
								<h3 class="card-title">$249</h3>

								<p class="card-description">
									This is good if your company size is between 21 and 59 employees.
								</p>
                                <div class="card-footer">
                                    <a href="#pablo" class="btn btn-neutral btn-round">Choose Plan</a>
                                </div>
							</div>
						</div>
				    </div>

                    <div class="col-md-3">
                        <div class="card card-pricing" data-color="green">
							<div class="card-body">
								<div class="card-icon">
									<span class="icon-simple"><i class="nc-icon nc-settings"></i></span>
								</div>
								<h3 class="card-title">$359</h3>

								<p class="card-description">
									This is good if your company size is between 60 and 159 employees.
								</p>
                                <div class="card-footer">
                                    <a href="#pablo" class="btn btn-neutral btn-round">Choose Plan</a>
                                </div>
							</div>
						</div>
				    </div>

                    <div class="col-md-3">
                        <div class="card card-pricing" data-color="blue">
							<div class="card-body">
								<div class="card-icon">
									<span class="icon-simple"><i class="nc-icon nc-istanbul"></i></span>
								</div>
								<h3 class="card-title">$599</h3>

								<p class="card-description">
									This is good if your company size is between 160 and 299 employees.
								</p>
                                <div class="card-footer">
                                    <a href="#pablo" class="btn btn-neutral btn-round">Choose Plan</a>
                                </div>
							</div>
						</div>
				    </div>
    			</div>
		    </div>
        </div> -->


    <!--     *********    PRICING 2     *********      -->
        <!-- <div class="pricing-2">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-6 ml-auto mr-auto text-center">
    					<h2 class="title">Pick the best plan for you</h2>
                        <h5 class="description">You have Free Unlimited Updates and Premium Support on each package.</h5>
                        <br>
                        <ul class="nav nav-pills nav-pills-danger justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#month" role="tab">Monthly</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#year" role="tab">Yearly</a>
                            </li>
                        </ul> -->
                        <!-- Pill panes -->
                        <!-- <div class="tab-content">
                            <div class="tab-pane active" id="month" role="tabpanel"></div>
                            <div class="tab-pane" id="year" role="tabpanel"></div>
                        </div>
    				</div>
    			</div>
                <div class="space-top"></div>

    			<div class="row">
    				<div class="col-md-4">
                        <div class="card card-pricing" data-background="image" style="background-image: url('assets/img/sections/daniel-olahh.jpg')">
							<div class="card-body">
								<h6 class="card-category">Free</h6>
								<h1 class="card-title"><small>$</small>0<small>/mo</small></h1>
								<ul>
									<li><b>5</b> Sharing Tools</li>
									<li><b>10</b> Design Tools</li>
									<li><b>100</b> Private Messages</li>
									<li><b>2</b> Personal Brand</li>
								</ul>
								<a href="#pablo" class="btn btn-warning btn-round ">
                                    Get Started
                                </a>
							</div>
						</div>
    				</div>

    				<div class="col-md-4">
                        <div class="card card-pricing" data-background="image" style="background-image: url('assets/img/sections/forest-bg.jpg')">
							<div class="card-body">
								<h6 class="card-category">Premium</h6>
								<h1 class="card-title"><small>$</small>89<small>/mo</small></h1>
								<ul>
									<li><b>100</b> Projects</li>
									<li><b>5</b> Team Members</li>
									<li><b>55</b> Personal Contacts</li>
									<li><b>5.000</b> Messages</li>
								</ul>
								<a href="#pablo" class="btn btn-success btn-round">
									Get Started
								</a>
							</div>
						</div>
    				</div>

    				<div class="col-md-4">
                        <div class="card card-pricing" data-background="image" style="background-image: url('assets/img/sections/anders-jilden.jpg')">
							<div class="card-body">
								<h6 class="card-category">Platinum</h6>
								<h1 class="card-title"><small>$</small>199<small>/mo</small></h1>
								<ul>
                                    <li><b>1</b> Project</li>
    								<li><b>5</b> Team Members</li>
    								<li><b>55</b> Personal Contacts</li>
    								<li><b>5.000</b> Messages</li>
								</ul>
								<a href="#pablo" class="btn btn-danger btn-round ">Get Started</a>
							</div>
						</div>
    				</div>
    			</div>
    		</div>
	    </div> -->


    <!--     *********    PRICING 3     *********      -->
        <!-- <div class="pricing-3 section-image" style="background-image: url('<?=template_user1_path?>/assets/img/sections/daniel-olahs.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto text-center">
                        <h2 class="title">Pick the best plan for you</h2>
                        <h5 class="description">You have Free Unlimited Updates and Premium Support on each package.</h5>
                    </div>
                </div>
                <div class="space-top"></div>
                <div class="row">

                    <div class="col-md-3 ml-auto mr-auto">
                        <div class="card card-pricing">
						    <div class="card-body">
								<h6 class="card-category">Single User</h6>
								<div class="card-icon">
									<i class="nc-icon nc-user-run"></i>
								</div>
								<h3 class="card-title">$29</h3>
								<p class="card-description">
									Here’s a sentence I never expected: we are making...
								</p>
                                <div class="card-footer">
                                    <a href="#pablo" class="btn btn-info btn-round card-link">Choose Plan</a>
                                </div>
						    </div>
					    </div>
                    </div>

                    <div class="col-md-4 mr-auto">
                        <div class="card card-pricing" data-background="color" data-color="blue">
						    <div class="card-body">
								<h6 class="card-category">Small company</h6>
								<div class="card-icon">
									<i class="nc-icon nc-air-baloon"></i>
								</div>
								<h3 class="card-title">$59</h3>
								<p class="card-description">

                                    Sometimes combining two companies that compete in the same market provides...
								</p>
                                <div class="card-footer">
                                    <a href="#pablo" class="btn btn-neutral btn-round card-link">Choose Plan</a>
                                </div>
						    </div>
					    </div>
                    </div>

                    <div class="col-md-3 mr-auto">
                        <div class="card card-pricing">
						    <div class="card-body">
								<h6 class="card-category">Large Company</h6>
								<div class="card-icon">
									<i class="nc-icon nc-istanbul"></i>
								</div>
								<h3 class="card-title">$199</h3>
								<p class="card-description">
									This is good if you are a freelancer of photographer.
								</p>
                                <div class="card-footer">
                                    <a href="#pablo" class="btn btn-info btn-round card-link">Choose Plan</a>
                                </div>
						    </div>
					    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div> -->


    <!--     *********    PRICING 4     *********      -->
    	<!-- <div class="pricing-4 section section-dark">

    		<div class="container">
    			<div class="row">
    				<div class="col-md-6 ml-auto mr-auto text-center">
    					<h2 class="title">Pick the best plan for you</h2>
    					<h5 class="description">You have Free Unlimited Updates and Premium Support on each package.</h5>
    				</div>
    			</div>
                <div class="space-top"></div>
    			<div class="row">
    				<div class="col-md-3">
                        <div class="card card-pricing card-plain">
                            <div class="card-body">
                                <h6 class="card-category text-success">Startup</h6>
                                <h1 class="card-title">$0</h1>
                                <ul  class="text-white">
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Sharing Tools</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Design Tools</li>
                                    <li><i class="fa fa-times" aria-hidden="true"></i> Private Messages</li>
                                    <li><i class="fa fa-times" aria-hidden="true"></i> Personal Brand</li>
                                </ul>
                                <a href="#pablo" class="btn btn-outline-neutral btn-round">Downgrade plan</a>
                            </div>
                        </div>
    				</div>

    				<div class="col-md-3">
                        <div class="card card-pricing">
                            <div class="card-body">
                                <h6 class="card-category text-success">Small company</h6>
                                <h1 class="card-title">$89</h1>
                                <ul>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Sharing Tools</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Design Tools</li>
                                    <li><i class="fa fa-times" aria-hidden="true"></i> Private Messages</li>
                                    <li><i class="fa fa-times" aria-hidden="true"></i> Personal Brand</li>
                                </ul>
                                <a href="#pablo" class="btn btn-outline-success btn-round">Current plan</a>
                            </div>
                        </div>
    				</div>

    				<div class="col-md-3">
                        <div class="card card-pricing card-plain">
                            <div class="card-body">
                                <h6 class="card-category text-success">Large Company</h6>
                                <h1 class="card-title">$189</h1>
                                <ul  class="text-white">
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Sharing Tools</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Design Tools</li>
                                    <li><i class="fa fa-times" aria-hidden="true"></i> Private Messages</li>
                                    <li><i class="fa fa-times" aria-hidden="true"></i> Personal Brand</li>
                                </ul>
                                <a href="#pablo" class="btn btn-outline-neutral btn-round">Upgrade plan</a>
                            </div>
                        </div>
    				</div>

    				<div class="col-md-3">
                        <div class="card card-pricing card-plain">
                            <div class="card-body">
                                <h6 class="card-category text-success">Enterprise</h6>
                                <h1 class="card-title">$389</h1>
                                <ul  class="text-white">
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Sharing Tools</li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> Design Tools</li>
                                    <li><i class="fa fa-times" aria-hidden="true"></i> Private Messages</li>
                                    <li><i class="fa fa-times" aria-hidden="true"></i> Personal Brand</li>
                                </ul>
                                <a href="#pablo" class="btn btn-outline-neutral btn-round">Upgrade plan</a>
                            </div>
                        </div>
    				</div>
    			</div>
    		</div>
    	</div> -->


    <!--     *********    PRICING 5     *********      -->

    	<div class="pricing-5 section-gray">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-4">
    					<h2 class="title">Choose a plan for your next project</h2>
                        <div class="choose-plan">
                            <ul class="nav nav-pills nav-pills-danger" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Personal</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#commercial" role="tab">Commercial</a>
                                </li>
                            </ul>
                        </div>
                        <br/>
    					<p class="description text-gray">You have Free Unlimited Updates and Premium Support on each package. You also have 20 days to request a refund if you're not happy with your purchase.</p>
    				</div>

    				<div class="col-md-7 ml-auto">
    					<div class="tab-content text-center" >
    						<div class="tab-pane active" id="personal" role="tabpanel">
                                <div class="space-top"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card card-pricing">
                                            <div class="card-body">
                                                <h6 class="card-category text-primary">HTML Package</h6>
                                                <h1 class="card-title">$0</h1>
                                                <ul>
                                                    <li><b>1</b> Developer</li>
                                                    <li><b>99+</b> Components</li>
                                                    <li><b>HTML</b> Elements</li>
                                                    <li><b>14</b> Page Examples</li>
                                                </ul>
                                                <a href="#pablo" class="btn btn-primary btn-round">Free download</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card card-pricing" data-color="orange">
                                            <div class="card-body">
                                                <h6 class="card-category text-success">HTML Package</h6>
                                                <h1 class="card-title">$59</h1>
                                                <ul>
                                                    <li><b>5</b> Developer</li>
                                                    <li><b>129+</b> Components</li>
                                                    <li><b>HTML</b> Elements</li>
                                                    <li><b>24</b> Page Examples</li>
                                                </ul>
                                                <a href="#pablo" class="btn btn-neutral btn-round">Free download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    						</div>

    						<div class="tab-pane" id="commercial" role="tabpanel">
                                <div class="space-top"></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card card-pricing">
                                            <div class="card-body">
                                                <h6 class="card-category text-warning">HTML Package</h6>
                                                <h1 class="card-title">$159</h1>
                                                <ul>
                                                    <li><b>5+</b> Developers</li>
                                                    <li><b>199+</b> Components</li>
                                                    <li><b>HTML</b> Elements</li>
                                                    <li><b>34</b> Page Examples</li>
                                                </ul>
                                                <a href="#pablo" class="btn btn-warning btn-round">Buy Now !</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="card card-pricing" data-color="orange">
                                            <div class="card-body">
                                                <h6 class="card-category text-success">HTML Package</h6>
                                                <h1 class="card-title">$359</h1>
                                                <ul>
                                                    <li><b>15</b> Developer</li>
                                                    <li><b>229+</b> Components</li>
                                                    <li><b>HTML</b> Elements</li>
                                                    <li><b>44</b> Page Examples</li>
                                                </ul>
                                                <a href="#pablo" class="btn btn-neutral btn-round">Free download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
        </div>
    </div>


    <div class="cd-section section-white" id="testimonials">

    <!--     *********    TESTIMONIALS 1     *********      -->

    	<!-- <div class="testimonials-1 section-image" style="background-image: url('assets/img/sections/uriel-soberanes.jpg')">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-6 ml-auto mr-auto text-center">
    					<h2 class="title">Our Clients Love Us</h2>
    					<h5 class="description">You need more information? Check what other persons are saying about our product. They are very happy with their purchase.</h5>
    				</div>
    			</div>
                <div class="space-top"></div>
    			<div class="row">
    				<div class="col-md-4">
    					<div class="card card-testimonial">
    						<div class="card-icon">
    							<i class="fa fa-quote-right" aria-hidden="true"></i>
    						</div>
    						<div class="card-body">
    							<p class="card-description">
    								Your products, all the kits that I have downloaded from your site and worked with are sooo cool! I love the color mixtures, cards... everything. Keep up the great work!
    							</p>
                                <div class="card-footer">
        							<h4 class="card-title">Alec Thompson</h4>
        							<h6 class="card-category">@alecthompson</h6>
        							<div class="card-avatar">
        								<a href="#pablo">
        									<img class="img" src="<?=template_user1_path?>/assets/img/faces/ayo-ogunseinde-2.jpg" />
        								</a>
        							</div>
        						</div>
    						</div>
    					</div>
    				</div>

    				<div class="col-md-4">
                        <div class="card card-testimonial">
    						<div class="card-icon">
    							<i class="fa fa-quote-right" aria-hidden="true"></i>
    						</div>
    						<div class="card-body">
    							<p class="card-description">
    								"Don't be scared of the truth because we need to restart the human foundation in truth. That's why I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is not so attractive"
    							</p>
                                <div class="card-footer">
        							<h4 class="card-title">Gina Andrew</h4>
        							<h6 class="card-category">@ginaandrew</h6>
        							<div class="card-avatar">
        								<a href="#pablo">
        									<img class="img" src="<?=template_user1_path?>/assets/img/faces/joe-gardner-2.jpg" />
        								</a>
        							</div>
        						</div>
    						</div>
    					</div>
    				</div>

    				<div class="col-md-4">
                        <div class="card card-testimonial">
    						<div class="card-icon">
    							<i class="fa fa-quote-right" aria-hidden="true"></i>
    						</div>
    						<div class="card-body">
    							<p class="card-description">
    								"Your products, all the kits that I have downloaded from your site and worked with are sooo cool! I love the color mixtures, cards... everything. Keep up the great work!"
    							</p>
                                <div class="card-footer">
        							<h4 class="card-title">Joe West</h4>
        							<h6 class="card-category">@georgewest</h6>
        							<div class="card-avatar">
        								<a href="#pablo">
        									<img class="img" src="<?=template_user1_path?>/assets/img/faces/kaci-baum-2.jpg" />
        								</a>
        							</div>
        						</div>
    						</div>

    					</div>
    				</div>
    			</div>
    		</div>
    	</div> -->


    <!--     *********    TESTIMONIALS 2     *********      -->

    	<!-- <div class="testimonials-2 section section-testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 mr-auto">
                        <div class="testimonials-people">
                            <img class="left-first-person add-animation" src="https://s3.amazonaws.com/creativetim_bucket/photos/110862/thumb.?1482812727" alt="" />
                            <img class="left-second-person add-animation" src="https://s3.amazonaws.com/creativetim_bucket/photos/139481/thumb.jpg?1485460613" alt="" />
                            <img class="left-third-person add-animation" src="https://s3.amazonaws.com/creativetim_bucket/photos/152441/thumb.jpg?1488233314" alt="" />
                            <img class="left-fourth-person add-animation" src="https://s3.amazonaws.com/creativetim_bucket/photos/134607/thumb.?1487680276" alt="" />
                            <img class="left-fifth-person add-animation" src="https://s3.amazonaws.com/creativetim_bucket/photos/161506/thumb.?1489848178" alt="" />
                            <img class="left-sixth-person add-animation" src="https://s3.amazonaws.com/creativetim_bucket/photos/77627/thumb.jpg?1487360092" alt="" />
                        </div>
                    </div>

                    <div class="col-md-6 ml-auto mr-auto">
                        <div class="page-carousel">
                            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">

                                    <div class="carousel-item active">
                                        <div class="card card-testimonial card-plain">
                                            <div class="card-avatar">
                                                <img class="img" src="https://s3.amazonaws.com/uifaces/faces/twitter/mlane/128.jpg" />
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-description">
                                                    "I'm newer to the front-end... With my creative side lacking in experience this really put me in the right spot to speed through the fast lane. I love this Design kit so much!"
                                                </h5>
                                                <div class="card-footer">
                                                    <h4 class="card-title">Chase Jackson</h4>
                                                    <h6 class="card-category">Web Developer</h6>
                                                    <div class="card-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="card card-testimonial card-plain">
                                            <div class="card-avatar">
                                                <img class="img" src="https://s3.amazonaws.com/creativetim_bucket/photos/134607/thumb.?1487680276" />
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-description">
                                                    "Love the shapes and color palette on this one! Perfect for one of my pet projects!"
                                                </h5>
                                                <div class="card-footer">
                                                    <h4 class="card-title">Robin Leysen</h4>
                                                    <h6 class="card-category">Web Developer</h6>
                                                    <div class="card-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="card card-testimonial card-plain">
                                            <div class="card-avatar">
                                                <img class="img" src="https://s3.amazonaws.com/creativetim_bucket/photos/125268/thumb.jpeg?1497799215" />
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-description">
                                                    "Love it. Use it for prototypes and along with Paper Dashboard."
                                                </h5>
                                                <div class="card-footer">
                                                    <h4 class="card-title">Cristi Jora</h4>
                                                    <h6 class="card-category">Web Developer</h6>
                                                    <div class="card-stars">
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                        <i class="fa fa-star" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <a class="left carousel-control carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                    <span class="fa fa-angle-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                                    <span class="fa fa-angle-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 ml-auto">
                        <div class="testimonials-people">
                            <img class="right-first-person add-animation" src="https://s3.amazonaws.com/uifaces/faces/twitter/mlane/128.jpg" alt="" />
                            <img class="right-second-person add-animation" src="https://s3.amazonaws.com/creativetim_bucket/photos/125268/thumb.jpeg?1497799215" alt="" />
                            <img class="right-third-person add-animation" src="https://s3.amazonaws.com/creativetim_bucket/photos/123334/thumb.JPG?1479459618" alt="" />
                            <img class="right-fourth-person add-animation" src="https://s3.amazonaws.com/creativetim_bucket/photos/118235/thumb.?1477435947" alt="" />
                            <img class="right-fifth-person add-animation" src="https://s3.amazonaws.com/creativetim_bucket/photos/18/thumb.png?1431433244" alt="" />
                            <img class="right-sixth-person add-animation" src="https://s3.amazonaws.com/creativetim_bucket/photos/167683/thumb.?1491014996" alt="" />
                        </div>
                    </div>

                </div>

            </div>

    	</div> -->


    <!--     *********    TESTIMONIALS 3     *********      -->

    	<div class="testimonials-3">

    		<div class="container">
    			<div class="row">
    				<div class="col-md-6 ml-auto mr-auto text-center">
    					<h2 class="title">What Clients Say</h2>

    				</div>
    			</div>

    			<div class="row">
    				<div class="col-md-3 ml-auto">
                        <div class="card" data-background="color" data-color="orange">
							<div class="card-body">
                                <div class="author">
                                    <a href="#pablo">
                                       <img src="<?=template_user1_path?>/assets/img/faces/joe-gardner-2.jpg" alt="..." class="avatar img-raised">
                                       <span>Erik Johnson</span>
                                    </a>
                                </div>
                                <span class="category-social pull-right">
                                    <i class="fa fa-quote-right"></i>
                                </span>
                                <div class="clearfix"></div>
                                <p class="card-description">
                                    "During the first selection of grant winners on the essential aspects, and the products are not burdened with non-essentials. Back to purity, back to simplicity. At best, it is self-explanatory."
                                </p>
							</div>
						</div>
    				</div>

    				<div class="col-md-4">
                        <div class="card" data-background="color" data-color="green">
							<div class="card-body">
                                <div class="author">
                                    <a href="#pablo">
                                       <img src="<?=template_user1_path?>/assets/img/faces/erik-lucatero-2.jpg" alt="..." class="avatar img-raised">
                                       <span>Erik Johnson</span>
                                    </a>
                                </div>
                                <span class="category-social pull-right">
                                    <i class="fa fa-quote-right"></i>
                                </span>
                                <div class="clearfix"></div>
                                <p class="card-description">
                                    "The plan is to add additional flexibility in the future to allow applicants to make a case for how much money they actually need. Less, but better – because it concentrates on the essential aspects, and the products are not burdened with non-essentials..."
                                </p>
							</div>
						</div>
    				</div>

    				<div class="col-md-3 mr-auto">
                        <div class="card" data-background="color" data-color="yellow">
							<div class="card-body">
                                <div class="author">
                                    <a href="#pablo">
                                       <img src="<?=template_user1_path?>/assets/img/faces/kaci-baum-2.jpg" alt="..." class="avatar img-raised">
                                       <span>Erik Johnson</span>
                                    </a>
                                </div>
                                <span class="category-social pull-right">
                                    <i class="fa fa-quote-right"></i>
                                </span>
                                <div class="clearfix"></div>
                                <p class="card-description">
                                    "Simulation of many-body quantum systems with neural networks, and the products are not burdened with non-essentials. Back to purity, back to simplicity. At best, it is self-explanatory."
                                </p>
							</div>
						</div>
    				</div>
    			</div>
                <div class="row">
                    <div class="col-md-4 ml-auto">
                        <div class="card" data-background="color" data-color="blue">
							<div class="card-body">
                                <div class="author">
                                    <a href="#pablo">
                                       <img src="<?=template_user1_path?>/assets/img/faces/clem-onojeghuo-2.jpg" alt="..." class="avatar img-raised">
                                       <span>Erik Johnson</span>
                                    </a>
                                </div>
                                <span class="category-social pull-right">
                                    <i class="fa fa-quote-right"></i>
                                </span>
                                <div class="clearfix"></div>
                                <p class="card-description">
                                    "Machine learning for motion recognition and trajectory generation of human movement for rehabilitation with non-essentials. Back to purity, back to simplicity. At best, it is self-explanatory."
                                </p>
							</div>
						</div>
    				</div>
                    <div class="col-md-6 mr-auto">
                        <div class="card" data-background="color" data-color="purple">
							<div class="card-body">
                                <div class="author">
                                    <a href="#pablo">
                                       <img src="<?=template_user1_path?>/assets/img/faces/ayo-ogunseinde-2.jpg" alt="..." class="avatar img-raised">
                                       <span>Erik Johnson</span>
                                    </a>
                                </div>
                                <span class="category-social pull-right">
                                    <i class="fa fa-quote-right"></i>
                                </span>
                                <div class="clearfix"></div>
                                <p class="card-description">
                                    "Less, but better – because it concentrates on the essential aspects, and the products are not burdened with non-essentials. Back to purity, back to simplicity. At best, it is self-explanatory. The entire AI Grant project reminds me of a cross between a Thiel Fellowship and a Kaggle competition."
                                </p>
							</div>
						</div>
    				</div>
                </div>
    		</div>
    	</div>
    </div>


    <div class="cd-section section-white" id="contact-us">

    <!--     *********    CONTACT US 1     *********      -->
    	<div class="contactus-1 section-image" style="background-image: url('<?=template_user1_path?>/assets/img/sections/soroush-karimi.jpg')">
    		<div class="container">
    			<div class="row">
                    <div class="col-md-10 ml-auto mr-auto">
                        <div class="card card-contact no-transition">
                            <h3 class="card-title text-center">Contact Us</h3>
                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                    <div class="card-body">
                                        <div class="info info-horizontal">
                                            <div class="icon icon-info">
                                                <i class="nc-icon nc-pin-3" aria-hidden="true"></i>
                                            </div>
                                            <div class="description">
                                                <h4 class="info-title">Find us at the office</h4>
                                                <p> Bld Mihail Kogalniceanu, nr. 8,<br>
                                                    7652 Bucharest,<br>
                                                    Romania
                                                </p>
                                            </div>
                                        </div>
                                        <div class="info info-horizontal">
                                            <div class="icon icon-danger">
                                                <i class="nc-icon nc-badge" aria-hidden="true"></i>
                                            </div>
                                            <div class="description">
                                                <h4 class="info-title">Give us a ring</h4>
                                                <p> Michael Jordan<br>
                                                    +40 762 321 762<br>
                                                    Mon - Fri, 8:00-22:00
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 mr-auto">
                                    <form role="form" id="contact-form" method="post">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">First name</label>
                                                        <input type="text" name="name" class="form-control" placeholder="First Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label">Last name</label>
                                                        <input type="text" name="name" class="form-control" placeholder="Last Name">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Email address</label>
                                                <input type="email" name="email" class="form-control" placeholder="Email"/>
                                            </div>
                                            <div class="form-group label-floating">
                                                <label class="control-label">Your message</label>
                                                <textarea name="message" class="form-control" id="message" rows="6" placeholder="Message"></textarea>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="checkbox">
                                                        <input id="checkbox1" type="checkbox">
                                                        <label for="checkbox1">
                                                            I'm not a robot !
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <button type="submit" class="btn btn-primary pull-right">Send Message</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </div>
    			</div>
    		</div>
    	</div>


    <!--     *********    CONTACT US 2     *********      -->

    	<!-- <div class="contactus-2">
    	    <div id="contactUsMap2" class="big-map"></div>

            <div class="container">
                <div class="col-md-6">
                    <div class="card card-contact card-raised">
                        <div class="card-header header-raised header-primary text-center">
                            <h4 class="card-title">Contact Us</h4>
                        </div>
                        <form role="form" id="contact-form" method="post">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="info info-horizontal">
                                            <div class="icon icon-info">
                                                <i class="nc-icon nc-badge" aria-hidden="true"></i>
                                            </div>
                                            <div class="description">
                                                <h5 class="info-title">Give us a call</h5>
                                                <p> Michael Jordan<br>
                                                    +40 762 321 762<br>
                                                    Mon - Fri, 8:00-22:00
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="info info-horizontal">
                                            <div class="icon icon-danger">
                                                <i class="nc-icon nc-pin-3" aria-hidden="true"></i>
                                            </div>
                                            <div class="description">
                                                <h5 class="info-title">Find us at the office</h5>
                                                <p> Bld Mihail Kogalniceanu<br>
                                                    7652 Bucharest
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Full Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Full name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Email address</label>
                                            <input type="email" name="email" class="form-control" placeholder="Email"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Your message</label>
                                    <textarea name="message" class="form-control" id="message" rows="6" placeholder="Message"></textarea>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="checkbox">
                                            <input id="checkbox2" type="checkbox">
                                            <label for="checkbox2">
                                                I'm not a robot !
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-rose pull-right">Send Message</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->
        
    <!--  contact us 3  -->
    <div class="contact-us">
        <nav class="navbar navbar-expand-lg fixed-top bg-info">
            <div class="container">
                <div class="navbar-translate">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="../presentation.html">Paper Kit 2 PRO</a>
                    </div>
                    <button class="navbar-toggler navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar"></span>
                        <span class="navbar-toggler-bar"></span>
                        <span class="navbar-toggler-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.html" data-scroll="true">Components</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">Sections</a>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-info">
                                <a class="dropdown-item" href="../sections.html#headers"><i class="nc-icon nc-tile-56"></i>&nbsp; Headers</a>
                                <a class="dropdown-item" href="../sections.html#features"><i class="nc-icon nc-settings"></i>&nbsp; Features</a>
                                <a class="dropdown-item" href="../sections.html#blogs"><i class="nc-icon nc-bullet-list-67"></i>&nbsp; Blogs</a>
                                <a class="dropdown-item" href="../sections.html#teams"><i class="nc-icon nc-single-02"></i>&nbsp; Teams</a>
                                <a class="dropdown-item" href="../sections.html#projects"><i class="nc-icon nc-calendar-60"></i>&nbsp; Projects</a>
                                <a class="dropdown-item" href="../sections.html#pricing"><i class="nc-icon nc-money-coins"></i>&nbsp; Pricing</a>
                                <a class="dropdown-item" href="../sections.html#testimonials"><i class="nc-icon nc-badge"></i>&nbsp; Testimonials</a>
                                <a class="dropdown-item" href="../sections.html#contact-us"><i class="nc-icon nc-mobile"></i>&nbsp; Contacts</a>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">Examples</a>
                            <ul class="dropdown-menu dropdown-menu-right dropdown-info">
                                <a class="dropdown-item" href="about-us.html"><i class="nc-icon nc-bank"></i>&nbsp; About Us</a>
                                <a class="dropdown-item" href="add-product.html"><i class="nc-icon nc-basket"></i>&nbsp; Add Product</a>
                                <a class="dropdown-item" href="blog-post.html"><i class="nc-icon nc-badge"></i>&nbsp; Blog Post</a>
                                <a class="dropdown-item" href="blog-posts.html"><i class="nc-icon nc-bullet-list-67"></i>&nbsp; Blog Posts</a>
                                <a class="dropdown-item" href="contact-us.html"><i class="nc-icon nc-mobile"></i>&nbsp; Contact Us</a>
                                <a class="dropdown-item" href="discover.html"><i class="nc-icon nc-world-2"></i>&nbsp; Discover</a>
                                <a class="dropdown-item" href="ecommerce.html"><i class="nc-icon nc-send"></i>&nbsp; Ecommerce</a>
                                <a class="dropdown-item" href="landing.html"><i class="nc-icon nc-spaceship"></i>&nbsp; Landing</a>
                                <a class="dropdown-item" href="login.html"><i class="nc-icon nc-lock-circle-open"></i>&nbsp; Login</a>
                                <a class="dropdown-item" href="product-page.html"><i class="nc-icon nc-album-2"></i>&nbsp; Product Page</a>
                                <a class="dropdown-item" href="profile.html"><i class="nc-icon nc-single-02"></i>&nbsp; Profile</a>
                                <a class="dropdown-item" href="register.html"><i class="nc-icon nc-bookmark-2"></i>&nbsp; Register</a>
                                <a class="dropdown-item" href="search-with-sidebar.html"><i class="nc-icon nc-zoom-split"></i>&nbsp; Search</a>
                                <a class="dropdown-item" href="settings.html"><i class="nc-icon nc-settings-gear-65"></i>&nbsp; Settings</a>
                                <a class="dropdown-item" href="twitter-redesign.html"><i class="nc-icon nc-tie-bow"></i>&nbsp; Twitter</a>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-round btn-danger" href="https://www.creative-tim.com/product/paper-kit-2-pro">
                                <i class="nc-icon nc-cart-simple"></i> Buy now
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="main">
            <div class="section section-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto text-center">
                            <h2 class="title">Get in touch with us</h2>
                            <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualise customer directed convergence without revolutionary ROI.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto text-center">
                            <h3 class="title"><small>Find us on social networks</small></h3>
                            <button class="btn btn-just-icon btn-twitter">
                                <i class="fa fa-twitter"></i>
                            </button>
                            <button class="btn btn-just-icon btn-facebook">
                                <i class="fa fa-facebook"></i>
                            </button>
                            <button class="btn btn-just-icon btn-google">
                                <i class="fa fa-google"></i>
                            </button>
                            
                            <button class="btn btn-just-icon btn-dribbble">
                                <i class="fa fa-dribbble"></i>
                            </button>
                            <button class="btn btn-just-icon btn-instagram">
                                <i class="fa fa-instagram"></i>
                            </button>
                            <button class="btn btn-just-icon btn-youtube">
                                <i class="fa fa-youtube"></i>
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto text-center">
                            <h3 class="title"><small>Or drop us a note</small></h3>
                            <form class="contact">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="First Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Subject">
                                    </div>
                                </div>
                                <textarea class="form-control" placeholder="Message" rows="7"></textarea>

                                <div class="row">
                                    <div class="col-md-6 ml-auto mr-auto">
                                        <button class="btn btn-primary btn-block btn-round">Send </button>
                                    </div>
                                </div>
                            </form>
                            <h3 class="visit"><small>Or come and visit</small></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

	    <div id="contactUsMap" class="big-map" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-err-container"><div class="gm-err-content"><div class="gm-err-icon"><img src="https://maps.gstatic.com/mapfiles/api-3/images/icon_error.png" draggable="false" style="user-select: none;"></div><div class="gm-err-title">Oops! Something went wrong.</div><div class="gm-err-message">This page didn't load Google Maps correctly. See the JavaScript console for technical details.</div></div></div></div></div>

        <footer class="footer section-nude">
            <div class="container">
                <div class="row">
                    <nav class="footer-nav">
                        <ul>
                            <li><a href="https://www.creative-tim.com">Creative Tim</a></li>
                            <li><a href="http://blog.creative-tim.com">Blog</a></li>
                            <li><a href="https://www.creative-tim.com/license">Licenses</a></li>
                        </ul>
                    </nav>
                    <div class="credits ml-auto">
                        <span class="copyright">
                            © <script>document.write(new Date().getFullYear())</script>2018, made with <i class="fa fa-heart heart"></i> by Creative Tim
                        </span>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    </div>

   
     
   
    <div class="cd-section section-white" id="comments">
        <div class="section section-nude-gray">
            <div class="container container-tim">
                <div class="title" id="comments">
                    <h3>Comments Area</h3>
                </div>
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <div class="media-area">
                            <h3>Comments · 10</h3>
                            <div class="media">
                                <a class="pull-left" href="#paper-kit">
                                <div class="avatar">
                                        <img class="media-object" src="<?=template_user1_path?>/assets/img/faces/clem-onojeghuo-2.jpg" alt="...">
                                </div>
                                </a>
                                <div class="media-body">
                                    <h5 class="media-heading">John Wayne</h5>
                                    <div class="pull-right">
                                        <h6 class="text-muted">Sep 11, 11:53 AM</h6>
                                        <a href="#paper-kit" class="btn btn-info btn-link pull-right "> <i class="fa fa-reply"></i> Reply</a>

                                    </div>
                                    <p>Hello guys, nice to have you on the platform! There will be a lot of great stuff coming soon. We will keep you posted for the latest news.</p>
                                    <p> Don't forget, You're Awesome!</p>

                                    <div class="media-footer">
                                        <a href="#paper-kit" class="btn btn-danger btn-link">
                                            <i class="fa fa-thumbs-up" aria-hidden="true"></i> 243
                                        </a>
                                        <a href="#paper-kit" class="btn btn-link">
                                            <i class="fa fa-thumbs-down" aria-hidden="true"></i> 2
                                        </a>
                                        <a href="#paper-kit" class="btn btn-link">
                                            Follow · 3
                                        </a>
                                    </div>

                                    <div class="media media-post">
                                            <a class="pull-left author" href="#paper-kit">
                                            <div class="avatar">
                                                    <img class="media-object" alt="64x64" src="<?=template_user1_path?>/assets/img/faces/kaci-baum-2.jpg">
                                            </div>
                                        </a>
                                        <div class="media-body">
                                                <textarea class="form-control" placeholder="Write a nice reply or go home..." rows="4"></textarea>
                                                <div class="media-footer">
                                                    <a href="#paper-kit" class="btn btn-info pull-right">Reply</a>
                                                </div>
                                        </div>
                                    </div> <!-- end media-post -->
                                </div>
                            </div> <!-- end media -->

                            <!--  Comment                    -->
                            <div class="media">
                            <a class="pull-left" href="#paper-kit">
                                <div class="avatar">
                                    <img class="media-object" alt="Tim Picture" src="<?=template_user1_path?>/assets/img/faces/ayo-ogunseinde-2.jpg">
                                </div>
                            </a>
                            <div class="media-body">

                                <h5 class="media-heading">Flume</h5>
                                <div class="pull-right">
                                    <h6 class="text-muted">Sep 11, 11:54 AM</h6>
                                    <a href="#paper-kit" class="btn btn-info btn-link pull-right "> <i class="fa fa-reply"></i> Reply</a>

                                </div>

                                <p>Hello guys, nice to have you on the platform! There will be a lot of great stuff coming soon. We will keep you posted for the latest news.</p>

                                <div class="media-footer">
                                    <a href="#paper-kit" class="btn btn-link">
                                        <i class="fa fa-thumbs-up" aria-hidden="true"></i> 243
                                    </a>
                                    <a href="#paper-kit" class="btn btn-primary btn-link">
                                        <i class="fa fa-thumbs-down" aria-hidden="true"></i> 2
                                    </a>
                                    <a href="#paper-kit" class="btn btn-link">
                                        Follow · 3
                                    </a>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#paper-kit">
                                        <div class="avatar">
                                                <img class="media-object" alt="64x64" src="<?=template_user1_path?>/assets/img/faces/erik-lucatero-2.jpg">
                                        </div>
                                    </a>
                                    <div class="media-body">
                                            <h5 class="media-heading">Eric Faker</h5>
                                            <div class="pull-right">
                                                <h6 class="text-muted">Sep 11, 11:56 AM</h6>
                                                <a href="#paper-kit" class="btn btn-info btn-link pull-right "> <i class="fa fa-reply"></i> Reply</a>

                                            </div>
                                            <p>Hello guys, nice to have you on the platform! There will be a lot of great stuff coming soon. We will keep you posted for the latest news.</p>
                                            <p> Don't forget, You're Awesome!</p>

                                            <div class="media-footer">
                                                <a href="#paper-kit" class="btn btn-danger btn-link">
                                                    <i class="fa fa-thumbs-up" aria-hidden="true"></i> 243
                                                </a>
                                                <a href="#paper-kit" class="btn btn-link">
                                                    <i class="fa fa-thumbs-down" aria-hidden="true"></i> 2
                                                </a>
                                                <a href="#paper-kit" class="btn btn-info btn-link">
                                                    Follow · 3
                                                </a>
                                            </div>
                                    </div>
                                </div> <!-- end media -->
                            </div>
                            </div> <!-- end media -->
                            <div class="media">
                                <a class="pull-left" href="#paper-kit">
                                    <div class="avatar">
                                            <img class="media-object" alt="64x64" src="<?=template_user1_path?>/assets/img/faces/joe-gardner-2.jpg">
                                    </div>
                                </a>
                                <div class="media-body">
                                        <h5 class="media-heading">Banks</h5>
                                        <div class="pull-right">
                                            <h6 class="text-muted">Sep 11, 11:57 AM</h6>
                                            <a href="#paper-kit" class="btn btn-info btn-link pull-right "> <i class="fa fa-reply"></i> Reply</a>

                                        </div>
                                        <p>Hello guys, nice to have you on the platform! There will be a lot of great stuff coming soon. We will keep you posted for the latest news.</p>
                                        <p> Don't forget, You're Awesome!</p>

                                        <div class="media-footer">
                                            <a href="#paper-kit" class="btn btn-link">
                                                <i class="fa fa-thumbs-up" aria-hidden="true"></i> 243
                                            </a>
                                            <a href="#paper-kit" class="btn btn-link">
                                                <i class="fa fa-thumbs-down" aria-hidden="true"></i> 2
                                            </a>
                                            <a href="#paper-kit" class="btn btn-link">
                                                Follow · 3
                                            </a>
                                        </div>
                                </div>
                            </div> <!-- end media -->
                            <br>
                            <div class="pagination-area">
                                <ul class="pagination pagination-primary pagination-no-border justify-content-center">
                                    <li class="page-item"><a href="#paper-kit" class="page-link"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a></li>
                                    <li class="page-item active"><a href="#paper-kit" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#paper-kit" class="page-link">2</a></li>
                                    <li class="page-item"><a href="#paper-kit" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#paper-kit" class="page-link">4</a></li>
                                    <li class="page-item"><a href="#paper-kit" class="page-link">5</a></li>
                                    <li class="page-item"><a href="#paper-kit" class="page-link"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div> <!-- end media-area -->
                    </div> <!-- end col-md-8 -->
                </div> <!-- end row -->
            </div>
        </div>
        <div class="section section-gray">
        <div class="container tim-container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                      <h3 class="text-center">Post your comment</h3>
                      <div class="media media-post">
                          <a class="pull-left author" href="#paper-kit">
                              <div class="avatar">
                                    <img class="media-object" alt="64x64" src="<?=template_user1_path?>/assets/img/faces/ayo-ogunseinde-2.jpg">
                              </div>
                          </a>
                          <div class="media-body">
                                <textarea class="form-control border-input" placeholder="Write some nice stuff or nothing..." rows="6"></textarea>
                                <div class="media-footer">
                                     <a href="#paper-kit" class="btn btn-info btn-wd pull-right">Post Comment</a>
                                </div>
                          </div>
                      </div> <!-- end media-post -->

                      <h3 class="text-center">Post your comment</h3>
                      <div class="media media-post">
                          <form class="form">
                          <a class="pull-left author" href="#paper-kit">
                              <div class="avatar">
                                    <img class="media-object" alt="64x64" src="<?=template_user1_path?>/assets/img/faces/kaci-baum-2.jpg">
                              </div>
                          </a>
                          <div class="media-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                             <input type="email" class="form-control border-input" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                             <input type="email" class="form-control border-input" placeholder="Your email">
                                        </div>
                                    </div>
                                </div>
                                <textarea class="form-control border-input" placeholder="Write some nice stuff or nothing..." rows="6"></textarea>
                                <div class="media-footer">
                                    <h6 class="text-muted">Sign in with</h6>
                                    <a href="#twitter" class="btn btn-just-icon btn-round btn-twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#facebook" class="btn btn-round btn-just-icon btn-facebook">
                                       <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="#google" class="btn btn-just-icon btn-round btn-google">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                    <a href="#paper-kit" class="btn btn-info pull-right">Post Comment</a>
                                </div>
                          </div><!-- end media-body -->
                          </form>
                      </div> <!-- end media-post -->
                </div>
            </div> <!-- end row -->
        </div>
        </div>
    </div>


    <div class="cd-section section-white" id="wrapper">
        <div class="demo-icons">
            <header>
                <h1>Paper Kit 2 PRO Icons</h1>
                <p>Built with <a href="https://nucleoapp.com/?ref=1712">nucleoapp.com</a></p>
            </header>

            <div id="icons-wrapper">
                <section>
                    <ul>

                            <li>
                                <i class="nc-icon nc-air-baloon"></i>
                                <p>nc-air-baloon</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-album-2"></i>
                                <p>nc-album-2</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-alert-circle-i"></i>
                                <p>nc-alert-circle-i</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-align-center"></i>
                                <p>nc-align-center</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-align-left-2"></i>
                                <p>nc-align-left-2</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-ambulance"></i>
                                <p>nc-ambulance</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-app"></i>
                                <p>nc-app</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-atom"></i>
                                <p>nc-atom</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-badge"></i>
                                <p>nc-badge</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-bag-16"></i>
                                <p>nc-bag-16</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-bank"></i>
                                <p>nc-bank</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-basket"></i>
                                <p>nc-basket</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-bell-55"></i>
                                <p>nc-bell-55</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-bold"></i>
                                <p>nc-bold</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-book-bookmark"></i>
                                <p>nc-book-bookmark</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-bookmark-2"></i>
                                <p>nc-bookmark-2</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-box-2"></i>
                                <p>nc-box-2</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-box"></i>
                                <p>nc-box</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-briefcase-24"></i>
                                <p>nc-briefcase-24</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-bulb-63"></i>
                                <p>nc-bulb-63</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-bullet-list-67"></i>
                                <p>nc-bullet-list-67</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-bus-front-12"></i>
                                <p>nc-bus-front-12</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-button-pause"></i>
                                <p>nc-button-pause</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-button-play"></i>
                                <p>nc-button-play</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-button-power"></i>
                                <p>nc-button-power</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-calendar-60"></i>
                                <p>nc-calendar-60</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-camera-compact"></i>
                                <p>nc-camera-compact</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-caps-small"></i>
                                <p>nc-caps-small</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-cart-simple"></i>
                                <p>nc-cart-simple</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-chart-bar-32"></i>
                                <p>nc-chart-bar-32</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-chart-pie-36"></i>
                                <p>nc-chart-pie-36</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-chat-33"></i>
                                <p>nc-chat-33</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-check-2"></i>
                                <p>nc-check-2</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-circle-10"></i>
                                <p>nc-circle-10</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-cloud-download-93"></i>
                                <p>nc-cloud-download-93</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-cloud-upload-94"></i>
                                <p>nc-cloud-upload-94</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-compass-05"></i>
                                <p>nc-compass-05</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-controller-modern"></i>
                                <p>nc-controller-modern</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-credit-card"></i>
                                <p>nc-credit-card</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-delivery-fast"></i>
                                <p>nc-delivery-fast</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-diamond"></i>
                                <p>nc-diamond</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-email-85"></i>
                                <p>nc-email-85</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-favourite-28"></i>
                                <p>nc-favourite-28</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-glasses-2"></i>
                                <p>nc-glasses-2</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-globe-2"></i>
                                <p>nc-globe-2</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-globe"></i>
                                <p>nc-globe</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-hat-3"></i>
                                <p>nc-hat-3</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-headphones"></i>
                                <p>nc-headphones</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-html5"></i>
                                <p>nc-html5</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-image"></i>
                                <p>nc-image</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-istanbul"></i>
                                <p>nc-istanbul</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-key-25"></i>
                                <p>nc-key-25</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-laptop"></i>
                                <p>nc-laptop</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-layout-11"></i>
                                <p>nc-layout-11</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-lock-circle-open"></i>
                                <p>nc-lock-circle-open</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-map-big"></i>
                                <p>nc-map-big</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-minimal-down"></i>
                                <p>nc-minimal-down</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-minimal-left"></i>
                                <p>nc-minimal-left</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-minimal-right"></i>
                                <p>nc-minimal-right</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-minimal-up"></i>
                                <p>nc-minimal-up</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-mobile"></i>
                                <p>nc-mobile</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-money-coins"></i>
                                <p>nc-money-coins</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-note-03"></i>
                                <p>nc-note-03</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-palette"></i>
                                <p>nc-palette</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-paper"></i>
                                <p>nc-paper</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-pin-3"></i>
                                <p>nc-pin-3</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-planet"></i>
                                <p>nc-planet</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-refresh-69"></i>
                                <p>nc-refresh-69</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-ruler-pencil"></i>
                                <p>nc-ruler-pencil</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-satisfied"></i>
                                <p>nc-satisfied</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-scissors"></i>
                                <p>nc-scissors</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-send"></i>
                                <p>nc-send</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-settings-gear-65"></i>
                                <p>nc-settings-gear-65</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-settings"></i>
                                <p>nc-settings</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-share-66"></i>
                                <p>nc-share-66</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-shop"></i>
                                <p>nc-shop</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-simple-add"></i>
                                <p>nc-simple-add</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-simple-delete"></i>
                                <p>nc-simple-delete</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-simple-remove"></i>
                                <p>nc-simple-remove</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-single-02"></i>
                                <p>nc-single-02</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-single-copy-04"></i>
                                <p>nc-single-copy-04</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-sound-wave"></i>
                                <p>nc-sound-wave</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-spaceship"></i>
                                <p>nc-spaceship</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-sun-fog-29"></i>
                                <p>nc-sun-fog-29</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-support-17"></i>
                                <p>nc-support-17</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-tablet-2"></i>
                                <p>nc-tablet-2</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-tag-content"></i>
                                <p>nc-tag-content</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-tap-01"></i>
                                <p>nc-tap-01</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-tie-bow"></i>
                                <p>nc-tie-bow</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-tile-56"></i>
                                <p>nc-tile-56</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-time-alarm"></i>
                                <p>nc-time-alarm</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-touch-id"></i>
                                <p>nc-touch-id</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-trophy"></i>
                                <p>nc-trophy</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-tv-2"></i>
                                <p>nc-tv-2</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-umbrella-13"></i>
                                <p>nc-umbrella-13</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-user-run"></i>
                                <p>nc-user-run</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-vector"></i>
                                <p>nc-vector</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-watch-time"></i>
                                <p>nc-watch-time</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-world-2"></i>
                                <p>nc-world-2</p>
                            </li>

                            <li>
                                <i class="nc-icon nc-zoom-split"></i>
                                <p>nc-zoom-split</p>
                            </li>

                        <!-- list of icons here with the proper class-->
                    </ul>
                </section>
            </div>
        </div>
    </div>

    <div class="cd-section section-white" id="profile">
        <div class="profile">
            <!-- <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-danger nav-down" color-on-scroll="200">
                <div class="container">
                    <div class="navbar-translate">
                        <button class="navbar-toggler navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-bar"></span>
                            <span class="navbar-toggler-bar"></span>
                            <span class="navbar-toggler-bar"></span>
                        </button>
                        <div class="navbar-header">
                            <a class="navbar-brand" href="../presentation.html">Paper Kit 2 PRO</a>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="../index.html" data-scroll="true" href="javascript:void(0)">Components</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">Sections</a>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
                                    <a class="dropdown-item" href="../sections.html#headers"><i class="nc-icon nc-tile-56"></i>&nbsp; Headers</a>
                                    <a class="dropdown-item" href="../sections.html#features"><i class="nc-icon nc-settings"></i>&nbsp; Features</a>
                                    <a class="dropdown-item" href="../sections.html#blogs"><i class="nc-icon nc-bullet-list-67"></i>&nbsp; Blogs</a>
                                    <a class="dropdown-item" href="../sections.html#teams"><i class="nc-icon nc-single-02"></i>&nbsp; Teams</a>
                                    <a class="dropdown-item" href="../sections.html#projects"><i class="nc-icon nc-calendar-60"></i>&nbsp; Projects</a>
                                    <a class="dropdown-item" href="../sections.html#pricing"><i class="nc-icon nc-money-coins"></i>&nbsp; Pricing</a>
                                    <a class="dropdown-item" href="../sections.html#testimonials"><i class="nc-icon nc-badge"></i>&nbsp; Testimonials</a>
                                    <a class="dropdown-item" href="../sections.html#contact-us"><i class="nc-icon nc-mobile"></i>&nbsp; Contacts</a>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle"  data-toggle="dropdown" href="javascript:void(0)">Examples</a>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
                                    <a class="dropdown-item" href="about-us.html"><i class="nc-icon nc-bank"></i>&nbsp; About Us</a>
                                    <a class="dropdown-item" href="add-product.html"><i class="nc-icon nc-basket"></i>&nbsp; Add Product</a>
                                    <a class="dropdown-item" href="blog-post.html"><i class="nc-icon nc-badge"></i>&nbsp; Blog Post</a>
                                    <a class="dropdown-item" href="blog-posts.html"><i class="nc-icon nc-bullet-list-67"></i>&nbsp; Blog Posts</a>
                                    <a class="dropdown-item" href="contact-us.html"><i class="nc-icon nc-mobile"></i>&nbsp; Contact Us</a>
                                    <a class="dropdown-item" href="discover.html"><i class="nc-icon nc-world-2"></i>&nbsp; Discover</a>
                                    <a class="dropdown-item" href="ecommerce.html"><i class="nc-icon nc-send"></i>&nbsp; Ecommerce</a>
                                    <a class="dropdown-item" href="landing.html"><i class="nc-icon nc-spaceship"></i>&nbsp; Landing</a>
                                    <a class="dropdown-item" href="login.html"><i class="nc-icon nc-lock-circle-open"></i>&nbsp; Login</a>
                                    <a class="dropdown-item" href="product-page.html"><i class="nc-icon nc-album-2"></i>&nbsp; Product Page</a>
                                    <a class="dropdown-item" href="profile.html"><i class="nc-icon nc-single-02"></i>&nbsp; Profile</a>
                                    <a class="dropdown-item" href="register.html"><i class="nc-icon nc-bookmark-2"></i>&nbsp; Register</a>
                                    <a class="dropdown-item" href="search-with-sidebar.html"><i class="nc-icon nc-zoom-split"></i>&nbsp; Search</a>
                                    <a class="dropdown-item" href="settings.html"><i class="nc-icon nc-settings-gear-65"></i>&nbsp; Settings</a>
                                    <a class="dropdown-item" href="twitter-redesign.html"><i class="nc-icon nc-tie-bow"></i>&nbsp; Twitter</a>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-round btn-danger" href="https://www.creative-tim.com/product/paper-kit-2-pro">
                                    <i class="nc-icon nc-cart-simple"></i> Buy now
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> -->

            <div class="wrapper">
                <div class="page-header page-header-small" style="background-image: url('<?=template_user1_path?>/assets/img/sections/rodrigo-ardilha.jpg');">
                    <div class="filter"></div>
                </div>
                <div class="profile-content section">
                    <div class="container">
                        <div class="row">
                            <div class="profile-picture">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new img-no-padding">
                                        <img src="<?=template_user1_path?>/assets/img/faces/joe-gardner-2.jpg" alt="...">
                                    </div>
                                    <div class="name">
                                        <h4 class="title text-center">Chet Faker<br /><small>Music Producer</small></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 ml-auto mr-auto text-center">
                                <p>An artist of considerable range, Chet Faker — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
                                <br />
                                <btn class="btn btn-outline-default btn-round"><i class="fa fa-cog"></i> Settings</btn>
                            </div>
                        </div>
                        <br/>
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#follows" role="tab">Follows</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#following" role="tab">Following</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="follows" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6 ml-auto mr-auto">
                                        <ul class="list-unstyled follows">
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-2 col-3">
                                                        <img src="<?=template_user1_path?>/assets/img/faces/clem-onojeghuo-3.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                    </div>
                                                    <div class="col-md-7 col-4">
                                                        <h6>Lincoln<br/><small>Car Producer</small></h6>
                                                    </div>
                                                    <div class="col-md-3 col-2">
                                                        <div class="unfollow" >
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="" checked>
                                                                    <span class="form-check-sign"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <hr />
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-2 col-3">
                                                        <img src="<?=template_user1_path?>/assets/img/faces/erik-lucatero-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                    </div>
                                                    <div class="col-md-7 col-4">
                                                        <h6>Banks<br /><small>Singer</small></h6>
                                                    </div>
                                                    <div class="col-md-3 col-2">
                                                        <div class="unfollow" >
                                                            <div class="form-check">
                                                                <label class="form-check-label">
                                                                    <input class="form-check-input" type="checkbox" value="">
                                                                    <span class="form-check-sign"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane text-center" id="following" role="tabpanel">
                                <h3 class="text-muted">Not following anyone yet :(</h3>
                                <button class="btn btn-warning btn-round">Find artists</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <footer class="footer section-dark">
                <div class="container">
                    <div class="row">
                        <nav class="footer-nav">
                            <ul>
                                <li><a href="https://www.creative-tim.com">Creative Tim</a></li>
                                <li><a href="http://blog.creative-tim.com">Blog</a></li>
                                <li><a href="https://www.creative-tim.com/license">Licenses</a></li>
                            </ul>
                        </nav>
                        <div class="credits ml-auto">
                            <span class="copyright">
                                © <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
                            </span>
                        </div>
                    </div>
                </div>
            </footer> -->
        </div>
    </div>

    <div class="cd-section section-white" id="product">
          <div class="wrapper">
            <div class="page-header page-header-xs" style="background-image: url('<?=template_user1_path?>/assets/img/sections/clark-street-mercantile.jpg');">
                <div class="filter"></div>
            </div>
            <div class="main">
                <div class="section">
                    <div class="container">
                            <div class="row title-row">
                                <div class="col-md-2">
                                    <h4 class="shop">Shop</h4>
                                </div>
                                <div class="col-md-4 ml-auto">
                                    <div class="pull-right">
                                        <span class="text-muted">Order Status</span> <button class="btn btn-link"> <i class="fa fa-shopping-cart"></i> 0 Items</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 col-sm-6">

                                    <div id="carousel" class="ml-auto mr-auto">
                                        <div class="card page-carousel">
                                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                                </ol>
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="carousel-item active">
                                                        <img class="d-block img-fluid" src="<?=template_user1_path?>/assets/img/jacket-1.jpg" alt="Awesome Item">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <p>Somewhere</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block img-fluid" src="<?=template_user1_path?>/assets/img/jacket-2.jpg" alt="Awesome Item">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <p>Somewhere else</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block img-fluid" src="<?=template_user1_path?>/assets/img/jacket-3.jpg" alt="Awesome Item">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <p>Here it is</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block img-fluid" src="<?=template_user1_path?>/assets/img/jacket-4.jpg" alt="Awesome Item">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <p>Here it is</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <a class="left carousel-control carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                                    <span class="fa fa-angle-left"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="right carousel-control carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                                    <span class="fa fa-angle-right"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div> <!-- end carousel -->

                                </div>
                                <div class="col-md-5 col-sm-6">
                                    <h2>Suede Blazer</h2>
                                    <h4 class="price"><strong>&euro; 2,900.00</strong></h4>
                                    <hr />
                                    <p>This blazer in suede is a must-have of your wardrobe. Team it with a angora blazer and a angora sweater.</p>
                                    <span class="label label-default shipping">Free shipping to Europe </span>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <label>Select color</label>
                                            <div class="form-group">
                                                <select name="huge" class="selectpicker" data-style="btn btn-outline-default btn-block btn-round" data-menu-style="">
                                                    <option value="1">Black </option>
                                                    <option value="2">Gray</option>
                                                    <option value="3">White</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <label>Select size</label>
                                            <div class="form-group">
                                                <select name="huge" class="selectpicker" data-style="btn btn-outline-default btn-block btn-round" data-menu-style="">
                                                    <option value="1">Small </option>
                                                    <option value="2">Medium</option>
                                                    <option value="3">Large</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-md-7 offset-md-5 col-sm-8">
                                            <button class="btn btn-danger btn-block btn-round">Add to Cart &nbsp;<i class="fa fa-chevron-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

                <div class="section">
                    <div class="container">
                        <div class="row card-body-row">
                            <div class="col-md-4 col-sm-4">
                            <div class="info">
                                    <div class="icon icon-warning">
                                        <i class="nc-icon nc-delivery-fast"></i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title"> 2 Days Delivery </h4>
                                        <p>Spend your time generating new ideas. You don't have to think of implementing anymore.</p>
                                    </div>
                            </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                            <div class="info">
                                    <div class="icon icon-danger">
                                        <i class="nc-icon nc-credit-card"></i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title"> Refundable Policy </h4>
                                        <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient.</p>
                                    </div>
                            </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                            <div class="info">
                                    <div class="icon icon-success">
                                        <i class="nc-icon nc-bulb-63"></i>
                                    </div>
                                    <div class="description">
                                        <h4 class="info-title"> Popular Item </h4>
                                        <p>Choose from a veriety of colors resembling sugar paper pastels.</p>
                                    </div>
                            </div>
                            </div>
                        </div>
                        <hr />
                            <p>What to find out more about how we build our stuff? <a class="link-danger">Learn more.</a></p>
                        <hr />
                        <div class="faq">

                            <h4>Frequently Asked Questions</h4> <br/>
                            <div id="acordeon">
                                <div id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="card no-transition">
                                        <div class="card-header card-collapse" role="tab" id="headingOne">
                                            <h5 class="mb-0 panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    Default Collapsible Item 1
                                                    <i class="nc-icon nc-minimal-down"></i>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                        <div class="card-header card-collapse" role="tab" id="headingTwo">
                                            <h5 class="mb-0 panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Default Collapsible Item 2
                                                    <i class="nc-icon nc-minimal-down"></i>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                        <div class="card-header card-collapse" role="tab" id="headingThree">
                                            <h5 class="mb-0 panel-title">
                                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Default Collapsible Item 3
                                                    <i class="nc-icon nc-minimal-down"></i>
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                </div><!--  end acordeon -->
                            </div>

                        </div>
                        <div class="row add-row">
                            <div class="col-md-4 col-sm-4">
                                <h4>Complete the Look</h4>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <h5>Full-Grain Leather Briefcase</h5>
                                <p class="price"><strong>&euro; 975.00</strong></p>

                                <p>Constructed from robust full-grain leather, it's finished with the label's 'city webbing' - a rich take on the brand's signature stripes.</p>
                                <br/>
                                <button class="btn btn-danger btn-round"> Add to Cart</button>
                            </div>
                            <div class="col-md-3 ml-auto col-sm-4">
                                <img src="<?=template_user1_path?>/assets/img/gallery/paul-smith.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section section-dark">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12"><h4>Similar Products</h4><br/></div>
                            <div class="col-md-4 col-sm-4">
                                <div class="card card-product card-plain">
                                    <div class="card-image">
                                        <a href="#paper-kit">
                                            <img src="<?=template_user1_path?>/assets/img/balmain-1.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                        </a>
                                        <div class="card-body">
                                            <div class="card-description">
                                                <h5 class="card-title">Double Breasted Mini Dress</h5>
                                                <p class="card-description">Dresses & Skirts</p>
                                            </div>
                                            <div class="actions">
                                                <h5>1.300 &euro;</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="card card-product card-plain">
                                    <div class="card-image">
                                        <a href="#paper-kit">
                                            <img src="<?=template_user1_path?>/assets/img/balmain-2.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                        </a>
                                        <div class="card-body">
                                            <div class="card-description">
                                                <h5 class="card-title">Chrystal Dress</h5>
                                                <p class="card-description">Dresses & Skirts</p>
                                            </div>
                                            <div class="actions">
                                                <h5>1.500 &euro;</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <div class="card card-product card-plain">
                                    <div class="card-image">
                                        <a href="#paper-kit">
                                            <img src="<?=template_user1_path?>/assets/img/balmain-3.jpg" alt="Rounded Image" class="img-rounded img-responsive">
                                        </a>
                                        <div class="card-body">
                                            <div class="card-description">
                                                <h5 class="card-title">Chrystal Skirt</h5>
                                                <p class="card-description">Only on demand</p>
                                            </div>

                                            <div class="actions">
                                                <h5>1.200 &euro;</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="cd-section section-white" id="search">
        <div class="search">
           
            <div class="wrapper">

                <div class="main">
                    <div class="section section-white section-search">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-12 ml-auto mr-auto text-center">
                                    <form role="search" class="form-inline search-form">
                                        <div class="input-group no-border">
                                        <span class="input-group-addon addon-xtreme no-border" id="basic-addon1"><i class="fa fa-search"></i></span>
                                        <input type="text" class="form-control input-xtreme no-border" placeholder="Find Stuff" aria-describedby="basic-addon1">
                                        </div>
                                    </form>

                                    <h6 class="text-muted">Is this what you are looking for?</h6>
                                    <ul class="list-unstyled follows">
                                        <li>
                                            <div class="row">
                                                <div class="col-md-2 col-3">
                                                    <img src="<?=template_user1_path?>/assets/img/faces/ayo-ogunseinde-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                </div>
                                                <div class="col-md-6 col-4 description">
                                                    <h5>Erik Faker<br>
                                                    <small>Musical Artist with <b>3</b> songs.</small>
                                                    </h5>
                                                </div>
                                                <div class="col-md-2 col-2">
                                                    <button class="btn btn-just-icon btn-round btn-outline-danger btn-tooltip" rel="tooltip" title="follow"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-md-2 col-3">
                                                    <img src="<?=template_user1_path?>/assets/img/faces/kaci-baum-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                </div>
                                                <div class="col-md-6 col-4 description">
                                                    <h5>Sophie Travolta<br /><small>Singer</small></h5>
                                                </div>
                                                <div class="col-md-2 col-2">
                                                    <button class="btn btn-just-icon btn-round btn-outline-danger btn-tooltip" rel="tooltip" title="follow"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-md-2 col-3">
                                                    <img src="<?=template_user1_path?>/assets/img/faces/erik-lucatero-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                </div>
                                                <div class="col-md-6 col-4 description">
                                                    <h5>John Lincoln<br /><small>Musical Producer</small></h5>
                                                </div>
                                                <div class="col-md-2 col-2">
                                                    <button class="btn btn-just-icon btn-round btn-outline-danger btn-tooltip" rel="tooltip" title="follow"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <div class="col-md-2 col-3">
                                                    <img src="<?=template_user1_path?>/assets/img/faces/clem-onojeghuo-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                </div>
                                                <div class="col-md-6 col-4 description">
                                                    <h5>Oleg Clem<br /><small>Web Designer</small></h5>
                                                </div>
                                                <div class="col-md-2 col-2">
                                                    <button class="btn btn-just-icon btn-round btn-outline-danger btn-tooltip" rel="tooltip" title="follow"><i class="fa fa-plus"></i></button>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>

                                    <div class="text-missing">
                                        <h5 class="text-muted">If you are not finding who you’re looking for try using an email address. </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- <footer class="footer">
                <div class="container">
                    <div class="row">
                        <nav class="footer-nav">
                            <ul>
                                <li><a href="https://www.creative-tim.com">Creative Tim</a></li>
                                <li><a href="http://blog.creative-tim.com">Blog</a></li>
                                <li><a href="https://www.creative-tim.com/license">Licenses</a></li>
                            </ul>
                        </nav>
                        <div class="credits ml-auto">
                            <span class="copyright">
                                © <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
                            </span>
                        </div>
                    </div>
                </div>
            </footer> -->


        </div>

    </div>



    <div class="cd-section section-white" id="settings">
        <div class="wrapper">
            <div class="page-header page-header-xs settings-background" style="background-image: url('<?=template_user1_path?>/assets/img/sections/joshua-earles.jpg');">
                <div class="filter"></div>
            </div>
            <div class="profile-content section">
                <div class="container">
                    <div class="row">
                        <div class="profile-picture">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new img-no-padding">
                                    <img src="<?=template_user1_path?>/assets/img/faces/clem-onojeghuo-2.jpg" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists img-no-padding"></div>
                                <div>
                                    <span class="btn btn-outline-default btn-file btn-round"><span class="fileinput-new">Change Photo</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                                    <br />
                                    <a href="#paper-kit" class="btn btn-link btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <form class="settings-form">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control border-input" placeholder="First Name">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Last Email</label>
                                            <input type="text" class="form-control border-input" placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>
                            <div class="form-group">
                                    <label>Job Title</label>
                                    <input type="text" class="form-control border-input" placeholder="Job Title">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                    <textarea class="form-control textarea-limited" placeholder="This is a textarea limited to 150 characters." rows="3", maxlength="150" ></textarea>
                                    <h5><small><span id="textarea-limited-message" class="pull-right">150 characters left</span></small></h5>
                            </div>

                            <label>Notifications</label>
                            <ul class="notifications">
                                <li class="notification-item">
                                    Updates regarding platform changes
                                    <input type="checkbox" data-toggle="switch" checked="" data-on-color="info" data-off-color="info"><span class="toggle"></span>
                                </li>
                                <li class="notification-item">
                                    Updates regarding product changes
                                    <input type="checkbox" data-toggle="switch" checked="" data-on-color="info" data-off-color="info"><span class="toggle"></span>
                                </li>
                                <li class="notification-item">
                                    Weekly newsletter
                                    <input type="checkbox" data-toggle="switch" checked="" data-on-color="info" data-off-color="info"><span class="toggle"></span>
                                </li>
                            </ul>
                            <div class="text-center">
                                <button type="submit" class="btn btn-wd btn-info btn-round">Save</button>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>                       

    </div>


    <div class="cd-section section-white" id="register">
        <div class="full-screen register">
            <!-- <nav class="navbar navbar-expand-lg fixed-top navbar-transparent">
                <div class="container">
                    <div class="navbar-translate">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="<?=template_user1_path?>/presentation.html">Paper Kit 2 PRO</a>
                        </div>
                        <button class="navbar-toggler navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-bar"></span>
                            <span class="navbar-toggler-bar"></span>
                            <span class="navbar-toggler-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="../index.html" data-scroll="true" href="javascript:void(0)">Components</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">Sections</a>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
                                    <a class="dropdown-item" href="../sections.html#headers"><i class="nc-icon nc-tile-56"></i>&nbsp; Headers</a>
                                    <a class="dropdown-item" href="../sections.html#features"><i class="nc-icon nc-settings"></i>&nbsp; Features</a>
                                    <a class="dropdown-item" href="../sections.html#blogs"><i class="nc-icon nc-bullet-list-67"></i>&nbsp; Blogs</a>
                                    <a class="dropdown-item" href="../sections.html#teams"><i class="nc-icon nc-single-02"></i>&nbsp; Teams</a>
                                    <a class="dropdown-item" href="../sections.html#projects"><i class="nc-icon nc-calendar-60"></i>&nbsp; Projects</a>
                                    <a class="dropdown-item" href="../sections.html#pricing"><i class="nc-icon nc-money-coins"></i>&nbsp; Pricing</a>
                                    <a class="dropdown-item" href="../sections.html#testimonials"><i class="nc-icon nc-badge"></i>&nbsp; Testimonials</a>
                                    <a class="dropdown-item" href="../sections.html#contact-us"><i class="nc-icon nc-mobile"></i>&nbsp; Contacts</a>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle"  data-toggle="dropdown" href="javascript:void(0)">Examples</a>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
                                    <a class="dropdown-item" href="about-us.html"><i class="nc-icon nc-bank"></i>&nbsp; About Us</a>
                                    <a class="dropdown-item" href="add-product.html"><i class="nc-icon nc-basket"></i>&nbsp; Add Product</a>
                                    <a class="dropdown-item" href="blog-post.html"><i class="nc-icon nc-badge"></i>&nbsp; Blog Post</a>
                                    <a class="dropdown-item" href="blog-posts.html"><i class="nc-icon nc-bullet-list-67"></i>&nbsp; Blog Posts</a>
                                    <a class="dropdown-item" href="contact-us.html"><i class="nc-icon nc-mobile"></i>&nbsp; Contact Us</a>
                                    <a class="dropdown-item" href="discover.html"><i class="nc-icon nc-world-2"></i>&nbsp; Discover</a>
                                    <a class="dropdown-item" href="ecommerce.html"><i class="nc-icon nc-send"></i>&nbsp; Ecommerce</a>
                                    <a class="dropdown-item" href="landing.html"><i class="nc-icon nc-spaceship"></i>&nbsp; Landing</a>
                                    <a class="dropdown-item" href="login.html"><i class="nc-icon nc-lock-circle-open"></i>&nbsp; Login</a>
                                    <a class="dropdown-item" href="product-page.html"><i class="nc-icon nc-album-2"></i>&nbsp; Product Page</a>
                                    <a class="dropdown-item" href="profile.html"><i class="nc-icon nc-single-02"></i>&nbsp; Profile</a>
                                    <a class="dropdown-item" href="register.html"><i class="nc-icon nc-bookmark-2"></i>&nbsp; Register</a>
                                    <a class="dropdown-item" href="search-with-sidebar.html"><i class="nc-icon nc-zoom-split"></i>&nbsp; Search</a>
                                    <a class="dropdown-item" href="settings.html"><i class="nc-icon nc-settings-gear-65"></i>&nbsp; Settings</a>
                                    <a class="dropdown-item" href="twitter-redesign.html"><i class="nc-icon nc-tie-bow"></i>&nbsp; Twitter</a>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-round btn-danger" href="https://www.creative-tim.com/product/paper-kit-2-pro">
                                    <i class="nc-icon nc-cart-simple"></i> Buy now
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> -->

            <div class="wrapper">
                <div class="page-header" style="background-image: url('<?=template_user1_path?>/assets/img/sections/soroush-karimi.jpg');">
                    <div class="filter"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-7 col-12 ml-auto">
                                    <div class="info info-horizontal">
                                        <div class="icon">
                                            <i class="fa fa-umbrella"></i>
                                        </div>
                                        <div class="description">
                                            <h3> We've got you covered </h3>
                                            <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient. Everything you need in a single case.</p>
                                        </div>
                                    </div>
                                    <div class="info info-horizontal">
                                        <div class="icon">
                                            <i class="fa fa-map-signs"></i>
                                        </div>
                                        <div class="description">
                                            <h3> Clear Directions </h3>
                                            <p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.</p>
                                        </div>
                                    </div>
                                    <div class="info info-horizontal">
                                        <div class="icon">
                                            <i class="fa fa-user-secret"></i>
                                        </div>
                                        <div class="description">
                                            <h3> We value your privacy </h3>
                                            <p>Completely synergize resource taxing relationships via premier niche markets.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-5 col-12 mr-auto">
                                    <div class="card card-register">
                                        <h3 class="card-title text-center">Register</h3>
                                        <div class="social">
                                            <button href="#paper-kit" class="btn btn-just-icon btn-facebook"><i class="fa fa-facebook"></i></button>
                                            <button href="#paper-kit" class="btn btn-just-icon btn-google"><i class="fa fa-google"></i></button>
                                            <button href="#paper-kit" class="btn btn-just-icon btn-twitter"><i class="fa fa-twitter"></i></button>
                                        </div>

                                        <div class="division">
                                            <div class="line l"></div>
                                            <span>or</span>
                                            <div class="line r"></div>
                                        </div>
                                        <form class="register-form">
                                            <input type="text" class="form-control" placeholder="Email">

                                            <input type="password" class="form-control" placeholder="Password">

                                            <input type="password" class="form-control" placeholder="Confirm Password">

                                            <button class="btn btn-block btn-round">Register</button>
                                        </form>
                                        <div class="login">
                                            <p>Already have an account? <a href="#0">Log in</a>.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="demo-footer text-center">
                            <h6>&copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by Creative Tim</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>


     <div class="cd-section section-white" id="login">                  
        <div class="full-screen login">
            <!-- <nav class="navbar navbar-expand-lg fixed-top navbar-transparent nav-down" color-on-scroll="200">
                <div class="container">
                    <div class="navbar-translate">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="<?=template_user1_path?>/presentation.html">Paper Kit 2 PRO</a>
                        </div>
                        <button class="navbar-toggler navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-bar"></span>
                            <span class="navbar-toggler-bar"></span>
                            <span class="navbar-toggler-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="../index.html" data-scroll="true" href="javascript:void(0)">Components</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">Sections</a>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
                                    <a class="dropdown-item" href="../sections.html#headers"><i class="nc-icon nc-tile-56"></i>&nbsp; Headers</a>
                                    <a class="dropdown-item" href="../sections.html#features"><i class="nc-icon nc-settings"></i>&nbsp; Features</a>
                                    <a class="dropdown-item" href="../sections.html#blogs"><i class="nc-icon nc-bullet-list-67"></i>&nbsp; Blogs</a>
                                    <a class="dropdown-item" href="../sections.html#teams"><i class="nc-icon nc-single-02"></i>&nbsp; Teams</a>
                                    <a class="dropdown-item" href="../sections.html#projects"><i class="nc-icon nc-calendar-60"></i>&nbsp; Projects</a>
                                    <a class="dropdown-item" href="../sections.html#pricing"><i class="nc-icon nc-money-coins"></i>&nbsp; Pricing</a>
                                    <a class="dropdown-item" href="../sections.html#testimonials"><i class="nc-icon nc-badge"></i>&nbsp; Testimonials</a>
                                    <a class="dropdown-item" href="../sections.html#contact-us"><i class="nc-icon nc-mobile"></i>&nbsp; Contacts</a>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle"  data-toggle="dropdown" href="javascript:void(0)">Examples</a>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
                                    <a class="dropdown-item" href="about-us.html"><i class="nc-icon nc-bank"></i>&nbsp; About Us</a>
                                    <a class="dropdown-item" href="add-product.html"><i class="nc-icon nc-basket"></i>&nbsp; Add Product</a>
                                    <a class="dropdown-item" href="blog-post.html"><i class="nc-icon nc-badge"></i>&nbsp; Blog Post</a>
                                    <a class="dropdown-item" href="blog-posts.html"><i class="nc-icon nc-bullet-list-67"></i>&nbsp; Blog Posts</a>
                                    <a class="dropdown-item" href="contact-us.html"><i class="nc-icon nc-mobile"></i>&nbsp; Contact Us</a>
                                    <a class="dropdown-item" href="discover.html"><i class="nc-icon nc-world-2"></i>&nbsp; Discover</a>
                                    <a class="dropdown-item" href="ecommerce.html"><i class="nc-icon nc-send"></i>&nbsp; Ecommerce</a>
                                    <a class="dropdown-item" href="landing.html"><i class="nc-icon nc-spaceship"></i>&nbsp; Landing</a>
                                    <a class="dropdown-item" href="login.html"><i class="nc-icon nc-lock-circle-open"></i>&nbsp; Login</a>
                                    <a class="dropdown-item" href="product-page.html"><i class="nc-icon nc-album-2"></i>&nbsp; Product Page</a>
                                    <a class="dropdown-item" href="profile.html"><i class="nc-icon nc-single-02"></i>&nbsp; Profile</a>
                                    <a class="dropdown-item" href="register.html"><i class="nc-icon nc-bookmark-2"></i>&nbsp; Register</a>
                                    <a class="dropdown-item" href="search-with-sidebar.html"><i class="nc-icon nc-zoom-split"></i>&nbsp; Search</a>
                                    <a class="dropdown-item" href="settings.html"><i class="nc-icon nc-settings-gear-65"></i>&nbsp; Settings</a>
                                    <a class="dropdown-item" href="twitter-redesign.html"><i class="nc-icon nc-tie-bow"></i>&nbsp; Twitter</a>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-round btn-danger" href="https://www.creative-tim.com/product/paper-kit-2-pro">
                                    <i class="nc-icon nc-cart-simple"></i> Buy now
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> -->

            <div class="wrapper">
                <div class="page-header" style="background-image: url('<?=template_user1_path?>/assets/img/sections/bruno-abatti.jpg');">
                    <div class="filter"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                                <div class="card card-register">
                                    <h3 class="card-title">Welcome</h3>
                                    <form class="register-form">
                                        <label>Email</label>
                                        <input type="email" class="form-control no-border" placeholder="Email">

                                        <label>Password</label>
                                        <input type="password" class="form-control no-border" placeholder="Password">
                                        <button class="btn btn-danger btn-block btn-round">Register</button>
                                    </form>
                                    <div class="forgot">
                                        <a href="#paper-kit" class="btn btn-link btn-danger">Forgot password?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="demo-footer text-center">
                            <h6>&copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by Creative Tim</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    




































     <div class="cd-section section-white" id="subscribe">
        <!-- subscribe 1 -->
        <!-- <div class="subscribe-line subscribe-line-black" >
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-8">
                        <form class="">
                            <div class="form-group">
                                <input type="text" value="" class="form-control" placeholder="Enter your email...">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <button type="button" class="btn btn-neutral btn-block btn-lg">Join Newsletter</button>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- subscribe 2 -->

        <div class="subscribe-line subscribe-line-transparent" style="background-image: url('<?=template_user1_path?>/assets/img/sections/pavel-kosov.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-8">
                        <form class="">
                            <div class="form-group">
                                <input type="text" value="" class="form-control" placeholder="Enter your email...">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <button type="button" class="btn btn-info btn-block btn-round">Subscribe Now!</button>
                    </div>
                </div>
            </div>
        </div>


    </div>


    <div class="cd-section section-white" id="footer">
         <!-- footer 1 -->
        <!-- <footer class="footer footer-big"  >
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-9">
                        <div class="links">
                            <ul class="uppercase-links">
                                <li>
                                    <a href="#paper-kit">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="#paper-kit">
                                        Company
                                    </a>
                                </li>
                                <li>
                                    <a href="#paper-kit">
                                        Portfolio
                                    </a>
                                </li>
                                <li>
                                    <a href="#paper-kit">
                                    Team
                                    </a>
                                </li>
                                <li>
                                    <a href="#paper-kit">
                                    Blog
                                    </a>
                                </li>
                                <li>
                                    <a href="#paper-kit">
                                    Contact
                                    </a>
                                </li>


                            </ul>
                            <hr />

                            <div class="copyright">
                                © <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by Panda Love
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 ml-auto col-sm-2">
                        <div class="social-area">
                            <a href="#facebook" class="btn btn-neutral btn-round btn-just-icon btn-facebook">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                            <a href="#twitter" class="btn btn-neutral btn-just-icon btn-round btn-twitter">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="#google" class="btn btn-neutral btn-just-icon btn-round btn-google">
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                            </a>
                            <a href="#pin" class="btn btn-neutral btn-just-icon btn-round btn-pinterest">
                                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer> -->
        <!-- footer 2 -->
        <footer class="footer footer-black footer-big">

            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 ml-auto mr-auto">
                        <div class="logo text-center">
                            <h3>Lapotp Bao Ngoc</h3>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-2 col-sm-8">
                        <div class="links">
                            <ul>
                                <li>
                                    <a href="#paper-kit">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="#paper-kit">
                                        Company
                                    </a>
                                </li>
                                <li>
                                    <a href="#paper-kit">
                                        Portfolio
                                    </a>
                                </li>
                                <li>
                                    <a href="#paper-kit">
                                       Team
                                    </a>
                                </li>
                                <li>
                                    <a href="#paper-kit">
                                       Contact
                                    </a>
                                </li>
                                <li>
                                    <a href="#paper-kit">
                                       We're Hiring!
                                    </a>
                                </li>
                            </ul>
                            <hr>
                            <div class="copyright">
                                <div class="pull-left">
                                    © <script>document.write(new Date().getFullYear())</script>2018, made with <i class="fa fa-heart heart"></i> in Bucharest
                                </div>
                                <div class="pull-right">
                                    <ul>
                                        <li>
                                            <a href="#paper-kit">
                                                Terms
                                            </a>
                                        </li>
                                        |
                                        <li>
                                            <a href="#paper-kit">
                                                Privacy
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </footer>
    </div>

    <nav id="cd-vertical-nav">
    		<ul>
    			<li>
    				<a href="#headers" data-number="1">
    					<span class="cd-dot"></span>
    					<span class="cd-label">Headers</span>
    				</a>
    			</li>
    			<li>
    				<a href="#features" data-number="2">
    					<span class="cd-dot"></span>
    					<span class="cd-label">Features</span>
    				</a>
    			</li>
    			<li>
    				<a href="#blog" data-number="3">
    					<span class="cd-dot"></span>
    					<span class="cd-label">Blogs</span>
    				</a>
    			</li>
    			<li>
    				<a href="#teams" data-number="4">
    					<span class="cd-dot"></span>
    					<span class="cd-label">Teams</span>
    				</a>
    			</li>
    			<li>
    				<a href="#projects" data-number="5">
    					<span class="cd-dot"></span>
    					<span class="cd-label">Projects</span>
    				</a>
    			</li>
    			<li>
    				<a href="#pricing" data-number="6">
    					<span class="cd-dot"></span>
    					<span class="cd-label">Pricing</span>
    				</a>
    			</li>
    			<li>
    				<a href="#testimonials" data-number="7">
    					<span class="cd-dot"></span>
    					<span class="cd-label">Testimonials</span>
    				</a>
    			</li>
    			<li>
    				<a href="#contact-us" data-number="8">
    					<span class="cd-dot"></span>
    					<span class="cd-label">Contact Us</span>
    				</a>
                </li>
            
                <li>
    				<a href="#comments" data-number="9">
    					<span class="cd-dot"></span>
    					<span class="cd-label">Comments</span>
    				</a>
                </li>
                <li>
    				<a href="#wrapper" data-number="10">
    					<span class="cd-dot"></span>
    					<span class="cd-label">Wrapper</span>
    				</a>
                </li>
                <li>
    				<a href="#blog" data-number="11">
    					<span class="cd-dot"></span>
    					<span class="cd-label">Blog</span>
    				</a>
                </li>
                <li>
    				<a href="#profile" data-number="12">
    					<span class="cd-dot"></span>
    					<span class="cd-label">Profile</span>
    				</a>
                </li>
                <li>
    				<a href="#product" data-number="13">
    					<span class="cd-dot"></span>
    					<span class="cd-label">Product</span>
    				</a>
                </li>
                <li>
    				<a href="#search" data-number="14">
    					<span class="cd-dot"></span>
    					<span class="cd-label">Search</span>
    				</a>
                </li>
                <li>
    				<a href="#settings" data-number="15">
    					<span class="cd-dot"></span>
    					<span class="cd-label">Settings</span>
    				</a>
                </li>
                <li>
    				<a href="#register" data-number="16">
    					<span class="cd-dot"></span>
    					<span class="cd-label">Register</span>
    				</a>
                </li>
                <li>
    				<a href="#login" data-number="17">
    					<span class="cd-dot"></span>
    					<span class="cd-label">Login</span>
    				</a>
                </li>
              


















                <li>
    				<a href="#subscribe" data-number="20">
    					<span class="cd-dot"></span>
    					<span class="cd-label">Subscribe</span>
    				</a>
                </li>
                <li>
    				<a href="#footer" data-number="21">
    					<span class="cd-dot"></span>
    					<span class="cd-label">Footer</span>
    				</a>
                </li>
                
    		</ul>
    	</nav>






</body>

