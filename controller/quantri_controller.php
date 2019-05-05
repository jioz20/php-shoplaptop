<?php 
class quantri_controller extends controller
{
    function __construct()
    {
        $this->pathview = 'view/quantri/';
    }
    function danhsach_quantri()
    {
        $sr=new quantri_model();
        $data=array('danhsachquantri'=>$sr->danhsach_quantri_model());
        $this->render('quantri',$data,'layout');
    }
    function chitiet_quantri()
    {
        $sr=new quantri_model();
        $sr2=new nhomquantri_model();
        $data=array('chitiet_quantri'=>$sr->chitiet_quantri_id_model($_GET['id']),
                    'load_danhsach_trangthai'=>$sr->load_danhsach_trangthai(),
                    'load_danhsach_nhomquantri'=>$sr2->danhsach_nhomquantri_model());
        $this->render('quantri_detail',$data,'layout');
    }
    function update_quantri()
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
        $sr=new quantri_model();
        // $ten_quantri,$user_dangnhap,$pass_dangnhap,$id_nhomquantri,$ngaytao,$trangthai,$ngaycapnhatcuoi,$id_dangnhap,$landangnhapcuoi,$id_quantri
        $t=$sr->update_quantri_id_model($post['ten_quantri'],$post['user_dangnhap'],$post['pass_dangnhap'],$post['id_nhomquantri'],
        $post['ngaytao'],$post['id_trangthai'],$post['ngaycapnhatcuoi'],$post['id_dangnhap'],$post['landangnhapcuoi'],$_GET['id']);
        // if($t==true)
        // {
        //     echo "ok";
        // }else echo "lỗi";
        header('location:?controller=quantri&act=danhsach_quantri');
    }
    function add_quantri_view()
    {
        $sr=new quantri_model();
        $sr2=new nhomquantri_model();
        $data=array('load_danhsach_trangthai'=>$sr->load_danhsach_trangthai(),
                    'load_danhsach_nhomquantri'=>$sr2->danhsach_nhomquantri_model());
        $this->render('quantri_add',$data,'layout');

    }
    function add_quantri()
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
        $sr=new quantri_model();
        $t=$sr->add_quantri_id_model(Null,$post['ten_quantri'],$post['user_dangnhap'],$post['pass_dangnhap'],$post['id_nhomquantri'],
        $post['ngaytao'],$post['id_trangthai'],$post['ngaycapnhatcuoi'],$post['id_dangnhap'],$post['landangnhapcuoi']);
        header('location:?controller=quantri&act=danhsach_quantri');

    }
    function dell_quantri()
    {
        $sr=new quantri_model();
        $t=$sr->dell_quantri_id_model($_GET['id']);
        header('location:?controller=quantri&act=danhsach_quantri');
    }
  





}
?>