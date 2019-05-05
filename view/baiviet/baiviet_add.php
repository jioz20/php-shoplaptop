<?php
//   xem_arr($data['chitiet_baiviet']);
  // xem_arr($_POST);
 ?>
 <style>
    .btn.btn-round, .navbar .navbar-nav>li>a.btn.btn-round
    {
        border-radius: 4px;
    }
</style>
<form method="POST" action="?controller=baiviet&act=add_baiviet"   enctype="multipart/form-data" id="fupdate">
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="form-group label-floating">
                            <label class="control-label">ID</label>
                            <input type="text" name="id_baiviet" value="<?=@$data['chitiet_baiviet']->id_baiviet?>" class="form-control">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Tên Bài Viết</label>
                            <input type="text" name="ten_baiviet" value="<?=@$data['chitiet_baiviet']->ten_baiviet?>" class="form-control">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">alias</label>
                            <input type="text" name="alias" value="<?=@$data['chitiet_baiviet']->alias?>" class="form-control">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">tukhoa</label>
                            <input type="text" name="tukhoa" value="<?=@$data['chitiet_baiviet']->tukhoa?>" class="form-control">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">mota</label>
                            <input type="text" name="mota" value="<?=@$data['chitiet_baiviet']->mota?>" class="form-control">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">timkiem</label>
                            <input type="text" name="timkiem" value="<?=@$data['chitiet_baiviet']->timkiem?>" class="form-control">
                        </div>
                        <!-- <div class="form-group label-floating">
                            <label class="control-label">hinhchiase</label>
                            <input type="text" name="hinhchiase" value="<?=@$data['chitiet_baiviet']->hinhchiase?>" class="form-control">
                        </div> -->
                        <div class="form-group label-floating">
                            <label class="control-label">noidungtomtat</label>
                            <input type="text" name="noidungtomtat" value="<?=@$data['chitiet_baiviet']->noidungtomtat?>" class="form-control">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">noidungchitiet</label>
                            <input type="text" name="noidungchitiet" value="<?=@$data['chitiet_baiviet']->noidungchitiet?>" class="form-control">
                        </div>

                        <div class="form-group date">
                            <label class="control-label">Ngày Tạo</label>
                            <input type="text" id="datetimepicker1" name="ngaytao"   class=" form-control datetimepicker" value="<?php echo @$data['chitiet_baiviet']->ngaytao ?>"      />
                          
                        </div>

                        <div class="form-group ">
                            <label class="control-label">Ngày Cập Nhật Cuối</label>
                            <input type="text" id="datetimepicker2" name="capnhatcuoicung" class="form-control datetimepicker" value="<?php echo@$data['chitiet_baiviet']->capnhatcuoicung ?>"  />
                          
                        </div>
                        <div class="form-group label-floating">
                                <label class="control-label">Nhóm Bài Viết</label>
                                <select  class="selectpicker" name="id_nhombaiviet"  data-style="btn btn-primary btn-round" style="border-radius: 4px" title="Single Select" data-size="7" tabindex="-98">
                                        <option class="bs-title-option" value="">Single Select</option>
                                        <option  disabled="" selected="">Nhóm Bài Viết</option>
                                        <?php
                                            foreach(@$data['nhombaiviet'] as $k=>$v)
                                            {
                                        ?>
                                        <option   value="<?php echo @$v->id_nhombaiviet ?>" >
                                            <?php echo @$v->ten_nhombaiviet ?>
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
            <div class="row">
        
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                       
                            <div class="form-group label-floating">
                                <label class="control-label">Hình chia sẽ</label>
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src="<?=domain.'file/'.@$data['chitiet_baiviet']->hinhchiase?>" alt="...">
                                        <input type="text" name="hinhchiase"  disable value="<?=@$data['chitiet_baiviet']->hinhchiase?>" name="hinhdaidien">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="hinhchiase">
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                       
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
