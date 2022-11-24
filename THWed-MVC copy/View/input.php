<!DOCTYPE html>
<html>
<head>
	<title>Registation Form * Form Tutorial</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Nhân Viên</h2>
			</div>
			<div class="panel-body">
				<form method="post">
					<div class="form-group">
						
						<?php $s_Hoten = $s_IDPB = $s_Diachi =$id= ''; 
						if (isset($_GET['idEdit']))
						{
							$id = $nhanvien->IDNV;
							$s_Hoten = $nhanvien->Hoten;
						$s_IDPB      = $nhanvien->IDPB;
						$s_Diachi  = $nhanvien->Diachi;
						}
						?>
					  <label for="usr">Name:</label>
					  <input type="number" name="id" value="<?=$id?>" style="display: none;">
					  <input required="true" type="text" class="form-control" id="usr" name="Hoten" value="<?=$s_Hoten?>">
					</div>
					<div class="form-group">
						<label for="birthday">IDPB:</label>
						<select required="true"  class="form-control" id="IDPB" name="IDPB" value="<?= $s_IDPB ?>">
							<option value="1">Ban kinh tế</option>
							<option value="2">Ban kế toán</option>
							<option value="3">Ban chính trị</option>
						</select>
					</div>
					<div class="form-group">
					  <label for="Diachi">Diachi:</label>
					  <input required="true" type="text" class="form-control" id="Diachi" name="Diachi" value="<?=$s_Diachi?>">
					</div>
					<button class="btn btn-success">Save</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>