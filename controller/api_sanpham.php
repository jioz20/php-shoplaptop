<?php

$sotintrentrang=5;
$sotrang=isset($_GET['trang']) && $_GET['trang'] ? $sotrang : 1;
$vitri=($sotrang-1)*$sotintrentrang;
$sr=new sanpham_model();
$danhsach=>$sr->danhsach_sanpham_limit_model($vitri,$sotintrentrang)

foreach ( $data[ 'data' ] as $item ) 
{ 
    echo "
   <tbody role="row" class="odd" id="kq">
    <td class="text-center sorting" tabindex="0">
        <?=$item->id_sanpham;?>
    </td>
    <td class="text-center sorting" tabindex="0">
        <?=$item->ten_sanpham;?>
    </td>
    <td class="text-center sorting">
        <?=$item->soluong?>
    </td>
    <td class="text-center sorting">
        <?=$item->gia?>
    </td>
    <td class="text-center sorting">
        <?=$item->ngaytao?>
    </td>
    <td class="text-center sorting">
        <?=$item->ten_trangthai?>
    </td>
    <td class="td-actions text-center">
    <button type="submit" rel="tooltip" value="<?=$item->id_sanpham;?>" class="btn btn-info btn-simple" data-original-title="" title="">
                <i class="material-icons">person</i>
            <div class="ripple-container"></div></button>

    <button type="submit" rel="tooltip" value="<?=$item->id_sanpham;?>" class="btn btn-success btn-simple" data-original-title="" title="">
                <i class="material-icons">edit</i>
            <div class="ripple-container"></div></button>

    <button type="submit" rel="tooltip" value="<?=$item->id_sanpham;?>" class="btn btn-danger btn-simple" data-original-title="" title="">
                <i class="material-icons">close</i>
            </button>
    
    </td>

    "
}




?>
