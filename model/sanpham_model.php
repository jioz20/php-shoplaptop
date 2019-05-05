<?php 
class sanpham_model extends model
{
    function danhsach_sanpham_model()
    {
        $this->setquery("SELECT table_sanpham.*,table_trangthai.ten_trangthai 
        FROM table_sanpham,table_trangthai 
        WHERE table_trangthai.id_trangthai=table_sanpham.trangthai");
        return $this->loadallrow();
    }
    function danhsach_sanpham_nhomsanpham_model($id)
    {
        $this->setquery("SELECT table_sanpham.*,table_trangthai.ten_trangthai 
        FROM table_sanpham,table_trangthai 
        WHERE table_trangthai.id_trangthai=table_sanpham.trangthai AND id_nhomsanpham=?");
        return $this->loadallrow(array($id));
    }
  
    function danhsach_sanpham_danhmuc_model($id)
    {
        $this->setquery(" SELECT table_sanpham.*,table_trangthai.ten_trangthai 
        FROM table_sanpham,table_trangthai,table_danhmucsanpham ,table_nhomsanpham
        WHERE table_trangthai.id_trangthai=table_sanpham.trangthai 
        and table_sanpham.id_nhomsanpham=table_nhomsanpham.id_nhomsanpham 
        and table_nhomsanpham.id_danhmucsanpham=table_danhmucsanpham.id_danhmucsanpham 
        and table_danhmucsanpham.id_danhmucsanpham=?");
        return $this->loadallrow(array($id));
    }

    function danhsach_sanpham_danhmuc_nhomsanpham_model($id_danhmuc,$id_nhomsp)
    {
        $this->setquery("SELECT table_sanpham.*,table_trangthai.ten_trangthai 
        FROM table_sanpham,table_trangthai,table_danhmucsanpham ,table_nhomsanpham
        WHERE table_trangthai.id_trangthai=table_sanpham.trangthai 
        and table_sanpham.id_nhomsanpham=table_nhomsanpham.id_nhomsanpham 
        and table_nhomsanpham.id_danhmucsanpham=table_danhmucsanpham.id_danhmucsanpham 
        and table_danhmucsanpham.id_danhmucsanpham=?
        and table_sanpham.id_nhomsanpham=?");
        return $this->loadallrow(array($id_danhmuc,$id_nhomsp));
    }

    function danhsach_sanpham_nhacungcap_model($id)
    {
        $this->setquery("SELECT table_sanpham.*,table_trangthai.ten_trangthai 
        FROM table_sanpham,table_trangthai 
        WHERE table_trangthai.id_trangthai=table_sanpham.trangthai AND id_nhacungcap=?");
        return $this->loadallrow($id);
    }
   

    function total()
	{
		$sql = 'select count(id_sanpham) total from table_sanpham';
        $this->setquery($sql);
		return ceil($this->loadrow()->total/5);
	}
	function danhsach($vitri= 0 ,$soluong = 0)
	{
		$limit = '';
		if($soluong>0)
			$limit = " limit $vitri,$soluong ";
		$sql = 'select *  from tblsanpham '.$limit;
		$this->setquery($sql);
		return $this->loadallrow();
	}
    function danhsach_sanpham_limit_model($vitri,$sotintrentrang)
    {
        if($sotintrentrang>0)
        {
            echo $limit=" limit $vitri,$sotintrentrang";
        }
        // $this->setquery("SELECT table_sanpham.*,table_trangthai.ten_trangthai 
        // FROM table_sanpham,table_trangthai 
        // WHERE table_trangthai.id_trangthai=table_sanpham.trangthai  $limit ");
         $this->setquery("SELECT table_sanpham.*,table_trangthai.ten_trangthai 
         FROM table_sanpham,table_trangthai 
         WHERE table_trangthai.id_trangthai=table_sanpham.trangthai  $limit ");
         return $this->loadallrow();
        
    }
    function chitiet_sanpham_model($id)
    {
        $this->setquery("SELECT table_sanpham.*,table_trangthai.ten_trangthai 
        FROM table_sanpham,table_trangthai 
        WHERE table_trangthai.id_trangthai=table_sanpham.trangthai and id_sanpham=?");
        return $this->loadrow(array($id));
    }
    function update_sanpham_model($id_sanpham,$ten_sanpham,$alias,$id_nhomsanpham,$id_nhacungcap,$gia,$soluong,
    $ngaytao,$trangthai,$ngaycapnhatcuoi,$hinhdaidiensanpham,$mota,$tukhoa,$timkiem,
    $hinhchiase,$noidungchitiet,$noidungtomtat,$danhsachchitiet)
    {
        $sql="UPDATE `table_sanpham` 
        SET 
        `ten_sanpham`='$ten_sanpham',
        `alias`='$alias',
        `id_nhomsanpham`='$id_nhomsanpham',
        `id_nhacungcap`='$id_nhacungcap',
        `gia`=$gia,
        `soluong`=$soluong,
        `ngaytao`='$ngaytao',
        `trangthai`=$trangthai,
        `ngaycapnhatcuoi`='$ngaycapnhatcuoi',
        `hinhdaidiensanpham`='$hinhdaidiensanpham',
        `danhsachchitiet`='$danhsachchitiet',
        `mota`='$mota',
        `tukhoa`='$tukhoa',
        `timkiem`='$timkiem',
        `hinhchiase`='$hinhchiase',
        `noidungchitiet`='$noidungchitiet',
        `noidungtomtat`='$noidungtomtat' 
        WHERE `id_sanpham`=$id_sanpham";
        $this->setquery($sql);
        // echo $sql;
        return $this->execute(array($ten_sanpham,$alias,$id_nhomsanpham,$id_nhacungcap,$gia,$soluong,
        $ngaytao,$trangthai,$ngaycapnhatcuoi,$hinhdaidiensanpham,$mota,$tukhoa,$timkiem,
        $hinhchiase,$noidungchitiet,$noidungtomtat,$danhsachchitiet,$id_sanpham));
    }

    function delete_sanpham_model()
    {
        $id=$_GET['id'];
        $sql='DELETE FROM table_sanpham WHERE id_sanpham=?';
        $this->setquery($sql);
        return $this->execute(array($id));

    }

    function add_sanpham_model($id_sanpham,$ten_sanpham,$alias,
    $id_nhomsanpham,$id_nhacungcap,$gia,
    $soluong,$ngaytao,$trangthai,
    $ngaycapnhatcuoi,$hinhdaidiensanpham,$mota,
    $tukhoa,$timkiem,$hinhchiase,
    $noidungchitiet,$noidungtomtat,$danhsachchitiet)
    {
        $sql="INSERT INTO `table_sanpham`(`id_sanpham`, `ten_sanpham`, `alias`,
         `id_nhomsanpham`, `id_nhacungcap`, `gia`, 
        `soluong`, `ngaytao`, `trangthai`, 
        `ngaycapnhatcuoi`, `hinhdaidiensanpham`, `danhsachchitiet`, 
        `mota`, `tukhoa`, `timkiem`, 
        `hinhchiase`, `noidungchitiet`, `noidungtomtat`) 
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $this->setquery($sql);
       
        return $this->execute(array(Null,$ten_sanpham,$alias,
        $id_nhomsanpham,$id_nhacungcap,$gia,
        $soluong,$ngaytao,$trangthai,
        $ngaycapnhatcuoi,$hinhdaidiensanpham,$danhsachchitiet,
        $mota,$tukhoa,$timkiem,
        $hinhchiase,$noidungchitiet,$noidungtomtat));
        


    }


   
}
?>