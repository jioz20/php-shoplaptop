
<?php
//xem_arr($_POST);
?>
<form method="POST" action="">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header card-header-icon" data-background-color="purple">
					<i class="material-icons">assignment</i>
				</div>
				<a href="?controller=sanpham&act=add_sanpham_view">
				<div class="card-header card-header-icon" data-background-color="purple">
					<i class="material-icons">library_books</i>
				</div></a>
				<div class="card-content">
					<h4 class="card-title">Sản Phẩm</h4>
					<div class="toolbar">
						
					<div class="material-datatables">

						<div class="row">
							<div class="col-sm-12">
								<table class="table table-striped table-no-bordered table-hover dataTable dtr-inline" cellspacing="0" width="100%" style="width: 100%;" role="grid" aria-describedby="datatables_info">
									<thead>
										<th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 80px;font-family: initial;" aria-label="Position: activate to sort column ascending">ID</th>
										<th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Position: activate to sort column ascending">Tên SP</th>
										<th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Position: activate to sort column ascending">Số Lượng</th>
										<th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Office: activate to sort column ascending">Giá</th>
										<th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Age: activate to sort column ascending">Ngày Tạo</th>
										<th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 133px;font-family: initial;" aria-label="Date: activate to sort column ascending">Trạng Thái</th>
										<th class="disabled-sorting text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Actions: activate to sort column ascending">Actions</th>
										</tr>
									</thead>
									<tbody role="row" class="odd" id="kq">
										<?php
											foreach ( $data[ 'data' ] as $item ) 
												{
													echo 
													'<tr>
													<td class="text-center sorting" tabindex="0">
														'.$item->id_sanpham.'
													</td>
													<td class="text-center sorting" tabindex="0">
														'.$item->ten_sanpham.'
													</td>
													<td class="text-center sorting">
														'.$item->soluong.'
													</td>
													<td class="text-center sorting">
														'.$item->gia.'
													</td>
													<td class="text-center sorting">
														'.$item->ngaytao.'
													</td>
													<td class="text-center sorting">
														'.$item->ten_trangthai.'
													</td>
													<td class="td-actions text-center">
														<a href="san-pham/'.$item->alias.'-'.$item->id_sanpham.'" >	
															<i class="material-icons">edit</i>
														<div class="ripple-container"></div></a>
													
														<a href="?controller=sanpham&act=delete_sanpham&id='.$item->id_sanpham.'" >
															<i class="material-icons">close</i>
														<div class="ripple-container"></div></a>
													</td>
													</tr>
													';
												}
											?>
									</tbody>
								</table>
								<div class="row">
									<!-- <div class="col-sm-5">
										<div class="dataTables_info" id="datatables_info" role="status" aria-live="polite">Showing 11 to 20 of 40 entries</div>
									</div> -->
									<div class="col-sm-7">
										<div class="dataTables_paginate paging_full_numbers" id="datatables_paginate">
											<ul class="pagination">
                                                <!-- <li class="paginate_button active">
													<a href="#" aria-controls="datatables" data-dt-idx="3" tabindex="0">2</a>
												</li> -->
												<li class="paginate_button first" id="datatables_first">
													<a data-page="1" class="page">First </a>
												</li>
												<li class="paginate_button previous" id="datatables_previous">
												<a data-page="1" class="page" id="truoc">Previous </a>
                                                </li>
                                                

                                                    <?php
                                                        for($i=1;$i<=$data['tongsotrang'];$i++)
                                                        {
															echo '
															<li>
																<a data-page="'.$i.'" class="page"> '.$i.'</a> 
															</li>';		

                                                        }
                                                	?>


												<li class="paginate_button next" id="datatables_next">
												<a data-page="2" class="page" id="sau">Next</a>
												</li>
												<li class="paginate_button last" id="datatables_last">
													<a data-page="<?php echo $data['tongsotrang'] ?> " class="page">Last</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
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
</form>

