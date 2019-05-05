<?php 
class sanpham_controller extends controller
{
    function __construct()
    {
        $this->pathview = 'view/sanpham/';
       
    }
    // function danhsach_sanpham()
    // {
    //     $sr=new sanpham_model();
    //     $data=array('data'=>$sr->danhsach_sanpham_model(),'a'=>'1234');
    //     $this->render('sanpham',$data,'layout');
    // }
    function danhsach_sanpham()
    {
        $sotintrentrang=5;
        $sotrang=isset($_GET['trang']) && $_GET['trang'] ? $sotrang : 1;
        $vitri=($sotrang-1)*$sotintrentrang;
        $sr=new sanpham_model();
        $data=array('data'=>$sr->danhsach_sanpham_limit_model($vitri,$sotintrentrang),'tongsotrang'=>$sr->total());
        $this->render('sanpham',$data,'layout');
    }
    function api_danhsach_sanpham()
    {
         $sotintrentrang=5;
         $sotrang=(isset($_GET['page']) && $_GET['page']) ? $_GET['page'] : 1;
         $vitri=($sotrang-1)*$sotintrentrang;
         $sr=new sanpham_model();
         $data=array('danhsach'=>$sr->danhsach_sanpham_limit_model($vitri,$sotintrentrang));
        
        foreach ($data['danhsach'] as $item ) 
        { 
            echo 
            '<tr>
            <td class="text-center sorting" tabindex="0">
                '.$item->id_sanpham.'
            </td>
            <td class="text-center sorting" tabindex="0">
                '.$item->ten_sanpham.'
            </td>
            <td class="text-center sorting">
                '.$item->soluong.'
            </td>
            <td class="text-center sorting">
                '.$item->gia.'
            </td>
            <td class="text-center sorting">
                '.$item->ngaytao.'
            </td>
            <td class="text-center sorting">
                '.$item->ten_trangthai.'
            </td>
            <td class="td-actions text-center">
                <a href="?controller=sanpham&act=chitiet_sanpham&id='.$item->id_sanpham.'" >	
                    <i class="material-icons">edit</i>
                <div class="ripple-container"></div></a>
            
                <a href="?controller=sanpham&act=delete_sanpham&id='.$item->id_sanpham.'" >
                    <i class="material-icons">close</i>
                <div class="ripple-container"></div></a>
            </td>
            </tr>
            ';
        }
    }
    function chitiet_sanpham()
    {
        
        $sr=new sanpham_model();
        $data=array('chitietsanpham'=>$sr->chitiet_sanpham_model($_GET['id']),
                    'nhacungcap'=>$sr->load_danhsach_nhacungcap(),
                    'load_danhsach_trangthai'=>$sr->load_danhsach_trangthai(),
                    'load_danhsach_nhomsanpham'=>$sr->load_danhsach_nhomsanpham());
        $this->loadcss(domain.'view/layout/admin1/assets/css/mycss.css'."/n");
        $this->loadjs(domain.'view/layout/admin1/assets/js/myscript.js'."/n");
        $this->render('sanpham_detail',$data,'layout');
    }

    function update_sanpham()
    {
        $post=$_POST;
        $file=$_FILES;
        $id=$_GET['id'];
        //xem_arr($post);
        //Chuyen dinh dang tu dd/mm/yyyy -> yyyy-mm-dd
		$m=substr($post['ngaytao'],0,2);
		$d=substr($post['ngaytao'],3,2);
        $y=substr($post['ngaytao'],6,4);
        $h=substr($post['ngaytao'],11,2);
        $mm=substr($post['ngaytao'],14,2);
		
        echo  $post['ngaytao']="$y-$m-$d $h:$mm";
        
        $m=substr($post['ngaycapnhatcuoi'],0,2);
		$d=substr($post['ngaycapnhatcuoi'],3,2);
        $y=substr($post['ngaycapnhatcuoi'],6,4);
        $h=substr($post['ngaycapnhatcuoi'],11,2);
        $mm=substr($post['ngaycapnhatcuoi'],14,2);
		
		  echo $post['ngaycapnhatcuoi']="$y-$m-$d $h:$mm";
        // xem_arr($file['hinhdaidien']);
        foreach($file as $k=>$v)
        {
           
            //xem_arr($file[$k]);
            if($v['error']==0)
            {
                $fdpath =(isset($_GET['fd']) && $_GET['fd']) ? $_GET['fd'] : 'file' ;
                $sr = new FileManager($file[$k], $fdpath,20,$k);
                $post[$k]=$sr->myUpLoad();
                //xem_arr($post[$k]);
            }
                   
            if($file['danhsachchitiet']['error']['0']==0)
            {
                
                $fdpath =(isset($_GET['fd']) && $_GET['fd']) ? $_GET['fd'] : 'file' ;
                $sr = new FileManager($file['danhsachchitiet'],$fdpath,20,'danhsachchitiet');
                $post['danhsachchitiet']=$sr->myUpLoads();
               // xem_arr($file['danhsachchitiet']);
            }
            
        }
       
      
         
         
         $sr1=new sanpham_model();
         $sr1->update_sanpham_model($post['id_sanpham'],$post['ten_sanpham'],$post['alias'],$post['id_nhomsanpham'],$post['id_nhacungcap'],$post['dongia'],$post['soluong'],
         $post['ngaytao'],$post['id_trangthai'],$post['ngaycapnhatcuoi'],$post['hinhdaidien'],$post['mota'],$post['tukhoa'],$post['timkiem'],
         $post['hinhchiase'],$post['noidungchitiet'],$post['noidungtomtat'],$post['danhsachchitiet']);
        //  $link=controller=sanpham&act=chitiet_sanpham&id=$post['id_sanpham'];
        //  chuyentrang($link);
        //  header("location:http://localhost/laptopbaongoc_mvc/?controller=sanpham&act=chitiet_sanpham&id='.$post['id'].'");
        $this->chitiet_sanpham();
      
    }
    function delete_sanpham()
    {
        $id=$_GET['id'];
        $sr=new sanpham_model();
        $sr->delete_sanpham_model();
        $this->danhsach_sanpham();
        
    }
    function add_sanpham_view()
    {
        $sr=new sanpham_model();
        $this->render('sanpham_add',$data=array('nhacungcap'=>$sr->load_danhsach_nhacungcap(),
                                                'load_danhsach_trangthai'=>$sr->load_danhsach_trangthai(),
                                                'load_danhsach_nhomsanpham'=>$sr->load_danhsach_nhomsanpham()),'layout');
    }
    function add_sanpham()
    {

        //  xem_arr($_FILES);
       
        $post=$_POST;
        $file=$_FILES;
        
        //Chuyen dinh dang tu dd/mm/yyyy -> yyyy-mm-dd
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
         //xem_arr($file['hinhdaidien']);
        foreach($file as $k=>$v)
        {
            
            //xem_arr($file[$k]);
            if($v['error']==0)
            {
                $fdpath =(isset($_GET['fd']) && $_GET['fd']) ? $_GET['fd'] : 'file' ;
                $sr = new FileManager($file[$k], $fdpath,20,$k);
                $post[$k]=$sr->myUpLoad();
               // xem_arr($post[$k]);
            }
            
    
        
            if($file['danhsachchitiet']['error']['0']==0)
            {
                
                $fdpath =(isset($_GET['fd']) && $_GET['fd']) ? $_GET['fd'] : 'file' ;
                $sr = new FileManager($file['danhsachchitiet'],$fdpath,20,'danhsachchitiet');
                $post['danhsachchitiet']=$sr->myUpLoads();
                //xem_arr($post['danhsachchitiet']);
            }
            
        }
        
        xem_arr($post);
        $sr=new sanpham_model();
        $test=$sr->add_sanpham_model(Null,$post['ten_sanpham'],$post['alias'],
        $post['id_nhomsanpham'],$post['id_nhacungcap'],$post['dongia'],
        $post['soluong'],$post['ngaytao'],$post['id_trangthai'],
        $post['ngaycapnhatcuoi'],$post['hinhdaidien'],$post['mota'],
        $post['tukhoa'],$post['timkiem'],$post['hinhchiase'],
        $post['noidungchitiet'],$post['noidungtomtat'],$post['danhsachchitiet']);
        if($test==true)
        {
            $this->danhsach_sanpham();
        }else
        {
            echo"That bại ";
        }
       
    }
    

}
?>