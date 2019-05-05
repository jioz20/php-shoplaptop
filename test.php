// add code jquery
<!-- <script src="<?=template_admin1_path?>/assets/js/jquery-3.2.1.js" type="text/javascript"></script> -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<!-- <script type="text/javascript" src="js/script.js"></script> -->
<?php
// du liệu muốn đưa đi 




// dữ liệu nhận về 




?>

<a data-trang="2" class="trang">Trang 2</a> 


<script>
$(function(){
	$('.trang').click(function(){
		var _current = $(this), _trang = _current.data('trang');
		alert(_trang);	
		$.get('http://localhost/laptopbaongoc_mvc/api_test',{trang:_trang})
		.done(function(data){
			console.log(data);
			//$('#kq').html(data);
		})	
	});	
})
</script>

<script>
    jQuery(function($){
		$('.trang').click(function(){
		var _current=$(this), _trang= _current.data('trang');
            $.get('http://localhost/laptopbaongoc_mvc/api_test', {trang: _trang})
			.done(function(data){
			 console.log(data);
			//$('#kq').html(data);
		    
            
            
            })
        })
    })
</script>



<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
        <script language="javascript">
            function load_ajax(){
                $.ajax({
                    url : "result.php",
                    type : "post",
                    dataType:"text",
                    data : {
                         number : $('#number').val()
                    },
                    success : function (result){
                        $('#result').html(result);
                    }
                });
            }
        </script>
    </head>
    <body>
        <div id="result">
            Nội dung ajax sẽ được load ở đây
        </div>
        <br/>
        <input type="text" value="" id="number"/>
        <input type="button" name="clickme" id="clickme" onclick="load_ajax()" value="Click Me"/>
    </body>
</html>

<div class="sidebar col-sm-3 sidebar_left col-sm-pull-9">
					
							
                    <div class="sidebar_widget sidebar_widget__collections">
<h3 class="widget_header">Collections</h3>

<div class="widget_content">
<ul class="list_links">




    

    <li>
        <a href="/collections/bathroom-lighting">Bathroom Lighting</a>
    </li>



    

    <li>
        <a href="/collections/bedroom-lighting">Bedroom Lighting</a>
    </li>



    

    <li>
        <a href="/collections/chandeliers">Chandeliers</a>
    </li>



    

    <li>
        <a href="/collections/dining-room-lighting">Dining Room Lighting</a>
    </li>



    

    <li>
        <a href="/collections/foyer-lighting">Foyer Lighting</a>
    </li>



    

    <li>
        <a href="/collections/kitchen-lighting">Kitchen Lighting</a>
    </li>


</ul>
</div>
</div>
                
                
                    <div class="sidebar_widget sidebar_widget__types">
<h3 class="widget_header">Product Types</h3>

<div class="widget_content">
<ul class="list_links">

    

        

        <li><a class="active" href="/collections/types?q=Bathroom%20Lighting">Bathroom Lighting</a></li>

    

    

        

        <li><a href="/collections/types?q=Bedroom%20Lighting">Bedroom Lighting</a></li>

    

    

        

        <li><a href="/collections/types?q=Chandeliers">Chandeliers</a></li>

    

    

        

        <li><a href="/collections/types?q=Dining%20Room%20Lighting">Dining Room Lighting</a></li>

    

    

        

        <li><a href="/collections/types?q=Foyer%20Lighting">Foyer Lighting</a></li>

    

    

        

        <li><a href="/collections/types?q=Kitchen%20Lighting">Kitchen Lighting</a></li>

    

</ul>
</div>
</div>
                
                
                    <div class="sidebar_widget sidebar_widget__vendors">
<h3 class="widget_header">Vendors</h3>

<div class="widget_content">
<ul class="list_links">


    

    <li><a href="/collections/vendors?q=France">France</a></li>



    

    <li><a href="/collections/vendors?q=Germany">Germany</a></li>



    

    <li><a href="/collections/vendors?q=Italy">Italy</a></li>



    

    <li><a href="/collections/vendors?q=USA">USA</a></li>


</ul>
</div>
</div>
                
                
                    <div class="sidebar_widget sidebar_widget__products">
<h3 class="widget_header">Best sellers</h3>
<div class="widget_content">
<ul class="list_products">

  <li class="product">
    <div class="product_img">  
        <a href="/products/orange-faux-silk-ava-6-light-bronze-pendant-chandelier">
            <img src="//cdn.shopify.com/s/files/1/1595/5367/products/orange_faux_silk_ava_6_light_bronze_pendant_chandelier_1_compact.png?v=1479462563" alt="Orange Faux Silk Ava 6 Light Bronze Pendant Chandelier">
        </a>
    </div>

    <div class="product_info">
        <div class="product_name">
            <a href="/products/orange-faux-silk-ava-6-light-bronze-pendant-chandelier">Orange Faux Silk Ava 6 Light Bronze Pendant Chandelier</a>
        </div>

        <div class="product_price">
            <span class="money" data-currency-usd="From $46.00">From $46.00</span>
            
                <span class="money compare-at-price" data-currency-usd="$56.00">$56.00</span>
            
        </div>

        <div class="product_links">
            <a class="btn" href="/products/orange-faux-silk-ava-6-light-bronze-pendant-chandelier">View</a>
        </div>
    </div>
</li>

  <li class="product">
    <div class="product_img">  
        <a href="/products/ott-lite-provo-oil-rubbed-bronze-adjustable-floor-lamp">
            <img src="//cdn.shopify.com/s/files/1/1595/5367/products/ott_lite_provo_oil_rubbed_bronze_adjustable_floor_lamp_1_compact.png?v=1479462575" alt="Ott Lite Provo Oil Rubbed Bronze Adjustable Floor Lamp">
        </a>
    </div>

    <div class="product_info">
        <div class="product_name">
            <a href="/products/ott-lite-provo-oil-rubbed-bronze-adjustable-floor-lamp">Ott Lite Provo Oil Rubbed Bronze Adjustable Floor Lamp</a>
        </div>

        <div class="product_price">
            <span class="money" data-currency-usd="$19.00">$19.00</span>
            
        </div>

        <div class="product_links">
            <a class="btn" href="/products/ott-lite-provo-oil-rubbed-bronze-adjustable-floor-lamp">View</a>
        </div>
    </div>
</li>

  <li class="product">
    <div class="product_img">  
        <a href="/products/possini-euro-coppered-arch-indoor-outdoor-led-wall-sconce">
            <img src="//cdn.shopify.com/s/files/1/1595/5367/products/possini_euro_coppered_arch_indoor_outdoor_led_wall_sconce_1_compact.png?v=1479462590" alt="Possini Euro Coppered Arch Indoor Outdoor Led Wall Sconce">
        </a>
    </div>

    <div class="product_info">
        <div class="product_name">
            <a href="/products/possini-euro-coppered-arch-indoor-outdoor-led-wall-sconce">Possini Euro Coppered Arch Indoor Outdoor Led Wall Sconce</a>
        </div>

        <div class="product_price">
            <span class="money" data-currency-usd="From $31.00">From $31.00</span>
            
                <span class="money compare-at-price" data-currency-usd="$43.00">$43.00</span>
            
        </div>

        <div class="product_links">
            <a class="btn" href="/products/possini-euro-coppered-arch-indoor-outdoor-led-wall-sconce">View</a>
        </div>
    </div>
</li>

</ul>
</div>
</div>
                
        
    </div>