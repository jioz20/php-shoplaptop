
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
</head>

<body class="off-canvas-sidebar">
    <!-- <nav class="navbar navbar-primary navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href=" ../dashboard.html ">Material Dashboard Pro</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="../dashboard.html">
                            <i class="material-icons">dashboard</i> Dashboard
                        </a>
                    </li>
                    <li class=" active ">
                        <a href="register.html">
                            <i class="material-icons">person_add</i> Register
                        </a>
                    </li>
                    <li class="">
                        <a href="login.html">
                            <i class="material-icons">fingerprint</i> Login
                        </a>
                    </li>
                    <li class="">
                        <a href="lock.html">
                            <i class="material-icons">lock_open</i> Lock
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->
   <!-- include trang 404 hoac 1 page khác !   -->
   <?php 
       $path=$this->pathview.$view.'.php';
       include $path;
   
   ?>
</body>
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
<script src="<?=template_admin1_path?>/assets/js/jquery-jvectormap.js"></script>
<!-- Sliders Plugin, full documentation here: https://refreshless.com/nouislider/ -->
<script src="<?=template_admin1_path?>/assets/js/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
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
<script type="text/javascript">
    $().ready(function() {
        demo.checkFullPageBackgroundImage();

        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>
<script src="<?=template_admin1_path?>/assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        demo.initFullCalendar();
    });
</script>

</html>
