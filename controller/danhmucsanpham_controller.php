<?php 
class danhmucsanpham_controller extends controller
{
    function __construct()
    {
        $this->pathview = 'view/danhmuc/';
    }
    function danhsach_danhmuc()
    {
      
      
        $sr=new danhmucsanpham_model();
        $sr2=new nhomsanpham_model();
        $data=array('danhmuc'=>$sr->danhsach_danhmucsanpham_model(),
                    'danhsach_nhomsp'=>$sr2->danhsach_nhomsanpham_model());
        $this->render('danhmuc',$data,'layout');
    }
    function api_danhmuc_menu2()
    {
        $sr2=new nhomsanpham_model();
        $data=array('danhsach_nhomsp'=>$sr2->chitiet_nhomsanpham_id_model($_GET['iddm']));
        foreach($data['danhsach_nhomsp'] as $item)
        {
            echo 
            '<tr role="row" class="odd">
                <td class="text-center sorting" tabindex="0">'.$item->id_danhmucsanpham.'</td>
                <td class="text-center sorting" tabindex="0">'.$item->ten_danhmucsanpham.'</td>
                <td class="text-center sorting">'.$item->tukhoa.'</td>
                <td class="text-center sorting">'.$item->ngaytao.'</td>
                <td class="text-center sorting">'.$item->ngaycapnhatcuoi.'</td>
                <td class="text-center sorting">'.$item->ten_trangthai.'</td>
                <td class="td-actions text-center">
                    <a href="?controller=danhmucsanpham&act=chitiet_danhmuc&id='.$item->id_danhmucsanpham.'" class="btn btn-success btn-simple" >
                            <i class="material-icons">edit</i>
                    <div class="ripple-container"></div></a>
                    <a href="?controller=danhmucsanpham&act=chitiet_danhmuc&id='.$item->id_danhmucsanpham.'" class="btn btn-success btn-simple" >
                            <i class="material-icons">close</i>
                        <div class="ripple-container"></div></a>
                </td>
            </tr>';
        }

    }
    function chitiet_danhmuc()
    {
        
        $sr=new danhmucsanpham_model();
        $sr2=new controller();
        $data=array('chitietdanhmuc'=>$sr->chitiet_danhmucsanpham_id_model($_GET['id']),
                     'load_danhsach_trangthai'=>$sr->load_danhsach_trangthai());
        $this->render('danhmuc_detail',$data,'layout');
    }
    function update_danhmuc()
    {
        $post=$_POST;
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
        $sr1=new danhmucsanpham_model();
        $sr1->update_danhmuc_id_model($post['id_danhmucsanpham'],$post['ten_danhmucsanpham'],$post['alias'] ,
                                         $post['tukhoa'] ,$post['mota'],$post['ghichu'],
                                         $post['ngaytao'],$post['ngaycapnhatcuoi'],$post['id_trangthai']);
        header('location:?controller=danhmucsanpham&act=danhsach_danhmuc');
       
       
    }
    function add_danhmuc_view()
    {
        $sr=new danhmucsanpham_model();
        $data=array('load_danhsach_trangthai'=>$sr->load_danhsach_trangthai());
        $this->render('danhmuc_add',$data,'layout');

    }
    function add_danhmuc()
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
        $sr=new danhmucsanpham_model();
        $t=$sr->add_danhmuc_model(NuLL,$post['ten_danhmucsanpham'],$post['alias'],$post['tukhoa'],$post['mota'],
                                  $post['ghichu'],$post['ngaytao'],$post['id_trangthai'],$post['ngaycapnhatcuoi']);
        header('location:?controller=danhmucsanpham&act=danhsach_danhmuc');

    }
    function dell_danhmuc()
    {
        $sr=new danhmucsanpham_model();
        $t=$sr->dell_mau_model($_GET['id']);
        header('location:?controller=danhmucsanpham&act=danhsach_danhmuc');
    }
  
  





}
?>