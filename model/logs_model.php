<?php
class logs_model extends model
{
    
    // SELECT table_logs.* ,table_trangthai.ten_trangthai FROM table_logs,table_trangthai WHERE table_trangthai.id_trangthai=table_logs.trangthai 

    // SELECT table_logs.* ,table_trangthai.ten_trangthai FROM table_logs,table_trangthai WHERE table_trangthai.id_trangthai=table_logs.trangthai and table_logs.id_logs=2

    // UPDATE table_logs SET
    // `noidung`='Lenovo',
    // `ngaytao`='2018-05-20 00:00:00',
    // `trangthai`=1,
    // `ngaycapnhatcuoi`='2018-05-20 00:00:00'
    // WHERE `id_logs`=2

    // INSERT INTO table_logs(`id_logs`,`noidung`,`ngaytao`,`trangthai`,`ngaycapnhatcuoi`)VALUES(NULL,'xoa bang test 1','2018-05-20 00:00:00',1,'2018-05-20 00:00:00')

    // DELETE FROM table_logs WHERE table_logs.id_logs=10
    function danhsach_logs_model()
    {
        $this->setquery(" SELECT table_logs.* , table_trangthai.ten_trangthai 
        FROM table_logs, table_trangthai 
        WHERE table_trangthai.id_trangthai=table_logs.trangthai");
        return $this->loadallrow();
    }
    function chitiet_logs_model($id)
    {
        $this->setquery(" SELECT table_logs.* , table_trangthai.ten_trangthai 
        FROM table_logs, table_trangthai 
        WHERE table_trangthai.id_trangthai=table_logs.trangthai and id_logs=?");
        return $this->loadrow(array($id));
    }
    function update_logs_id_model($noidung,$ngaytao,$trangthai,$ngaycapnhatcuoi,$id_logs)
    {
        $sql="UPDATE table_logs SET
        `noidung`=?,
        `ngaytao`=?,
        `trangthai`=?,
        `ngaycapnhatcuoi`=?
        WHERE `id_logs`=?";
        $this->setquery($sql);
        return $this->execute(array($noidung,$ngaytao,$trangthai,$ngaycapnhatcuoi,$id_logs));
    }
    function add_logs_model($id_logs,$noidung,$ngaytao,$trangthai,$ngaycapnhatcuoi)
    {
        $this->setquery("INSERT INTO table_logs(`id_logs`,`noidung`,`ngaytao`,`trangthai`,`ngaycapnhatcuoi`)
        VALUES(?,?,?,?,?)");
        return $this->execute(array($id_logs,$noidung,$ngaytao,$trangthai,$ngaycapnhatcuoi));
    }
    function dell_logs_model($id)
    {
        $this->setquery("DELETE FROM table_logs WHERE table_logs.id_logs=?");
        return $this->execute(array($id));
    }
   

}
?>
