<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Laptop Bao Ngoc</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?=template_user4_path?>/img/icon/favicon.png">

    <!-- All CSS Files -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="<?=template_user4_path?>/css/bootstrap.min.css">
    <!-- Nivo-slider css -->
    <link rel="stylesheet" href="<?=template_user4_path?>/lib/css/nivo-slider.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="<?=template_user4_path?>/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="<?=template_user4_path?>/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="<?=template_user4_path?>/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?=template_user4_path?>/css/responsive.css">
    <!-- Template color css -->
    <link href="<?=template_user4_path?>/css/color/color-core.css" data-style="styles" rel="stylesheet">
    <!-- User style -->
    <link rel="stylesheet" href="<?=template_user4_path?>/css/custom.css">

    <!-- Modernizr JS -->
    <script src="<?=template_user4_path?>/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

     <?php 
            $path=$this->pathview.$view.'.php';
        $this->load($path,'',$data);
    ?>


    <!-- Placed JS at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="<?=template_user4_path?>/js/vendor/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="<?=template_user4_path?>/js/bootstrap.min.js"></script>
    <!-- jquery.nivo.slider js -->
    <script src="<?=template_user4_path?>/lib/js/jquery.nivo.slider.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="<?=template_user4_path?>/js/plugins.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="<?=template_user4_path?>/js/main.js"></script>

</body>

</html>