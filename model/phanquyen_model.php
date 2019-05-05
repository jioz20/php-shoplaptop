<?php 
class phanquyen_model extends model
{
    // SELECT table_phanquyen.* ,table_trangthai.ten_trangthai,table_chucnang.ten_chucnang FROM table_phanquyen,table_trangthai,table_chucnang WHERE table_trangthai.id_trangthai=table_phanquyen.trangthai and table_phanquyen.id_chucnang=table_chucnang.id_chucnang

    // SELECT table_phanquyen.* ,table_trangthai.ten_trangthai,table_chucnang.ten_chucnang FROM table_phanquyen,table_trangthai,table_chucnang WHERE table_trangthai.id_trangthai=table_phanquyen.trangthai and table_phanquyen.id_chucnang=table_chucnang.id_chucnang and table_phanquyen.id_nguoidung=1


    // UPDATE table_phanquyen SET
    // `ngaytao`='2018-05-20 00:00:00',
    // `trangthai`=2,
    // `capnhatcuoicung`='2018-05-20 00:00:00'
    // WHERE `id_chucnang`=2 and`id_nguoidung`=1

    // INSERT INTO table_phanquyen(`id_chucnang`,`id_nguoidung`,`ngaytao`,`trangthai`,`capnhatcuoicung`) VALUES (12,1,'2018-05-20 00:00:00',1,'2018-05-20 00:00:00')

    // DELETE FROM table_phanquyen WHERE id_chucnang=12 and id_nguoidung=1
    function danhsach_phanquyen_model()
    {
        $this->setquery("SELECT table_phanquyen.* ,table_trangthai.ten_trangthai,table_chucnang.ten_chucnang ,table_quantri.ten_quantri
        FROM table_phanquyen,table_trangthai,table_chucnang,table_quantri
        WHERE table_trangthai.id_trangthai=table_phanquyen.trangthai and table_phanquyen.id_chucnang=table_chucnang.id_chucnang  and table_phanquyen.id_nguoidung=table_quantri.id_quantri
        ORDER BY table_quantri.ten_quantri");
        return $this->loadallrow();
    }
    function chitiet_phanquyen_id_model($id)
    {
        $this->setquery("SELECT table_phanquyen.* ,table_trangthai.ten_trangthai,table_chucnang.ten_chucnang ,table_quantri.ten_quantri
        FROM table_phanquyen,table_trangthai,table_chucnang,table_quantri
        WHERE table_trangthai.id_trangthai=table_phanquyen.trangthai and table_phanquyen.id_chucnang=table_chucnang.id_chucnang  and table_phanquyen.id_nguoidung=table_quantri.id_quantri
        and table_quantri.id_quantri=? ORDER BY table_quantri.ten_quantri");
        return $this->loadrow(array($id));

    }
    function update_phanquyen_model($ngaytao,$trangthai,$capnhatcuoicung,$id_chucnang,$id_nguoidung)
    {
        $this->setquery("UPDATE table_phanquyen SET
        `ngaytao`=?,
        `trangthai`=?,
        `capnhatcuoicung`=?
        WHERE `id_chucnang`=? and`id_nguoidung`=?");
        return $this->execute(array($ngaytao,$trangthai,$capnhatcuoicung,$id_chucnang,$id_nguoidung));
    }
    function add_phanquyen_model($id_chucnang,$id_nguoidung,$ngaytao,$trangthai,$capnhatcuoicung)
    {
        $this->setquery("INSERT INTO table_phanquyen(`id_chucnang`,`id_nguoidung`,`ngaytao`,`trangthai`,`capnhatcuoicung`) 
        VALUES (12,1,'2018-05-20 00:00:00',1,'2018-05-20 00:00:00')");
        return $this->execute(array($id_chucnang,$id_nguoidung,$ngaytao,$trangthai,$capnhatcuoicung));
    }
    function dell_phanquyen_model($id_chucnang,$id_nguoidung)
    {
        $this->setquery("DELETE FROM table_phanquyen WHERE `id_chucnang`=? and `id_nguoidung`=?");
        return $this->execute(array($id_chucnang,$id_nguoidung));
    }

}

?>





