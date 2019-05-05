<?php
class hoadon_model extends model
{
    function danhsach_hoadon_model()
    {
        $this->setquery("SELECT table_hoadon.* , table_trangthai.ten_trangthai, table_khachhang.ten_khachhang , table_quantri.ten_quantri
        FROM table_hoadon, table_trangthai, table_khachhang, table_quantri
        WHERE table_trangthai.id_trangthai=table_hoadon.trangthai	 
        and table_khachhang.id_khachhang= table_hoadon.id_makhachhang
		and table_hoadon.id_manhanvien=table_quantri.id_quantri");
        return $this->loadallrow();
    }
    function chitiet_hoadon_id_model($id)
    {
        $this->setquery("SELECT table_hoadon.* , table_trangthai.ten_trangthai, table_khachhang.ten_khachhang , table_quantri.ten_quantri
        FROM table_hoadon, table_trangthai, table_khachhang, table_quantri
        WHERE table_trangthai.id_trangthai=table_hoadon.trangthai	 
        and table_khachhang.id_khachhang= table_hoadon.id_makhachhang
		and table_hoadon.id_manhanvien=table_quantri.id_quantri and id_hoadon=?");
        return $this->loadrow(array($id));

    }
       

}
?>
 

