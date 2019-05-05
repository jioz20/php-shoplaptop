<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?=template_user2_path?>/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="<?=template_user2_path?>/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Now UI Kit Pro by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="<?=template_user2_path?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=template_user2_path?>/assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?=template_user2_path?>/assets/css/demo.css" rel="stylesheet" />
   
</head>
<!-- code panda -->
    <!-- noi dung chinh template  -->
    <?php 
            $path=$this->pathview.$view.'.php';
            $this->load($path,'',$data);
        ?>
    <!-- code panda  -->

<!--   Core JS Files   -->
<script src="<?=template_user2_path?>/assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="<?=template_user2_path?>/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?=template_user2_path?>/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=template_user2_path?>/assets/js/plugins/moment.min.js"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?=template_user2_path?>/assets/js/plugins/bootstrap-switch.js"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="<?=template_user2_path?>/assets/js/plugins/bootstrap-tagsinput.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="<?=template_user2_path?>/assets/js/plugins/bootstrap-selectpicker.js" type="text/javascript"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="<?=template_user2_path?>/assets/js/plugins/jasny-bootstrap.min.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?=template_user2_path?>/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="<?=template_user2_path?>/assets/js/plugins/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="<?=template_user2_path?>/assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // the body of this function is in assets/js/now-ui-kit.js
        nowuiKit.initSliders();
    });
</script>

</html>