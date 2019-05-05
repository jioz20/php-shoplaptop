<?php 
class logs_controller extends controller
{
    function __construct()
    {
        $this->pathview = 'view/logs/';
    }
    function danhsach_logs()
    {
        $sr=new logs_model();
        $data=array('danhsachlogs'=>$sr->danhsach_logs_model());
        $this->render('logs',$data,'layout');
    }
    function chitiet_logs()
    {
        $sr=new logs_model();
        $data=array('chitietlogs'=>$sr->chitiet_logs_model($_GET['id']),
                    'load_danhsach_trangthai'=>$sr->load_danhsach_trangthai());
        $this->render('logs_detail',$data,'layout');
    }
    function update_logs()
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
        $sr1=new logs_model();
         xem_arr($post);
        //  exit();
        $t=$sr1->update_logs_id_model($post['noidung'],$post['ngaytao'],$post['id_trangthai'],$post['ngaycapnhatcuoi'],$post['id_logs']);
        // if($t==true)
        // {
        //     echo "ok";
        // }else echo "loi";
        header('location:?controller=logs&act=danhsach_logs');
     
       
    }
    function add_logs_view()
    {
        $sr=new logs_model();
        $data=array('load_danhsach_trangthai'=>$sr->load_danhsach_trangthai());
        $this->render('logs_add',$data,'layout');

    }
    function add_logs()
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
        $sr=new logs_model();
        $t=$sr->add_logs_model(Null,$post['noidung'],$post['ngaytao'],$post['id_trangthai'],$post['ngaycapnhatcuoi']);
        //   if($t==true)
        // {
        //     echo "ok";
        // }else echo "loi";
        header('location:?controller=logs&act=danhsach_logs');

    }
    function dell_logs()
    {
        $sr=new logs_model();
        $t=$sr->dell_logs_model($_GET['id']);
        header('location:?controller=logs&act=danhsach_logs');
    }
  





}
?>