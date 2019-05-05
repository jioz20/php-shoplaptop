<?php 
class trangthai_controller extends controller
{
    function __construct()
    {
        $this->pathview = 'view/trangthai/';
    }
    function danhsach_trangthai()
    {
        $sr=new trangthai_model();
        $data=array('danhsach_trangthai'=>$sr->danhsach_trangthai_model());
        $this->render('trangthai',$data,'layout');
    }
    function chitiet_trangthai()
    {
        $sr=new trangthai_model();
        $data=array('chitiet_trangthai'=>$sr->chitiet_trangthai_id_model($_GET['id']),
                     'load_danhsach_trangthai'=>$sr->load_danhsach_trangthai());
        $this->render('trangthai_detail',$data,'layout');
    }
    function update_trangthai()
    {
        $post=$_POST;
        // xem_arr($post);
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
        //  xem_arr($post);
        //  exit();
        $sr=new trangthai_model();
        $test=$sr->update_trangthai_id_model($_GET['id'],$post['ten_trangthai'],$post['ghichu'],$post['ngaytao'],$post['ngaycapnhatcuoi']);
        header('location:?controller=trangthai&act=danhsach_trangthai');
        
    }
    function add_trangthai_view()
    {
      
        $data=array();
        $this->render('trangthai_add',$data,'layout');
    }
    function add_trangthai()
    {
        $post=$_POST;
        // xem_arr($post);
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
        //  xem_arr($post);
        //  exit();
        $sr=new trangthai_model();
        $test=$sr->add_trangthai_id_model(Null,$post['ten_trangthai'],$post['ghichu'],$post['ngaytao'],$post['ngaycapnhatcuoi']);
        // if($test==true)
        // {
        //     echo "ok";
        // }
        // else echo "lỗi";
        header('location:?controller=trangthai&act=danhsach_trangthai');
    }
    function dell_trangthai()
    {
        $sr=new trangthai_model();
        $sr->dell_trangthai_id_model($_GET['id']);
        header('location:?controller=trangthai&act=danhsach_trangthai');
    }
  





}
?>