<?php
class danhmucsanpham_model extends model
{
    // SELECT table_danhmucsanpham.*,table_trangthai.ten_trangthai 
    //         FROM table_danhmucsanpham,table_trangthai 
    //         WHERE table_danhmucsanpham.trangthai=table_trangthai.id_trangthai
                    
    // SELECT table_danhmucsanpham.*,table_trangthai.ten_trangthai 
    //         FROM table_danhmucsanpham,table_trangthai 
    //         WHERE table_danhmucsanpham.trangthai=table_trangthai.id_trangthai AND id_danhmucsanpham=3
                    
    // UPDATE table_danhmucsanpham SET
    //         `ten_danhmucsanpham`='Worksation',
    //         `alias`='fasdfasdf',
    //         `tukhoa`='dell DELL dell Delladsadsadasda',
    //         `mota`='máy tính dellasdasda ',
    //         `ghichu`='chưa co ',
    //         `ngaytao`='2018-05-20 00:00:00',
    //         `trangthai`=1,
    //         `ngaycapnhatcuoi`='2018-05-20 00:00:00'
    //         WHERE `id_danhmucsanpham`=3

    // INSERT INTO table_danhmucsanpham(`id_danhmucsanpham`,`ten_danhmucsanpham`,`alias`,`tukhoa`,`mota`,`ghichu`,`ngaytao`,`trangthai`,`ngaycapnhatcuoi`)VALUES(Null,'Worksation','fasdfasdf','dell DELL dell Delladsadsadasda','máy tính dellasdasda ','chưa co ','2018-05-20 00:00:00',1,'2018-05-20 00:00:00')

    // DELETE FROM table_danhmucsanpham WHERE id_danhmucsanpham=10
    function danhsach_danhmucsanpham_model()
    {
        $this->setquery("SELECT table_danhmucsanpham.*,table_trangthai.ten_trangthai 
        FROM table_danhmucsanpham,table_trangthai 
        WHERE table_danhmucsanpham.trangthai=table_trangthai.id_trangthai");
        return $this->loadallrow();
    }
    function chitiet_danhmucsanpham_id_model($id)
    {
        $this->setquery("SELECT table_danhmucsanpham.*,table_trangthai.ten_trangthai 
        FROM table_danhmucsanpham,table_trangthai 
        WHERE table_danhmucsanpham.trangthai=table_trangthai.id_trangthai AND id_danhmucsanpham=?
        ");
        return $this->loadrow(array($id));

    }
  
    function update_danhmuc_id_model($id_danhmucsanpham,$ten_danhmucsanpham,$alias,
                                     $tukhoa,$mota,$ghichu,
                                     $ngaytao,$ngaycapnhatcuoi,$trangthai)
    {
        $sql="UPDATE table_danhmucsanpham SET
        `ten_danhmucsanpham`=?,
        `alias`=?,
        `tukhoa`=?,
        `mota`=?,
        `ghichu`=?,
        `ngaytao`=?,
        `trangthai`=?,
        `ngaycapnhatcuoi`=?
        WHERE `id_danhmucsanpham`=?";
        $this->setquery($sql);
        return $this->execute(array($ten_danhmucsanpham,$alias,$tukhoa,$mota,$ghichu,$ngaytao,$trangthai,$ngaycapnhatcuoi,$id_danhmucsanpham));
    }
    function add_danhmuc_model($id_danhmucsanpham,$ten_danhmucsanpham,$alias,$tukhoa,$mota,$ghichu,$ngaytao,$trangthai,$ngaycapnhatcuoi)
    {
        $this->setquery("INSERT INTO table_danhmucsanpham(`id_danhmucsanpham`,`ten_danhmucsanpham`,`alias`,`tukhoa`,`mota`,`ghichu`,`ngaytao`,`trangthai`,`ngaycapnhatcuoi`)
        VALUES(?,?,?,?,?,?,?,?,?)");
        return $this->execute(array($id_danhmucsanpham,$ten_danhmucsanpham,$alias,$tukhoa,$mota,$ghichu,$ngaytao,$trangthai,$ngaycapnhatcuoi));
    }
    function dell_danhmuc_model($id)
    {
        $this->setquery("DELETE FROM table_danhmucsanpham WHERE `id_danhmucsanpham`=?");
        return $this->execute(array($id));
    }

       

}
?>

