<?php 
class mau_controller extends controller
{
    function __construct()
    {
        $this->pathview = 'view/mau/';
    }
    function danhsach_mau()
    {
        $sr=new mau_model();
        $data=array('danhsachmau'=>$sr->danhsach_mau_model());
        $this->render('mau',$data,'layout');
    }
    function chitiet_mau()
    {
        $sr=new mau_model();
        $data=array('chitiet_mau'=>$sr->chitiet_mau_id_model($_GET['id']),
                    'load_danhsach_trangthai'=>$sr->load_danhsach_trangthai());
        $this->render('mau_detail',$data,'layout');
    }
    function update_mau()
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
        $sr=new mau_model();
        $sr->update_mau_model($post['ten_mau'],$post['ghichu'],$post['ngaytao'],$post['id_trangthai'],$post['ngaycapnhatcuoi'],$_GET['id']);
        header('location:?controller=mau&act=danhsach_mau');
    }
    function add_mau_view()
    {
        $sr=new mau_model();
        $data=array('load_danhsach_trangthai'=>$sr->load_danhsach_trangthai());
        $this->render('mau_add',$data,'layout');

    }
    function add_mau()
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
        $sr=new mau_model();
        $t=$sr->add_mau_model(NuLL,$post['ten_mau'],$post['ghichu'],$post['ngaytao'],$post['id_trangthai'],$post['ngaycapnhatcuoi']);
        header('location:?controller=mau&act=danhsach_mau');

    }
    function dell_mau()
    {
        $sr=new mau_model();
        $t=$sr->dell_mau_model($_GET['id']);
        header('location:?controller=mau&act=danhsach_mau');
    }
  





}
?>