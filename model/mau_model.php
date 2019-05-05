<?php
class mau_model extends model
{
    // SELECT table_mau.* ,table_trangthai.ten_trangthai FROM table_trangthai,table_mau WHERE table_trangthai.id_trangthai=table_mau.trangthai

    // SELECT table_mau.* ,table_trangthai.ten_trangthai FROM table_trangthai,table_mau WHERE table_trangthai.id_trangthai=table_mau.trangthai and table_mau.id_mau=3

    // UPDATE table_mau SET
    // `ten_mau`='Bạc',
    // `ghichu`='222222',
    // `ngaytao`='2018-06-21 00:00:00',
    // `trangthai`=1,
    // `ngaycapnhatcuoi`='2018-06-20 00:00:00'
    // WHERE `id_mau`=3

    // INSERT INTO table_mau(`id_mau`,`ten_mau`,`ghichu`,`ngaytao`,`trangthai`,`ngaycapnhatcuoi`) VALUES (Null,'Bạc','ghi chu aaaaa','2018-06-21 00:00:00',1,'2018-06-20 00:00:00')

    function danhsach_mau_model()
    {
        $this->setquery(" SELECT table_mau.* , table_trangthai.ten_trangthai 
        FROM table_mau, table_trangthai 
        WHERE table_trangthai.id_trangthai=table_mau.trangthai");
        return $this->loadallrow();
    }
    function chitiet_mau_id_model($id)
    {
        $this->setquery(" SELECT table_mau.* , table_trangthai.ten_trangthai 
        FROM table_mau, table_trangthai 
        WHERE table_trangthai.id_trangthai=table_mau.trangthai and id_mau=?");
        return $this->loadrow(array($id));

    }
    function update_mau_model($ten_mau,$ghichu,$ngaytao,$trangthai,$ngaycapnhatcuoi,$id_mau)
    {
        $this->setquery("UPDATE table_mau SET
        `ten_mau`=?,
        `ghichu`=?,
        `ngaytao`=?,
        `trangthai`=?,
        `ngaycapnhatcuoi`=?
        WHERE `id_mau`=?");
        return $this->execute(array($ten_mau,$ghichu,$ngaytao,$trangthai,$ngaycapnhatcuoi,$id_mau));
    }
    function add_mau_model($id_mau,$ten_mau,$ghichu,$ngaytao,$trangthai,$ngaycapnhatcuoi)
    {
        $this->setquery("INSERT INTO table_mau(`id_mau`,`ten_mau`,`ghichu`,`ngaytao`,`trangthai`,`ngaycapnhatcuoi`)
        VALUES (?,?,?,?,?,?)");
        return $this->execute(array($id_mau,$ten_mau,$ghichu,$ngaytao,$trangthai,$ngaycapnhatcuoi));
    }
    function dell_mau_model($id)
    {
        $this->setquery("DELETE FROM table_mau WHERE `id_mau`=? ");
        return $this->execute(array($id));
    }

       

}
?>


