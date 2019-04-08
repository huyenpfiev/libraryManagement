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
							<div class="toogle_wrap" >
					              <center>
					              <input type="text"  id = "keyWord">
					              <select id="user-search-sel">
					              	<option value="-1">Vui lòng chọn</option>
					              	<option value="1">MSSV</option>
					              	<option value="2">Mã thẻ bạn đọc</option>
					              	<option value="3">Họ và tên</option>
					              	<option value="4">Lớp</option>
					              	<option value="5">Khoa</option>
					              </select>
					              <button type="button" class="searchAccountBt" id="user-right-search-but">Search</button>
					            </center>
											</div>
					            <h2><center>TÀI KHOẢN BẠN ĐỌC</center></h2>
					            <table id="rounded-corner">
					              <thead>
					                <tr>
					                  
					                  <th>MSSV</th>
					                  <th>Mã thẻ bạn đọc</th>
					                  <th>Họ và tên</th>
					                  <th>Lớp</th>
					                  <th>Khoa</th>
					                  <th>SĐT</th>
					                  <th>Email</th>
					                  <th>Hoạt động</th>
					                  <th>Khóa</th>
					                </tr>
					              </thead>
					              
					              <tbody>
					              	<?php
								      $link=mysqli_connect("localhost","root","","library_management") or die ("Khong the ket noi");
								      mysqli_set_charset($link,'UTF8');

								      $sql = "select * from USER limit 10";
								      $result=mysqli_query($link, $sql);

								      $sql1 = "select * from ADMIN limit 10";
								      $result1=mysqli_query($link, $sql1);

								      while ( $row = mysqli_fetch_assoc($result))
								      {?>
					                <tr class="odd">
					                  <td><?php echo $row['user_id'];?></td>
					                  <td><?php echo $row['card_code'];?></td>
					                  <td><?php echo $row['name'];?></td>
					                  <td><?php echo $row['class'];?></td>
					                  <td><?php echo $row['faculty'];?></td>
					                  <td><?php echo $row['phonenumber'];?></td>
					                  <td><?php echo $row['email'];?></td>
					                  <?php 
								if($row['status']==1)
								{
									?>
									<td><input name="<?php echo $row['user_id'];?>" type="radio" value="active" checked="checked" onClick="radio('<?php echo $row['user_id'];?>')"></td>
									<td><input name="<?php echo $row['user_id'];?>" type="radio" value="lock" onClick="radio('<?php echo $row['user_id'];?>')"></td>
								<?php } 
								else { ?>
									<td><input name="<?php echo $row['user_id'];?>" type="radio" value="active" onClick="radio('<?php echo $row['user_id'];?>')"></td>
									<td><input name="<?php echo $row['user_id'];?>" type="radio" value="lock" checked="checked" onClick="radio('<?php echo $row['user_id'];?>')"></td>
								<?php } ?>
								
								</tr>
								<?php } ?>


					                
					              </tbody>
					            </table>
											
					        </div>
					        
							<!-- =================================== -->
							<div class="tabcontent" id="admin">
							<div class="toogle_wrap">
					              <center>
					              <input type="text"  id = "keyword">
					              <select id="admin-search-sel">
					              	<option value="-1">Vui lòng chọn</option>
					              	<option value="1">Mã thẻ</option>
					              	<option value="2">Họ và tên</option>
					              </select>
					              <button type="button" class="searchAccountBt" id="admin-right-search-but">Search</button>
					            </center>
											</div>
					            <h2><center>TÀI KHOẢN QUẢN TRỊ VIÊN</center></h2>
					            <table id="rounded-corner">
					              <thead>
					                <tr>
					                  <th>Mã thẻ</th>
					                  <th>Họ và tên</th>
					                  <th>SĐT</th>
					                  <th>Email</th>
					                  <th>Hoạt động</th>
					                  <th>Khóa</th>
					                </tr>
					              </thead>
					              
								<tbody>
								<?php
								while ( $row1 = mysqli_fetch_assoc($result1))
								{?>
								<tr class="odd">
								<td><?php echo $row1['admin_id'];?></td>
								<td><?php echo $row1['name'];?></td>
								<td><?php echo $row1['phonenumber'];?></td>
								<td><?php echo $row1['email'];?></td>

								<?php 
								if($row1['status']==1)
								{
									?>
									<td><input name="<?php echo $row1['admin_id'];?>" type="radio" value="active" checked="checked" onClick="myFunction('<?php echo $row1['admin_id'];?>')"></td>
									<td><input name="<?php echo $row1['admin_id'];?>" type="radio" value="lock" onClick="myFunction('<?php echo $row1['admin_id'];?>')"></td>
								<?php } 
								else { ?>
									<td><input name="<?php echo $row1['admin_id'];?>" type="radio" value="active" onClick="myFunction('<?php echo $row1['admin_id'];?>')"></td>
									<td><input name="<?php echo $row1['admin_id'];?>" type="radio" value="lock" checked="checked" onClick="myFunction('<?php echo $row1['admin_id'];?>')"></td>
								<?php } ?>
								
								</tr>
								<?php } ?>


								</tbody>
					            </table>
											
					        </div>

							

						</div>
					</div><!-- end of right content-->


					<div class="sidebar" id="sidebar">
						<h2>Quản lý tài khoản</h2>
						<ul>
							<li><a href="account-search.php" >Tìm kiếm / chỉnh sửa tài khoản</a></li>
							<li><a href="account-add.php">Thêm tài khoản</a></li>
							<li><a href="right-edit.php" class = "selected">Chỉnh sửa quyền truy cập</a></li>
							
							
						</ul>

						<h2>Thông tin admin</h2>
						<ul>
							<li><a href="#">Thông tin cá nhân</a></li>
							<li><a href="#">Đổi mật khẩu</a></li>
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
