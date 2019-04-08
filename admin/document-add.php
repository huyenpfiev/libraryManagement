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
						<div class="tab">
							<button class="userTab"><strong>Thêm sách mới</strong></button> 
							
							<button class="adminTab"><strong>Thêm đầu sách</strong></button> 
							
					</div>
					<div class="tabcontent" id="user">
						<fieldset>
							<legend>Thông tin sách</legend>
							<table  style="margin:20px auto" width="800" border="0">
                              <tr>
                                <td class="tdleft">Mã số sách:</td>
                                <td><input type="text" ></td>
                                <td class="tdleft">Ngày nhập:</td>
                                <td>
                                    <input type="datetime-local">
                                </td>
                                
                              </tr>
                              <tr>
                                <td class="tdleft">Tên sách:</td>
                                  <td><input type="text" ></td>
                                  <td class="tdleft">Giá tiền:</td>
                                  <td>
                                    <input type="text">
                                </td>
                            </tr>
                              <tr>
                             
                                <td class="tdleft">Tên tác giả:</td>
                                  <td>
                                    <input type="text" >
                                   </td>
                                    <td class="tdleft">Thông tin khác:</td>
                                  <td><input type="text"></td>
                              </tr>
                              <tr>
                             
                                <td class="tdleft">Chủ đề:</td>
                                  <td>
                                    <input type="text" >
                                   </td>
                                    
                              </tr>
                              <tr>
                             
                                <td class="tdleft">Tóm tắt:</td>
                                  <td>
                                    <input type="textarea" >
                                   </td>
                                   <td class="tdleft">Số trang:</td>
                                  <td><input type="text"></td>
                                
                          
                              </tr>
                              <tr>
                             
                                <td class="tdleft">Phân loại:</td>
                                  <td>
                                    <select name="priority" >
	                                  <?php 
	                                    for($i=1;$i<=10;$i++)
	                                    {
	                                      ?>
	                                      <option value="<?php echo $i;?>"><?php echo $i;?></option>
	                                  <?php } ?>
                                  
                                </select>
                                   </td>
                                    <td class="tdleft">Nhà xuất bản:</td>
                                  <td><input type="text"></td>
                              </tr>
                              
                          </table>
                          <table style="margin:0px auto">
				             	<tr>
				             		<td>
				              <a href="#" class="button green" >Lưu</a>
				              <a href="#" class="button red">Làm mới</a>
						          </td>
						      </tr>
				             </table>
						</fieldset>
						<center>
							<br>
						<a href="#">Bạn có thể Import File Word tại đây</a>
						</center>
					</div>

					<!-- ==================== -->
					<div class="tabcontent" id="admin">
						<fieldset>
							<legend>Thông tin đầu sách</legend>
							<table  style="margin:20px auto" width="800" border="0">
                              <tr>
                                <td class="tdleft">Mã số sách:</td>
                                <td><input type="text" ></td>
                            </tr>
                            <tr>
                            	<td class="tdleft">Mã số đầu sách:</td>
                                <td><input type="text" ></td>
                            </tr>
                            <tr>
                                <td class="tdleft">Ngày nhập:</td>
                                <td>
                                    <input type="datetime-local">
                                </td>
                                
                              </tr>
                             
                              
                              <tr>
                                  <td class="tdleft">Tình trạng sách:</td>
                                  <td><input type="text"></td>
                              </tr>
                              
                              
                          </table>
                          <table style="margin:0px auto">
				             	<tr>
				             		<td>
				              <a href="#" class="button green" >Lưu</a>
				              <a href="#" class="button red">Làm mới</a>
						          </td>
						      </tr>
				             </table>
						</fieldset>
						<center>
							<br>
						<a href="#">Bạn có thể Import File Word tại đây</a>
						</center>
					</div>

					</div>
				</div>

				<div class="sidebar" id="sidebar">
					<h2>Quản lý sách thư viện</h2>
					<ul>
						<li><a href="document-show.php">Xem tài liệu</a></li>
						<li><a href="document-add.php" class="selected">Thêm mới tài liệu</a></li>
						
						
						
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
