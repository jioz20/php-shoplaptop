<?php 
class baiviet_model extends model
{

    // SELECT table_baiviet.*,table_trangthai.ten_trangthai FROM table_baiviet,table_trangthai WHERE table_baiviet.trangthai=table_trangthai.id_trangthai

    // SELECT table_baiviet.*,table_trangthai.ten_trangthai FROM table_baiviet,table_trangthai WHERE table_baiviet.trangthai=table_trangthai.id_trangthai AND table_baiviet.id_baiviet=3

    // UPDATE table_baiviet SET
    // `ten_baiviet`='Card Vga ATI102',
    // `id_nhombaiviet`=4,
    // `alias`='Card Vga ATI102',
    // `tukhoa`='dsfahgfj',
    // `mota`='hjgjh',
    // `timkiem`='hjgjh',
    // `hinhchiase`='jhgjhgjh',
    // `noidungtomtat`='jhgjhgjh',
    // `noidungchitiet`='asfaf',
    // `ngaytao`='2018-05-24 16:44:10',
    // `trangthai`=1,
    // `capnhatcuoicung`='2018-05-24 16:44:15'
    // WHERE id_baiviet=3

    // INSERT INTO table_baiviet(`id_baiviet`,`ten_baiviet`,`id_nhombaiviet`,`alias`,`tukhoa`,`mota`,`timkiem`,`hinhchiase`,`noidungtomtat`,`noidungchitiet`,`ngaytao`,`trangthai`,`capnhatcuoicung`)VALUES(Null,'Card Vga ATI102',4,'Card Vga ATI102','dsfahgfj','dsfahgfj','dsfahgfj','dsfahgfj','dsfahgfj','dsfahgfj','2018-05-24 16:44:10',1,'2018-05-24 16:44:15')

    // DELETE FROM table_baiviet WHERE id_baiviet=12

    function danhsach_baiviet_model()
    {
        $this->setquery("select table_baiviet.*,table_trangthai.ten_trangthai,table_nhombaiviet.ten_nhombaiviet 
        from table_baiviet,table_trangthai,table_nhombaiviet 
        where table_baiviet.trangthai=table_trangthai.id_trangthai and table_baiviet.id_nhombaiviet=table_nhombaiviet.id_nhombaiviet");
        return $this->loadallrow();
    }
    function chitiet_baiviet_id_model($id)
    {
        $this->setquery("select table_baiviet.*,table_trangthai.ten_trangthai,table_nhombaiviet.ten_nhombaiviet 
        from table_baiviet,table_trangthai,table_nhombaiviet 
        where table_baiviet.trangthai=table_trangthai.id_trangthai and table_baiviet.id_nhombaiviet=table_nhombaiviet.id_nhombaiviet and id_baiviet=?");
        return $this->loadrow(array($id));

    }
    function update_baiviet_id_model($ten_baiviet,$id_nhombaiviet,$alias,$tukhoa,$mota,$timkiem,$hinhchiase,$noidungtomtat,$noidungchitiet,$ngaytao,$trangthai,$capnhatcuoicung,$id_baiviet)
    {
        $sql="  UPDATE table_baiviet SET
        `ten_baiviet`=?,
        `id_nhombaiviet`=?,
        `alias`=?,
        `tukhoa`=?,
        `mota`=?,
        `timkiem`=?,
        `hinhchiase`=?,
        `noidungtomtat`=?,
        `noidungchitiet`=?,
        `ngaytao`=?,
        `trangthai`=?,
        `capnhatcuoicung`=?
        WHERE `id_baiviet`=?";
        $this->setquery($sql);
        return $this->execute(array($ten_baiviet,$id_nhombaiviet,$alias,$tukhoa,$mota,$timkiem,$hinhchiase,$noidungtomtat,$noidungchitiet,$ngaytao,$trangthai,$capnhatcuoicung,$id_baiviet));
    }
    function add_baiviet_model($id_baiviet,$ten_baiviet,$id_nhombaiviet,$alias,$tukhoa,$mota,$timkiem,$hinhchiase,$noidungtomtat,$noidungchitiet,$ngaytao,$trangthai,$capnhatcuoicung)
    {
        $this->setquery("INSERT INTO table_baiviet(`id_baiviet`,`ten_baiviet`,`id_nhombaiviet`,`alias`,`tukhoa`,`mota`,`timkiem`,`hinhchiase`,`noidungtomtat`,`noidungchitiet`,`ngaytao`,`trangthai`,`capnhatcuoicung`)
        VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
        return $this->execute(array($id_baiviet,$ten_baiviet,$id_nhombaiviet,$alias,$tukhoa,$mota,$timkiem,$hinhchiase,$noidungtomtat,$noidungchitiet,$ngaytao,$trangthai,$capnhatcuoicung));
    }
    function dell_baiviet_model($id)
    {
        $this->setquery("DELETE FROM table_baiviet WHERE id_baiviet=?");
        return $this->execute(array($id));
    }

}


?>



