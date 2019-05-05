<?php 
class chucnang_controller extends controller
{
    function __construct()
    {
        $this->pathview = 'view/chucnang/';
    }
    function danhsach_chucnang()
    {
        $sr=new chucnang_model();
        $data=array('danhsachchucnang'=>$sr->danhsach_chucnang_model());
        $this->render('chucnang',$data,'layout');
    }
    function chitiet_chucnang()
    {
        $sr=new chucnang_model();
        $data=array('chitiet_chucnang'=>$sr->chitiet_chucnang_id_model($_GET['id']),
                    'load_danhsach_trangthai'=>$sr->load_danhsach_trangthai());
        $this->render('chucnang_detail',$data,'layout');
    }
    function update_chucnang()
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
        // exit();
        $sr=new chucnang_model();
        $sr->update_chucnang_model($post['ten_chucnang'],$post['link'],$post['ngaytao'],$post['id_trangthai'],$post['ngaycapnhatcuoi'],$_GET['id']);
        header('location:?controller=chucnang&act=danhsach_chucnang');
    }
    function add_chucnang_view()
    {
        $sr=new chucnang_model();
        $data=array('load_danhsach_trangthai'=>$sr->load_danhsach_trangthai());
        $this->render('chucnang_add',$data,'layout');
    }
    function add_chucnang()
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
        // xem_arr($post);
        $sr=new chucnang_model();
        $sr->add_chucnang_model(Null,$post['ten_chucnang'],$post['link'],$post['ngaytao'],$post['id_trangthai'],$post['ngaycapnhatcuoi']);
        header('location:?controller=chucnang&act=danhsach_chucnang');
    }
    function dell_chucnang()
    {
        $sr=new chucnang_model();
        $sr->dell_chucnang_model($_GET['id']);
        header('location:?controller=chucnang&act=danhsach_chucnang');
    }
  
  





}
?>