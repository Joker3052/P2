<?php
// require_once('dbhelper.php');
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
				Thông tin nhân viên
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>STT</th>
							<th>Họ và Tên</th>
							<th>Phòng Ban</th>
							<th>Địa chỉ</th>
							<th>Detail</th>
						</tr>
					</thead>
					<tbody>
						<?php
                        $stidIDPB = $_GET['stidIDPB'];
 						$index = 1;
						foreach ($phongban as $IDNV => $stdnhanvien) {                     
            if($stdnhanvien->IDPB==$stidIDPB){
							echo '<tr>
			<td>' . ($index++) . '</td>
			<td>' . $stdnhanvien->Hoten . '</td>
			<td>' . $stdnhanvien->Tenpb . '</td>
			<td>' . $stdnhanvien->Diachi. '</td>
			<td><button class="btn btn-info" onclick=\'window.open("nhanvien.php?stidIDNV='.$stdnhanvien->IDNV.'","_self")\'>Xem chi tiết</button></td>
		</tr>';
						}
                    }
			// 			foreach ($student as $IDNV => $st)
			// {
			// 	echo '<tr><td><a href="index1.php?stid='.$st->IDNV.'">detail</a></td><td>'.$st->IDNV.'</td><td>'.$st->Hoten.'</td><td>'.$st->IDPB.'</td><td>'.$st->Diachi.'</td></tr><br>';
			// }
						?> </tbody>
				</table>
			</div>
		</div>
	</div>


</body>

</html>