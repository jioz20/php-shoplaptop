<?php 
class trangthai_model extends model
{
    
    // SELECT table_trangthai.* FROM table_trangthai WHERE 1

    // SELECT table_trangthai.* FROM table_trangthai WHERE id_trangthai=12

    // UPDATE table_trangthai SET 
    // `ten_trangthai`='Huỷ Đơn Hàng',
    // `ghichu`=' Huỷ Đơn Hàng không lấy ',
    // `ngaytao`='2018-05-22 13:17:01',
    // `trangthai`=1,
    // `ngaycapnhatcuoi`='2018-05-22 13:17:22'
    // WHERE `id_trangthai`=12

    // INSERT INTO table_trangthai(`id_trangthai`,`ten_trangthai`,`ghichu`,`ngaytao`,`trangthai`,`ngaycapnhatcuoi`) VALUES (NULL,'Huỷ Đơn Hàng test ',' Huỷ Đơn Hàng không lấy ','2018-05-22 13:17:01',1,'2018-05-22 13:17:22')

    // DELETE FROM table_trangthai WHERE id_trangthai=17
    function danhsach_trangthai_model()
    {
        $this->setquery("SELECT * 
        FROM table_trangthai
        WHERE 1");
        return $this->loadallrow();
    }
    function chitiet_trangthai_id_model($id)
    {
        $this->setquery("SELECT table_trangthai.* FROM table_trangthai WHERE id_trangthai=?");
        return $this->loadrow(array($id));

    }
    function update_trangthai_id_model($id_trangthai,$ten_trangthai,$ghichu,$ngaytao,$ngaycapnhatcuoi)
    {
        $this->setquery("UPDATE table_trangthai SET 
        `ten_trangthai`=?,
        `ghichu`=?,
        `ngaytao`=?,
        `ngaycapnhatcuoi`=?
        WHERE `id_trangthai`=?");
        return $this->execute(array($ten_trangthai,$ghichu,$ngaytao,$ngaycapnhatcuoi,$id_trangthai));

    }
    function add_trangthai_id_model($id_trangthai,$ten_trangthai,$ghichu,$ngaytao,$ngaycapnhatcuoi)
    {
        $this->setquery("INSERT INTO table_trangthai(`id_trangthai`,`ten_trangthai`,`ghichu`,`ngaytao`,`ngaycapnhatcuoi`) 
        VALUES (?,?,?,?,?)");
        return $this->execute(array($id_trangthai,$ten_trangthai,$ghichu,$ngaytao,$ngaycapnhatcuoi));

    }
    function dell_trangthai_id_model($id)
    {
        $this->setquery("DELETE FROM table_trangthai WHERE id_trangthai=?");
        return $this->execute(array($id));
    }

}

?>




