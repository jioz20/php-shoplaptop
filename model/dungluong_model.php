<?php
class dungluong_model extends model
{
    // SELECT table_dungluong.*,table_trangthai.ten_trangthai FROM table_dungluong,table_trangthai WHERE table_dungluong.trangthai=table_trangthai.id_trangthai

    // SELECT table_dungluong.*,table_trangthai.ten_trangthai FROM table_dungluong,table_trangthai WHERE table_dungluong.trangthai=table_trangthai.id_trangthai and table_dungluong.id_dungluong=3

    // UPDATE table_dungluong SET
    // `dungluong`='4GB',
    // `ghichu`='AFADFASDFASDasdasdasdasdasdaasdF',
    // `ngaytao`='2018-06-20 00:00:00',
    // `trangthai`=1,
    // `ngaycapnhatcuoi`='2018-06-21 00:00:00'
    // WHERE `id_dungluong`=3

    // INSERT INTO table_dungluong(`id_dungluong`,`dungluong`,`ghichu`,`ngaytao`,`trangthai`,`ngaycapnhatcuoi`) VALUES (Null,'test 1','sadasasd','2018-06-20 00:00:00',1,'2018-06-21 00:00:00')

    // DELETE FROM table_dungluong WHERE id_dungluong=34
    function danhsach_dungluong_model()
    {
        $this->setquery(" SELECT table_dungluong.* , table_trangthai.ten_trangthai 
        FROM table_dungluong, table_trangthai 
        WHERE table_trangthai.id_trangthai=table_dungluong.trangthai");
        return $this->loadallrow();
    }

    function chitiet_dungluong_id_model($id)
    {
        $this->setquery("SELECT table_dungluong.* , table_trangthai.ten_trangthai 
        FROM table_dungluong, table_trangthai 
        WHERE table_trangthai.id_trangthai=table_dungluong.trangthai and id_dungluong=?	");
        return $this->loadrow(array($id));

    }
    function update_dungluong_model($dungluong,$ghichu,$ngaytao,$trangthai,$ngaycapnhatcuoi,$id_dungluong)
    {
        $this->setquery("UPDATE table_dungluong SET
        `dungluong`=?,
        `ghichu`=?,
        `ngaytao`=?,
        `trangthai`=?,
        `ngaycapnhatcuoi`=?
        WHERE `id_dungluong`=?");
        return $this->execute(array($dungluong,$ghichu,$ngaytao,$trangthai,$ngaycapnhatcuoi,$id_dungluong));
    }
    function add_dungluong_model($id_dungluong,$dungluong,$ghichu,$ngaytao,$trangthai,$ngaycapnhatcuoi)
    {
        $this->setquery("INSERT INTO table_dungluong(`id_dungluong`,`dungluong`,`ghichu`,`ngaytao`,`trangthai`,`ngaycapnhatcuoi`) 
        VALUES (?,?,?,?,?,?)");
        return $this->execute(array($id_dungluong,$dungluong,$ghichu,$ngaytao,$trangthai,$ngaycapnhatcuoi));
     
    }
    function dell_dungluong_model($id)
    {
        $this->setquery("DELETE FROM table_dungluong WHERE id_dungluong=?");
        return $this->execute(array($id));
    }

}
?>


