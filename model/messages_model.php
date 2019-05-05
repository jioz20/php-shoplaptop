<?php
class messages_model extends model
{

    function danhsach_messages_model()
    {
        $this->setquery("SELECT table_messages.*,table_trangthai.ten_trangthai 
        FROM table_messages,table_trangthai 
        WHERE table_messages.trangthai=table_trangthai.id_trangthai");
        return $this->loadallrow();
    }
    function chitiet_messages_id_model($id)
    {
        $this->setquery("SELECT table_messages.*,table_trangthai.ten_trangthai 
        FROM table_messages,table_trangthai 
        WHERE table_messages.trangthai=table_trangthai.id_trangthai 
        and table_messages.id_messages=?");
        return $this->loadrow(array($id));

    }
    function update_messages_id_model($id_messages,$mail,$noidung,$timkiem,$ngaytao,$trangthai,$capnhatcuoicung)
    {
        $sql="UPDATE table_messages SET 
        `mail`=?,
        `noidung`=?,
        `timkiem`=?,
        `ngaytao`=?,
        `trangthai`=?,
        `capnhatcuoicung`=?
         WHERE `id_messages`=?";
         $this->setquery($sql);
         return $this->execute(array($mail,$noidung,$timkiem,$ngaytao,$trangthai,$capnhatcuoicung,$id_messages));

    }
    function dell_messages_id_model($id)
    {
        $sql="DELETE FROM table_messages WHERE `id_messages`=?";
         $this->setquery($sql);
         return $this->execute(array($id));

    }
    function add_messages_model($id_messages,$mail,$noidung,$timkiem,$ngaytao,$trangthai,$capnhatcuoicung)
    {
        $sql="INSERT INTO table_messages (id_messages,mail,noidung,timkiem,ngaytao,trangthai,capnhatcuoicung) 
        VALUES (?,?,?,?,?,?,?)";
         $this->setquery($sql);
         return $this->execute(array(Null,$mail,$noidung,$timkiem,$ngaytao,$trangthai,$capnhatcuoicung));

    }
       

}
?>