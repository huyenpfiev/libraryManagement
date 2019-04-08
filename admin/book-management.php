<?php 
session_start();
if(!isset($_SESSION['admin_id'])){
	echo "<script>location.href='login.php'</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Quản lý sách thư viện - VP production</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
		<!-- jQuery file -->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.tabify.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/jquery/jquery-2.1.4.min.js"></script>
		
		<script type="text/javascript">

		
		</script>
	</head>
	<body>
	
		<div id="panelwrap">
			<div class="header">
	    	<div class="title"><a href="#">Thanh Huyền ADMIN</a></div>
 					<div class="header_right">Welcome Admin,
						<a href="#" class="messages">Messages</a>
						<a href="logOutProcessing.php" class="logout">Logout</a>
					</div>
 					<div class="menu">
	    			<ul>
	    				<li><a href="book-management.php" class="selected">Quản lý sách thư viện</a></li>
							<li><a href="book-borrow-management.php">Quản lý mượn sách</a></li>
		    			<li><a href="user-management.php" >Quản lý trang web</a></li>
	    				<li><a href="account-management.php">Quản lý tài khoản</a></li>
	    				<li><a href="statistic-report.php">Thống kê và báo cáo</a></li>
	    				<li><a href="information.php">Thông tin</a></li>
	    				
	    		</ul>
	    	</div>
			</div>

			<!-- Render Body -->

			<div class="center_content">
				 <div id="right_wrap">
					<div id="right_content">
						

					</div>
				</div>

				<div class="sidebar" id="sidebar">
					<h2>Quản lý sách thư viện</h2>
					<ul>
						<li><a href="document-show.php">Xem tài liệu</a></li>
						<li><a href="document-add.php">Thêm mới tài liệu</a></li>
						
						
						
					</ul>

					<h2>Thông tin admin</h2>
					<ul>
						<li><a href="personal-information.php">Thông tin cá nhân</a></li>
						<li><a href="pass-change.php">Đổi mật khẩu</a></li>
					</ul>
				</div>


				<div class="clear">
				</div>
			</div>


			<div class="footer">
			Create By:
			<a href="https:fb.com/viet.phan.18" rel="designer">Việt Phan</a>
			</div>
		</div>
	</body>
</html>
