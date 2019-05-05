<?php 
class user3_model extends model
{
    function check_login_model($user,$pass,$remem)
    {
        
        if(isset($user) && isset($pass))
        {
            
            if(trim($user)!='' && trim($pass)!='')
            {
                $sr=new quantri_model();
                $data=array('danhsachquantri'=>$sr->danhsach_quantri_model());
            //    xem_arr($data['danhsachquantri']);
              
                foreach($data['danhsachquantri'] as $k=>$v)
                {
                    if($v->user_dangnhap==$user && $v->pass_dangnhap==$pass)
                    {   
                        // echo $v->ten_trangthai;
                        // exit();
                        if($v->ten_trangthai=='Active')
                        {
                            $thongbao="<div class='alert alert-success'> Đăng nhập thành công !! </div>";
                            $_SESSION['login']=true;
                            $_SESSION['user_dangnhap']=$v->user_dangnhap;
                            $_SESSION['pass_dangnhap']=$v->pass_dangnhap;
                            $_SESSION['ten_quantri']=$v->ten_quantri; 
                            if($remem==1)
                            {
                                $time=time() + 86400;
                                setcookie('login',true,$time);
                                setcookie('user_dangnhap',$_SESSION['user_dangnhap'],$time);
                                setcookie('pass_dangnhap',$_SESSION['pass_dangnhap'],$time);
                                setcookie('awatar_nguoidung',$_SESSION['awatar_nguoidung'],$time);
                            }
                              
                          
                            
                        }
                        else
                        {
                            // $thongbao= 'tài khoản bạn đã bị khoá , vui lòng liên hệ Admin !!';
                           
                             return FALSE; 
                            
                        }
                        
                        return true;
                
                    } else
                    {
                        // $thongbao= 'Đăng nhập sai user đăng nhập !! ';
                        
                         return FALSE; 
                    }   
                    
        
                }
               
            }
            
        }
        
        
        
    }
    function logout_model()
    {
       
        // setcookie('login',true,time()-1);
        // setcookie('ten_nguoidung',$_SESSION['ten_nguoidung'],time()-1);
        // setcookie('user_dangnhap',$_SESSION['user_dangnhap'],time()-1);
        // setcookie('pass_dangnhap',$_SESSION['pass_dangnhap'],time()-1);
        // setcookie('awatar_nguoidung',$_SESSION['awatar_nguoidung'],time()-1);
        // session_destroy();
       
    }
}

?>
