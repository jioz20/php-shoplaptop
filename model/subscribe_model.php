<?php
class subscribe_model extends model
{
    // SELECT table_subscribe.*,table_trangthai.ten_trangthai 
    //         FROM table_subscribe,table_trangthai 
    //         WHERE table_subscribe.trangthai=table_trangthai.id_trangthai 
            

    // SELECT table_subscribe.*,table_trangthai.ten_trangthai 
    //         FROM table_subscribe,table_trangthai 
    //         WHERE table_subscribe.trangthai=table_trangthai.id_trangthai 
    //         and table_subscribe.id_subscribe=11



    // UPDATE table_subscribe SET
    // `mail`='july_thanthien@yahoo.com',
    // `noidung`='theo doi SasASA',
    // `timkiem`='theo doifsdfsdfsdf ',
    // `ngaytao`='2018-08-03 09:11:15',
    // `trangthai`=1,
    // `capnhatcuoicung`='2018-08-03 09:11:15'
    // WHERE `id_subscribe`=11


    // INSERT INTO table_subscribe(`id_subscribe`,`mail`,`noidung`,`timkiem`,`ngaytao`,`trangthai`,`capnhatcuoicung`) VALUES (Null,'july_thanthien@yahoo.com','theo doi SasASA','theo doifsdfsdfsdf ','2018-08-03 09:11:15',1,'2018-08-03 09:11:15')


    // DELETE FROM table_subscribe WHERE `id_subscribe`=49

    function danhsach_subscribe_model()
    {
        $this->setquery("SELECT table_subscribe.*,table_trangthai.ten_trangthai 
        FROM table_subscribe,table_trangthai 
        WHERE table_subscribe.trangthai=table_trangthai.id_trangthai");
        return $this->loadallrow();
    }
    function chitiet_subscribe_id_model($id)
    {
        $this->setquery("SELECT table_subscribe.*,table_trangthai.ten_trangthai 
        FROM table_subscribe,table_trangthai 
        WHERE table_subscribe.trangthai=table_trangthai.id_trangthai 
        and table_subscribe.id_subscribe=?");
        return $this->loadrow(array($id));

    }
    function update_subscribe_id_model()
    {
        $sql="";
         $this->setquery($sql);
         return $this->execute(array());

    }
    function dell_subscribe_id_model($id)
    {
        $sql="";
         $this->setquery($sql);
         return $this->execute(array($id));

    }
    function add_subscribe_model()
    {
        $sql="";
         $this->setquery($sql);
         return $this->execute(array(Null,$mail,$noidung,$timkiem,$ngaytao,$trangthai,$capnhatcuoicung));

    }
       

}
?>