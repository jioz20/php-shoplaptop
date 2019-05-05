<?php 
class cart_user1_model extends model
{
  // tạo giỏ hàng 
    function cart()
    {
        if(!isset($_SESSION['cart']) && $_SESSION['cart'])
        {
            $_SESSION['cart']=array();
        }
    }
    
  // mua hàng , bỏ hàng vào giỏ
    function add_cart()
    {
        // lấy ID 
        if(isset($_GET['id']) && $_GET['id'])
        { 
            $id=$_GET['id'];
        }
        // kiểm tra số lương còn hàng không , nếu còn thì add , không thì báo hết hàng
        $sp= new sanpham_model();
        $sp->chitiet_sanpham_model($id);
        if($sp->)


        // 
    }
   

  // 
  

}


?>
