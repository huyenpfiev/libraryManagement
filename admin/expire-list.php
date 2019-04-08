<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Quản lý mượn sách - VP production</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
		<!-- jQuery file -->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.tabify.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/jquery/jquery-2.1.4.min.js"></script>
		<script src="js/homeScript.js"  type="text/javascript" charset="utf-8" async defer></script>
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
	    				<li><a href="book-management.php" >Quản lý sách thư viện</a></li>
							<li><a href="book-borrow-management.php" class="selected">Quản lý mượn sách</a></li>
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
						<div class="toogle_wrap">
			              <center>
			              <input type="text" name="" value="" id = "keyWord">
			              <button type="button" class="searchObjectBt">Search</button>
			            </center>
									</div>
			            <h2><center>DANH SÁCH SÁCH SẮP QUÁ HẠN</center></h2>
			            <table id="rounded-corner">
			              <thead>
			                <tr>
			                  
			                  <th>Mã đơn</th>
			                  <th>Người mượn</th>
			                  <th>Sách mượn</th>
			                  <th>Người cho mượn</th>
			                  <th>Ngày mượn</th>
			                  <th>Hạn trả</th>
			                  <th>Đã gia hạn</th>
			                  <th>Cảnh báo</th>
			                </tr>
			              </thead>
			              
			              <tbody>
			                <tr class="odd">
			                  <td>1</td>
			                  <td>Lorem</td>
			                  <td>Tin học</td>
			                  <td>Nguyện</td>
			                  <td>1/2/2017</td>
			                  <td>1/5/2017</td>
			                  <td><input type="checkbox"></td>
			                  <td><input type="checkbox"></td>
			                 
			                  
			                </tr>
			                


			                
			              </tbody>
			            </table>

					</div>
				</div>

				<div class="sidebar" id="sidebar">
					<h2>Quản lý mượn sách</h2>
					<ul>
						<li><a href="borrow-list.php" >Danh sách đơn mượn</a></li>
						<li><a href="expire-list.php" class="selected">Danh sách sách sắp quá hạn</a></li>
						<li><a href="expired-list.php">Danh sách sách đã hết hạn</a></li>
						<li><a href="handling.php">Xử lý</a></li>
						
						
						
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
