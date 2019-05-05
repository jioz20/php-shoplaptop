<?php 
class nhomquantri_controller extends controller
{
    function __construct()
    {
        $this->pathview = 'view/nhomquantri/';
    }
    function danhsach_nhomquantri()
    {
        $sr=new nhomquantri_model();
        $data=array('dsnhomquantri'=>$sr->danhsach_nhomquantri_model());
        $this->render('nhomquantri',$data,'layout');
    }
    function chitiet_nhomquantri()
    {
        $sr=new nhomquantri_model();
        $data=array('chitiet_nhomquantri'=>$sr->chitiet_nhomquantri_id_model($_GET['id']),
                    'load_danhsach_trangthai'=>$sr->load_danhsach_trangthai());
        $this->render('nhomquantri_detail',$data,'layout');
    } 
    function update_nhomquantri()
    {
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
        $sr=new nhomquantri_model();
        $sr->update_nhomquantri_id_model($_GET['id'],$post['ten_nhomquantri'],$post['ngaytao'],$post['id_trangthai'],$post['capnhatcuoicung']);
        header('location:?controller=nhomquantri&act=danhsach_nhomquantri');
    }
    function add_nhomquantri_view()
    {
        $sr=new model();
        $data=array('load_danhsach_trangthai'=>$sr->load_danhsach_trangthai());
        $this->render('nhomquantri_add',$data,'layout');

    }
    function add_nhomquantri()
    {
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
        xem_arr($post);
        
        $sr=new nhomquantri_model();
        $sr->add_nhomquantri_id_model(Null,$post['ten_nhomquantri'],$post['ngaytao'],$post['id_trangthai'],$post['capnhatcuoicung']);
        header('location:?controller=nhomquantri&act=danhsach_nhomquantri');
    }
    function dell_nhomquantri()
    {
        $sr=new nhomquantri_model();
        $sr->dell_nhomquantri_id_model($_GET['id']);
        header('location:?controller=nhomquantri&act=danhsach_nhomquantri');
    }
    
  





}
?>