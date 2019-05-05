<?php 
class user3_controller extends controller
{
    function __construct()
    {
        $this->pathview = 'view/user3/';
    }
    function trangchu()
    {
        $this->render('home1',$data = array(),'layout_user3');
    }
    function trangchu2()
    {
        $this->render('home2',$data = array(),'layout_user3');
    }
    function _404()
    {
        $this->render('404',$data = array(),'layout_user3');
    }
    function shop()
    {
        
        if(isset($_GET['id_danhmuc']) && $_GET['id_danhmuc'])
        {
            $id_danhmuc=$_GET['id_danhmuc'];
        }
        else $id_danhmuc=1;
        // if(isset($_GET['id_nhomsp']) && $_GET['id_nhomsp'])
        // {
        //     $id_nhomsp=$_GET['id_nhomsp'];
        // }else $id_nhomsp=1;
        
        $sr1=new danhmucsanpham_model();
        $sr=new sanpham_model();
        $sr2=new nhomsanpham_model();
        $data=array('sanpham'=>$sr->danhsach_sanpham_danhmuc_model($id_danhmuc),
                    'danhmuc'=>$sr1->danhsach_danhmucsanpham_model(),
                    'nhomsanpham'=>$sr2->danhsach_nhomsanpham_model());
        $this->render('shop',$data,'layout_user3');
    }
    function shoplist()
    {
        $this->render('shop',$data = array(),'layout_user3');
    }
    function blog()
    {
        $this->render('blog',$data = array(),'layout_user3');
    }
    function about()
    {
        $this->render('about',$data = array(),'layout_user3');
    }
    function cart()
    {
        $this->render('cart',$data = array(),'layout_user3');
    }
    function checkout()
    {
        $this->render('checkout',$data = array(),'layout_user3');
    }
    function contact()
    {
        $this->render('contact',$data = array(),'layout_user3');
    }
    function login()
    {
        $this->render('login',$data = array(),'layout_user3');
    }
    function check_login()
    {
        // xem_arr($_POST);
        $sr=new user3_model();
        if(!isset($_POST['remem']))
        {
            $_POST['remem']=0;
        }
        $test=$sr->check_login_model($_POST['user'],$_POST['pass'],$_POST['remem']);
        if($test==true)
        {
            header('location:?controller=user3&act=trangchu');
        }else
        {
            
            $data = array('thongbao'=>"<div class='alert alert-danger'> Đăng nhập sai user hoặc pass đăng nhập hoặc tài khoản bạn đã bị khoá , vui lòng liên hệ Admin !!  </div>");
            header('location:?controller=user3&act=login');
           
        }
        
    }
   
    function account()
    {
        $this->render('account',$data = array(),'layout_user3');
    }
    function singleblog()
    {
        $this->render('singleblog',$data = array(),'layout_user3');
    }
    function singleproduct()
    {
        $this->render('singleproduct',$data = array(),'layout_user3');
    }
    function thankyou()
    {
        $this->render('thankyou',$data = array(),'layout_user3');
    }
    function wishlist()
    {
        $this->render('wishlist',$data = array(),'layout_user3');
    }
    function forgotpassword()
    {
        xem_arr($_POST);
        $this->render('forgotpassword',$data = array(),'layout_user3');
    }
  
    function search()
    { 
        xem_arr($_POST);
        $this->render('search',$data = array(),'layout_user3');
    }
    // logout
    function logout()
    {
       
        // setcookie('login',true,time()-1);
        // setcookie('ten_nguoidung',$_SESSION['ten_nguoidung'],time()-1);
        // setcookie('user_dangnhap',$_SESSION['user_dangnhap'],time()-1);
        // setcookie('pass_dangnhap',$_SESSION['pass_dangnhap'],time()-1);
        // setcookie('awatar_nguoidung',$_SESSION['awatar_nguoidung'],time()-1);
        // session_destroy();
        $this->render('logout',$data = array(),'layout_user3');
    }
    // đăng kí thành công successful_registration
    function successful_registration()
    {
        $this->render('successful_registration',$data = array(),'layout_user3');
    }
    // reset passwords thành công
    function successful_password()
    {
        $this->render('successful_password',$data = array(),'layout_user3');
    } 
   
    // thông báo đơn hàng qua mail 
    // thông báo subsrice thành công 
    // thông bảo huỷ sub thành công 
    // thông báo đơn hàng sẵn sàng giao
    // thông báo đơn hàng sẵn đang giao
    // thông báo đơn hàng sẵn giao hàng thanh công
    // thông báo đơn hàng sẵn giao hàng thất bại 
    // nhắc khách hàng sắp hết 
    // thông báo có sản phẩm mới 
    // thông báo khuyến mãi 
    // kích hoạt chế độ bảo hành thành công 


    
    



    
   
   
   

}
?>