<?php
class khachhang_controller extends controller
{
    function __construct()
    {
        $this->pathview = 'view/khachhang/';
    }
    function danhsach_khachhang()
    {
        $sr=new khachhang_model();
        $data=array('danhsachkhachhang'=>$sr->danhsach_khachhang_model(),
                    'load_danhsach_trangthai'=>$sr->load_danhsach_trangthai());
        $this->render('khachhang',$data,'layout');
    }
    function chitiet_khachhang()
    {
        $sr=new khachhang_model();
        $data=array('chitiet_khachhang'=>$sr->chitiet_khachhang_model($_GET['id']),
                    'load_danhsach_loaikhachhang'=>$sr->load_danhsach_loaikhachhang(),
                    'load_danhsach_trangthai'=>$sr->load_danhsach_trangthai());
        $this->render('khachhang_detail',$data,'layout');
     
    }
    function update_khachhang()
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
        $sr=new khachhang_model();
        $sr->update_khachhang_model($post['id_loaikhachhang'],$post['ten_khachhang'],$post['email'],$post['sodienthoai'],$post['diachigiaohang'],$post['ngaytao'],$post['id_trangthai'],$post['ngaycapnhatcuoi'],$post['id_khachhang']);
        header('location:?controller=khachhang&act=danhsach_khachhang');

    }
    function add_khachhang_view()
    {
        $sr=new khachhang_model();
        $data=array('load_danhsach_loaikhachhang'=>$sr->load_danhsach_loaikhachhang(),
                    'load_danhsach_trangthai'=>$sr->load_danhsach_trangthai());
        $this->render('khachhang_add',$data,'layout');

    }
    function add_khachhang()
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
        $sr=new khachhang_model();
        $t=$sr->add_khachhang_model($post['id_loaikhachhang'],$post['ten_khachhang'],$post['email'],$post['sodienthoai'],$post['diachigiaohang'],$post['ngaytao'],$post['id_trangthai'],$post['ngaycapnhatcuoi'],Null);
        header('location:?controller=khachhang&act=danhsach_khachhang');

    }
    function dell_khachhang()
    {
        $sr=new khachhang_model();
        $t=$sr->dell_khachhang_model($_GET['id']);
        header('location:?controller=khachhang&act=danhsach_khachhang');
    }






}
?>
