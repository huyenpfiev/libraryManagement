<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Quản lý tài khoản - VP production</title>
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
	    				<li><a href="account-management.php" class = "selected">Quản lý tài khoản</a></li>
	    				<li><a href="statistic-report.php">Thống kê và báo cáo</a></li>
	    				<li><a href="information.php">Thông tin</a></li>
	    		</ul>
	    	</div>
			</div>

			<!-- Render Body -->

			<div class="center_content">
				<div id="right_wrap">
					<div id="right_content">
						<div class="tab">
							<button class="userTab"><strong>Tài khoản bạn đọc</strong></button> 
							
							<button class="adminTab"><strong>Tài khoản quản trị viên</strong></button> 
							
					</div>
					<div class="tabcontent" id="user">
				            <h2><center>THÊM TÀI KHOẢN BẠN ĐỌC</center></h2>
				            
				            <table  style="margin:0px auto" width="400" height="200px" border="0">
				              
				              	<tr>
				                  <th>MSSV:</th>
				                  <td><input id="mssv3" type="text"></td>
				                </tr>
				                <tr>
				                  <th>Mã thẻ bạn đọc:</th>
				                  <td><input id="mathe3" type="text"></td>
				                </tr>
				                <tr>
				                  <th>Họ và tên:</th>
				                  <td><input id="ten3" type="text"></td>
				              </tr>
				              <tr>
				                  <th>Lớp:</th>
				                  <td><input id="lop3" type="text"></td>
				              </tr>
				              <tr>
				                  <th>Khoa:</th>
				                  <td><input id="khoa3" ype="text"></td>
				              </tr>
				              
				                <tr>
				                  <th>SĐT:</th>
				                  <td><input id="sdt3" type="text"></td>
				                </tr>
				                <tr>
				                  <th>Email:</th>
				                  <td><input id="email3" type="text"></td>
				                </tr>
				              
				            </table>

							<div>
				             <table style="margin:0px auto">
				             	<tr>
				             		<td>
				              <a href="#" class="button green" id="user-add-but">Thêm</a>
				              <a href="account-add.php" class="button red" >Hủy</a>
						          </td>
						      </tr>
				             </table>
				           
				            </div>
				        </div>
				        
						<!-- =================================== -->
						<div class="tabcontent" id="admin">
				            <h2><center>THÊM TÀI KHOẢN QUẢN TRỊ VIÊN</center></h2>
				            
				            <table  style="margin:0px auto" width="400" height="140px" border="0">
				              
				                <tr>
				                  <th>Tên thủ thư:</th>
				                  <td><input id="ten4" type="text"></td>
				              </tr>
				              <tr>
				                  <th>Mã thẻ:</th>
				                  <td><input id="mathe4" type="text"></td>
				                </tr>
				                <tr>
				                  <th>SĐT:</th>
				                  <td><input id="sdt4" type="text"></td>
				                </tr>
				                <tr>
				                  <th>Email:</th>
				                  <td><input id="email4" type="text"></td>
				                </tr>
				              
				            </table>

							<div>
				             <table style="margin:0px auto">
				             	<tr>
				             		<td>
				              <a href="#" class="button green" id="admin-add-but">Thêm</a>
				              <a href="account-add.php" class="button red" >Hủy</a>
						          </td>
						      </tr>
				             </table>
				           
				            </div>
				        </div>

						

					</div>
				</div><!-- end of right content-->


				<div class="sidebar" id="sidebar">
					<h2>Quản lý tài khoản</h2>
					<ul>
						<li><a href="account-search.php" >Tìm kiếm / chỉnh sửa tài khoản</a></li>
						<li><a href="account-add.php" class = "selected">Thêm tài khoản</a></li>
						<li><a href="right-edit.php">Chỉnh sửa quyền truy cập</a></li>
						
						
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
	<script>

			$(document).ready(function() {
			   
			    $(".tabcontent").hide();
			    
			    $(".tabcontent:first").show();
			    $(".userTab").css('background','#00cc66');
			 });
			    $(".userTab").click(function() {
			   
			        $("#user").show();
			       
			        $("#admin").hide();
			        $(".userTab").css('background','#00cc66');
			        $(".adminTab").css('background','inherit');
			           
			    });
			    $(".adminTab").click(function() {
			   
			        $("#admin").show();
			       
			        $("#user").hide();
			        $(".userTab").css('background','inherit');
			        $(".adminTab").css('background','#00cc66');
			           
			    });
			
		</script>
</html>
