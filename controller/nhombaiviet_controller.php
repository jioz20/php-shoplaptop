<?php 
class nhombaiviet_controller extends controller
{
    function __construct()
    {
        $this->pathview = 'view/nhombaiviet/';
    }
    function danhsach_nhombaiviet()
    {
        $sr= new nhombaiviet_model();
        $data = array('nhombaiviet'=>$sr->danhsach_nhombaiviet_model(),
                      'load_danhsach_trangthai'=>$sr->load_danhsach_trangthai());
        $this->render('nhombaiviet',$data,'layout');
    }
    function chitiet_nhombaiviet()
    {
        $sr= new nhombaiviet_model();
        $data = array('chitiet_baiviet'=>$sr->chitiet_nhombaiviet_id_model($_GET['id']),
                      'load_danhsach_trangthai'=>$sr->load_danhsach_trangthai());
        $this->render('nhombaiviet_detail',$data,'layout');
    }
    function update_nhombaiviet()
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
        $sr1=new nhombaiviet_model();
         xem_arr($post);
        // $ten_nhombaiviet,$noidung,$ghichu,$ngaytao,$trangthai,$capnhatcuoicung,$id_nhombaiviet
        $t=$sr1->update_nhombaiviet_id_model($post['ten_nhombaiviet'],$post['noidung'],$post['ghichu'],$post['ngaytao'],$post['id_trangthai'],$post['capnhatcuoicung'],$post['id_nhombaiviet']);
        // if($t==true)
        // {
        //     echo "ok";
        // }else echo "loi";
        header('location:?controller=nhombaiviet&act=danhsach_nhombaiviet');
     
       
    }
    function add_nhombaiviet_view()
    {
        $sr= new nhombaiviet_model();
        $data = array('load_danhsach_trangthai'=>$sr->load_danhsach_trangthai());
        $this->render('nhombaiviet_add',$data,'layout');

    }
    function add_nhombaiviet()
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
        $sr=new nhombaiviet_model();
        $t=$sr->add_nhombaiviet_model(NULL,$post['ten_nhombaiviet'],$post['noidung'],$post['ghichu'],$post['ngaytao'],$post['id_trangthai'],$post['capnhatcuoicung']);
        //   if($t==true)
        // {
        //     echo "ok";
        // }else echo "loi";
        header('location:?controller=nhombaiviet&act=danhsach_nhombaiviet');

    }
    function dell_nhombaiviet()
    {
        $sr=new nhombaiviet_model();
        $sr->dell_nhombaiviet_model($_GET['id']);
        header('location:?controller=nhombaiviet&act=danhsach_nhombaiviet');
    }
  





}
?>