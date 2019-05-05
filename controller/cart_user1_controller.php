<?php 
class cart_user1_controller extends controller
{
    function __construct()
    {
        $this->pathview = 'view/user1/';
    }
    function cart()
    {
        $id=$_GET['id'];
    	$sp= new cart_user1_model();
    	$data = array();
        $this->render('cart',$data,'layout_user1');
    }
  





}
?>