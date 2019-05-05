<?php
// xem_arr($data['chitiet_trangthai']);
    
 ?>
 <style>
    .btn.btn-round, .navbar .navbar-nav>li>a.btn.btn-round
    {
        border-radius: 4px;
    }
</style>
<form method="POST" action="?controller=trangthai&act=update_trangthai&id=<?=@$data['chitiet_trangthai']->id_trangthai?>"   enctype="multipart/form-data" id="fupdate">
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="form-group label-floating">
                            <label class="control-label">ID</label>
                            <input type="text" name="id_trangthai" value="<?=@$data['chitiet_trangthai']->id_trangthai?>" class="form-control">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Trạng Thái</label>
                            <input type="text" name="ten_trangthai" value="<?=@$data['chitiet_trangthai']->ten_trangthai?>" class="form-control">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Ghi Chú</label>
                            <input type="text" name="ghichu" value="<?=@$data['chitiet_trangthai']->ghichu?>" class="form-control">
                        </div>
                      
                        <div class="form-group date">
                            <label class="control-label">Ngày Tạo</label>
                            <input type="text" id="datetimepicker1" name="ngaytao"   class=" form-control datetimepicker" value="<?php echo @$data['chitiet_trangthai']->ngaytao ?>"      />
                           
                        </div>

                        <div class="form-group ">
                            <label class="control-label">Ngày Cập Nhật Cuối</label>
                            <input type="text" id="datetimepicker2" name="ngaycapnhatcuoi" class="form-control datetimepicker" value="<?php echo@$data['chitiet_trangthai']->ngaycapnhatcuoi ?>"  />
                          
                        </div>
                       
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-content text-center">
                            <div class="form-group form-button">
                                <a href="?controller=trangthai&act=danhsach_trangthai" class="btn btn-fill btn-rose" style="color:white">Back</a>
                                <a   class="btn btn-fill btn-rose" onclick="fsubmit()" id="update" style="color:white">Update</a>
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
