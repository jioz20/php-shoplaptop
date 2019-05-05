<?php
//  xem_arr($data['danhsach_nhomsp']);
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">assignment</i>
                </div>
                <a href="?controller=danhmucsanpham&act=add_danhmuc_view">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">library_books</i>
                </div></a>
                <div class="card-content">
                    <h4 class="card-title">Danh mục - Menu Cấp 1</h4>
                    <div class="toolbar">
                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                    <div class="material-datatables">
                      
                      <div class="row">
                          <div class="col-sm-12">
                              <table id="datatables" class="table table-striped table-no-bordered table-hover dataTable dtr-inline" cellspacing="0" width="100%" style="width: 100%;" role="grid" aria-describedby="datatables_info">
                          <thead>
                            
                           
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 80px;font-family: initial;" aria-label="Position: activate to sort column ascending">ID</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Position: activate to sort column ascending">Danh Mục</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Position: activate to sort column ascending">Từ Khoá</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Office: activate to sort column ascending">Ngày Tạo</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Age: activate to sort column ascending">Ngày Cập Nhật Cuối</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 133px;font-family: initial;" aria-label="Date: activate to sort column ascending">Trạng Thái</th>
                              <th class="disabled-sorting text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Actions: activate to sort column ascending">Actions</th>
                          </tr>
                          </thead>
                          <?php
                                  foreach($data['danhmuc'] as $item)
                                  {
                          ?>
                          <tr role="row" class="odd">
                                  <td class="text-center sorting" tabindex="0"><?=$item->id_danhmucsanpham;?></td>
                                  <td class="text-center sorting" tabindex="0"><?=$item->ten_danhmucsanpham;?></td>
                                  <td class="text-center sorting"><?=$item->tukhoa?></td>
                                  <td class="text-center sorting"><?=$item->ngaytao?></td>
                                  <td class="text-center sorting"><?=$item->ngaycapnhatcuoi?></td>
                                  <td class="text-center sorting"><?=$item->ten_trangthai?></td>
                                  <td class="td-actions text-center">
                                      <!-- <button type="submit" rel="tooltip" value="<?=$item->id_danhmucsanpham;?>" class="btn btn-info btn-simple" data-original-title="" title="">
                                          <i class="material-icons">person</i>
                                      <div class="ripple-container"></div></button> -->
                                      <a href="?controller=danhmucsanpham&act=chitiet_danhmuc&id=<?=$item->id_danhmucsanpham;?>" class="btn btn-success btn-simple" >
                                                <i class="material-icons">edit</i>
                                      <div class="ripple-container"></div></a>
                                      <a href="?controller=danhmucsanpham&act=chitiet_danhmuc&id=<?=$item->id_danhmucsanpham;?>" class="btn btn-success btn-simple" >
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
                <!-- </div> -->
                <!-- end content-->
            </div>
            <!--  end card  -->
        </div>
        <div class="col-md-6">
       
            <div class="card">
                <!-- <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">assignment</i>
                </div>
                <a href="?controller=danhmucsanpham&act=add_danhmuc_view">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">library_books</i>
                </div></a> -->
                <div class="card-content">
                    <h4 class="card-title">Menu Cấp 2</h4>
                    <div class="toolbar">
                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                    <div class="material-datatables">
                    <div class="form-group label-floating">
                        <!-- <label class="control-label">Trạng Thái</label> -->
                        <select  id="menu" onchange="menu2()"  class="selectpicker" name="id_trangthai"  data-style="btn btn-primary btn-round" style="border-radius: 4px" title="Single Select" data-size="7" tabindex="-98">
                                <option class="bs-title-option" value="">Single Select</option>
                                <option  disabled="" selected="">Chọn Menu Cấp 1</option>
                                <?php
                                    foreach(@$data['danhmuc'] as $k=>$v)
                                    {
                                ?>
                                <option   value="<?php echo @$v->id_danhmucsanpham ?>" >
                                    <?php echo @$v->ten_danhmucsanpham ?>
                                </option>
                                <?php
                                    }
                                ?>
                            </select>
                    </div>
                      <div class="row">
                          <div class="col-sm-12">
                              <table id="datatables" class="table table-striped table-no-bordered table-hover dataTable dtr-inline" cellspacing="0" width="100%" style="width: 100%;" role="grid" aria-describedby="datatables_info">
                          <thead>
                            
                           
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 80px;font-family: initial;" aria-label="Position: activate to sort column ascending">ID</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Position: activate to sort column ascending">Danh Mục</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Position: activate to sort column ascending">Từ Khoá</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Office: activate to sort column ascending">Ngày Tạo</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Age: activate to sort column ascending">Ngày Cập Nhật Cuối</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 133px;font-family: initial;" aria-label="Date: activate to sort column ascending">Trạng Thái</th>
                              <th class="disabled-sorting text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Actions: activate to sort column ascending">Actions</th>
                          </tr>
                          </thead>
                          <tbody role="row" class="odd" id="kq">
                                    <!-- mac dinh se không có kết quả  -->
                          </tbody>
                      </table>
                  </div>
                </div>
              
            </div>
                    <!-- </div> -->
                </div>
                <!-- end content-->
            </div>
            <!--  end card  -->
        </div>
        <!-- end col-md-12 -->
    </div>
<!-- end row -->
</div>
<script>
function menu2() {
    var x = document.getElementById("menu").value;
    // document.getElementById("kq").innerHTML = "You selected: " + x;
    $.get('http://localhost/laptopbaongoc_mvc/?controller=danhmucsanpham&act=api_danhmuc_menu2', {iddm: x})
    $('#kq').html(x);
}
</script>
