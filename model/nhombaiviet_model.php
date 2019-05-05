<?php 
class nhombaiviet_model extends model
{
    // SELECT table_nhombaiviet.* ,table_trangthai.ten_trangthai FROM table_nhombaiviet,table_trangthai WHERE table_trangthai.id_trangthai=table_nhombaiviet.trangthai 

    // SELECT table_nhombaiviet.* ,table_trangthai.ten_trangthai FROM table_nhombaiviet,table_trangthai WHERE table_trangthai.id_trangthai=table_nhombaiviet.trangthai and id_nhombaiviet=9

    // update table_nhombaiviet SET
    // `ten_nhombaiviet`='Thiết bị mạng',
    // `noidung`='Quảng Cáo',
    // `ghichu`='asdsasasasasada',
    // `ngaytao`='2018-05-20 00:00:00',
    // `trangthai`=1,
    // `capnhatcuoicung`='2018-05-20 00:00:00'
    // WHERE `id_nhombaiviet`=9

    // INSERT INTO table_nhombaiviet(`id_nhombaiviet`,`ten_nhombaiviet`,`noidung`,`ghichu`,`ngaytao`,`trangthai`,`capnhatcuoicung`) VALUES (NULL,'Thiết bị mạng test ','Quảng Cáo','asdsasasasasada','2018-05-20 00:00:00',1,'2018-05-20 00:00:00')

    // DELETE FROM table_nhombaiviet WHERE id_nhombaiviet=14

    function danhsach_nhombaiviet_model()
    {
        $this->setquery("SELECT table_nhombaiviet.* , table_trangthai.ten_trangthai 
        FROM table_nhombaiviet,table_trangthai 
        WHERE table_nhombaiviet.trangthai=table_trangthai.id_trangthai
        ");
        return $this->loadallrow();
    }
    function chitiet_nhombaiviet_id_model($id)
    {
        $this->setquery("SELECT table_nhombaiviet.* , table_trangthai.ten_trangthai 
        FROM table_nhombaiviet,table_trangthai 
        WHERE table_nhombaiviet.trangthai=table_trangthai.id_trangthai and id_nhombaiviet=?");
        return $this->loadrow(array($id));

    }
    function update_nhombaiviet_id_model($ten_nhombaiviet,$noidung,$ghichu,$ngaytao,$trangthai,$capnhatcuoicung,$id_nhombaiviet)
    {
        $sql=" update table_nhombaiviet SET
        `ten_nhombaiviet`=?,
        `noidung`=?,
        `ghichu`=?,
        `ngaytao`=?,
        `trangthai`=?,
        `capnhatcuoicung`=?
        WHERE `id_nhombaiviet`=?";
        $this->setquery($sql);
        return $this->execute(array($ten_nhombaiviet,$noidung,$ghichu,$ngaytao,$trangthai,$capnhatcuoicung,$id_nhombaiviet));
    }
    function add_nhombaiviet_model($id_nhombaiviet,$ten_nhombaiviet,$noidung,$ghichu,$ngaytao,$trangthai,$capnhatcuoicung)
    {
        $this->setquery("INSERT INTO table_nhombaiviet(`id_nhombaiviet`,`ten_nhombaiviet`,`noidung`,`ghichu`,`ngaytao`,`trangthai`,`capnhatcuoicung`) 
        VALUES (?,?,?,?,?,?,?)");
        return $this->execute(array($id_nhombaiviet,$ten_nhombaiviet,$noidung,$ghichu,$ngaytao,$trangthai,$capnhatcuoicung));
    }
    function dell_nhombaiviet_model($id)
    {
        $this->setquery(" DELETE FROM table_nhombaiviet WHERE `id_nhombaiviet`=?");
        return $this->execute(array($id));
    }

}

?>