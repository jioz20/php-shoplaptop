<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Ace Responsive Menu</title>
	
	<!--Responsiveness-->
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    
	<!--FontAwesome-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!--[if IE 7]>
    <link rel="stylesheet" href="font-awesome/css/font-awesome-ie7.min.css">
    <![endif]-->
	
	<!--CSS Style-->
    <!-- <link href="menu/css/demo.css" rel="stylesheet" type="text/css" /> -->
    <link href="menu/css/ace-responsive-menu.css" rel="stylesheet" type="text/css" />
     <!-- Add jQuery file before closing body tag -->
    <script src="menu/js/jquery-1.10.1.min.js" type="text/javascript"></script>
	<!-- Included aceResponsiveMenu.js after jQuery -->
    <script src="menu/js/ace-responsive-menu.js" type="text/javascript"></script>
    <link href="menu/css/ace-responsive-menu.css" rel="stylesheet" type="text/css" />
</head>
<body>
   
    <!-- Ace Responsive Menu -->
    <nav>
        <!-- Menu Toggle btn-->
        <div class="menu-toggle">
            <h3>Menu</h3>
            <button type="button" id="menu-btn">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Responsive Menu Structure-->
        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
        <ul id="respMenu" class="ace-responsive-menu" data-menu-style="accordion">
              <li>
                <a href="javascript:;">
                    <i class="fa fa-home" aria-hidden="true"></i>
                    <span class="title">Home</span>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-cube" aria-hidden="true"></i>
                    <span class="title">About Us</span>

                </a>
                <!-- Level Two-->
                <ul>
                    <li>
                        <a href="#">Sub Item One</a>
                    </li>
                    <li>
                        <a href="#">Sub Item Two</a>
                    </li>
                    <li>
                        <a href="#">Sub Item Three</a>
                    </li>
                    <li>
                        <a href="#">Sub Item Four</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="javascript:;">
                    <i class="fa fa-crop" aria-hidden="true"></i>
                    <span class="title">4 Level Menu</span>
                </a>
                <!-- Level Two-->
                <ul>
                    <li>
                        <a href="javascript:;">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            Sub Item One						
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-database" aria-hidden="true"></i>
                            Sub Item Two
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="fa fa-amazon" aria-hidden="true"></i>
                            Sub Item Three							
                        </a>
                        <!-- Level Three-->
                        <ul>
                            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Sub Item Link 1</a></li>
                            <li>
                                <a href="javascript:;">
                                    <i class="fa fa-diamond" aria-hidden="true"></i>Sub Item Link 2</a>
                                <!-- Level Four-->
                                <ul>
                                    <li><a href="#"><i class="fa fa-trash" aria-hidden="true"></i>Sub Item Link 1</a></li>
                                    <li><a href="#"><i class="fa fa-dashcube" aria-hidden="true"></i>Sub Item Link 2</a></li>
                                    <li><a href="#"><i class="fa fa-dropbox" aria-hidden="true"></i>Sub Item Link 3</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Sub Item Link 3</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fa fa-database" aria-hidden="true"></i>
                            Sub Item Four
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="" href="javascript:;">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    <span class="title">Services</span>

                </a>
                <ul>
                    <li>
                        <a href="#">Sub Item One
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">Sub Item Two							
                        </a>
                        <ul>
                            <li><a href="#">Sub Item Link 1</a></li>
                            <li><a href="#">Sub Item Link 2</a></li>
                            <li><a href="#">Sub Item Link 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">Sub Item Three							
                        </a>
                        <ul>
                            <li><a href="#">Sub Item Link 1</a></li>
                            <li><a href="#">Sub Item Link 1</a></li>
                            <li><a href="#">Sub Item Link 1</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Sub Item Four
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <span class="title">Products</span>
                </a>
            </li>
            <li class="last ">
                <a href="javascript:;">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span class="title">Contact Us</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- End of Responsive Menu -->
    </div>
    <!--Scripts-->
    
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

</body>
</html>



<!-- <ul>
<?php
								foreach($data['danhmuc'] as $v)
								{
							?>	
							<li>
								<a href="?controller=user3&act=shop&id_danhmuc=<?php echo $v->id_danhmucsanpham?>"><?php echo $v->ten_danhmucsanpham ?></a>
									<ul  class="submenu">
										<li><a href="#">View One</a></li>
										<li><a href="#">View Two</a></li>
										<li><a href="#">View Three</a></li>
										 <?php
											foreach($data['nhomsanpham'] as $k)
											{
										?>	
											<li>
												<a  href="?controller=user3&act=shop&id_danhmuc=<?php echo $v->id_danhmucsanpham?>&id_nhomsp=<?php echo $k->id_nhomsanpham?>" > <?php echo $k->ten_nhomsanpham ?> </a>
											</li>	
										<?php 
											}
										?> 
									</ul>
							</li>
							<?php 
								}
							?>			
						</ul>  -->
						
						<!-- <ul class="nav nav-pills nav-stacked left-menu" id="stacked-menu">
							<li><a href="#" data-target="#item1" data-toggle="collapse" data-parent="#stacked-menu">Stacked Menu 1<span class="caret arrow"></span></a>
								<ul class="nav nav-stacked collapse left-submenu" id="item1">
									<li><a href="google.com">View One</a></li>
									<li><a href="gmail.com">View Two</a></li>
								</ul>
							</li>
							<li><a href="#" data-target="#item2" data-toggle="collapse" data-parent="#stacked-menu">Stacked Menu 2<span class="caret arrow"></span></a>
								<ul class="nav nav-pills nav-stacked collapse" id="item2">
									<li><a href="#">View One</a></li>
									<li><a href="#">View Two</a></li>
									<li><a href="#">View Three</a></li>
								</ul>
							</li>
							<li><a href="#" data-target="#item3" data-toggle="collapse" data-parent="#stacked-menu">Stacked Menu 3<span class="caret arrow"></span></a>
								<ul class="nav nav-pills nav-stacked collapse" id="item3">
									<li><a href="#">View One</a></li>
									<li><a href="#">View Two</a></li>
									<li><a href="#">View Three</a></li>
								</ul>
							</li>
						</ul> -->
						
						<!-- <ul class="nav nav-pills nav-stacked left-menu" id="stacked-menu">
							<?php
								$i=0;
								foreach($data['danhmuc'] as $v)
								{
									$i++;
							?>	
							<li>
								<a href="?controller=user3&act=shop&id_danhmuc=<?php echo $v->id_danhmucsanpham?>" data-target="#item<?php echo $i?>" data-toggle="collapse" data-parent="#stacked-menu"><?php echo $v->ten_danhmucsanpham ?></a>
								<ul class="nav nav-stacked collapse left-submenu" id="#item<?php echo $i?>">
								<?php
									foreach($data['nhomsanpham'] as $k)
									{
								?>	
								
									<li>
										<a href="?controller=user3&act=shop&id_danhmuc=<?php echo $v->id_danhmucsanpham?>&id_nhomsp=<?php echo $k->id_nhomsanpham?>"><?php echo $k->ten_nhomsanpham ?></a>
									</li>
								<?php 
									}
								?>	
								</ul>
							</li>
							<?php 
								}
							?>	
						</ul> -->
	<!--
							<li><a href="#pagesExamples"><?php echo $v->ten_danhmucsanpham ?></a></li>
									<div class="collapse" id="pagesExamples">
									<ul>
								
										<li class="text-center"><a href="></a></li>
									
											
									</ul>
									</div>
						
                         -->
                         



                         	<li>
									<a href="javascript:;">
										<!-- <i class="fa fa-crop" aria-hidden="true"></i> -->
										<span class="title">4 Level Menu</span>
									</a>
									<!-- Level Two-->
									<ul>
										<li>
											<a href="javascript:;">
												<!-- <i class="fa fa-graduation-cap" aria-hidden="true"></i> -->
												Sub Item One						
											</a>
										</li>
										<li>
											<a href="#">
												<!-- <i class="fa fa-database" aria-hidden="true"></i> -->
												Sub Item Two
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<!-- <i class="fa fa-amazon" aria-hidden="true"></i> -->
												Sub Item Three							
											</a>
											<!-- Level Three-->
											<ul>
												<li>
													<a href="#"><i class="fa fa-user" aria-hidden="true"></i>Sub Item Link 1</a>
												</li>
												<li>
													<a href="javascript:;">
														<!-- <i class="fa fa-diamond" aria-hidden="true"></i> -->
														Sub Item Link 2</a>
													<!-- Level Four-->
													<ul>
														<li><a href="#"><i class="fa fa-trash" aria-hidden="true"></i>Sub Item Link 1</a></li>
														<li><a href="#"><i class="fa fa-dashcube" aria-hidden="true"></i>Sub Item Link 2</a></li>
														<li><a href="#"><i class="fa fa-dropbox" aria-hidden="true"></i>Sub Item Link 3</a></li>
													</ul>
												</li>
												<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Sub Item Link 3</a></li>
											</ul>
										</li>

										<li>
											<a href="#">
												<!-- <i class="fa fa-database" aria-hidden="true"></i> -->
												Sub Item Four
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a class="" href="javascript:;">
										<!-- <i class="fa fa-graduation-cap" aria-hidden="true"></i> -->
										<span class="title">Services</span>

									</a>
									<ul>
										<li>
											<a href="#">Sub Item One
											</a>
										</li>
										<li>
											<a href="javascript:;">Sub Item Two							
											</a>
											<ul>
												<li><a href="#">Sub Item Link 1</a></li>
												<li><a href="#">Sub Item Link 2</a></li>
												<li><a href="#">Sub Item Link 3</a></li>
											</ul>
										</li>
										<li>
											<a href="javascript:;">Sub Item Three							
											</a>
											<ul>
												<li><a href="#">Sub Item Link 1</a></li>
												<li><a href="#">Sub Item Link 1</a></li>
												<li><a href="#">Sub Item Link 1</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Sub Item Four
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="javascript:;">
										<!-- <i class="fa fa-heart" aria-hidden="true"></i> -->
										<span class="title">Products</span>
									</a>
								</li>
								<li class="last ">
									<a href="javascript:;">
										<!-- <i class="fa fa-envelope" aria-hidden="true"></i> -->
										<span class="title">Contact Us</span>
									</a>
								</li>


<a onclick="return confirm('Bạn có chắc chắn muốn xóa không ?\nNếu xóa thì tất cả sản phẩm thuộc loại này sẽ bị xóa')" href="?mod=cat-del&id=<?php echo $r['id'] ?>">Xóa</a>


<form action="?mod=search" method="post">
    <ul class="forms">
        <li class="inputfield">
            <input type="search" value="<?php echo $kw ?>" placeholder="Nhập từ khóa" name="kw" >
            <select name="cid">
                <option value="0">--- Chọn loại ---</option>
                <?php
                    $sql='select `id`,`name` from `nn_department` where `active`=1 order by `order`';
                    $rsDep=mysqli_query($link,$sql);
                    while($r=mysqli_fetch_assoc($rsDep))
                    {
                ?>
                        <optgroup label="<?php echo $r['name']?>">
                        <?php
                            $sql='select `id`,`name` from `nn_category` where `active`=1 AND `department_id`='.$r['id'];
                            $rsCat=mysqli_query($link,$sql);
                            while($r=mysqli_fetch_assoc($rsCat))
                            {
                        ?>
                                <option <?php if($r['id']==$cid) echo 'selected' ?> value="<?php echo $r['id']?>"><?php echo $r['name']?></option>
                        <?php
                            }
                        ?>
                        </optgroup>
               <?php
                    }
               ?>
            </select>
             <select name="price">
                <option <?php if(0==$price) echo 'selected' ?> value="0">--- Chọn giá ---</option>
                <option <?php if(1==$price) echo 'selected' ?> value="1">Dưới 5 triệu</option>
                <option <?php if(2==$price) echo 'selected' ?> value="2">Từ 5 đến 10 triệu</option>
                <option <?php if(3==$price) echo 'selected' ?> value="3">Từ 10 đến 15 triệu</option>
                <option <?php if(4==$price) echo 'selected' ?> value="4">Từ 15 đến 20 triệu</option>
                <option <?php if(5==$price) echo 'selected' ?> value="5">Từ 20 đến 30 triệu</option>
                <option <?php if(6==$price) echo 'selected' ?> value="6">Trên 30 triệu</option>
            </select>
            <button type="submit"> Tìm </button>
        </li>
    </ul>                
</form>    
</div>
<?php 
   

	//tim theo tu khoa
	$cond="`name` like '%$kw%'";
	
	if($cid>0)//Co tim theo loai
	$cond=$cond." AND `category_id`=$cid";
	
	if($price==1)
	$cond=$cond." AND `price` < 5000000";
	
	if($price==2)
	$cond=$cond." AND `price` between 5000000 and 10000000";
	
	if($price==3)
	$cond=$cond." AND `price` between 10000000 and 15000000";
	
	if($price==4)
	$cond=$cond." AND `price` between 15000000 and 20000000";
	
	if($price==5)
	$cond=$cond." AND `price` between 20000000 and 30000000";
	
	if($price==6)
	$cond=$cond." AND `price` > 30000000";
	
    //$cid=$_GET['cid'];//Loai hien tai
    //if($cid=='')$cid=1;
    
    $page=$_GET['page'];//Trang hien tai
    if($page<1)$page=1;
    
    $sort=$_GET['sort'];
    if($sort=='')$sort=1;
    
    //Tinh so trang
    $sql="select count(*) from `nn_product` where $cond";
    $rs=mysqli_query($link,$sql);
    $r=mysqli_fetch_row($rs);
    $nop=ceil($r[0]/20);
	
	if($nop==0)
		 	echo 'Không tìm thấy sản phẩm nào với từ khóa '.$kw;
		
	else
	{
	
	
    if($page>$nop)$page=$nop;
    
?>
<div class="sorting">
    <p class="left colr"><?php echo $r[0] ?> Item(s)</p>
    <ul class="right">
      <li class="text">Page
          <a href="?mod=search&kw=<?php echo $kw ?>&page=1&sort=<?php echo $sort ?>&cid=<?php echo $cid ?>&price=<?php echo $price?>" class="colr" title="Trang đầu">&lt;&lt;</a> 
          <a href="?mod=search&kw=<?php echo $kw ?>&page=<?php echo $page-9 ?>&sort=<?php echo $sort ?>&cid=<?php echo $cid ?>&price=<?php echo $price?>" class="colr" title="Nhóm trang trước">&lt;</a>                        
        <?php
            for($i=$page-4;$i<=$page+4;$i++)
            if($i>=1 && $i<=$nop)
            {
        ?>
              <a href="?mod=search&kw=<?php echo $kw ?>&page=<?php echo $i ?>&sort=<?php echo $sort ?>&cid=<?php echo $cid ?>&price=<?php echo $price?>" class="colr <?php if($i==$page)echo 'current' ?>"><?php echo $i ?></a> 
        <?php
            }
        ?>
          <a href="?mod=search&kw=<?php echo $kw ?>&page=<?php echo $page+9 ?>&sort=<?php echo $sort ?>&cid=<?php echo $cid ?>&price=<?php echo $price?>" class="colr" title="Nhóm trang sau">&gt;</a> 
          <a href="?mod=search&kw=<?php echo $kw ?>&page=<?php echo $nop ?>&sort=<?php echo $sort ?>&cid=<?php echo $cid ?>&price=<?php echo $price?>" class="colr" title="Trang cuối">&gt;&gt;</a> 
        </li>
    </ul>
    <div class="clear"></div>
    <p class="left">View as: <a href="#" class="bold">Grid</a>&nbsp;<a href="#" class="colr">List</a></p>
    <ul class="right">
        <li class="text">
            Sort by Position
            <a <?php if($sort<3)echo 'class="current"' ?> href="?mod=search&kw=<?php echo $kw ?>&sort=<?php if($sort==1) echo 2;else echo 1 ?>&cid=<?php echo $cid ?>&price=<?php echo $price?>" class="colr">Price 
            <?php 
                    if($sort==1) echo '<img src="images/asc.png" alt="asc">'; 
                    if($sort==2) echo '<img src="images/desc.png" alt="desc">'; 
            ?>
            </a> | 
            <a <?php if($sort>=3)echo 'class="current"' ?> href="?mod=search&kw=<?php echo $kw ?>&sort=<?php if($sort==3) echo 4;else echo 3 ?>&cid=<?php echo $cid ?>&price=<?php echo $price?>" class="colr">View 
            <?php 
                    if($sort==3) echo '<img src="images/asc.png" alt="asc">'; 
                    if($sort==4) echo '<img src="images/desc.png" alt="desc">'; 
            ?>
            </a> 
        </li>
    </ul>
</div>
<div class="clear"></div>
<div class="listing">
    <h4 class="heading colr">New Products for March 2010</h4>
    <ul>
    <?php
        
		
        $pos=($page-1)*20;
        
        
        
        $order='`price`';
        if($sort==2)$order='`price` desc';
        if($sort==3)$order='`view`';
        if($sort==4)$order='`view` desc';
        
        
        
        //Lay cac san pham thuoc 1 loai
        echo $sql="select `id`,`name`,`img_url`,`price` 
        from `nn_product` 
        where $cond 
        order by $order
        limit $pos,20";
        $rs=mysqli_query($link,$sql);
        $i=0;
        while($r=mysqli_fetch_assoc($rs))
        {
            $i++;
    ?>
            <li <?php  if($i%4==0) echo 'class="last"'; ?>>
                <a href="?mod=detail&id=<?php echo $r['id']  ?>" class="thumb"><img src="images/sanpham/<?php if(is_file('images/sanpham/'.$r['img_url']))echo $r['img_url'];else echo 'noImage.jpg'?>" alt="" ></a>
                <h6 class="colr"><?php echo $r['name']?></h6>
                <div class="stars">
                    <a href="#"><img src="images/star_green.gif" alt="" ></a>
                    <a href="#"><img src="images/star_green.gif" alt="" ></a>
                    <a href="#"><img src="images/star_green.gif" alt="" ></a>
                    <a href="#"><img src="images/star_green.gif" alt="" ></a>
                    <a href="#"><img src="images/star_grey.gif" alt="" ></a>
                    <a href="#">(3) Reviews</a>
                </div>
                <div class="addwish">
                    <a href="#">Add to Wishlist</a>
                    <a href="#">Add to Compare</a>
                </div>
                <div class="cart_price">
                    <a href="cart.html" class="adcart">Add to Cart</a>
                    <p class="price"><?php echo number_format($r['price']/1000000,2)?> Tr</p>
                </div>
            </li>
     <?php
        }
     ?>
    </ul>
</div>
<?php
}//end if
?>


<?php
	//Tao cookie
	
	$THEME=array(1=>'_blue','_green','_orange','');	
	$th=$_GET['color'];
	
	//Luu theme 1 tuan
	setcookie('theme',$THEME[$th],time()+7*24*3600);
	
	//print_r($_SERVER);
	
	header('location:'.$_SERVER['HTTP_REFERER']);
?>


<?php
	unset($_SESSION['admin_id']);
	unset($_SESSION['admin_name']);
	
	//Chuyen den trang dang nhap
	header('location:?mod=login');
?>



<?php
	if(!isset($_SESSION['id']))header('location:?mod=login');
	
	//Da dang nhap roi
	$id=$_SESSION['id'];
	

	$msg='';
	if(isset($_POST['name']))//Neu nhu co submit
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$repass=$_POST['repass'];
		$mobile=$_POST['mobile'];
		$dob=$_POST['dob'];
		//Chuyen dinh dang tu dd/mm/yyyy -> yyyy-mm-dd
		$d=substr($dob,0,2);
		$m=substr($dob,3,2);
		$y=substr($dob,6,4);
		
		$dob="$y-$m-$d";
		
		$gender=$_POST['gender'];
		$address=$_POST['address'];
		
		//Kiem tra du lieu
		if($pass!='' && strlen($pass)<6)
			$msg='Mật khẩu tối thiểu 6 ký tự';
		elseif($pass!=$repass)
			$msg='Mật khẩu nhập lại không đúng';
		else//Tat ca du lieu hop le
		{	
		
			//Tao cau sql update
			if($pass!='')
				$sql="update `nn_user` set
					`name`='$name',
					`password`=sha1('$pass'),
					`mobile`='$mobile',
					`dob`='$dob',
					`gender`='$gender',
					`address`='$address'
					where `id`=$id";
			else
				$sql="update `nn_user` set
					`name`='$name',
					`mobile`='$mobile',
					`dob`='$dob',
					`gender`='$gender',
					`address`='$address'
					where `id`=$id";
					
			echo $sql;
			$rs=mysqli_query($link,$sql);
			if($rs)
			{
				$msg='Cập nhật thành công.';
			}
			else
			{
				$msg='Cập nhật không thành công.';
			}
		}
		
	}
	
	//Truy van lay cac thong tin can thiet
	$sql='select * from `nn_user` where `id`='.$id;
	$rs=mysqli_query($link,$sql);
	$r=mysqli_fetch_assoc($rs);
?>
<h2 class="heading colr">Update</h2>
<div class="login">
    <div class="registrd">
        <form action="" method="post">
            <p class="error"><?php echo $msg ?></p>  
          <ul class="forms">
            <li class="txt">Name <span class="req">*</span></li>
              <li class="inputfield">
                <input type="text" value="<?php echo $r['name'] ?>" name="name" class="bar" required="required" id="name">
              </li>
            </ul>
          <ul class="forms">
            <li class="txt">Password <span class="req">*</span></li>
              <li class="inputfield">
                <input type="password" name="pass" placeholder="Tối thiểu 6 ký tự" class="bar" id="pass"><br><em>(Để trống nếu không muốn thay đổi mật khẩu)</em>
            </li>
            </ul>
          <ul class="forms">
              <li class="txt">Retype password<span class="req">*</span></li>
              <li class="inputfield">
                <input type="password" name="repass" class="bar" id="repass">
              </li>
            </ul>
          <ul class="forms">
            <li class="txt">Mobile <span class="req">*</span></li>
            <li class="inputfield">
              <input type="text" value="<?php echo $r['mobile'] ?>" name="mobile" class="bar" required="required" id="mobile">
            </li>
          </ul>
          <ul class="forms">
            <li class="txt">DOB <span class="req">*</span></li>
            <li class="inputfield">
              <input type="text" readonly value="<?php echo date('d/m/Y',strtotime($r['dob'])) ?>" name="dob" class="bar" required="required" id="dob">
            </li>
          </ul>
          <ul class="forms">
            <li class="txt">Gender <span class="req">*</span></li>
            <li class="inputfield">
              <select name="gender" id="gender">
              	<option <?php if($r['gender']==1) echo 'selected' ?> value="1">Nam</option>
                <option <?php if($r['gender']==0) echo 'selected' ?> value="0">Nữ</option>
              </select>
            </li>
          </ul>
          <ul class="forms">
            <li class="txt">Address <span class="req">*</span></li>
            <li class="textfield">
              <textarea name="address" required="required" class="bar" id="address"><?php echo $r['address'] ?></textarea>
            </li>
          </ul>
          <ul class="forms">
            <li class="txt">&nbsp;</li>
                <li><a href="#" onclick="document.getElementById('sm').click()" class="simplebtn"><span>Update</span></a><button id="sm" style="width:0;height:0;border:none" type="submit"></button></li>
          </ul>
        </form>
    </div>                    
</div>
<div class="clear"></div>
<script type="text/javascript" src="js/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<link href="js/jquery-ui-1.12.1.custom/jquery-ui.min.css" rel="stylesheet" />
<script>
	$('#dob').datepicker({
		dateFormat:'dd/mm/yy',
		changeMonth:true,
		changeYear:true,
		yearRange:'-99:+0',
	})
</script>

<?php if(is_file(domainpic.$v->hinhdaidiensanpham))echo domainpic.$v->hinhdaidiensanpham; else echo domainpic.'noimage-250-430-1.jpg';?>[parse_url]






    function update_khachhang_model($id)
    {
        $this->setquery("");
        return $this->execute(array());
    }
    function add_khachhang_model($id)
    {
        $this->setquery("");
        return $this->execute(array());
     
    }
    function dell_khachhang_model($id)
    {
        $this->setquery("");
        return $this->execute(array($id));
    }