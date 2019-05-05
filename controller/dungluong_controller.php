<?php 
class dungluong_controller extends controller
{
    function __construct()
    {
        $this->pathview = 'view/dungluong/';
    }
    function danhsach_dungluong()
    {
        $sr=new dungluong_model();
        $data=array('danhsachdungluong'=>$sr->danhsach_dungluong_model());
        $this->render('dungluong',$data,'layout');
    }
    function chitiet_dungluong()
    {
        $sr=new dungluong_model();
        $data=array('chitiet_dungluong'=>$sr->chitiet_dungluong_id_model($_GET['id']),
                    'load_danhsach_trangthai'=>$sr->load_danhsach_trangthai());
        $this->render('dungluong_detail',$data,'layout');
    }
    function update_dungluong()
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
        // exit();
        $sr=new dungluong_model();
        $sr->update_dungluong_model($post['dungluong'],$post['ghichu'],$post['ngaytao'],$post['id_trangthai'],$post['ngaycapnhatcuoi'],$_GET['id']);
        header('location:?controller=dungluong&act=danhsach_dungluong');
    }
    function add_dungluong_view()
    {
        $sr=new dungluong_model();
        $data=array('load_danhsach_trangthai'=>$sr->load_danhsach_trangthai());
        $this->render('dungluong_add',$data,'layout');
    }
    function add_dungluong()
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
        // exit();
        $sr=new dungluong_model();
        $sr->add_dungluong_model(Null,$post['dungluong'],$post['ghichu'],$post['ngaytao'],$post['id_trangthai'],$post['ngaycapnhatcuoi']);
        header('location:?controller=dungluong&act=danhsach_dungluong');
    }
    function dell_dungluong()
    {
        $sr=new dungluong_model();
        $sr->dell_dungluong_model($_GET['id']);
        header('location:?controller=dungluong&act=danhsach_dungluong');
    }

  





}
?>