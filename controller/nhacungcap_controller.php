<?php 
class nhacungcap_controller extends controller
{
    
    function __construct()
    {
        $this->pathview = 'view/nhacungcap/';
    }
    function danhsach_nhacungcap()
    {
        $sr=new nhacungcap_model();
        $data=array('nhacungcap'=>$sr->danhsach_nhacungcap_model());
        $this->render('nhacungcap',$data,'layout');
    }
    function chitiet_nhacungcap()
    {
        $sr=new nhacungcap_model();
        $data=array('chitiet_nhacungcap'=>$sr->chitiet_nhacungcap_model($_GET['id']),
                    'load_danhsach_trangthai'=>$sr->load_danhsach_trangthai());
        $this->render('nhacungcap_detail',$data,'layout');
    }
    function update_nhacungcap()
    {
        // xem_arr($_POST);
        $post=$_POST;
        $m=substr($post['ngaytao'],0,2);
        $d=substr($post['ngaytao'],3,2);
        $y=substr($post['ngaytao'],6,4);
        $h=substr($post['ngaytao'],11,2);
        $mm=substr($post['ngaytao'],14,2);
        $post['ngaytao']="$y-$m-$d $h:$mm";
        $m=substr($post['ngaycapnhatcuoi'],0,2);
        $d=substr($post['ngaycapnhatcuoi'],3,2);
        $y=substr($post['ngaycapnhatcuoi'],6,4);
        $h=substr($post['ngaycapnhatcuoi'],11,2);
        $mm=substr($post['ngaycapnhatcuoi'],14,2);
        $post['ngaycapnhatcuoi']="$y-$m-$d $h:$mm";
        $sr=new nhacungcap_model();
        $test=$sr->update_nhacungcap_model($post['ten_nhacungcap'],$post['ghichu'],$post['ngaytao'],$post['id_trangthai'],$post['ngaycapnhatcuoi'],$_GET['id']);
        // if($test==true)
        // {
        //     echo "ok";
        // }else
        // echo "lỗi";
        header('location:?controller=nhacungcap&act=danhsach_nhacungcap');
        
    }
    function add_nhacungcap_view()
    {
        $sr=new nhacungcap_model();
        $data=array('load_danhsach_trangthai'=>$sr->load_danhsach_trangthai());
        $this->render('nhacungcap_add',$data,'layout');
        
    }
    function add_nhacungcap()
    {
         xem_arr($_POST);
         $post=$_POST;
         $m=substr($post['ngaytao'],0,2);
         $d=substr($post['ngaytao'],3,2);
         $y=substr($post['ngaytao'],6,4);
         $h=substr($post['ngaytao'],11,2);
         $mm=substr($post['ngaytao'],14,2);
         $post['ngaytao']="$y-$m-$d $h:$mm";
         $m=substr($post['ngaycapnhatcuoi'],0,2);
         $d=substr($post['ngaycapnhatcuoi'],3,2);
         $y=substr($post['ngaycapnhatcuoi'],6,4);
         $h=substr($post['ngaycapnhatcuoi'],11,2);
         $mm=substr($post['ngaycapnhatcuoi'],14,2);
         $post['ngaycapnhatcuoi']="$y-$m-$d $h:$mm";
         $sr=new nhacungcap_model();
         $test=$sr->add_nhacungcap_model(Null,$post['ten_nhacungcap'],$post['ghichu'],$post['ngaytao'],$post['id_trangthai'],$post['ngaycapnhatcuoi']);
         if($test==true)
         {
             echo "ok";
         }else
         echo "lỗi";
         header('location:?controller=nhacungcap&act=danhsach_nhacungcap');
    }
    function dell_nhacungcap()
    {
        $sr=new nhacungcap_model();
        $sr->dell_nhacungcap_model($_GET['id']);
        header('location:?controller=nhacungcap&act=danhsach_nhacungcap');
    }
  
  





}
?>