<?php 
class baiviet_controller extends controller
{
    function __construct()
    {
        $this->pathview = 'view/baiviet/';
    }
    function danhsach_baiviet()
    {
    	$sr= new baiviet_model();
        $data = array('danhsachbaiviet'=>$sr->danhsach_baiviet_model(),
                      'nhombaiviet'=>$sr->load_danhsach_nhombaiviet());
        $this->render('baiviet',$data,'layout');
    }
    function chitiet_baiviet()
    {
        $sr= new baiviet_model();
        $sr1= new nhombaiviet_model();
        $data = array('chitiet_baiviet'=>$sr->chitiet_baiviet_id_model($_GET['id']),
                      'nhombaiviet'=>$sr1->danhsach_nhombaiviet_model(),
                      'load_danhsach_trangthai'=>$sr->load_danhsach_trangthai());
        $this->render('baiviet_detail',$data,'layout');
    }
    function update_baiviet()
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
        $sr1=new baiviet_model();
        //  xem_arr($post);
        //  exit();$ten_baiviet,$id_nhombaiviet,$alias,$tukhoa,$mota,$timkiem,$hinhchiase,$noidungtomtat,$noidungchitiet,$ngaytao,$trangthai,$capnhatcuoicung,$id_baiviet
        $t=$sr1->update_baiviet_id_model($post['ten_baiviet'],$post['id_nhombaiviet'],$post['alias'],$post['tukhoa'],$post['mota'],$post['timkiem'],$post['hinhchiase'],$post['noidungtomtat'],
        $post['noidungchitiet'],$post['ngaytao'],$post['id_trangthai'],$post['capnhatcuoicung'],$post['id_baiviet']);
        // if($t==true)
        // {
        //     echo "ok";
        // }else echo "loi";
        header('location:?controller=baiviet&act=danhsach_baiviet');
     
       
    }
    function add_baiviet_view()
    {
        $sr= new baiviet_model();
        $sr1= new nhombaiviet_model();
        $data = array('nhombaiviet'=>$sr1->danhsach_nhombaiviet_model(),
                      'load_danhsach_trangthai'=>$sr->load_danhsach_trangthai());
        $this->render('baiviet_add',$data,'layout');

    }
    function add_baiviet()
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
        $sr=new baiviet_model();
        $t=$sr->add_baiviet_model(NULL,$post['ten_baiviet'],$post['id_nhombaiviet'],$post['alias'],$post['tukhoa'],$post['mota'],$post['timkiem'],$post['hinhchiase'],$post['noidungtomtat'],
        $post['noidungchitiet'],$post['ngaytao'],$post['id_trangthai'],$post['capnhatcuoicung'],$post['id_baiviet']);
        //   if($t==true)
        // {
        //     echo "ok";
        // }else echo "loi";
        header('location:?controller=baiviet&act=danhsach_baiviet');

    }
    function dell_baiviet()
    {
        $sr=new baiviet_model();
        $t=$sr->dell_baiviet_model($_GET['id']);
        header('location:?controller=baiviet&act=danhsach_baiviet');
    }
  





}
?>