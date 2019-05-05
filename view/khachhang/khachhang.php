<?php
//xem_arr($data['danhsachkhachhang']);
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">assignment</i>
                </div>
                <a href="?controller=khachhang&act=add_khachhang_view">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">library_books</i>
                </div></a>
                <div class="card-content">
                    <h4 class="card-title">Khách hàng</h4>
                    <div class="toolbar">
                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                    <div class="material-datatables">
                      
                        <div class="row">
                        <div class="col-sm-12">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover dataTable dtr-inline" cellspacing="0" width="100%" style="width: 100%;" role="grid" aria-describedby="datatables_info">
                            <thead>
                              
                             
                                <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 80px;font-family: initial;" aria-label="Position: activate to sort column ascending">ID</th>
                                <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Position: activate to sort column ascending">Tên SP</th>
                                <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Position: activate to sort column ascending">Email</th>
                                <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Office: activate to sort column ascending">Số ĐT</th>
                                <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Age: activate to sort column ascending">Ngày Tạo</th>
                                <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 133px;font-family: initial;" aria-label="Date: activate to sort column ascending">Trạng Thái</th>
                                <th class="disabled-sorting text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Actions: activate to sort column ascending">Actions</th>
                            </tr>
                            </thead>
                            <?php
                                foreach($data['danhsachkhachhang'] as $item)
                                {
                            ?>       
                            <tr role="row" class="odd">
                                    <td class="text-center sorting" tabindex="0"><?=$item->id_khachhang;?></td>
                                    <td class="text-center sorting" tabindex="0"><?=$item->ten_khachhang;?></td>
                                    <td class="text-center sorting"><?=$item->email?></td>
                                    <td class="text-center sorting"><?=$item->sodienthoai?></td>
                                    <td class="text-center sorting"><?=$item->ngaytao?></td>
                                    <td class="text-center sorting"><?=$item->ten_trangthai?></td>
                                    <td class="td-actions text-center">
                                        <!-- <button type="submit" rel="tooltip" value="<?=$item->id_khachhang;?>" class="btn btn-info btn-simple" data-original-title="" title="">
                                            <i class="material-icons">person</i>
                                        <div class="ripple-container"></div></button> -->
                                        <a href="?controller=khachhang&act=chitiet_khachhang&id=<?=$item->id_khachhang;?>" class="btn btn-success btn-simple" >
                                            <i class="material-icons">edit</i>
                                        <div class="ripple-container"></div></a>
                                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa không ?')" href="?controller=khachhang&act=dell_khachhang&id=<?=$item->id_khachhang;?>" class="btn btn-danger btn-simple" >
                                            <i class="material-icons">close</i>
                                        </a>
                                    </td>
                                </tr>
                                <?php
                                        }
                                ?>

                            
                        </tbody>
                        </table>
                    </div>
                </div>
              
            </div>
                    </div>
                </div>
                <!-- end content-->
            </div>
            <!--  end card  -->
        </div>
        <!-- end col-md-12 -->
    </div>
<!-- end row -->
</div>