<?php
  // xem_arr($data);
  // xem_arr($_POST);
 ?>
 <style>
    .btn.btn-round, .navbar .navbar-nav>li>a.btn.btn-round
    {
        border-radius: 4px;
    }
</style>
<form method="POST" action="?controller=nhomsanpham&act=update_nhomsanpham&id=<?=@$data['chitietnhomsanpham']->id_nhomsanpham?>"   enctype="multipart/form-data" id="fupdate">
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="form-group label-floating">
                            <label class="control-label">ID</label>
                            <input type="text" name="id_nhomsanpham" value="<?=@$data['chitietnhomsanpham']->id_nhomsanpham?>" class="form-control">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Nhóm Sản Phẩm</label>
                            <input type="text" name="ten_nhomsanpham" value="<?=@$data['chitietnhomsanpham']->ten_nhomsanpham?>" class="form-control">
                        </div>
                       
                        <div class="form-group label-floating">
                            <label class="control-label">alias</label>
                            <input type="text" name="alias" value="<?=@$data['chitietnhomsanpham']->alias?>" class="form-control">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">tukhoa</label>
                            <input type="text" name="tukhoa" value="<?=@$data['chitietnhomsanpham']->tukhoa?>" class="form-control">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">mota</label>
                            <input type="text" name="mota" value="<?=@$data['chitietnhomsanpham']->mota?>" class="form-control">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">timkiem</label>
                            <input type="text" name="timkiem" value="<?=@$data['chitietnhomsanpham']->timkiem?>" class="form-control">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">chiase</label>
                            <input type="text" name="chiase" value="<?=@$data['chitietnhomsanpham']->chiase?>" class="form-control">
                        </div>
                      
                        <div class="form-group date">
                            <label class="control-label">Ngày Tạo</label>
                            <input type="text" id="datetimepicker1" name="ngaytao"   class=" form-control datetimepicker" value="<?php echo @$data['chitietnhomsanpham']->ngaytao ?>"      />
                          
                        </div>

                        <div class="form-group ">
                            <label class="control-label">Ngày Cập Nhật Cuối</label>
                            <input type="text" id="datetimepicker2" name="capnhatcuoicung" class="form-control datetimepicker" value="<?php echo@$data['chitietnhomsanpham']->capnhatcuoicung ?>"  />
                          
                        </div>
                        <div class="form-group label-floating">
                                <label class="control-label">Danh Mục SP</label>
                                <select  class="selectpicker" name="id_danhmucsanpham"  data-style="btn btn-primary btn-round" style="border-radius: 4px" title="Single Select" data-size="7" tabindex="-98">
                                        <option class="bs-title-option" value="">Single Select</option>
                                        <option  disabled="" selected="">Trạng Thái</option>
                                        <?php
                                            foreach(@$data['danhmuc'] as $k=>$v)
                                            {
                                        ?>
                                        <option   value="<?php echo @$v->id_danhmucsanpham ?>" <?php if(@$v->id_danhmucsanpham==$data['chitietnhomsanpham']->id_danhmucsanpham) echo "selected" ?>>
                                            <?php echo @$v->ten_danhmucsanpham ?>
                                        </option>
                                        <?php
                                            }
                                        ?>
                                    </select>
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
                                        <option   value="<?php echo @$v->id_trangthai ?>" <?php if(@$v->id_trangthai==$data['chitietnhomsanpham']->trangthai) echo "selected" ?>>
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
                                <a href="?controller=nhomsanpham&act=danhsach_nhomsanpham" class="btn btn-fill btn-rose" style="color:white">Back</a>
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
