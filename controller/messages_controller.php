<?php 
class messages_controller extends controller
{
    function __construct()
    {
        $this->pathview = 'view/messages/';
    }
    function danhsach_messages()
    {
        $sr=new messages_model();
        $data=array('messages'=>$sr->danhsach_messages_model());
        $this->render('messages',$data,'layout');
    }
    function chitiet_messages()
    {
        $sr=new messages_model();
        $data=array('chitietmessages'=>$sr->chitiet_messages_id_model($_GET['id']),
                    'load_danhsach_trangthai'=>$sr->load_danhsach_trangthai());
        // $this->loadcss(domain.'view/layout/admin1/assets/css/mycss.css'."/n");
        // $this->loadjs(domain.'view/layout/admin1/assets/js/myscript.js'."/n");
        $this->render('messages_detail',$data,'layout');

    }
    function update_messages()
    {
        $post=$_POST;
        $id=$_GET['id'];
        
        //Chuyen dinh dang tu dd/mm/yyyy -> yyyy-mm-dd
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
        // xem_arr($post);
        // exit();
        $sr=new messages_model();
        $test=$sr->update_messages_id_model($post['id_messages'],$post['mail'],$post['noidung'],
                                      $post['timkiem'],$post['ngaytao'],$post['id_trangthai'],$post['capnhatcuoicung']);
        if($test==true)
        {
            header('location:?controller=messages&act=danhsach_messages');    
        }else
        echo "lỗi ";
        

    }
    function dell_messages()
    {
        $id=$_GET['id'];
        $sr=new messages_model();
        $sr->dell_messages_id_model($id);
        header('location:?controller=messages&act=danhsach_messages');    
    }
    function add_messages_view()
    {
        $sr=new messages_model();
        $this->render('messages_add',$data=array('load_danhsach_trangthai'=>$sr->load_danhsach_trangthai()),'layout');
    }
    function add_messages()
    {
        $post=$_POST;
        
        
        //Chuyen dinh dang tu dd/mm/yyyy -> yyyy-mm-dd
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
        $sr=new messages_model();
        $sr->add_messages_model(Null,$post['mail'],$post['noidung'],
        $post['timkiem'],$post['ngaytao'],$post['id_trangthai'],$post['capnhatcuoicung']);
        header('location:?controller=messages&act=danhsach_messages'); 
    }
  





}
?>