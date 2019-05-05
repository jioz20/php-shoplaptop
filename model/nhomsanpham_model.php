
<?php 
class nhomsanpham_model extends model
{
    // SELECT table_nhomsanpham.* ,table_trangthai.ten_trangthai FROM table_nhomsanpham,table_trangthai WHERE table_trangthai.id_trangthai=table_nhomsanpham.trangthai 

    // SELECT table_nhomsanpham.* ,table_trangthai.ten_trangthai FROM table_nhomsanpham,table_trangthai WHERE table_trangthai.id_trangthai=table_nhomsanpham.trangthai and table_nhomsanpham.id_nhomsanpham=3
    
    // UPDATE table_nhomsanpham SET
    // `id_danhmucsanpham`=1,
    // `ten_nhomsanpham`='Lenovo',
    // `alias`='sadfasfdsdsads',
    // `tukhoa`='lenovo LENOVO asdasdasdLenovo',
    // `mota`='máy tính Lenovo',
    // `timkiem`='máy tính Lenovo',
    // `chiase`='chưa co ',
    // `ngaytao`='2018-05-20 00:00:00',
    // `trangthai`=1,
    // `capnhatcuoicung`='2018-05-20 00:00:00'
    // WHERE `id_nhomsanpham`=3
    
    // INSERT INTO table_nhomsanpham(`id_nhomsanpham`,`id_danhmucsanpham`,`ten_nhomsanpham`,`alias`,`tukhoa`,`mota`,`timkiem`,`chiase`,`ngaytao`,`trangthai`,`capnhatcuoicung`) VALUES(NULL,1,'Lenovo','sadfasfdsdsads','lenovo LENOVO asdasdasdLenovo','máy tính Lenovo','máy tính Lenovo','chưa co ','2018-05-20 00:00:00',1,'2018-05-20 00:00:00')
    
    
    // DELETE FROM table_nhomsanpham WHERE table_nhomsanpham.id_nhomsanpham=53
    function danhsach_nhomsanpham_model()
    {
        $this->setquery("SELECT table_nhomsanpham.* , table_trangthai.ten_trangthai
        FROM table_nhomsanpham, table_trangthai
        WHERE table_nhomsanpham.trangthai=table_trangthai.id_trangthai");
        return $this->loadallrow();
    }
    function chitiet_nhomsanpham_id_model($id)
    {
        $this->setquery("SELECT table_nhomsanpham.* , table_trangthai.ten_trangthai
        FROM table_nhomsanpham, table_trangthai
        WHERE table_nhomsanpham.trangthai=table_trangthai.id_trangthai and id_nhomsanpham=?");
        return $this->loadrow(array($id));

    }
    function update_nhomsanpham_id_model($id_danhmucsanpham,$ten_nhomsanpham,$alias,$tukhoa,$mota,$timkiem,$chiase,$ngaytao,$trangthai,$capnhatcuoicung,$id_nhomsanpham)
    {
        $sql="UPDATE table_nhomsanpham SET
        `id_danhmucsanpham`=?,
        `ten_nhomsanpham`=?,
        `alias`=?,
        `tukhoa`=?,
        `mota`=?,
        `timkiem`=?,
        `chiase`=?,
        `ngaytao`=?,
        `trangthai`=?,
        `capnhatcuoicung`=?
        WHERE `id_nhomsanpham`=?";
        $this->setquery($sql);
        return $this->execute(array($id_danhmucsanpham,$ten_nhomsanpham,$alias,$tukhoa,$mota,$timkiem,$chiase,$ngaytao,$trangthai,$capnhatcuoicung,$id_nhomsanpham));
    }
    function add_nhomsanpham_model($id_nhomsanpham,$id_danhmucsanpham,$ten_nhomsanpham,$alias,$tukhoa,$mota,$timkiem,$chiase,$ngaytao,$trangthai,$capnhatcuoicung)
    {
        $this->setquery("INSERT INTO table_nhomsanpham(`id_nhomsanpham`,`id_danhmucsanpham`,`ten_nhomsanpham`,`alias`,`tukhoa`,`mota`,`timkiem`,`chiase`,`ngaytao`,`trangthai`,`capnhatcuoicung`) 
        VALUES(?,?,?,?,?,?,?,?,?,?,?)");
        return $this->execute(array($id_nhomsanpham,$id_danhmucsanpham,$ten_nhomsanpham,$alias,$tukhoa,$mota,$timkiem,$chiase,$ngaytao,$trangthai,$capnhatcuoicung));
    }
    function dell_nhomsanpham_model($id)
    {
        $this->setquery("DELETE FROM table_nhomsanpham WHERE table_nhomsanpham.id_nhomsanpham=?");
        return $this->execute(array($id));
    }

}

?>






