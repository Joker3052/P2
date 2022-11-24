<?php
require_once('config.php');
include_once('E_e.php');
// function execute($sql) {
// 	//create connection toi database
// 	$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

// 	//query
// 	mysqli_query($conn, $sql);

// 	//dong connection
// 	mysqli_close($conn);
// }

class Model_M
{
	public function __construct()
	{
	}
	public function getAll()
	{
		//create connection toi database
		$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
		$sql = "SELECT * FROM nhanvien INNER JOIN phongban
   ON nhanvien.IDPB = phongban.IDPB";
		//query
		$resultset = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		// $list      = [];
		$i = 0;
		while ($row = mysqli_fetch_array($resultset)) {
			$IDNV = $row['IDNV'];
			$Hoten = $row['Hoten'];
			$Tenpb = $row['Tenpb'];
			$IDPB = $row['IDPB'];
			$Diachi = $row['Diachi'];
			$Mota = $row['Mota'];
			while ($i != $IDNV) {
				$i++;
			}
			$MList[$i++] = new Entity_e($IDNV, $Hoten, $IDPB, $Diachi, $Tenpb, $Mota);
		}
		return $MList;
	}
	public function getphongbanDetail($stidIDPB)
	{
		$allphongban = $this->getAll();
		//   return $allphongban[$stidIDPB];

	}
	public function getnhanvienDetail($stidIDNV)
	{
		$allnhanvien = $this->getAll();
		return $allnhanvien[$stidIDNV];
	}

	public function searchHoten()
	{
		$s_c = '';
		if (isset($_GET['c'])) {
			$s_c = $_GET['c'];
		}
		if ($s_c == 1) {
			$sql =  'SELECT nhanvien.IDNV,nhanvien.Hoten,phongban.Tenpb,nhanvien.Diachi from nhanvien,phongban
                            where nhanvien.IDPB = phongban.IDPB AND Hoten like "%' . $_GET['str'] . '%"';
		}
		if ($s_c == 2) {
			$sql =  'SELECT nhanvien.IDNV,nhanvien.Hoten,phongban.Tenpb,nhanvien.Diachi from nhanvien,phongban
                            where nhanvien.IDPB = phongban.IDPB AND Diachi like "%' . $_GET['str'] . '%"';
		}
		//create connection toi database
		if (isset($_GET['str']) && $_GET['str'] != '') {
			$str = $_GET['str'];
			$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
			$resultset = mysqli_query($conn, $sql) or die(mysqli_error($conn));
			if (mysqli_num_rows($resultset) > 0) {
				$i = 0;
				while ($row = mysqli_fetch_array($resultset)) {
					$IDNV = $row['IDNV'];
					$Hoten = $row['Hoten'];
					$Tenpb = $row['Tenpb'];
					$Diachi = $row['Diachi'];
					while ($i != $IDNV) {
						$i++;
					}
					$SList[$i++] = new Entity_s($IDNV, $Hoten, $Diachi, $Tenpb);
				}
				return $SList;
			} else {
?>
				<div class="" style="background-color: #DC143C; color:black;"> không tồn tại</div>
<?php
			}
		}
	}
	//ADMIN
	public function getAllAdmmin()
	{
		//create connection toi database
		$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
		$sql = "select * from admin";
		//query
		$resultset = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		// $list      = [];
		$i = 0;
		while ($row = mysqli_fetch_array($resultset)) {
			$id = $row['id'];
			$nickname = $row['nickname'];
			$username = $row['username'];
			$password = $row['password'];

			while ($i != $id) {
				$i++;
			}
			$MList[$i++] = new Entity_a($id, $nickname, $username, $password);
		}
		return $MList;
	}

	//UPDATE
	public function getUpdate()
	{
		$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
		$s_Hoten = $s_IDPB = $s_Diachi = '';

		if (!empty($_POST)) {
			$s_id = '';

			if (isset($_POST['Hoten'])) {
				$s_Hoten = $_POST['Hoten'];
			}

			if (isset($_POST['IDPB'])) {
				$s_IDPB = $_POST['IDPB'];
			}

			if (isset($_POST['Diachi'])) {
				$s_Diachi = $_POST['Diachi'];
			}

			if (isset($_POST['id'])) {
				$s_id = $_POST['id'];
			}
			function remove_special_character($string)
			{

				$t = $string;

				$specChars = array(
					'!' => '',    '"' => '',
					'#' => '',    '$' => '',    '%' => '',
					'&' => '',    '\'' => '',   '(' => '',
					')' => '',    '*' => '',    '+' => '',
					',' => '',    '₹' => '',    '.' => '',
					'/-' => '',    ':' => '',    ';' => '',
					'<' => '',    '=' => '',    '>' => '',
					'?' => '',    '@' => '',    '[' => '',
					'\\' => '',   ']' => '',    '^' => '',
					'_' => '',    '`' => '',    '{' => '',
					'|' => '',    '}' => '',    '~' => '',
					'-----' => '-',    '----' => '-',    '---' => '-',
					'/' => '',    '--' => '-',   '/_' => '-',

				);

				foreach ($specChars as $k => $v) {
					$t = str_replace($k, $v, $t);
					//$k: kí tự cần thay thế
					//$v: kí tự được thay thế
					//$t: biến ban đầu
				}

				return $t;
			}
			$s_Hoten = remove_special_character($s_Hoten);
			$s_IDPB      = remove_special_character($s_IDPB);
			$s_Diachi  = remove_special_character($s_Diachi);
			$s_id       = remove_special_character($s_id);
			if ($s_id != '') {
				//update
				$sql = mysqli_query($conn, "update nhanvien set Hoten = '$s_Hoten', IDPB = '$s_IDPB', Diachi = '$s_Diachi' where IDNV = " . $s_id);
			} else {
				//insert
				$sql = mysqli_query($conn, "insert into nhanvien(Hoten, IDPB, Diachi) value ('$s_Hoten', '$s_IDPB', '$s_Diachi')");
			}

			// echo $sql;

			// execute($sql);

			header('Location: update.php');
			die();
		}

		$id = '';
		if (isset($_GET['idEdit'])) {
			$id          = $_GET['idEdit'];
			$count = 0;
			//$allnhanvien = $this->getAll();
			$std = $this->getnhanvienDetail($id);
			if (($std->IDNV) == $id) {
				$count++;
				$s_Hoten = $std->Hoten;
				$s_IDPB      = $std->IDPB;
				$s_Diachi  = $std->Diachi;
				
				// echo 'haha';

			}
			// echo 'hh';
			// echo $std->Hoten;
			// echo $std->IDNV;
			// echo $id;
			if ($count == 0) {
				$id = '';
			}
			
         return $std;
			// $sql         = 'select * from nhanvien where IDNV = '.$id;
			// $studentList = executeResult($sql);
			// if ($studentList != null && count($studentList) > 0) {
			// 	$std        = $studentList[0];
			// 	$s_Hoten = $std['Hoten'];
			// 	$s_IDPB      = $std['IDPB'];
			// 	$s_Diachi  = $std['Diachi'];
			// } else {
			// 	$id = '';
			// }
		}
	}

	public function getDelete()
	{
		// echo'haha';
		$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
		if (isset($_POST['idDel'])) {
			$id = $_POST['idDel'];
		
			$sql = mysqli_query($conn,'delete from nhanvien where IDNV = '.$id);
			echo 'Xóa nhân viên thành công';
		}
		else
		{
			// $sql = 'delete from nhanvien';
			// execute($sql);
			// echo 'Đã xóa tất cả';
		}

	}
}


?>