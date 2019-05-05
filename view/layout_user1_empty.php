<?php
xem_arr($_POST);
?>
<!doctype html>
<html lang="en" <?php echo @$data['class']  ?>>

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="<?=template_user1_path?>/assets/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=template_user1_path?>/assets/img/apple-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Paper Kit 2 PRO by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="<?=template_user1_path?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?=template_user1_path?>/assets/css/paper-kit.css?v=2.1.0" rel="stylesheet"/>
    <link href="<?=template_user1_path?>/assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=template_user1_path?>/assets/css/nucleo-icons.css" rel="stylesheet">

	<link rel="stylesheet" href="<?=template_user1_path?>/assets/css/nucleo-icons.css">
	<link rel="stylesheet" href="<?=template_user1_path?>/assets/css/demo.css">

	<link rel="shortcut icon" href="demo/favicon.ico">
	<title>Paper Kit 2 PRO Web Font</title>
 
</head>
 <!-- code panda -->
    <!-- noi dung chinh template  -->
    <?php 
                $path=$this->pathview.$view.'.php';
            $this->load($path,'',$data);
        ?>
    <!-- code panda  -->


<!-- Core JS Files -->
<script src="<?=template_user1_path?>/assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?=template_user1_path?>/assets/js/jquery-ui-1.12.1.custom.min.js" type="text/javascript"></script>
<script src="<?=template_user1_path?>/assets/js/popper.js" type="text/javascript"></script>
<script src="<?=template_user1_path?>/assets/js/bootstrap.min.js" type="text/javascript"></script>

<!-- Switches -->
<script src="<?=template_user1_path?>/assets/js/bootstrap-switch.min.js"></script>

<!--  Plugins for Slider -->
<script src="<?=template_user1_path?>/assets/js/nouislider.js"></script>

<!--  Photoswipe files -->
<script src="<?=template_user1_path?>/assets/js/photo_swipe/photoswipe.min.js"></script>
<script src="<?=template_user1_path?>/assets/js/photo_swipe/photoswipe-ui-default.min.js"></script>
<script src="<?=template_user1_path?>/assets/js/photo_swipe/init-gallery.js"></script>

<!--  Plugins for Select -->
<script src="<?=template_user1_path?>/assets/js/bootstrap-select.js"></script>

<!--  for fileupload -->
<script src="<?=template_user1_path?>/assets/js/jasny-bootstrap.min.js"></script>

<!--  Plugins for Tags -->
<script src="<?=template_user1_path?>/assets/js/bootstrap-tagsinput.js"></script>

<!--  Plugins for DateTimePicker -->
<script src="<?=template_user1_path?>/assets/js/moment.min.js"></script>
<script src="<?=template_user1_path?>/assets/js/bootstrap-datetimepicker.min.js"></script>

<script src="<?=template_user1_path?>/assets/js/paper-kit.js?v=2.1.0"></script>





<!--  code JS bổ sung  -->
<script>
    function SelectText(element) {
	    var doc = document
	        , text = element
	        , range, selection;
	    if (doc.body.createTextRange) {
	        range = document.body.createTextRange();
	        range.moveToElementText(text);
	        range.select();
	    } else if (window.getSelection) {
	        selection = window.getSelection();
	        range = document.createRange();
	        range.selectNodeContents(text);
	        selection.removeAllRanges();
	        selection.addRange(range);
	    }
	}
    window.onload = function() {
    	var iconsWrapper = document.getElementById('icons-wrapper'),
    		listItems = iconsWrapper.getElementsByTagName('li');
        for (var i = 0; i < listItems.length; i++) {
		    listItems[i].onclick  = function fun(event) {
		    	var selectedTagName = event.target.tagName.toLowerCase();
		    	if( selectedTagName == 'p' || selectedTagName == 'em' ) {
		    		SelectText(event.target);
		    	} else if( selectedTagName == 'input' ) {
		    		event.target.setSelectionRange(0, event.target.value.length);
		    	}
		    }

		    var beforeContentChar = window.getComputedStyle(listItems[i].getElementsByTagName('i')[0], '::before').getPropertyValue('content').replace(/'/g, "").replace(/"/g, ""),
		    	beforeContent = beforeContentChar.charCodeAt(0).toString(16);
		    var beforeContentElement = document.createElement("em");
		    beforeContentElement.textContent = "\\"+beforeContent;
		    listItems[i].appendChild(beforeContentElement);

		    //create input element to copy/paste chart
		    var charCharac = document.createElement('input');
		    charCharac.setAttribute('type', 'text');
		    charCharac.setAttribute('maxlength', '1');
		    charCharac.setAttribute('readonly', 'true');
		    charCharac.setAttribute('value', beforeContentChar);
		    listItems[i].appendChild(charCharac);
		}
    }
</script>










</html>