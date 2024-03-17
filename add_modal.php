<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Bổ sung sách</h4>
				</center>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<form method="POST" action="add.php">

						<div class="row form-group">
							<div class="col-sm-3">
								<label class="control-label" style="position:relative; top:7px;">Tiêu đề:</label>
							</div>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="title">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-3">
								<label class="control-label" style="position:relative; top:7px;">Tác giả:</label>
							</div>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="author">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-3">
								<label class="control-label" style="position:relative; top:7px;">Năm xuất bản:</label>
							</div>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="year">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-sm-3">
								<label class="control-label" style="position:relative; top:7px;">Giá:</label>
							</div>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="price">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-3">
								<label class="control-label" style="position:relative; top:7px;">Danh mục:</label>
							</div>
							<div class="col-sm-9">
								<select class="form-control" id="category" name="category">
									<option value="">Chọn một category</option>
									<option value="web">web</option>
									<option value="children">children</option>
									<option value="cooking">cooking</option>
									<!-- Thêm các option khác cho các category khác -->
								</select>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-3">
								<label class="control-label" style="position:relative; top:7px;">Ngôn ngữ:</label>
							</div>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="lang">
							</div>
						</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Hủy</button>
				<button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Lưu dữ liệu</a>
					</form>
			</div>

		</div>
	</div>
</div>