<script src="js/script.js"  type="text/javascript" charset="utf-8" async defer></script>
						<div class="toogle_wrap">
				              <center>
				              <input type="text"  id = "keyword">
				              <select id="admin-search-sel">
				              	<option value="-1">Vui lòng chọn</option>
				              	<option value="1">Mã thẻ</option>
				              	<option value="2">Họ và tên</option>
				              </select>
				              <button type="button" class="searchAccountBt" id="admin-search-but">Search</button>
				            </center>
						</div>
				            <h2><center>KẾT QUẢ TÌM KIẾM</center></h2>
				            <table id="rounded-corner">
				              <thead>
				                <tr>
				                  <th><a href="#" >Chọn tất cả</a></th>
				                  <th>Mã thẻ</th>
				                  <th>Họ và tên</th>
				                  <th>SĐT</th>
				                  <th>Email</th>
				                  <th>Sửa</th>
				                  <th>Xóa</th>
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
				                  <td><input type="checkbox" name=""></td>
				                  <td><?php echo $row1['admin_id'];?></td>
				                  <td><?php echo $row1['name'];?></td>
				                  <td><?php echo $row1['phonenumber'];?></td>
				                  <td><?php echo $row1['email'];?></td>
				                  <td><a href="#"><img src="images/edit.png"  class="admin-edit-link" id="<?php echo $row1['admin_id'];?>" border="0"></a></td>
				                  <td><a href="#"><img src="images/trash.gif" class="admin-del-link" id="<?php echo $row1['admin_id'];?>" border="0"></a></td>
				                </tr>
				                <?php } ?>

				                
				              </tbody>
				            </table>
							<div>
				             <table style="margin:0px auto">
				             	<tr>
				             		<td>
				              <a href="#" class="button green"  >Xóa</a>
				              <a href="#" class="button red">Xóa tất cả</a>
						          </td>
						      </tr>
				             </table>
				           
				            </div>