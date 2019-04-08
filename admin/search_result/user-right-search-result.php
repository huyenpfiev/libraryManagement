	<script src="js/script.js"  type="text/javascript" charset="utf-8" async defer></script>						
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
					            <h2><center>KẾT QUẢ TÌM KIẾM</center></h2>
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

								      $s = (isset($_POST['s']) ? $_POST['s'] : '');
								      $keyword = (isset($_POST['keyword']) ? $_POST['keyword'] : '');

								      $sql = "select * from USER where ".$s." like'%".$keyword."%'";
								      $result=mysqli_query($link, $sql);

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