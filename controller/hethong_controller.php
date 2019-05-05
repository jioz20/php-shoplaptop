<?php 
class hethong_controller extends controller
{
    function __construct()
    {
        $this->pathview = 'view/hethong/';
    }
    function trangchu()
    {
        $this->render('home',$data=array(),'layout');
    }
    function lienhe()
    {
        $this->render('lienhe',$data = array());
    }
    function _404()
    {
        $this->render('_404',$data = array(),'layout_empty');
    }
    function _505()
    {
        $this->render('_505',$data = array(),'layout_empty');
    }
    function lock()
    {
        $this->render('lock',$data = array(),'layout_empty');
        
    }
    function login()
    {
        $this->render('login',$data= array(),'layout_empty');
    }
    function check_login()
    {
        //$this->render('login',$_POST,'layout_empty');
        // xem_arr($FILES);
        // if(islogin())
        //     chuyentrang();
        xem_arr($_POST);
        $flag=false;
        if(isset($_POST['user']) && isset($_POST['passwords']))
        {
            if(trim($_POST['user'])!='' && trim($_POST['passwords'])!='')
            {
                $sr=new login_model();
                $datauser=array('datauser'=>$sr->load_data_user_model());
                foreach($datauser['datauser'] as $k=>$v)
                {
                    //xem_arr($v);
                    if($v->user_dangnhap==$_POST['user'] && $v->pass_dangnhap==$_POST['passwords'])
                    { 
                        if($v->trangthai==1)
                        {
                            $flag=true;
                            break;
                        }  
                        else
                        {
                            $thongbao="<div class='alert alert-warning'> tài khoản bạn đã bị khoá , vui lòng liên hệ Admin !! </div>";
                            break;
                        }
                    } else
                    {
                        $thongbao="<div class='alert alert-danger'> Đăng nhập sai user hoặc pass đăng nhập </div>";
                        break;
                    }   
                }
                
        
                if($flag)
                {
                    $thongbao="<div class='alert alert-success'> Đăng nhập thành công !! </div>";
                    session_start();
                    $_SESSION['login']=true;
                    $_SESSION['user']=$v->user_dangnhap;
                    $_SESSION['pass']=$v->pass_dangnhap;
                    $_SESSION['ten']=$v->ten_quantri;
                    // $_SESSION['cart']=
                
                    if($_POST['remem'])
                    {
                        $time=time() + 86400;
                        setcookie('login',true,$time);
                        setcookie('user',$_SESSION['user'],$time);
                        setcookie('pass',$_SESSION['pass'],$time);
                        setcookie('ten',$_SESSION['ten'],$time);
                    }
                    $data=array('thongbao'=>$thongbao);
                    $this->render('trangchu',$data,'layout');  
                    
                }
                else
                {
                    $data=array('thongbao'=>$thongbao);
                    $this->render('login',$data,'layout_empty'); 
                }
                
                
                
                 
                
            }
            
        }
    }
    function logout()
    {
        session_start();
        setcookie('login','',time()-1);
        setcookie('user','',time()-1);
        setcookie('pass','',time()-1);
        setcookie('ten','',time()-1);
        session_destroy();
        $data=array();
        $this->render('login',$data,'layout_empty');
    }
    function islogin() 
    {
        if ( isset( $_SESSION[ 'login' ] ) && $_SESSION[ 'login' ] )
            return true;
        else
            return false;
    }
    function user()
    {
        $this->render('user',$data= array());
    }
    function timelinefull()
    {
        $this->render('timeline',$data= array(),'layout_empty');
    }
    function timeline()
    {
        $this->render('timeline',$data= array());
    }
    function pricing()
    {
        $this->render('pricing',$data= array(),'layout_empty');
    }
    function calendarfull()
    {
        $this->render('calendar',$data= array(),'layout_empty');
    }
     function calendar()
    {
        $this->render('calendar',$data= array());
    }
    function register()
    {
         $this->render('register',$data= array(),'layout_empty');
    }
     function buttons()
    {
         $this->render('buttons',$data= array());
    }
     function grid()
    {
         $this->render('grid',$data= array());
    }
      function panels()
    {
         $this->render('panels',$data= array());
    }
      function sweetalert()
    {
         $this->render('sweetalert',$data= array());
    }
    function notifications()
    {
        $this->render('notifications',$data= array());
    }
    function icons()
    {
        $this->render('icons',$data= array());
    }
    function topography()
    {
        $this->render('topography',$data= array());
    }
       function extended()
    {
        $this->render('extended',$data= array());
    }
    function regular()
    {
        $this->render('regular',$data=array());
    }
    function validation()
    {
        $this->render('validation',$data=array());
    }
    function wizard()
    {
        $this->render('wizard',$data=array());
    }
    function fullscreen()
    {
        $this->render('fullscreen',$data=array());
    }
    function charts()
    {
        $this->render('charts',$data=array());
    } 
    function control()
    {
        $this->render('control',$data=array());
    }
    function test()
    {
        $this->render('test',$data=array());
    }

  






}
?>