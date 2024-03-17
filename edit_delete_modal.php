<!-- Edit -->
<div class="modal fade" id="edit_<?php echo str_replace(' ', '_', $row->title); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title text-center" id="myModalLabel">Sửa sách</h4>
			</div>

			<div class="modal-body">
				<div class="container-fluid">
					<form method="POST" action="edit.php">
						<div class="row form-group">
							<div class="col-sm-3">
								<label class="control-label" style="position:relative; top:7px;">Tiêu đề:</label>
							</div>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="title" value="<?php echo $row->title; ?>">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-3">
								<label class="control-label" style="position:relative; top:7px;">Tác giả:</label>
							</div>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="author" value="<?php
																								// Lặp qua mỗi tác giả và hiển thị tên của họ
																								$authors = '';
																								foreach ($row->author as $author) {
																									$authors .= $author . ', '; // Thêm tên tác giả vào chuỗi
																								}
																								// Loại bỏ dấu phẩy cuối cùng
																								echo rtrim($authors, ', ');
																								?>">
							</div>
						</div>
						<div class="row form-group">
							<div class="col-sm-3">
								<label class="control-label" style="position:relative; top:7px;">Năm xuất bản:</label>
							</div>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="year" value="<?php echo $row->year; ?>">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-sm-3">
								<label class="control-label" style="position:relative; top:7px;">Giá:</label>
							</div>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="price" value="<?php echo $row->price; ?>">
							</div>
						</div>



						<div class="row form-group">
							<div class="col-sm-3">

								<label class="control-label" style="position:relative; top:7px;">Ngôn ngữ:</label>
							</div>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="lang" value="<?php echo $row->title['lang']; ?>">
							</div>
						</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Hủy</button>
					<button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Cập nhật</a>
						</form>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- Delete -->
<!--  -->

<div class="modal fade" id="delete_<?php echo str_replace(' ', '_', $row->title); ?>" tabindex="-1" role="dialog" data-target="#delete_<?php echo str_replace(' ', '_', $row->title); ?>" data-toggle="modal" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<center>
					<h4 class="modal-title" id="myModalLabel">Delete Member</h4>
				</center>
			</div>
			<div class="modal-body">
				<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row->firstname . ' ' . $row->lastname; ?></h2>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
				<a href="delete.php?id=<?php echo $row->title; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
			</div>

		</div>
	</div>
</div>