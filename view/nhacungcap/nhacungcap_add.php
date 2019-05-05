<?php
//  xem_arr($data['chitiet_nhacungcap']);
    
 ?>
 <style>
    .btn.btn-round, .navbar .navbar-nav>li>a.btn.btn-round
    {
        border-radius: 4px;
    }
</style>
<form method="POST" action="?controller=nhacungcap&act=add_nhacungcap"   enctype="multipart/form-data" id="fupdate">
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="form-group label-floating">
                            <label class="control-label">ID</label>
                            <input type="text" name="id_nhacungcap" value="" class="form-control">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Nhà Cung Cấp</label>
                            <input type="text" name="ten_nhacungcap" value="" class="form-control">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Ghi Chú</label>
                            <input type="text" name="ghichu" value="" class="form-control">
                        </div> 
                        <div class="form-group date">
                            <label class="control-label">Ngày Tạo</label>
                            <input type="text" id="datetimepicker1" name="ngaytao"   class=" form-control datetimepicker" value=""      />
                           
                        </div>

                        <div class="form-group ">
                            <label class="control-label">Ngày Cập Nhật Cuối</label>
                            <input type="text" id="datetimepicker2" name="ngaycapnhatcuoi" class="form-control datetimepicker" value=""  />
                          
                        </div>
                        <div class="form-group label-floating">
                                <label class="control-label">Trạng Thái</label>
                                <select  class="selectpicker" name="id_trangthai"  data-style="btn btn-primary btn-round" style="border-radius: 4px" title="Single Select" data-size="7" tabindex="-98">
                                        <option class="bs-title-option" value="">Single Select</option>
                                        <option  disabled="" selected="">Trạng Thái</option>
                                        <?php
                                            foreach(@$data['load_danhsach_trangthai'] as $k=>$v)
                                            {
                                        ?>
                                        <option   value="<?php echo @$v->id_trangthai ?>" >
                                            <?php echo @$v->ten_trangthai ?>
                                        </option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                            </div>
                    
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-content text-center">
                            <div class="form-group form-button">
                                <a href="?controller=nhomquantri&act=danhsach_nhomquantri" class="btn btn-fill btn-rose" style="color:white">Back</a>
                                <a   class="btn btn-fill btn-rose" onclick="fsubmit()" id="update" style="color:white">ADD</a>
                            </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div>

<script>
function fsubmit() {
    document.getElementById("fupdate").submit()
}
</script>
<script>
<!-- javascript for init -->
$('#datetimepicker').datetimepicker({
    icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-chevron-up",
        down: "fa fa-chevron-down",
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-screenshot',
        clear: 'fa fa-trash',
        close: 'fa fa-remove'
    }
});
</script>
</form>
