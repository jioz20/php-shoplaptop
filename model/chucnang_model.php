<?php
class chucnang_model extends model
{
    // SELECT table_chucnang.*,table_trangthai.ten_trangthai FROM table_chucnang,table_trangthai WHERE table_chucnang.trangthai=table_trangthai.id_trangthai

    // SELECT table_chucnang.*,table_trangthai.ten_trangthai FROM table_chucnang,table_trangthai WHERE table_chucnang.trangthai=table_trangthai.id_trangthai and table_chucnang.id_chucnang=9

    // UPDATE table_chucnang SET
    // `ten_chucnang`='Ẩn',
    // `link`='dsafsasasasasdf',
    // `ngaytao`='2018-05-22 13:21:59',
    // `trangthai`=2,
    // `ngaycapnhatcuoi`='2018-05-22 13:22:48'
    // WHERE id_chucnang=9

    // INSERT INTO table_chucnang(`id_chucnang`,`ten_chucnang`,`link`,`ngaytao`,`trangthai`,`ngaycapnhatcuoi`) VALUES(Null,'test CN','dsafsasasasasdf','2018-05-22 13:21:59',1,'2018-05-22 13:22:48')

    function danhsach_chucnang_model()
    {
        $this->setquery(" SELECT table_chucnang.* , table_trangthai.ten_trangthai 
        FROM table_chucnang, table_trangthai 
        WHERE table_trangthai.id_trangthai=table_chucnang.trangthai");
        return $this->loadallrow();
    }
    function chitiet_chucnang_id_model($id)
    {
        $this->setquery("SELECT table_chucnang.* , table_trangthai.ten_trangthai 
        FROM table_chucnang, table_trangthai 
        WHERE table_trangthai.id_trangthai=table_chucnang.trangthai and id_chucnang=?");
        return $this->loadrow(array($id));

    }
    function update_chucnang_model($ten_chucnang,$link,$ngaytao,$trangthai,$ngaycapnhatcuoi,$id_chucnang)
    {
        $this->setquery("UPDATE table_chucnang SET
        `ten_chucnang`=?,
        `link`=?,
        `ngaytao`=?,
        `trangthai`=?,
        `ngaycapnhatcuoi`=?
        WHERE id_chucnang=?");
        return $this->execute(array($ten_chucnang,$link,$ngaytao,$trangthai,$ngaycapnhatcuoi,$id_chucnang));
    }
    function add_chucnang_model($id_chucnang,$ten_chucnang,$link,$ngaytao,$trangthai,$ngaycapnhatcuoi)
    {
        $this->setquery("INSERT INTO table_chucnang(`id_chucnang`,`ten_chucnang`,`link`,`ngaytao`,`trangthai`,`ngaycapnhatcuoi`) 
        VALUES(?,?,?,?,?,?)");
        return $this->execute(array($id_chucnang,$ten_chucnang,$link,$ngaytao,$trangthai,$ngaycapnhatcuoi));
     
    }
    function dell_chucnang_model($id)
    {
        $this->setquery("DELETE FROM table_chucnang WHERE `id_chucnang`=?");
        return $this->execute(array($id));
    }
       

}
?>

