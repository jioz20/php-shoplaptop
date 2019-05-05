<?php 
class nhomquantri_model extends model
{
    // SELECT table_nhomquantri.* ,table_trangthai.ten_trangthai FROM table_nhomquantri,table_trangthai WHERE table_trangthai.id_trangthai=table_nhomquantri.trangthai

    // SELECT table_nhomquantri.* ,table_trangthai.ten_trangthai FROM table_nhomquantri,table_trangthai WHERE table_trangthai.id_trangthai=table_nhomquantri.trangthai and id_nhomquantri=3

    // UPDATE table_nhomquantri  SET
    // `ten_nhomquantri`='Cộng Tác Viên',
    // `ngaytao`='2018-05-21 00:00:00',
    // `trangthai`=1,
    // `capnhatcuoi`='2018-05-21 00:00:00'
    // WHERE `id_nhomquantri`=3

    // INSERT INTO table_nhomquantri(`id_nhomquantri`,`ten_nhomquantri`,`ngaytao`,`trangthai`,`capnhatcuoi`)VALUES(Null,'Nhóm test ','2018-05-21 00:00:00',1,'2018-05-21 00:00:00')

    // DELETE FROM table_nhomquantri WHERE `id_nhomquantri`=25
    function danhsach_nhomquantri_model()
    {
        $this->setquery("SELECT table_nhomquantri.*,table_trangthai.ten_trangthai
        FROM table_nhomquantri,table_trangthai
        WHERE table_nhomquantri.trangthai=table_trangthai.id_trangthai");
        return $this->loadallrow();
    }
    function chitiet_nhomquantri_id_model($id)
    {
        $this->setquery("SELECT table_nhomquantri.*,table_trangthai.ten_trangthai
        FROM table_nhomquantri,table_trangthai
        WHERE table_nhomquantri.trangthai=table_trangthai.id_trangthai and id_nhomquantri=?");
        return $this->loadrow(array($id));

    }
    function update_nhomquantri_id_model($id_nhomquantri,$ten_nhomquantri,$ngaytao,$trangthai,$capnhatcuoicung)
    {
        $sql="UPDATE table_nhomquantri SET
        `ten_nhomquantri`='$ten_nhomquantri',
        `ngaytao`='$ngaytao',
        `trangthai`=$trangthai,
        `capnhatcuoicung`='$capnhatcuoicung'
        WHERE `id_nhomquantri`=$id_nhomquantri";
        $this->setquery($sql);
        return $this->execute(array($ten_nhomquantri,$ngaytao,$trangthai,$capnhatcuoicung,$id_nhomquantri));
    }
    function add_nhomquantri_id_model($id_nhomquantri,$ten_nhomquantri,$ngaytao,$trangthai,$capnhatcuoicung)
    {
        $sql="INSERT INTO table_nhomquantri(`id_nhomquantri`,`ten_nhomquantri`,`ngaytao`,`trangthai`,`capnhatcuoicung`) 
        VALUES (?,?,?,?,?)";
        $this->setquery($sql);
        return $this->execute(array($id_nhomquantri,$ten_nhomquantri,$ngaytao,$trangthai,$capnhatcuoicung));
    }
    function dell_nhomquantri_id_model($id)
    {
        $sql="DELETE FROM table_nhomquantri WHERE table_nhomquantri.id_nhomquantri=?";
        $this->setquery($sql);
        return $this->execute(array($id));
    }

    

}

?>




				


