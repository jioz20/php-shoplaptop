<?php 
class order_controller extends controller
{
    session_start();
    // function __construct()
    // {
    //     $this->pathview = 'view/phanquyen/';
    // }
    function order()
    {
        $obj_order=new cart_model();
        if($obj_order->muahang();)
        {
            header('location: ?controller=user3&act=cart');
        }
        else
        {
            header('location: ?controller=user3&act=shop');
        }
        
    }
  





}
?>