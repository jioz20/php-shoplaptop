<?php 
class chitiethoadon_model extends model
{
    function danhsach_chitiethoaodn_model()
    {
        $this->setquery("");
        return $this->loadallrow();
    }
    function chitiet_chitiethoadon_id_model($id)
    {
        $this->setquery("");
        return $this->loadrow(array($id));

    }

}

?>