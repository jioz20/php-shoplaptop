<?php 
class loaikhachhang_model extends model
{
    // SELECT table_loaikhachhang.* ,table_trangthai.ten_trangthai FROM table_loaikhachhang,table_trangthai WHERE table_trangthai.id_trangthai=table_loaikhachhang.trangthai 

    // SELECT table_loaikhachhang.* ,table_trangthai.ten_trangthai FROM table_loaikhachhang,table_trangthai WHERE table_trangthai.id_trangthai=table_loaikhachhang.trangthai  and 	table_loaikhachhang.id_loaikhachhang=1

    // UPDATE table_loaikhachhang SET
    // `ten_loaikhachhang`='khách lẽ ',
    // `ghichu`='khách lẽ test ',
    // `ngaytao`='2018-05-23 13:36:57',
    // `trangthai`=1,
    // `ngaycapnhatcuoi`='2018-05-23 13:37:09'
    // WHERE `id_loaikhachhang`=1

    // INSERT INTO table_loaikhachhang(`id_loaikhachhang`,`ten_loaikhachhang`,`ghichu`,`ngaytao`,`trangthai`,`ngaycapnhatcuoi`) VALUES (NULL,'khách lẽ test 1 ','khách lẽ test ','2018-05-23 13:36:57',1,'2018-05-23 13:37:09')

    // DELETE FROM table_loaikhachhang WHERE id_loaikhachhang=7
    function danhsach_loaikhachhang_model()
    {
        $this->setquery("SELECT table_loaikhachhang.* , table_trangthai.ten_trangthai
        FROM table_loaikhachhang , table_trangthai
        WHERE table_loaikhachhang.trangthai=table_trangthai.id_trangthai");
        return $this->loadallrow();
    }
    function chitiet_loaikhachhang_id_model($id)
    {
        $this->setquery("SELECT table_loaikhachhang.* , table_trangthai.ten_trangthai
        FROM table_loaikhachhang , table_trangthai
        WHERE table_loaikhachhang.trangthai=table_trangthai.id_trangthai and id_loaikhachhang=?");
        return $this->loadrow(array($id));

    }
    function update_loaikhachhang_id_model($ten_loaikhachhang,$ghichu,$ngaytao,$trangthai,$ngaycapnhatcuoi,$id_loaikhachhang)
    {
        $sql="UPDATE table_loaikhachhang SET
        `ten_loaikhachhang`=?,
        `ghichu`=?,
        `ngaytao`=?,
        `trangthai`=?,
        `ngaycapnhatcuoi`=?
        WHERE `id_loaikhachhang`=?";
        $this->setquery($sql);
        return $this->execute(array($ten_loaikhachhang,$ghichu,$ngaytao,$trangthai,$ngaycapnhatcuoi,$id_loaikhachhang));
    }
    function add_loaikhachhang_model($id_loaikhachhang,$ten_loaikhachhang,$ghichu,$ngaytao,$trangthai,$ngaycapnhatcuoi)
    {
        $this->setquery("INSERT INTO table_loaikhachhang(`id_loaikhachhang`,`ten_loaikhachhang`,`ghichu`,`ngaytao`,`trangthai`,`ngaycapnhatcuoi`) 
        VALUES (?,?,?,?,?,?)");
        return $this->execute(array($id_loaikhachhang,$ten_loaikhachhang,$ghichu,$ngaytao,$trangthai,$ngaycapnhatcuoi));
    }
    function dell_loaikhachhang_model($id)
    {
        $this->setquery("DELETE FROM table_loaikhachhang WHERE id_loaikhachhang=?");
        return $this->execute(array($id));
    }


}

?>






