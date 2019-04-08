<script src="js/jquery/jquery-2.1.4.min.js"></script>
<script src="js/script.js"  type="text/javascript" charset="utf-8" async defer></script>
<script>
	$('#edited-user-save-but').click(function(event)
	{
		var mssv=$('#mssv1').val();
		var ten=$('#ten1').val();
		var lop=$('#lop1').val();
		var khoa=$('#khoa1').val();
		var sdt=$('#sdt1').val();
		var email=$('#email1').val();
		if((ten=="" )||( lop=="" )|| (khoa=="") ||(sdt=="")||(email=""))
		{
			alert("Vui lòng nhập đầy đủ!");
		}
		else
		{
		var sql = "update USER set name = '"+ten+"',class = '"+lop+"',faculty = '"+khoa+"', phonenumber = '" + sdt + "',email='"+email+"' where user_id = " + mssv;
		
		$.ajax({
		                		url: 'process/sql-process.php',
		                		type: 'POST',
		                		data: {
		                    		sql:sql
		                		}
		            				}).done(function(ketqua) {
		      						alert("Lưu thành công!");
		      						location.reload();
		            
		                				
		            			}); 
		            			}
	});
	
	$('#edited-user-clear-but').click(function(event)
	{	
		$('#ten1').val('');
		$('#lop1').val('');
		$('#khoa1').val('');
		$('#sdt1').val('');
		$('#email1').val('');
		$('#ten1').focus();
	});

	
</script>
<?php
							      $link=mysqli_connect("localhost","root","","library_management") or die ("Khong the ket noi");
							      mysqli_set_charset($link,'UTF8');
							      $user_id = (isset($_POST['user_id']) ? $_POST['user_id'] : '');

							      $sql = "select * from USER where user_id='$user_id'";

							      $result=mysqli_query($link, $sql);
							      $row = mysqli_fetch_assoc($result);
							      
?>

<table   width="400" height="200" style="margin:0 auto; margin-top:30px;text-align:center" >
							  <caption>
							    <h2>CHỈNH SỬA THÔNG TIN TÀI KHOẢN</h2>
							  </caption>
							  <tfoot >
							    <tr>
							      <td>
							        
							      </td>
							      <td>
							      	
							      	<a href="#" class="button green" id="edited-user-save-but">Lưu</a>
							      	<a href="#" class="button green" id="edited-user-clear-but">Làm mới</a>
							      
							        <a href="account-search.php" class="button red" >Trở về</a>
							      </td>
							      
							    </tr>
							  </tfoot>
							  <tbody>
							    <tr>
							          <td>MSSV:</td>
							          <td><input id="mssv1" type="text" value="<?php echo $row['user_id'];?>" readonly></td>
							    </tr>
							    <tr>
							          <td>Mã thẻ bạn đọc:</td>
							          <td><input id="mathe1" type="text" value="<?php echo $row['card_code'];?>" readonly></td>
							    </tr>
							    <tr>
							          <td>Họ và tên:</td>
							          <td><input id="ten1" type="text"  value="<?php echo $row['name'];?>" ></td>
							    </tr>
							    <tr>
							          <td>Lớp:</td>
							          <td>	<input id="lop1" type="text" value="<?php echo $row['class'];?>">  </td>
							    </tr>
							    <tr>
							          <td>Khoa:</td>
							          <td><input id="khoa1" type="text" value="<?php echo $row['faculty'];?>"></td>
							    </tr>
							    <tr>
							          <td>SĐT:</td>
							          <td><input id="sdt1" type="text" value="<?php echo $row['phonenumber'];?>"></td>
							    </tr>
							    <tr>
							          <td>Email:</td>
							          <td><input id="email1" type="text" value="<?php echo $row['email'];?>" ></td>
							    </tr>
							    
							      

							  </tbody>
							</table>
