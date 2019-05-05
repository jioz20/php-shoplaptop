<?php 
class phanquyen_controller extends controller
{
    function __construct()
    {
        $this->pathview = 'view/phanquyen/';
    }
    function danhsach_phanquyen()
    {
        $sr=new phanquyen_model();
        $data=array('danhsachphanquyen'=>$sr->danhsach_phanquyen_model());
        $this->render('phanquyen',$data,'layout');
    }
    function chitiet_phanquyen()
    {
        $sr=new phanquyen_model();
        $data=array('chitiet_phanquyen'=>$sr->chitiet_phanquyen_id_model($_GET['id']),
                    'load_danhsach_trangthai'=>$sr->load_danhsach_trangthai());
        $this->render('phanquyen_detail',$data,'layout');
    }
    function update_phanquyen()
    {
        // xem_arr($_POST);
        $post=$_POST;
        $m=substr($post['ngaytao'],0,2);
        $d=substr($post['ngaytao'],3,2);
        $y=substr($post['ngaytao'],6,4);
        $h=substr($post['ngaytao'],11,2);
        $mm=substr($post['ngaytao'],14,2);
        $post['ngaytao']="$y-$m-$d $h:$mm";
        $m=substr($post['capnhatcuoicung'],0,2);
        $d=substr($post['capnhatcuoicung'],3,2);
        $y=substr($post['capnhatcuoicung'],6,4);
        $h=substr($post['capnhatcuoicung'],11,2);
        $mm=substr($post['capnhatcuoicung'],14,2);
        $post['capnhatcuoicung']="$y-$m-$d $h:$mm";
        $sr=new phanquyen_model();
        xem_arr($post);
        // $ngaytao,$trangthai,$capnhatcuoicung,$id_chucnang,$id_nguoidung
        $t=$sr->update_phanquyen_model($post['ngaytao'],$post['id_trangthai'],$post['capnhatcuoicung'],$post['id_chucnang'],$post['id_nguoidung']);
        // if($t==true)
        // {
        //     echo "ok";
        // }
        // else echo "lỗi";
        header('location:?controller=phanquyen&act=danhsach_phanquyen');
    }
    function add_phanquyen_view()
    {
        $sr=new phanquyen_model();
        $data=array('load_danhsach_trangthai'=>$sr->load_danhsach_trangthai());
        $this->render('phanquyen_add',$data,'layout');

    }
    function add_phanquyen()
    {
       
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
        xem_arr($post);
        $sr=new phanquyen_model();
        $t=$sr->add_phanquyen_model($post['id_chucnang'],$post['id_nguoidung'],$post['ngaytao'],$post['id_trangthai'],$post['capnhatcuoicung']);
        header('location:?controller=phanquyen&act=danhsach_phanquyen');

    }
    function dell_phanquyen()
    {
        $sr=new phanquyen_model();
        $t=$sr->dell_phanquyen_model($_GET['id']);
        header('location:?controller=phanquyen&act=danhsach_phanquyen');
    }
  
  





}
?>