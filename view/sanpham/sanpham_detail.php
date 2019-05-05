 <?php
  // xem_arr($_POST);
//    xem_arr($_FILES['danhsachchitiet']['error']['0']);
  // xem_arr($_FILES);
  //xem_arr($data['chitietsanpham']);
 ?>
 <style>
    .btn.btn-round, .navbar .navbar-nav>li>a.btn.btn-round
    {
        border-radius: 4px;
    }
</style>
<form method="POST" action="?controller=sanpham&act=update_sanpham&id=<?=@$data['chitietsanpham']->id_sanpham?>"   enctype="multipart/form-data" id="fupdate">
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-content">
                        <div class="form-group label-floating">
                            <label class="control-label">ID</label>
                            <input type="text" name="id_sanpham" value="<?=@$data['chitietsanpham']->id_sanpham?>" class="form-control">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Tên Sản Phẩm</label>
                            <input type="text" name="ten_sanpham" value="<?=@$data['chitietsanpham']->ten_sanpham?>" class="form-control">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Alias</label>
                            <input type="text" name="alias" value="<?=@$data['chitietsanpham']->alias?>" class="form-control">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">gia</label>
                            <input type="text" name="dongia" value="<?=@$data['chitietsanpham']->gia?>" class="form-control">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Số Lượng</label>
                            <input type="text" name="soluong" value="<?=@$data['chitietsanpham']->soluong?>" class="form-control">
                        </div>
                        <div class="form-group date">
                            <label class="control-label">Ngày Tạo</label>
                            <input type="text" id="datetimepicker1" name="ngaytao"   class=" form-control datetimepicker" value="<?php echo @$data['chitietsanpham']->ngaytao ?>"      />
                            <?php echo @$data['chitietsanpham']->ngaytao ?>
                        </div>

                        <div class="form-group ">
                            <label class="control-label">Ngày Cập Nhật Cuối</label>
                            <input type="text" id="datetimepicker2" name="ngaycapnhatcuoi" class="form-control datetimepicker" value="<?php echo@$data['chitietsanpham']->ngaycapnhatcuoi ?>"  />
                          
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Mô Tả</label>
                            <input type="text" name="mota" value="<?=@$data['chitietsanpham']->mota?>" class="form-control">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Từ Khoá</label>
                            <input type="text" name="tukhoa" value="<?=@$data['chitietsanpham']->tukhoa?>" class="form-control">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Tìm Kiếm</label>
                            <input type="text" name="timkiem" value="<?=@$data['chitietsanpham']->timkiem?>" class="form-control">
                        </div>    
                            <div class="form-group label-floating">
                            <label class="control-label">Nội Dung Chi Tiết</label>
                            <input type="text" name="noidungchitiet" value="<?=@$data['chitietsanpham']->noidungchitiet?>" class="form-control">
                        </div>
                        <div class="form-group label-floating">
                            <label class="control-label">Nội Dung Tóm Tắt</label>
                            <input type="text" name="noidungtomtat" value="<?=@$data['chitietsanpham']->noidungtomtat?>" class="form-control">
                        </div>

                    
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-content">
                        
                            <div class="form-group label-floating">
                            <label class="control-label">Nhóm Sản Phẩm</label>
                            <select  class="selectpicker" name="id_nhomsanpham" data-style="btn btn-primary btn-round" style="border-radius: 4px" title="Single Select" data-size="7" tabindex="-98">
                                    <option class="bs-title-option" value="">Single Select</option>
                                    <option  disabled="" selected="">Nhóm Sản Phẩm</option>
                                    <?php
                                        foreach(@$data['load_danhsach_nhomsanpham'] as $k=>$v)
                                        {



                                    ?>
                                    <option   value="<?php echo @$v->id_nhomsanpham ?>" <?php if($v->id_nhomsanpham==$data['chitietsanpham']->id_nhomsanpham) echo "selected" ?>>
                                        <?php echo $v->ten_nhomsanpham ?>
                                    </option>
                                    <?php
                                        }
                                    ?>
                                </select>
                        </div>
                        
                            <div class="form-group label-floating">
                                <label class="control-label">Nhà Cung Cấp</label>
                                <select  class="selectpicker" name="id_nhacungcap"  data-style="btn btn-primary btn-round" style="border-radius: 4px" title="Single Select" data-size="7" tabindex="-98">
                                        <option class="bs-title-option" value="">Single Select</option>
                                        <option  disabled="" selected="">Nhà Cung Cấp</option>
                                        <?php
                                            foreach(@$data['nhacungcap'] as $k=>$v)
                                            {
                                        ?>
                                        <option   value="<?php echo $v->id_nhacungcap ?>" <?php if($v->id_nhacungcap==$data['chitietsanpham']->id_nhacungcap) echo "selected" ?>>
                                            <?php echo $v->ten_nhacungcap ?>
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
                                        <option   value="<?php echo @$v->id_trangthai ?>" <?php if(@$v->id_trangthai==$data['chitietsanpham']->trangthai) echo "selected" ?>>
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
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-content">
                       
                            <div class="form-group label-floating">
                                <label class="control-label">Hình Đại Diện Sản Phẩm</label>
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src="<?=domain.'file/'.@$data['chitietsanpham']->hinhdaidiensanpham?>" alt="...">
                                        <input type="text" name="hinhdaidien"  disable value="<?=@$data['chitietsanpham']->hinhdaidiensanpham?>" name="hinhdaidien">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="hinhdaidien">
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                       
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-content">
                       
                            <div class="form-group label-floating">
                                <label class="control-label">Hình chia sẽ</label>
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src="<?=domain.'file/'.@$data['chitietsanpham']->hinhchiase?>" alt="...">
                                        <input type="text" name="hinhchiase"  disable value="<?=@$data['chitietsanpham']->hinhchiase?>" name="hinhdaidien">
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
            <div class="card-header card-header-icon" data-background-color="rose">
                <?php echo @$data['chitietsanpham']->ten_sanpham ?>
            </div>
            <div class="card-header card-header-icon" data-background-color="rose">
                Add Picture
            </div>
            <h4 class="card-title">Danh sách chi tiết hình <?php echo @$data['chitietsanpham']->ten_sanpham ?></h4>
            <div class="card-content">
                <div class="table-responsive">
                    <table class="table table-shopping">
                        <thead>
                            <tr>
                                <th class="text-center"></th>
                                <th>Link</th>
                                <th class="text-right">Action</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $str=@$data['chitietsanpham']->danhsachchitiet;
                            xem_arr($str);
                            $data1=explode('#',$str);
                            xem_arr($data1);
                            for($i=0;$i<count($data1);$i++)
                            {

                        
                        ?>
                            <tr>
                                <td>
                                    <!-- <div class="img-container">
                                    <img src="<?=domain.'file/'.@$data1[$i] ?>" alt="...">
                                    <input type="file" name="danhsachchitiet">
                                    
                                    </div> -->
                                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail">
                                            <img src="<?=domain.'file/'.@$data1[$i] ?>" alt="...">
                                            <input  type="hidden" name="danhsachchitiet"   value="<?=$data1[$i]?>" name="hinhdaidien">
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                        <div>
                                            <span class="btn btn-rose btn-round btn-file">
                                                <span class="fileinput-new">Select image</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="file" multiple name="danhsachchitiet[]">
                                            </span>
                                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                        </div>
                                    </div>
                                </td>

                                <td class="td-name">
                                    <a href="#"><?php echo $data1[$i] ?></a>
                                    <br>
                                    <small>by Admin 1</small>
                                </td>
                                <td class="td-actions">
                                    <button type="button" rel="tooltip" data-placement="left" title="" class="btn btn-simple" data-original-title="Remove item">
                                        <i class="material-icons">close</i>
                                    </button>
                                
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

    <div class="col-md-12">
        <div class="card">
            <div class="card-content text-center">
                    <div class="form-group form-button">
                    <!-- <button type="submit" value="" class="btn btn-fill btn-rose"> -->
                        <a href="?controller=sanpham&act=danhsach_sanpham" class="btn btn-fill btn-rose" style="color:white">Back</a>
                    <!-- </button> -->
                        <!-- <button type="submit"   name="update" value="1" class="btn btn-fill btn-rose">Update</button> -->
                        <a   class="btn btn-fill btn-rose" onclick="fsubmit()" id="update" style="color:white">Update</a>
                    <!-- href="?controller=sanpham&act=update_sanpham&id=<?=@$data['chitietsanpham']->id_sanpham?>"  -->
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
