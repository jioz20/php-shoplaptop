
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Laptop Bao Ngoc</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
		
        <!-- Google Font -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,500.00,700,300' rel='stylesheet' type='text/css'>
       
		
		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="<?=template_user3_path?>/css/bootstrap.min.css">
		<!-- animate css -->
        <link rel="stylesheet" href="<?=template_user3_path?>/css/animate.css">
		<!-- jquery-ui.min css -->
        <link rel="stylesheet" href="<?=template_user3_path?>/css/jquery-ui.min.css">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="<?=template_user3_path?>/css/meanmenu.min.css">
		<!-- nivo-slider css -->
        <link rel="stylesheet" href="<?=template_user3_path?>/lib/css/nivo-slider.css">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="<?=template_user3_path?>/css/owl.carousel.css">
		<!-- flaticon css -->
        <link rel="stylesheet" href="<?=template_user3_path?>/css/shopick-icon.css">
		<!-- pe-icon-7-stroke css -->
        <link rel="stylesheet" href="<?=template_user3_path?>/css/pe-icon-7-stroke.css">
		<!-- lightbox css -->
        <link rel="stylesheet" href="<?=template_user3_path?>/css/lightbox.min.css">
		<!-- style css -->
		<link rel="stylesheet" href="<?=template_user3_path?>/style.css">
		<!-- responsive css -->
        <link rel="stylesheet" href="<?=template_user3_path?>/css/responsive.css">
		<!-- modernizr css -->
        <script src="<?=template_user3_path?>/js/vendor/modernizr-2.8.3.min.js"></script>
        <link href="menu/css/ace-responsive-menu.css" rel="stylesheet" type="text/css" />
        <!-- <link href="menu/css/demo.css" rel="stylesheet" type="text/css" /> -->
    </head>
    <body>
    <!-- HEADER-AREA START -->
    <header class="header-area style-2">
        
        <!-- Main-Header Start -->
        <div class="main-header">
            <div class="container"> 
                <div class="row">
                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="logo">
                            <!-- <a href="index.html"><img src="<?=template_user3_path?>/img/logo.png" alt="" /></a> -->
                        </div>
                    </div>
                    <div class="col-md-8 hidden-sm hidden-xs">
                        <div class="main-menu pull-right">
                            <nav>
                                <ul>
                                    <li><a href="?controller=user3&act=trangchu">home</a>
                                        <ul class="submenu">
                                            <li class="submenu-title"><a href="?controller=user3&act=trangchu">Home</a></li>
                                            <li><a href="?controller=user3&act=trangchu">Home V1</a></li>
                                            <!-- <li><a href="?controller=user3&act=trangchu2">Home V2</a></li> -->
                                        </ul>
                                    </li>
                                    <!-- <li><a href="shop.html">mens</a></li> -->
                                    <!-- <li><a href="shop-list.html">womens</a></li> -->
                                    <li><a href="?controller=user3&act=shop">shop</a>
                                        <div class="mega-menu">
                                            <span>
                                                <a class="mega-menu-title" href="#">Laptop</a>
                                                <a href="#">Dell</a>
                                                <a href="#">HP</a>
                                                <a href="#">Lenovo</a>
                                                <a href="#">Apple</a>
                                                <a href="#">Hãng Khác</a>
                                                <!-- <a href="#">muscle tee</a> -->
                                                <!-- <a href="#">seine blouse</a> -->
                                            </span>
                                            <span>
                                                <a class="mega-menu-title" href="#">PC - Workstation</a>
                                                <a href="#">Dell Precision</a>
                                                <a href="#">HP Workstation</a>
                                                <a href="#">Lenovo</a>
                                                <a href="#">APPLE</a>
                                                <a href="#">Hãng Khác</a>
                                                <!-- <a href="#">muscle tee</a> -->
                                                <!-- <a href="#">seine blouse</a> -->
                                            </span>
                                            <span>
                                                <a class="mega-menu-title" href="#">Linh Kiện</a>
                                                <a href="#">Tai Nghe</a>
                                                <a href="#">Sạc Dự Phòng</a>
                                                <a href="#">USB - Thẻ nhớ </a>
                                                <a href="#">LK cho laptop</a>
                                                <a href="#">LK cho PC</a>
                                                <!-- <a href="#">drop earrings</a> -->
                                            </span>
                                            <span class="mega-menu-photo">
                                                <!-- <a href="#"><img src="<?=template_user3_path?>/img/megamenu/1.jpg" alt="" /></a> -->
                                                <!-- <a href="#"><img src="<?=template_user3_path?>den-nen.jpg" alt="" /></a> -->
                                            </span>
                                        </div>
                                    </li>
                                    <li><a href="?controller=user3&act=blog">Blog</a>
                                        <ul class="submenu">
                                            <li class="submenu-title"><a href="#">Blog pages</a></li>
                                            <li><a href="?controller=user3&act=blog">Blog</a></li>
                                            <li><a href="?controller=user3&act=singleblog">Single-blog</a></li>
                                        </ul>
                                    </li>
                                    <?php if($_SESSION['login']=true) 
                                        echo  
                                        '<li><a href="?controller=user3&act=cart">Cart</a></li>
                                        <li><a href="?controller=user3&act=wishlist">Wishlist</a></li>
    
                                        <li><a href="?controller=user3&act=account">My Account</a>
                                            <ul class="submenu">
                                                <li><a href="?controller=user3&act=account">My Account</a></li>
                                                <!-- <li><a href="?controller=user3&act=wishlist">Wishlist</a></li> -->
                                                <li><a href="?controller=user3&act=checkout">Checkout</a></li>
                                                <li><a href="?controller=user3&act=login">Login</a></li>
                                                <li><a href="?controller=user3&act=logout">Logout</a></li>
                                            </ul>
                                        </li>';
                                    else
                                    {
                                        
                                    }
                                    ?>
                                   
                                    <li><a href="#">Pages</a>
                                        <ul class="submenu">
                                            <li class="submenu-title"><a href="#">All pages</a></li>
                                            <li><a href="">Shop</a></li>
                                            <li><a href="">Shop-List</a></li>
                                            <li><a href="">Single Product</a></li>
                                            <li><a href="">Shopping Cart</a></li>
                                            <li><a href="">Wishlist</a></li>
                                            <li><a href="">Checkout</a></li>
                                            <li><a href="">Login</a></li>
                                            <li><a href="">My Account</a></li>
                                            <li><a href="">Blog</a></li>
                                            <li><a href="">Single-Blog</a></li>
                                            <li><a href="">About</a></li>
                                            <li><a href="">404</a></li>
                                            <li><a href="">Contact Us</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="?controller=user3&act=contact">contact</a></li>
                                    <li><a href="?controller=user3&act=search">Search</a></li>
                                    <?php if(isset($_SESSION['login']) && $_SESSION['login']=true) 
                                        echo '<li><a href="?controller=user3&act=logout">Logout</a></li>';
                                    else
                                    {
                                        echo '<li><a href="?controller=user3&act=login">Login</a></li>';
                                    }
                                    ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12">
                        <div class="total-cart">
                            <ul>
                                <li>
                                    <a href="?controller=user3&act=cart">
                                        <span class="total-cart-number">2 Item</span>
                                        <span><i class="sp-shopping-bag"></i></span>
                                    </a>
                                   
                                    <!-- Mini-cart-content Start -->
                                    <div class="total-cart-brief">
                                        <div class="cart-photo-details">
                                            <div class="cart-photo">
                                                <a href="#"><img src="<?=domainpic?>80-106-1.jpg" alt="" /></a>
                                            </div>
                                            <div class="cart-photo-brief">
                                                <a href="#">Men's Shirt Shirt</a>
                                                <span>$25.00</span>
                                            </div>
                                            <div class="pro-delete">
                                                <a href="#"><i class="sp-circle-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart-photo-details">
                                            <div class="cart-photo">
                                                <a href="#"><img src="<?=domainpic?>80-106-1.jpg" alt="" /></a>
                                            </div>
                                            <div class="cart-photo-brief">
                                                <a href="#">Men's Shirt Shirt</a>
                                                <span>$25.00</span>
                                            </div>
                                            <div class="pro-delete">
                                                <a href="#"><i class="sp-circle-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart-photo-details">
                                            <div class="cart-photo">
                                                <a href="#"><img src="<?=domainpic?>80-106-1.jpg" alt="" /></a>
                                            </div>
                                            <div class="cart-photo-brief">
                                                <a href="#">Men's Shirt Shirt</a>
                                                <span>$25.00</span>
                                            </div>
                                            <div class="pro-delete">
                                                <a href="#"><i class="sp-circle-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="cart-subtotal">
                                            <p>Total = $50.00</p>
                                        </div>
                                        <div class="cart-inner-btm">
                                            <a href="?controller=user3&act=checkout">Checkout</a>
                                        </div>
                                    </div>
                                    <!-- Mini-cart-content End -->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main-Header End -->
        <!-- Header-Top Start -->
        <div class="header-top hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="header-top-left text-left">
                            <ul>
                                <li>
                                    <i class="sp-phone"></i>
                                    <span>01652.448.338</span>
                                </li>
                                <li>
                                    <i class="sp-email"></i>
                                    <span>phamminhphuc102@gmail.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="header-top-left pull-center">
                            <!-- <ul>
                                <li><a href="#">Account <span><i class="sp-gear"></i></span></a>
                                    <ul class="submenu">
                                        <li><a href="?controller=user3&act=account">My Account</a></li>
                                        <li><a href="?controller=user3&act=wishlist">Wishlist</a></li>
                                        <li><a href="?controller=user3&act=checkout">Checkout</a></li>
                                        <li><a href="?controller=user3&act=login">Login</a></li>
                                        <li><a href="?controller=user3&act=logout">Logout</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                            <div class="header-search">
                                <form action=""  method="post" >
                                    <input type="text" name="kw" placeholder="Search..." />
                                    <button type="submit"><i class="sp-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header-Top End -->
        <!-- Mobile-menu start -->
        <div class="mobile-menu-area hidden-md hidden-lg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="?controller=user3&act=trangchu">Home</a>
                                        <ul class="submenu">
                                            <li class="submenu-title"><a href="?controller=user3&act=trangchu">Home pages</a></li>
                                            <li><a href="?controller=user3&act=trangchu">Homepage V1</a></li>
                                            <!-- <li><a href="?controller=user3&act=trangchu2">Homepage V2</a></li> -->
                                        </ul>
                                    </li>
                                    <!-- <li><a href="shop.html">mens</a></li> -->
                                    <!-- <li><a href="shop-list.html">womens</a></li> -->
                                    <li><a href="#">Laptop</a>
                                        <ul class="submenu">
                                            <li><a href="#">Dell</a></li>
                                            <li><a href="#">HP</a></li>
                                            <li><a href="#">Lenovo</a></li>
                                            <li><a href="#">Apple</a></li>
                                            <li><a href="#">Hãng Khác</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">PC-Workstation</a>
                                        <ul class="submenu">
                                            <li><a href="#">Dell Precision</a></li>
                                            <li><a href="#">HP Workstation</a></li>
                                            <li><a href="#">Lenovo</a></li>
                                            <li><a href="#">APPLE</a></li>
                                            <li><a href="#">Hãng Khác</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Linh Kiện</a>
                                        <ul class="submenu">
                                            <li><a href="#">Tai Nghe</a></li>
                                            <li><a href="#">Sạc Dự Phòng</a></li>
                                            <li><a href="#">USB - Thẻ nhớ </a></li>
                                            <li><a href="#">LK cho laptop</a></li>
                                            <li><a href="#">LK cho PC</a></li>
                                        </ul>
                                    </li>

                                    <!-- <li><a href="?controller=user3&act=shop">shop</a></li> -->
                                    <li><a href="?controller=user3&act=blog">Blog</a>
                                        <ul class="submenu">
                                            <!-- <li class="submenu-title"><a href="#">Blog pages</a></li> -->
                                            <li><a href="?controller=user3&act=blog">Blog</a></li>
                                            <li><a href="?controller=user3&act=singleblog">Single-blog</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="?controller=user3&act=cart">Cart</a></li>
                                    <li><a href="?controller=user3&act=wishlist">Wishlist</a></li>
                                    <li><a href="?controller=user3&act=account">My Account</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="submenu">
                                            <li class="submenu-title"><a href="#">All pages</a></li>
                                            <li><a href="">Shop</a></li>
                                            <li><a href="">Shop-List</a></li>
                                            <li><a href="">Single Product</a></li>
                                            <li><a href="">Shopping Cart</a></li>
                                            <li><a href="">Wishlist</a></li>
                                            <li><a href="">Checkout</a></li>
                                            <li><a href="">Login</a></li>
                                            <li><a href="">My Account</a></li>
                                            <li><a href="">Blog</a></li>
                                            <li><a href="">Single-Blog</a></li>
                                            <li><a href="">About</a></li>
                                            <li><a href="">Contact Us</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="?controller=user3&act=contact">contact</a></li>
                                    <li><a href="?controller=user3&act=search">Search</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile-menu end -->			
    </header>
		<!-- HEADER-AREA END -->
        <?php 
                $path=$this->pathview.$view.'.php';
            $this->load($path,'',$data);
        ?>
      
		<!-- FOOTER-AREA START -->
        <style>
        .footer-top {
            background: rgba(0, 0, 0, 0) url("http://localhost/laptopbaongoc_mvc/file/1920-397-1.jpg") no-repeat scroll center center / cover;
            position: relative;
        }
        </style>
		<footer class="footer-area">
			<div class="footer-top">
				<div class="footer">
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-12">
								<div class="single-footer footer-logo">
									<!-- <img src="<?=template_user3_path?>/img/logo.png" alt="" /> -->
									<!-- <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p> -->
								</div>
							</div>
							<div class="col-md-3 col-sm-4 col-xs-12">
								<div class="single-footer footer-contact">
									<h2>contact us</h2>
									<ul>
										<li>
											<i class="sp-phone"></i> 
											<span>01652.448.338</span>
										</li>
										<li>
											<i class="sp-email"></i>
											<span>phamminhphuc102@gmail.com</span>
											<!-- <span>company@email.info</span> -->
										</li>
										<li>
											<i class="sp-map-marker"></i> 
											<!-- <span>HCM</span> -->
											<span>Hóc Môn , Hồ Chí Minh</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-2 hidden-sm col-xs-12">
								<div class="single-footer footer-menu">
									<h2>Laptop Bao Ngoc</h2>
									<ul>
										<li><a href="?controller=user3&act=account">Account</a></li>
										<li><a href="?controller=user3&act=login">Log in</a></li>
										<li><a href="?controller=user3&act=login">Regester</a></li>
										<li><a href="?controller=user3&act=shop">Shop</a></li>
										<li><a href="?controller=user3&act=checkout">Checkout</a></li>
									</ul>
								</div>
							</div>
							<div class="col-md-3 col-sm-4 col-xs-12">
								<div class="single-footer footer-message">
									<form action="#">
										<h2>Quick contact</h2>
										<div class="footer-message-box">
											<input type="text" placeholder="your email address" />
											<textarea placeholder="your messege" ></textarea>
											<input type="submit" value="submit"/>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="copyright-brief">
								<p>Copyright &copy; <a href="#">Laptop Bao Ngoc</a> All right reserved</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="footer-social text-right">
								<a target="_blank" href="https://www.facebook.com/laptopbaongoc102/"><i class="sp-facebook"></i></a>
								<a target="_blank" href="https://twitter.com/pandalove10290"><i class="sp-twitter"></i></a>
								<a target="_blank" href="https://www.linkedin.com/in/panda-love-a21a58169/"><i class="sp-linkedin"></i></a>
								<a target="_blank" href="https://plus.google.com/102373717968388354821"><i class="sp-google"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- FOOTER-AREA END -->
        <!--Start of Tawk.to Script-->
            <!-- <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5b63becbe21878736ba294f5/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
            </script> -->
            <!--End of Tawk.to Script-->
		
		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="<?=template_user3_path?>/js/vendor/jquery-1.12.0.min.js"></script>
		<!-- bootstrap js -->
        <script src="<?=template_user3_path?>/js/bootstrap.min.js"></script>
		<!-- jquery.nivo.slider js -->
        <script src="<?=template_user3_path?>/lib/js/jquery.nivo.slider.js"></script>
        <script src="<?=template_user3_path?>/lib/home.js"></script>
		<!-- owl.carousel js -->
        <script src="<?=template_user3_path?>/js/owl.carousel.min.js"></script>
		<!-- meanmenu js -->
        <script src="<?=template_user3_path?>/js/jquery.meanmenu.js"></script>
		<!-- jquery-ui js -->
        <script src="<?=template_user3_path?>/js/jquery-ui.min.js"></script>
		<!-- lightbox.min js -->
        <script src="<?=template_user3_path?>/js/lightbox.min.js"></script>
		<!-- countdon.min js -->
        <script src="<?=template_user3_path?>/js/countdon.min.js"></script>
		<!-- wow js -->
        <script src="<?=template_user3_path?>/js/wow.min.js"></script>
		<script type="text/javascript">
			new WOW().init();
		</script>
		<!-- plugins js -->
        <script src="<?=template_user3_path?>/js/plugins.js"></script>
		<!-- main js -->
        <script src="<?=template_user3_path?>/js/main.js"></script>

          <!--Scripts-->
        <script src="menu/js/jquery-1.10.1.min.js" type="text/javascript"></script>
        <script src="menu/js/ace-responsive-menu.js" type="text/javascript"></script>
        
        <!--Plugin Initialization-->
        <script type="text/javascript">
            $(document).ready(function () {
                $("#respMenu").aceResponsiveMenu({
                    resizeWidth: '768', // Set the same in Media query       
                    animationSpeed: 'fast', //slow, medium, fast
                    accoridonExpAll: false //Expands all the accordion menu on click
                });
            });
        </script>
        <!-- <script type="text/javascript">
            $("#demoMenu").aceResponsiveMenu();
        </script> -->
        <!-- <script type="text/javascript">
            $("#demoMenu").aceResponsiveMenu({
                resizeWidth: '768', // Set the breakpoint same in Media query       
                animationSpeed: 'fast', //slow, medium, fast
                accoridonExpAll: false //Expands all the accordion menu on click
            });     
        </script> -->
        <!-- <style>.fb-livechat, .fb-widget{display: none}.ctrlq.fb-button, .ctrlq.fb-close{position: fixed; right: 24px; cursor: pointer}.ctrlq.fb-button{z-index: 999; background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDEyOCAxMjgiIGhlaWdodD0iMTI4cHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjggMTI4IiB3aWR0aD0iMTI4cHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnPjxyZWN0IGZpbGw9IiMwMDg0RkYiIGhlaWdodD0iMTI4IiB3aWR0aD0iMTI4Ii8+PC9nPjxwYXRoIGQ9Ik02NCwxNy41MzFjLTI1LjQwNSwwLTQ2LDE5LjI1OS00Niw0My4wMTVjMCwxMy41MTUsNi42NjUsMjUuNTc0LDE3LjA4OSwzMy40NnYxNi40NjIgIGwxNS42OTgtOC43MDdjNC4xODYsMS4xNzEsOC42MjEsMS44LDEzLjIxMywxLjhjMjUuNDA1LDAsNDYtMTkuMjU4LDQ2LTQzLjAxNUMxMTAsMzYuNzksODkuNDA1LDE3LjUzMSw2NCwxNy41MzF6IE02OC44NDUsNzUuMjE0ICBMNTYuOTQ3LDYyLjg1NUwzNC4wMzUsNzUuNTI0bDI1LjEyLTI2LjY1N2wxMS44OTgsMTIuMzU5bDIyLjkxLTEyLjY3TDY4Ljg0NSw3NS4yMTR6IiBmaWxsPSIjRkZGRkZGIiBpZD0iQnViYmxlX1NoYXBlIi8+PC9zdmc+) center no-repeat #0084ff; width: 60px; height: 60px; text-align: center; bottom: 50px; border: 0; outline: 0; border-radius: 60px; -webkit-border-radius: 60px; -moz-border-radius: 60px; -ms-border-radius: 60px; -o-border-radius: 60px; box-shadow: 0 1px 6px rgba(0, 0, 0, .06), 0 2px 32px rgba(0, 0, 0, .16); -webkit-transition: box-shadow .2s ease; background-size: 80%; transition: all .2s ease-in-out}.ctrlq.fb-button:focus, .ctrlq.fb-button:hover{transform: scale(1.1); box-shadow: 0 2px 8px rgba(0, 0, 0, .09), 0 4px 40px rgba(0, 0, 0, .24)}.fb-widget{background: #fff; z-index: 1000; position: fixed; width: 360px; height: 435px; overflow: hidden; opacity: 0; bottom: 0; right: 24px; border-radius: 6px; -o-border-radius: 6px; -webkit-border-radius: 6px; box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -webkit-box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -moz-box-shadow: 0 5px 40px rgba(0, 0, 0, .16); -o-box-shadow: 0 5px 40px rgba(0, 0, 0, .16)}.fb-credit{text-align: center; margin-top: 8px}.fb-credit a{transition: none; color: #bec2c9; font-family: Helvetica, Arial, sans-serif; font-size: 12px; text-decoration: none; border: 0; font-weight: 400}.ctrlq.fb-overlay{z-index: 0; position: fixed; height: 100vh; width: 100vw; -webkit-transition: opacity .4s, visibility .4s; transition: opacity .4s, visibility .4s; top: 0; left: 0; background: rgba(0, 0, 0, .05); display: none}.ctrlq.fb-close{z-index: 4; padding: 0 6px; background: #365899; font-weight: 700; font-size: 11px; color: #fff; margin: 8px; border-radius: 3px}.ctrlq.fb-close::after{content: "X"; font-family: sans-serif}.bubble{width: 20px; height: 20px; background: #c00; color: #fff; position: absolute; z-index: 999999999; text-align: center; vertical-align: middle; top: -2px; left: -5px; border-radius: 50%;}.bubble-msg{width: 120px; left: -140px; top: 5px; position: relative; background: rgba(59, 89, 152, .8); color: #fff; padding: 5px 8px; border-radius: 8px; text-align: center; font-size: 13px;}</style><div class="fb-livechat"> <div class="ctrlq fb-overlay"></div><div class="fb-widget"> <div class="ctrlq fb-close"></div><div class="fb-page" data-href="https://www.facebook.com/laptopbaongoc102" data-tabs="messages" data-width="360" data-height="400" data-small-header="true" data-hide-cover="true" data-show-facepile="false"> </div><div class="fb-credit"> <a href="https://chanhtuoi.com" target="_blank">Powered by Chanhtuoi</a> </div><div id="fb-root"></div></div><a href="https://m.me/laptopbaongoc102" title="Gửi tin nhắn cho chúng tôi qua Facebook" class="ctrlq fb-button"> <div class="bubble">1</div><div class="bubble-msg">Bạn cần hỗ trợ?</div></a></div><script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script><script>$(document).ready(function(){function detectmob(){if( navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i) ){return true;}else{return false;}}var t={delay: 125, overlay: $(".fb-overlay"), widget: $(".fb-widget"), button: $(".fb-button")}; setTimeout(function(){$("div.fb-livechat").fadeIn()}, 8 * t.delay); if(!detectmob()){$(".ctrlq").on("click", function(e){e.preventDefault(), t.overlay.is(":visible") ? (t.overlay.fadeOut(t.delay), t.widget.stop().animate({bottom: 0, opacity: 0}, 2 * t.delay, function(){$(this).hide("slow"), t.button.show()})) : t.button.fadeOut("medium", function(){t.widget.stop().show().animate({bottom: "30px", opacity: 1}, 2 * t.delay), t.overlay.fadeIn(t.delay)})})}});</script>     -->
            <!-- <script>
            window.fbAsyncInit = function() {
                FB.init({
                appId            : '204996153670161',
                autoLogAppEvents : true,
                xfbml            : true,
                version          : 'v2.11'
                });
            };

            (function(d, s, id){
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {return;}
                js = d.createElement(s); js.id = id;
                js.src = "https://connect.facebook.net/vi_VN/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
            </script>
<div class="fb-customerchat" page_id="page-id"</div>     -->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b63becbe21878736ba294f5/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    </body>
</html>
