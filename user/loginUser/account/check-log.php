<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <?php
require_once "../incfile/connect.php";
$username = trim(isset($_POST['user']) ? $_POST['user'] : ''); //Trim Loại bỏ khoảng trống 2 bên
$password = trim(isset($_POST['pass']) ? $_POST['pass'] : '');

if (!empty($username) && !empty($password)) {

	$query = mysqli_query($link, "select * from USER where username = '" . $username . "' and password = '" . $password . "'");
	$num_rows = mysqli_num_rows($query);
	if ($num_rows == 0) {
		echo "<font color='red'>Tên đăng nhập hoặc mật khẩu không đúng !</font>";
	} else {
		$query = mysqli_query($link, "select * from USER where username = '" . $username . "' and password = '" . $password . "'");
		echo 'Đăng nhập thành công!! Hệ thống đang chuyển hướng về Trang chủ';
		echo '<script> window.location = "http://localhost:8080/user/library_book.php";
    window.alert("Đăng nhập thành công!"); </script>';
		 
		$row = mysqli_fetch_array($query);
		$_SESSION["user_id"] = $row['user_id'];
		
		exit();

	}
} else {
	echo '<font color="red">Vui lòng nhập đầy đủ thông tin!!!</font>';
}

?>