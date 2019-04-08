<?php 
session_start();
if(!isset($_SESSION['admin_id'])){
	echo "<script>location.href='login.php'</script>";
}
?>
<?php
      $link=mysqli_connect("localhost","root","","library_management") or die ("Khong the ket noi");
      mysqli_set_charset($link,'UTF8');
      $admin_id=$_SESSION['admin_id'];
      // var_dump($admin_id); die;
      $sql = "select * from ADMIN where admin_id='$admin_id'";

      $result=mysqli_query($link, $sql);
      $row = mysqli_fetch_assoc($result);



      if (isset($_POST['edited-info-but'])) {
      	$oldEmail = $_POST['old-email'];
      	$newEmail=$_POST['new-email'];
      	$confirmEmail=$_POST['confirm-new-email'];

      	if(($oldEmail=='')||($newEmail=='')||($confirmEmail==''))
      	{
      		echo "<script> alert('Vui lòng nhập đầy đủ!'); </script>";
      	}
      	else if($oldEmail!=$row['email'])
      	{
      		echo "<script> alert('Email cũ không đúng!'); </script>";
      	}
      	else if($newEmail != $confirmEmail)
      	{
      		echo "<script> alert('Email xác nhận không khớp với email mới!'); </script>";
      	}
      	else
      	{
      		$sqlUpdateEmail = " UPDATE admin SET email ='" . $_POST['new-email'] . "' 
      			WHERE admin_id ='" . $admin_id. " ' ";
      		    $result=mysqli_query($link, $sqlUpdateEmail);

      		    if ($result == 0) {
      		    	echo "<script> alert('Lỗi kết nối cơ sở dữ liệu!'); </script>";
      		    } else {
      		    	echo "<script> alert('Thay đổi email thành công');
      		    				location.href='personal-information.php';
      		    	 </script>";
      		    }
      	}
      }
      		
      		
      	
							      
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Thông tin - VP production</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
		<!-- jQuery file -->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.tabify.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/jquery/jquery-2.1.4.min.js"></script>
		<script src="js/script.js"  type="text/javascript" charset="utf-8" async defer></script>
		

	</head>
	<body>
		<div id="panelwrap">
			<div class="header">
	    	<div class="title"><a href="#">Việt Phan ADMIN</a></div>
 					<div class="header_right">Welcome Admin,
						<a href="#" class="messages">Messages</a>
						<a href="logOutProcessing.php" class="logout">Logout</a>
					</div>
 					<div class="menu">
	    			<ul>
							<li><a href="book-management.php">Quản lý sách thư viện</a></li>
							<li><a href="book-borrow-management.php">Quản lý mượn sách</a></li>
		    			<li><a href="user-management.php"  >Quản lý trang web</a></li>
	    				<li><a href="account-management.php">Quản lý tài khoản</a></li>
	    				<li><a href="statistic-report.php">Thống kê và báo cáo</a></li>
	    				<li><a href="information.php" class = "selected">Thông tin</a></li>
	    		</ul>
	    	</div>
			</div>

			<!-- Render Body -->

			<div class="center_content">
				<div id="right_wrap">
					<div id="right_content">

							<div>
				            <h2><center>CHỈNH SỬA EMAIL</center></h2>
				        <form method="post">
				            <table  style="margin:0px auto" width="350" height="120px" border="0">
				              
				              	<tr>
				                  <th>Email cũ:</th>
				                  <td><input type="text" name="old-email" value="<?php echo isset($oldEmail) ? $oldEmail : ''; ?>"></td>
				                  
				                </tr>
				                <tr>
				                  <th>Email mới:</th>
				                  <td><input type="text" name="new-email" value="<?php echo isset($newEmail) ? $newEmail : ''; ?>"></td>
				                 
				                </tr>
				                <tr>
				                  <th>Xác nhận email mới:</th>
				                  <td><input type="text" name="confirm-new-email" value="<?php echo isset($confirmEmail) ? $confirmEmail : ''; ?>"></td>
				                  
				              </tr>
				              
				              
				            </table>
				            <div>
				            
				             <table style="margin:0px auto">
				             	<tr>
				             		<td>
				              <!-- <a href="#" name="edited-info-but" class="button green" >Lưu</a>
				              <a href="#" class="button red">Hủy</a> -->
				              <button type="submit" name="edited-info-but" class="button green">Lưu</button>
				              <button type="submit" class="button red"> Hủy</button>
						          </td>
						      </tr>
				             </table>
				           
				            </div>
						</form>
							
				        </div>

					</div>
				</div><!-- end of right content-->


				<div class="sidebar" id="sidebar">
					
					
					<h2>Thông tin admin</h2>
					<ul>
						<li><a href="personal-information.php" class = "selected">Thông tin cá nhân</a></li>
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
