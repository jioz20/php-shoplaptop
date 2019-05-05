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
        if($sp && $sp->soluong>0)
        {
            if(!isset($_SESSION['cart'][$sp->id_sanpham])){
                //them vao gio hang
                $sp = array(
                    'id_sanpham'=>$sp->id_sanpham,
                    'ten_sanpham'=>$sp->ten_sanpham,
                    'gia'=>$sp->gia,
                    'hinhdaidiensanpham'=>$sp->hinhdaidiensanpham,
                    'soluong'=>1
                );
                $_SESSION['cart'][$sp->id_sanpham] = $sanphammua;
            }else
            {
                $_SESSION['cart'][$sp->id_sanpham]['soluong']+=1;
            }
            return true;
        }
        else
        {
            // thong bao hoăc tra ve false
            return false;
        }
        
    }else
    {
        // thong bao hoăc tra ve false
        return false;
        
    }

        // 
    }
    function xoasanpham()
	{
		//lay cai mã san pham tren link
		if(isset($_GET['id']) && $_GET['id'])
		{			
			
			if(isset($_SESSION['giohang'][$_GET['id']])){				
				//xoa 
				unset($_SESSION['giohang'][$_GET['id']]);
				return true;			
			}else
			{
				return false;
			}
		}else
		{
			// thong bao hoăc tra ve false
			return false;
			
		}
		
	}
	function doisoluong()
	{
		//lay cai mã san pham tren link
		if(isset($_POST['soluong']) && $_POST['soluong'] && is_array($_POST['soluong']))
		{			
			foreach($_POST['soluong'] as $v=>$soluong)
				$_SESSION['cart'][$v]['soluong'] = $soluong;
			return true;
		}else
		{
			// thong bao hoăc tra ve false
			return false;
			
		}
		
	}
	function countcart()
	{
		if(isset($_SESSION['cart']))
			return count($_SESSION['cart']);
		return 0;
	}

  // 
  

}


?>