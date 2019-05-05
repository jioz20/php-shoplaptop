<?php
class login_model extends model
{
    function load_data_user_model()
    {
        $this->setquery("SELECT table_quantri.*,table_trangthai.ten_trangthai , table_nhomquantri.ten_nhomquantri
        FROM table_quantri, table_trangthai , table_nhomquantri
        WHERE table_quantri.trangthai=table_trangthai.id_trangthai 
		and table_quantri.id_nhomquantri=table_nhomquantri.id_nhomquantri");
        return $this->loadallrow();
    }
    function chitiet_user_id_model($id)
    {
        $this->setquery("SELECT table_quantri.*,table_trangthai.ten_trangthai , table_nhomquantri.ten_nhomquantri
        FROM table_quantri, table_trangthai , table_nhomquantri
        WHERE table_quantri.trangthai=table_trangthai.id_trangthai 
		and table_quantri.id_nhomquantri=table_nhomquantri.id_nhomquantri
		and id_quantri=?");
        return $this->loadrow(array($id));

    }
       

}
?>


			
				


