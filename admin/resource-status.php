<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php session_start(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Thống kê và báo cáo  - VP production</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>
		<!-- jQuery file -->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.tabify.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/jquery/jquery-2.1.4.min.js"></script>
		<script src="js/homeScript.js"  type="text/javascript" charset="utf-8" async defer></script>
		<script type="text/javascript">

		var $ = jQuery.noConflict();
		$(function() {
		});
		</script>
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
              <li><a href="statistic-report.php" class = "selected">Thống kê và báo cáo</a></li>
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
            <h2><center>HIỆN TRẠNG TÀI NGUYÊN</center></h2>
            <table id="rounded-corner">
              <thead>
                <tr>
                  
                  <th>Mã sách</th>
                  <th>Tên sách</th>
                  <th>Tác giả</th>
                  <th>Chủ đề</th>
                  <th>Số lượng</th>
                  <th>Còn lại</th>
                </tr>
              </thead>
              
              <tbody>
                <tr class="odd">
                  <td>1</td>
                  <td>Lorem</td>
                  <td>abcd</td>
                  <td>Tin học</td>
                  <td>10</td>
                  <td>1</td>
                  
                </tr>
                


                
              </tbody>
            </table>
						

					</div>
				</div><!-- end of right content-->


				<div class="sidebar" id="sidebar">
          <h2>Thống kê và báo cáo</h2>
          <ul>
            <li><a href="resource-status.php" class="selected">Hiện trạng tài nguyên</a></li>
            <li><a href="development-chart.php">Biểu đồ phát triển</a></li>
            <li><a href="borrow-total.php">Tổng ca mượn sách</a></li>
            <li><a href="compensation-bill.php">Hóa đơn đền sách</a></li>
            <li><a href="request-list.php">Danh sách yêu cầu</a></li>
            
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
