<?php 
class chitiethoadon_controller extends controller
{
    function __construct()
    {
        $this->pathview = 'view/chitiethoadon/';
    }
    function danhsach_chitiethoadon()
    {
        $this->render('chitiethoadon');
    }
  





}
?>