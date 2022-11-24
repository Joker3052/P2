<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>nhanvien</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</head>

<body>
	<div class="container">
		<div class="panel panel-primary">
			<?php
			if (isset($_SESSION['login'])) {
			?>
				<a class="btn btn-success" href="logout.php">logout</a>
				<!-- <a href="logout.php">logout</a> -->
			<?php
			} else {
			?>
				<a class="btn btn-success" href="login.php?linklogin=1">login</a>
				<!-- <a href="login.php">login</a> -->

			<?php
			}
			?>

			<?php
			if (isset($_SESSION['login'])) {
				echo " <b>" . $_SESSION['login'] . "</b>";
			} else { ?>
				<div class="badge bg-primary text-wrap" style="width: 6rem;">
					Please login
				</div>
			<?php }
			?>
			<div class="panel-heading">
				Thông tin nhân viên chi tiết
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Họ và Tên</th>
							<th>Phòng Ban</th>
							<th>Địa chỉ</th>
						</tr>
					</thead>
					<tbody>
						<?php
							echo '<tr>
			<td>' . $nhanvien->Hoten . '</td>
			<td>' . $nhanvien->Tenpb . '</td>
			<td>' . $nhanvien->Diachi . '</td>
			<td><button class="btn btn-info" onclick=\'window.open("nhanvien.php","_self")\'>back</button></td>
		</tr>';
						

						// echo 'IDNV:' . $nhanvien->IDNV. '<br/>';
						// echo 'Hoten:' . $student->Hoten. '<br/>';
						// echo 'IDPB:' . $student->IDPB . '<br/>';
						// echo 'Diachi:' . $student->Diachi . '<br/>';
						?> </tbody>
				</table>
			</div>
		</div>
	</div>


</body>

</html>