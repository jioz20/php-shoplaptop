<?php 
class quantri_model extends model
{
    // SELECT table_quantri.* ,table_trangthai.ten_trangthai FROM table_quantri,table_trangthai WHERE table_trangthai.id_trangthai=table_quantri.trangthai

    // SELECT table_quantri.* ,table_trangthai.ten_trangthai FROM table_quantri,table_trangthai WHERE table_trangthai.id_trangthai=table_quantri.trangthai and id_quantri=3

    // UPDATE table_quantri SET
    // `ten_quantri`='User2',
    // `user_dangnhap`='user2',
    // `pass_dangnhap`='123',
    // `id_nhomquantri`=2,
    // `ngaytao`='2018-05-20 00:00:00',
    // `trangthai`=1,
    // `ngaycapnhatcuoi`='2018-05-20 00:00:00',
    // `id_dangnhap`='123.456.789',
    // `landangnhapcuoi`='HCM'
    // WHERE `id_quantri`=3

    // INSERT INTO table_quantri(`id_quantri`,`ten_quantri`,`user_dangnhap`,`pass_dangnhap`,`id_nhomquantri`,`ngaytao`,`trangthai`,`ngaycapnhatcuoi`,`id_dangnhap`,`landangnhapcuoi`) 
    // VALUES(Null,'test 1','user2','123',2,'2018-05-20 00:00:00',1,'2018-05-20 00:00:00','123.456.789','HCM')

    // DELETE FROM table_quantri WHERE id_quantri=16
   
    function danhsach_quantri_model()
    {
        $this->setquery("SELECT table_quantri.* ,table_trangthai.ten_trangthai FROM table_quantri,table_trangthai WHERE table_trangthai.id_trangthai=table_quantri.trangthai");
        return $this->loadallrow();
    }
    function chitiet_quantri_id_model($id)
    {
        $this->setquery("SELECT table_quantri.* ,table_trangthai.ten_trangthai 
        FROM table_quantri,table_trangthai 
        WHERE table_trangthai.id_trangthai=table_quantri.trangthai and id_quantri=?");
        return $this->loadrow(array($id));

    }
    function update_quantri_id_model($ten_quantri,$user_dangnhap,$pass_dangnhap,$id_nhomquantri,$ngaytao,$trangthai,$ngaycapnhatcuoi,$id_dangnhap,$landangnhapcuoi,$id_quantri)
    {
        $sql="UPDATE table_quantri SET
        `ten_quantri`=?,
        `user_dangnhap`=?,
        `pass_dangnhap`=?,
        `id_nhomquantri`=?,
        `ngaytao`=?,
        `trangthai`=?,
        `ngaycapnhatcuoi`=?,
        `id_dangnhap`=?,
        `landangnhapcuoi`=?
        WHERE `id_quantri`=?";
        $this->setquery($sql);
        return $this->execute(array($ten_quantri,$user_dangnhap,$pass_dangnhap,$id_nhomquantri,$ngaytao,$trangthai,$ngaycapnhatcuoi,$id_dangnhap,$landangnhapcuoi,$id_quantri));
    }
    function add_quantri_id_model($id_quantri,$ten_quantri,$user_dangnhap,$pass_dangnhap,$id_nhomquantri,$ngaytao,$trangthai,$ngaycapnhatcuoi,$id_dangnhap,$landangnhapcuoi)
    {
        $sql="INSERT INTO table_quantri(`id_quantri`,`ten_quantri`,`user_dangnhap`,`pass_dangnhap`,`id_nhomquantri`,`ngaytao`,`trangthai`,`ngaycapnhatcuoi`,`id_dangnhap`,`landangnhapcuoi`) 
         VALUES(?,?,?,?,?,?,?,?,?,?)";
        $this->setquery($sql);
        return $this->execute(array($id_quantri,$ten_quantri,$user_dangnhap,$pass_dangnhap,$id_nhomquantri,$ngaytao,$trangthai,$ngaycapnhatcuoi,$id_dangnhap,$landangnhapcuoi));
    }
    function dell_quantri_id_model($id)
    {
        $sql="DELETE FROM table_quantri WHERE id_quantri=?";
        $this->setquery($sql);
        return $this->execute(array($id));
    }

    

}

?>
