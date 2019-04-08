<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php session_start(); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Quản lý Categories - VP production</title>
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
              <li><a href="user-management.php" class = "selected" >Quản lý trang web</a></li>
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
                  <!-- ================ -->
                  <fieldset>
                        <legend >Thêm đối tượng quảng cáo</legend>
                        <table  style="margin:20px auto" width="700" border="0">
                              <tr>
                                <td class="tdleft">Tên công ty:</td>
                                <td><input type="text" ></td>
                                <td class="tdleft">Độ ưu tiên:</td>
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
                              </tr>
                                <td class="tdleft">Chủ đề:</td>
                                  <td><input type="text" ></td>
                                  <td class="tdleft">Ngày bắt đầu:</td>
                                  <td>
                                    <input type="datetime-local">
                                </td>
                              <tr>
                              </tr>
                                <td class="tdleft">Ảnh GIF:</td>
                                  <td>
                                    <input type="text" >
                                    <input type="button" value="Chọn">
                                  </td>
                                  <td class="tdleft">Ngày kết thúc:</td>
                                  <td>
                                    <input type="datetime-local">
                                </td>
                              <tr>
                              
                          </table>
                          <center>
                          <button type="button" class="addObjectBt">Thêm</button>
                      </center>
                       </fieldset>
                      
                  <!-- ================ -->
						<div class="toogle_wrap">
              <center>
              <input type="text" name="" value="" id = "keyWord">
              <button type="button" class="searchObjectBt">Search</button>
            </center>
						</div>
            <h2><center>DANH SÁCH ĐỐI TƯỢNG QUẢNG CÁO</center></h2>
            <table id="rounded-corner">
              <thead>
                <tr>
                  <th><a href="#">Chọn tất cả</a></th>
                  <th>STT</th>
                  <th>Tên công ty</th>
                  <th>Chủ đề</th>
                  <th>Ảnh</th>
                  <th>Độ ưu tiên</th>
                  <th>Ngày bắt đầu</th>
                  <th>Ngày hết hạn</th>
                  <th>Sửa</th>
                  <th>Xóa</th>
                </tr>
              </thead>
              
              <tbody>
                <tr class="odd">
                  <td><input type="checkbox" name=""></td>
                  <td>1</td>
                  <td>Lorem ipsum dolor sit amet consectetur</td>
                  <td>abcd</td>
                  <td><a href="#">Xem</a></td>
                  <td>1</td>
                  <td>10/04/2011</td>
                  <td>10/04/2011</td>
                  <td><a href="#"><img src="images/edit.png" alt="" title="" border="0"></a></td>
                  <td><a href="#"><img src="images/trash.gif" alt="" title="" border="0"></a></td>
                </tr>
                <tr class="odd">
                  <td><input type="checkbox" name=""></td>
                  <td>1</td>
                  <td>Lorem ipsum dolor sit amet consectetur</td>
                  <td>abcd</td>
                  <td><a href="#">Xem</a></td>
                  <td>1</td>
                  <td>10/04/2011</td>
                  <td>10/04/2011</td>
                  <td><a href="#"><img src="images/edit.png" alt="" title="" border="0"></a></td>
                  <td><a href="#"><img src="images/trash.gif" alt="" title="" border="0"></a></td>
                </tr>
                <tr class="odd">
                  <td><input type="checkbox" name=""></td>
                  <td>1</td>
                  <td>Lorem ipsum dolor sit amet consectetur</td>
                  <td>abcd</td>
                  <td><a href="#">Xem</a></td>
                  <td>1</td>
                  <td>10/04/2011</td>
                  <td>10/04/2011</td>
                  <td><a href="#"><img src="images/edit.png" alt="" title="" border="0"></a></td>
                  <td><a href="#"><img src="images/trash.gif" alt="" title="" border="0"></a></td>
                </tr>


                
              </tbody>
            </table>
						<div>
                     <table style="margin:0px auto">
                      <tr>
                        <td>
                      <a href="#" class="button green" >Xóa</a>
                      <a href="#" class="button red">Xóa tất cả</a>
                      </td>
                  </tr>
                     </table>
                   
                    </div>


					</div>
				</div><!-- end of right content-->


				<div class="sidebar" id="sidebar">
          <h2>Quản lý trang web</h2>
          <ul>
            <li><a href="#">Số lượt Viewer</a></li>
            <li><a href="#">Quản lý bài đăng</a></li>
            <li><a href="#">Link Reference</a></li>
            <li><a href="advertisement.php" class = "selected">Quảng cáo</a></li>
            
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
</html>
