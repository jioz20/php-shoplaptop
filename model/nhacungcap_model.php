<?php 
class nhacungcap_model extends model
{
    // SELECT table_nhacungcap.* , table_trangthai.ten_trangthai FROM table_trangthai,table_nhacungcap WHERE table_nhacungcap.trangthai=table_trangthai.id_trangthai

    // SELECT table_nhacungcap.* , table_trangthai.ten_trangthai FROM table_trangthai,table_nhacungcap WHERE table_nhacungcap.trangthai=table_trangthai.id_trangthai and table_nhacungcap.id_nhacungcap=3


    // UPDATE table_nhacungcap SET
    // `ten_nhacungcap`='Phillip',
    // `ghichu`='sds',
    // `ngaytao`='2018-05-22 10:18:00',
    // `trangthai`=1,
    // `ngaycapnhatcuoi`='2018-05-22 10:18:04'
    // WHERE `id_nhacungcap`=3

    // INSERT INTO table_nhacungcap(`id_nhacungcap`,`ten_nhacungcap`,`ghichu`,`ngaytao`,`trangthai`,`ngaycapnhatcuoi`)VALUES (NULL,'Phillip','sdasdasddssad','2018-05-22 10:18:00',1,'2018-05-22 10:18:04')

    // DELETE FROM table_nhacungcap WHERE id_nhacungcap=40


    // SELECT table_nhacungcap.* ,table_trangthai.ten_trangthai FROM table_nhacungcap,table_trangthai WHERE table_trangthai.id_trangthai=table_nhacungcap.trangthai 

    // SELECT table_nhacungcap.* ,table_trangthai.ten_trangthai FROM table_nhacungcap,table_trangthai WHERE table_trangthai.id_trangthai=table_nhacungcap.trangthai and id_nhacungcap=3

    // UPDATE table_nhacungcap SET
    // `ten_nhacungcap`='Phillip',
    // `ghichu`='sadsasdasdds',
    // `ngaytao`='2018-05-22 10:18:00',
    // `trangthai`=1,
    // `ngaycapnhatcuoi`='2018-05-22 10:18:04'
    // WHERE `id_nhacungcap`=3

    // INSERT INTO table_nhacungcap(`id_nhacungcap`,`ten_nhacungcap`,`ghichu`,`ngaytao`,`trangthai`,`ngaycapnhatcuoi`) VALUES (Null,'Phillip  test ','sadsasdasdds','2018-05-22 10:18:00',1,'2018-05-22 10:18:04')

    // DELETE FROM table_nhacungcap WHERE `id_nhacungcap`=49
    function danhsach_nhacungcap_model()
    {
        $this->setquery("SELECT table_nhacungcap.*,table_trangthai.ten_trangthai 
        FROM table_nhacungcap,table_trangthai 
        WHERE table_nhacungcap.trangthai=table_trangthai.id_trangthai");
        return $this->loadallrow();
    }
    function chitiet_nhacungcap_model($id)
    {
        
        $this->setquery("SELECT table_nhacungcap.*,table_trangthai.ten_trangthai 
        FROM table_nhacungcap,table_trangthai 
        WHERE table_trangthai.id_trangthai=table_nhacungcap.trangthai and id_nhacungcap=?");
        return $this->loadrow(array($id));
    }
    function update_nhacungcap_model($ten_nhacungcap,$ghichu,$ngaytao,$trangthai,$ngaycapnhatcuoi,$id_nhacungcap)
    {
        $this->setquery("UPDATE table_nhacungcap SET
        `ten_nhacungcap`=?,
        `ghichu`=?,
        `ngaytao`=?,
        `trangthai`=?,
        `ngaycapnhatcuoi`=?
        WHERE `id_nhacungcap`=?");
        return $this->execute(array($ten_nhacungcap,$ghichu,$ngaytao,$trangthai,$ngaycapnhatcuoi,$id_nhacungcap));
    }
    function add_nhacungcap_model($id_nhacungcap,$ten_nhacungcap,$ghichu,$ngaytao,$trangthai,$ngaycapnhatcuoi)
    {
        $this->setquery("INSERT INTO table_nhacungcap(`id_nhacungcap`,`ten_nhacungcap`,`ghichu`,`ngaytao`,`trangthai`,`ngaycapnhatcuoi`) 
        VALUES (?,?,?,?,?,?)");
        return $this->execute(array($id_nhacungcap,$ten_nhacungcap,$ghichu,$ngaytao,$trangthai,$ngaycapnhatcuoi));
    }
    function dell_nhacungcap_model($id)
    {
        $this->setquery("DELETE FROM table_nhacungcap WHERE `id_nhacungcap`=?");
        return $this->execute(array($id));
    }



}


?>