	<script src="js/script.js"  type="text/javascript" charset="utf-8" async defer></script>
						<div class="toogle_wrap">
					              <center>
					              <input type="text"  id = "keyWord">
					              <select id="admin-search-sel">
					              	<option value="-1">Vui lòng chọn</option>
					              	<option value="1">Mã thẻ</option>
					              	<option value="2">Họ và tên</option>
					              </select>
					              <button type="button" class="searchAccountBt" id="admin-right-search-but">Search</button>
					            </center>
						</div>
					            <h2><center>KẾT QUẢ TÌM KIẾM</center></h2>
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
									$link=mysqli_connect("localhost","root","","library_management") or die ("Khong the ket noi");
								      mysqli_set_charset($link,'UTF8');

								      $s = (isset($_POST['s']) ? $_POST['s'] : '');
								      $keyword = (isset($_POST['keyword']) ? $_POST['keyword'] : '');

								      $sql = "select * from ADMIN where ".$s." like'%".$keyword."%'";
								      $result=mysqli_query($link, $sql);
									while ( $row1 = mysqli_fetch_assoc($result))
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