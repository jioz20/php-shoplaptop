<?php
//xem_arr($data);
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">assignment</i>
                </div>
                <a href="?controller=messages&act=add_messages_view">
				<div class="card-header card-header-icon" data-background-color="purple">
					<i class="material-icons">library_books</i>
				</div></a>
                <div class="card-content">
                    <h4 class="card-title">Messages</h4>
                    <div class="toolbar">
                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                    <div class="material-datatables">
                      
                      <div class="row">
                          <div class="col-sm-12">
                              <table id="datatables" class="table table-striped table-no-bordered table-hover dataTable dtr-inline" cellspacing="0" width="100%" style="width: 100%;" role="grid" aria-describedby="datatables_info">
                          <thead>
                            
                           
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 80px;font-family: initial;" aria-label="Position: activate to sort column ascending">ID_messages</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Position: activate to sort column ascending">Mail</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Position: activate to sort column ascending">Nội Dung</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Office: activate to sort column ascending">Ngày Tạo</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Age: activate to sort column ascending">Ngày Cập Nhật Cuối </th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 133px;font-family: initial;" aria-label="Date: activate to sort column ascending">Trạng Thái</th>
                              <th class="disabled-sorting text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Actions: activate to sort column ascending">Actions</th>
                          </tr>
                          </thead>
                          <?php
                                  foreach($data['messages'] as $item)
                                  {
                          ?>
                          <tr role="row" class="odd">
                                  <td class="text-center sorting" tabindex="0"><?=$item->id_messages;?></td>
                                  <td class="text-center sorting" tabindex="0"><?=$item->mail;?></td>
                                  <td class="text-center sorting"><?=$item->noidung?></td>
                                  <td class="text-center sorting"><?=$item->ngaytao?></td>
                                  <td class="text-center sorting"><?=$item->capnhatcuoicung?></td>
                                  <td class="text-center sorting"><?=$item->ten_trangthai?></td>
                                  <td class="td-actions text-center">
                                      <a href="?controller=messages&act=chitiet_messages&id=<?php echo $item->id_messages ?>" >
                                          <i class="material-icons">edit</i>
                                      <div class="ripple-container"></div></a>
                                      <a href="?controller=messages&act=dell_messages&id=<?php echo $item->id_messages ?>" >
                                          <i class="material-icons">close</i> 
                                       <div class="ripple-container"></div></a>
                                  </td>
                              </tr>
                              <?php
                                      }
                              ?>
                              </tr></tbody>
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
