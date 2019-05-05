
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?=template_admin1_path?>/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="<?=template_admin1_path?>/assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Admin 1</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/core/popper.min.js" type="text/javascript"></script> -->
    

    <!-- <script src="<?=template_admin1_path?>/assets/js/jquery-3.3.1.js" type="text/javascript"></script> -->
    <!-- Bootstrap core CSS     -->
    <link href="<?=template_admin1_path?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="<?=template_admin1_path?>/assets/css/material-dashboard.css?v=1.2.1" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?=template_admin1_path?>/assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>    

    <!-- <link href="<?=template_admin1_path?>/assets/js/jquery-jvectormap-2.0.3.css" rel="stylesheet" /> -->
    <!-- <script href="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script> -->

   
   

   <!--   Core JS Files   -->
   <script src="<?=template_admin1_path?>/assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="<?=template_admin1_path?>/assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?=template_admin1_path?>/assets/js/material.min.js" type="text/javascript"></script>
    <script src="<?=template_admin1_path?>/assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="<?=template_admin1_path?>/assets/js/arrive.min.js" type="text/javascript"></script>
    <!-- Forms Validations Plugin -->
    <script src="<?=template_admin1_path?>/assets/js/jquery.validate.min.js"></script>
    <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
    <script src="<?=template_admin1_path?>/assets/js/moment.min.js"></script>
    <!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
    <script src="<?=template_admin1_path?>/assets/js/chartist.min.js"></script>
    <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="<?=template_admin1_path?>/assets/js/jquery.bootstrap-wizard.js"></script>
    <!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
    <script src="<?=template_admin1_path?>/assets/js/bootstrap-notify.js"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="<?=template_admin1_path?>/assets/js/bootstrap-datetimepicker.js"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <!-- <script src="<?=template_admin1_path?>/assets/js/jquery-jvectormap-2.0.3.min.js"></script> -->
    <!-- Sliders Plugin, full documentation here: https://refreshless.com/nouislider/ -->
    <script src="<?=template_admin1_path?>/assets/js/nouislider.min.js"></script>
    <!--  Google Maps Plugin    -->
    <!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
    <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="<?=template_admin1_path?>/assets/js/jquery.select-bootstrap.js"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
    <script src="<?=template_admin1_path?>/assets/js/jquery.datatables.js"></script>
    <!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
    <script src="<?=template_admin1_path?>/assets/js/sweetalert2.js"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="<?=template_admin1_path?>/assets/js/jasny-bootstrap.min.js"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="<?=template_admin1_path?>/assets/js/fullcalendar.min.js"></script>
    <!-- Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="<?=template_admin1_path?>/assets/js/jquery.tagsinput.js"></script>
    <!-- Material Dashboard javascript methods -->
    <script src="<?=template_admin1_path?>/assets/js/material-dashboard.js?v=1.2.1"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?=template_admin1_path?>/assets/js/demo.js"></script>


</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-active-color="rose" data-background-color="black" data-image="<?=template_admin1_path ?>/assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
        Tip 2: you can also add an image using data-image tag
        Tip 3: you can change the color of the sidebar with data-background-color="white | black"
    -->
            <div class="logo">
                <a href="#" class="simple-text logo-mini">
                    AD
                </a>
                <a href="#" class="simple-text logo-normal">
                    Admin 1
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="<?=template_admin1_path?>/assets/img/faces/avatar.jpg" />
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <span>
                                Admin 1 <!-- echo tên user  -->
                                <b class="caret"></b>
                            </span>
                        </a>
                        <div class="clearfix"></div>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="#">
                                        <span class="sidebar-mini"> MP </span>
                                        <span class="sidebar-normal"> My Profile </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sidebar-mini"> EP </span>
                                        <span class="sidebar-normal"> Edit Profile </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="sidebar-mini"> S </span>
                                        <span class="sidebar-normal"> Settings </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <!-- <li class="active">
                        <a href="./dashboard.html">
                            <i class="material-icons">dashboard</i>
                            <p> Dashboard </p>
                        </a>
                    </li> -->
                    <li >
                        <a data-toggle="collapse" href="#pagesExamples">
                        <i class="material-icons">view_module</i>
                            <p> QL Danh Mục
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="pagesExamples">
                            <ul class="nav">
                                <li>
                                    <a href="?controller=sanpham&act=danhsach_sanpham">
                                        <span class="sidebar-mini"> SP </span>
                                        <span class="sidebar-normal"> Sản Phẩm </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?controller=khachhang&act=danhsach_khachhang">
                                        <span class="sidebar-mini"> KH </span>
                                        <span class="sidebar-normal"> Khách Hàng </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?controller=nhacungcap&act=danhsach_nhacungcap">
                                        <span class="sidebar-mini"> NCC </span>
                                        <span class="sidebar-normal"> Nhà Cung Cấp </span>
                                    </a>
                                </li>
                               
                                <li>
                                    <a href="?controller=chucnang&act=danhsach_chucnang">
                                        <span class="sidebar-mini"> CN </span>
                                        <span class="sidebar-normal"> Chức Năng </span>
                                    </a>
                                </li>
                             
                                <li>
                                    <a href="?controller=dungluong&act=danhsach_dungluong">
                                        <span class="sidebar-mini"> DL </span>
                                        <span class="sidebar-normal"> Dung Lượng </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?controller=mau&act=danhsach_mau">
                                        <span class="sidebar-mini"> M </span>
                                        <span class="sidebar-normal"> Màu </span>
                                    </a>
                                </li>
                              
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#componentsExamples">
                            <i class="material-icons">apps</i>
                            <p> QL Nhóm
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="componentsExamples">
                            <ul class="nav">
                            <li>
                                    <a href="?controller=danhmucsanpham&act=danhsach_danhmuc">
                                        <span class="sidebar-mini"> DMSP </span>
                                        <span class="sidebar-normal"> Danh Mục SP </span>
                                    </a>
                                </li>
                            <li>
                                    <a href="?controller=loaikhachhang&act=danhsach_loaikhachhang">
                                        <span class="sidebar-mini"> LKH </span>
                                        <span class="sidebar-normal"> Loại Khách Hàng </span>
                                    </a>
                                </li>
                              
                               
                                <li>
                                    <a href="?controller=nhomsanpham&act=danhsach_nhomsanpham">
                                        <span class="sidebar-mini"> NSP </span>
                                        <span class="sidebar-normal"> Nhóm Sản Phẩm </span>
                                    </a>
                                </li>
                              
                              
                                <li>
                                    <a href="?controller=logs&act=danhsach_logs">
                                        <span class="sidebar-mini"> Lg </span>
                                        <span class="sidebar-normal"> Logs </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- <li>
                        <a data-toggle="collapse" href="#formsExamples">
                            <i class="material-icons">content_paste</i>
                            <p> QL Hoá Đơn
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="formsExamples">
                            <ul class="nav">
                                <li>
                                    <a href="?controller=hoadon&act=danhsach_hoadon">
                                        <span class="sidebar-mini"> HD </span>
                                        <span class="sidebar-normal"> Hoá Đơn </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?controller=mau&act=danhsach_hoadon">
                                        <span class="sidebar-mini"> CT </span>
                                        <span class="sidebar-normal"> Chi Tiết HĐ </span>
                                    </a>
                                </li>
                              
                            </ul>
                        </div> 
                    </li> -->
                    <li>
                        <a data-toggle="collapse" href="#tablesExamples" class="" aria-expanded="true">
                            <i class="material-icons">grid_on</i>
                            <p> Bài Viết & Hoá Đơn
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="tablesExamples" aria-expanded="true" style="">
                            <ul class="nav">
                                <li>
                                    <a href="?controller=baiviet&act=danhsach_baiviet">
                                        <span class="sidebar-mini"> BV </span>
                                        <span class="sidebar-normal"> Bài Viết </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?controller=nhombaiviet&act=danhsach_nhombaiviet">
                                        <span class="sidebar-mini"> NBV </span>
                                        <span class="sidebar-normal"> Nhóm Bài Viết </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?controller=hoadon&act=danhsach_hoadon">
                                        <span class="sidebar-mini"> HD </span>
                                        <span class="sidebar-normal"> Hoá Đơn </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?controller=mau&act=danhsach_hoadon">
                                        <span class="sidebar-mini"> CT </span>
                                        <span class="sidebar-normal"> Chi Tiết HĐ </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                    <li>
                        <a data-toggle="collapse" href="#mapsExamples" class="" aria-expanded="true">
                            <i class="material-icons">place</i>
                            <p> QL Phân Quyền
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="mapsExamples" aria-expanded="true" style="">
                            <ul class="nav">
                                <li>
                                    <a href="?controller=phanquyen&act=danhsach_phanquyen">
                                        <span class="sidebar-mini"> PQ </span>
                                        <span class="sidebar-normal"> Phân Quyền </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?controller=trangthai&act=danhsach_trangthai">
                                        <span class="sidebar-mini"> TT </span>
                                        <span class="sidebar-normal"> Trạng Thái </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?controller=quantri&act=danhsach_quantri">
                                        <span class="sidebar-mini"> NQT </span>
                                        <span class="sidebar-normal">Quản Trị - User </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="?controller=nhomquantri&act=danhsach_nhomquantri">
                                        <span class="sidebar-mini"> NQT </span>
                                        <span class="sidebar-normal"> Nhóm Quản Trị </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="active">
                        <a href="?controller=hethong&act=calendar">
                            <i class="material-icons">date_range</i>
                            <p> Calendar </p>
                        </a>
                    </li>














                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                            <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="?controller=hethong&act=trangchu"> Dashboard </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                           
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="hidden-lg hidden-md">
                                        Notifications
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Mike John responded to your email</a>
                                    </li>
                                    <li>
                                        <a href="#">You have 5 new tasks</a>
                                    </li>
                                    <li>
                                        <a href="#">You're now friend with Andrew</a>
                                    </li>
                                    <li>
                                        <a href="#">Another Notification</a>
                                    </li>
                                    <li>
                                        <a href="#">Another One</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="?controller=hethong&act=user" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                            </li>
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group form-search is-empty">
                                <input type="text" class="form-control" placeholder=" Search ">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form>
                    </div>
                    
                </div>
            </nav>
          
            <div class="content">
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item"><a href="#"><?php echo $_GET['controller'] ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $_GET['act'] ?></li>
                </ol>
            </nav>
              <!-- noi dung chinh template  -->
                <?php 
                     $path=$this->pathview.$view.'.php';
                    $this->load($path,'',$data);
                ?>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portofolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="#"> Admin 1 </a>, made with love for a better web
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>


<!-- <script type="text/javascript">
    $(document).ready(function() {

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initVectorMap();
    });
</script> -->
<!-- support cho Calendar  -->
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            }

        });


        var table = $('#datatables').DataTable();

        // Edit record
        table.on('click', '.edit', function() {
            $tr = $(this).closest('tr');

            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });

        // Delete a record
        table.on('click', '.remove', function(e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });

        //Like record
        table.on('click', '.like', function() {
            alert('You clicked on Like button');
        });

        $('.card .material-datatables label').addClass('form-group');
    });
</script>
<script type="text/javascript">
    $().ready(function() {
        demo.checkFullPageBackgroundImage();

        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>
<!-- support cho Calendar  -->
<!-- support cho Charts  -->

<script type="text/javascript">
    $(document).ready(function() {
        demo.initFullCalendar();
    });
</script>
<script>
    $(document).ready(function() {
        demo.initCharts();
    });
</script>

<!-- <script type="text/javascript">
    $(document).ready(function() {
        demo.initFormExtendedDatetimepickers();
    })
</script> -->


 

<script>
    jQuery(function($){
		$('.page').click(function(){
            var _current = $(this), _trang = _current.data('page');
		   //alert(_trang);	
            $.get('http://localhost/laptopbaongoc_mvc/?controller=sanpham&act=api_danhsach_sanpham', {page: _trang})
			.done(function(data){
             $('#truoc').data('page',_trang-1);
             $('#sau').data('page',_trang+1);
             //$('#datatables_previous').val('data')=_trang-1;
			//console.log(danextta);
			 $('#kq').html(data);
		})	
	});	

    
})
</script>


 <script>
 $('#datetimepicker1').datetimepicker({
    icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-chevron-up",
        down: "fa fa-chevron-down",
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-screenshot',
        clear: 'fa fa-trash',
        close: 'fa fa-remove',
        dateFormat: "yy-mm-dd"
    }
    
});
</script>

 <script>
 $('#datetimepicker2').datetimepicker({
    icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-chevron-up",
        down: "fa fa-chevron-down",
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-screenshot',
        clear: 'fa fa-trash',
        close: 'fa fa-remove',
        dateFormat: "yy-mm-dd"
    }
    
});
</script>





</html>


    