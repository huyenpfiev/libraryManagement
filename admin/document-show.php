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
		<script src="js/script.js"  type="text/javascript" charset="utf-8" async defer></script>
		
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
							<button class="userTab"><strong>Danh sách sách </strong></button> 
							
							<button class="adminTab"><strong>Danh sách đầu sách</strong></button> 
							
					</div>
					<div class="tabcontent" id="user">
						<div class="toogle_wrap" >
				              <center>
				              <input type="text" name="" value="" id = "keyWord">
				              <button type="button" class="searchAccountBt">Search</button>
				            </center>
										</div>
				            <h2><center>DANH SÁCH SÁCH</center></h2>
				            <table id="rounded-corner">
				              <thead>
				                <tr>
				                  <th>Mã sách</th>
				                  <th>Tên sách</th>
				                  <th>Tác giả</th>
				                  <th>Chủ đề</th>
				                  <!-- <th>Tóm tắt</th>
				                  <th>Phân loại</th>
				                  <th>Ngày nhập</th> -->
				                  <th>Giá tiền</th>
				                  <th>Số trang</th>
				                  <!-- <th>Nhà xuất bản</th>
				                  <th>Thông tin khác</th> -->
				                  <th>Chi tiết</th>
				                </tr>
				              </thead>
				              
				              <tbody>
				              	
				              	<?php
							      $link=mysqli_connect("localhost","root","","library_management") or die ("Khong the ket noi");
							      mysqli_set_charset($link,'UTF8');

							      $sql = "select * from BOOK limit 10";

							      $result=mysqli_query($link, $sql);


							      
							      while ( $row = mysqli_fetch_assoc($result))
							      {?>
				                <tr class="odd">
				                  <td><?php echo $row['book_id'];?></td>
				                  <td><?php echo $row['name'];?></td>
				                  <td><?php echo $row['author_id'];?></td>
				                  <td><?php echo $row['topics_id'];?></td>
				                  <!-- <td>14PFIEV3aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</td>
				                  <td>FAST</td>
				                  <td>22/11/2017</td> -->
				                  <td><?php echo $row['price'];?></td>
				                  <td><?php echo $row['number_of_pages'];?></td>
				                  <!-- <td>dfrd</td>
				                  <td>dfrd</td> -->
				                  <td><a href="#" class="book-details-show-link" id="<?php echo $row['book_id'];?>">Xem</a></td>
				                 </tr>
				                  <?php } ?>
				                
				                

				                
				              </tbody>
				            </table>
				            <!-- ================== -->
				            <div class="book-details-extra"></div>
				            <!-- ================== -->
										
					</div>

					<!-- ==================== -->
					<div class="tabcontent" id="admin">
						<div class="toogle_wrap" >
				              <center>
				              <input type="text" name="" value="" id = "keyWord">
				              <button type="button" class="searchAccountBt">Search</button>
				            </center>
										</div>
				            <h2><center>DANH SÁCH ĐẦU SÁCH</center></h2>
				            <table id="rounded-corner">
				              <thead>
				                <tr>
				                  <th>Mã đầu sách</th>
				                  <th>Mã sách</th>
				                  <th>Tên sách</th>
				                  <th>Ngày nhập</th>
				                  <th>Tình trạng</th>
				                  <th>Chi tiết</th>
				                  
				                </tr>
				              </thead>
				              
				              <tbody>
				                <tr class="odd">
				                  <td>TD-12</td>
				                  <td>abcd</td>
				                  <td>asdf</td>
				                  <td>10/2/2003</td>
				                  <td>Mới</td>
				                  <td><a href="#" class="book-head-details-show-link" >Xem</a></td>
				                </tr>
				                

				                
				              </tbody>
				            </table>
				            <!-- =================== -->
						<div class="book-head-details-extra"></div>
<!-- ============================================= -->

					</div>

					</div>
				</div>

				<div class="sidebar" id="sidebar">
					<h2>Quản lý sách thư viện</h2>
					<ul>
						<li><a href="document-show.php" class="selected">Xem tài liệu</a></li>
						<li><a href="document-add.php" >Thêm mới tài liệu</a></li>
						
						
						
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
