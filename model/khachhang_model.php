<?php 
class khachhang_model extends model
{
    // -- table_khachhang

    // SELECT table_khachhang.*,table_trangthai.ten_trangthai FROM table_khachhang,table_trangthai WHERE table_khachhang.trangthai=table_trangthai.id_trangthai


    // SELECT table_khachhang.*,table_trangthai.ten_trangthai FROM table_khachhang,table_trangthai WHERE table_khachhang.trangthai=table_trangthai.id_trangthai and table_khachhang.id_khachhang=3

    // UPDATE table_khachhang SET 
    // `id_loaikhachhang`=3,
    // `ten_khachhang`='tran minh cccc',
    // `email`='dsfsaasdasdadfdf',
    // `sodienthoai`='4324342',
    // `diachigiaohang`='erqweadasdasdrwqer',
    // `ngaytao`='2018-08-22 09:25:15',
    // `trangthai`=1,
    // `ngaycapnhatcuoi`='2018-05-22 09:25:18'
    // WHERE `id_khachhang`=3


    // INSERT INTO table_khachhang(`id_khachhang`,`id_loaikhachhang`,`ten_khachhang`,`email`,`sodienthoai`,`diachigiaohang`,`ngaytao`,`trangthai`,`ngaycapnhatcuoi`) VALUES(Null,3,'adasdasdad','asdasda','2232312312','sadasdasdasdada','2018-08-22 09:25:15',1,'2018-05-22 09:25:18')

    // DELETE FROM table_khachhang WHERE id_khachhang=23

    function danhsach_khachhang_model()
    {
        $this->setquery("SELECT table_khachhang.*,table_trangthai.ten_trangthai 
        FROM table_khachhang,table_trangthai 
        WHERE table_khachhang.trangthai=table_trangthai.id_trangthai");
        return $this->loadallrow();
    }
    function chitiet_khachhang_model($id)
    {
        $this->setquery("SELECT table_khachhang.*,table_trangthai.ten_trangthai 
        FROM table_khachhang,table_trangthai 
        WHERE table_trangthai.id_trangthai=table_khachhang.trangthai and id_khachhang=?");
        return $this->loadrow(array($id));
    }
    function update_khachhang_model($id_loaikhachhang,$ten_khachhang,$email,$sodienthoai,$diachigiaohang,$ngaytao,$trangthai,$ngaycapnhatcuoi,$id_khachhang)
    {
        $this->setquery(" UPDATE table_khachhang SET 
        `id_loaikhachhang`=?,
        `ten_khachhang`=?,
        `email`=?,
        `sodienthoai`=?,
        `diachigiaohang`=?,
        `ngaytao`=?,
        `trangthai`=?,
        `ngaycapnhatcuoi`=?
        WHERE `id_khachhang`=?");
        return $this->execute(array($id_loaikhachhang,$ten_khachhang,$email,$sodienthoai,$diachigiaohang,$ngaytao,$trangthai,$ngaycapnhatcuoi,$id_khachhang));
    }
    function add_khachhang_model($id_loaikhachhang,$ten_khachhang,$email,$sodienthoai,$diachigiaohang,$ngaytao,$trangthai,$ngaycapnhatcuoi,$id_khachhang)
    {
        $this->setquery("INSERT INTO table_khachhang(`id_khachhang`,`id_loaikhachhang`,`ten_khachhang`,`email`,`sodienthoai`,`diachigiaohang`,`ngaytao`,`trangthai`,`ngaycapnhatcuoi`)
        VALUES(?,?,?,?,?,?,?,?,?)");
        return $this->execute(array($id_khachhang,$id_loaikhachhang,$ten_khachhang,$email,$sodienthoai,$diachigiaohang,$ngaytao,$trangthai,$ngaycapnhatcuoi));
     
    }
    function dell_khachhang_model($id)
    {
        $this->setquery("DELETE FROM table_khachhang WHERE id_khachhang=?");
        return $this->execute(array($id));
    }



}


?>