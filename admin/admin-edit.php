<script src="js/jquery/jquery-2.1.4.min.js"></script>
<script src="js/script.js"  type="text/javascript" charset="utf-8" async defer></script>
<script>
	$('#edited-admin-save-but').click(function(event)
	{
		var mathe=$('#mathe2').val();
		var ten=$('#ten2').val();
		var sdt=$('#sdt2').val();
		var email=$('#email2').val();
		var sql = "update admin set name = '"+ten+"', phonenumber = '" + sdt + "',email='"+email+"' where admin_id = " + mathe;
		if((ten=="")||(sdt=="")||(email==""))
		{
			alert("Vui lòng nhập đầy đủ!");
		}
		else{


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
	
	$('#edited-admin-clear-but').click(function(event)
	{	
		$('#ten2').val('');
		$('#sdt2').val('');
		$('#email2').val('');
		$('#ten2').focus();
	});

	
</script>
<?php
							      $link=mysqli_connect("localhost","root","","library_management") or die ("Khong the ket noi");
							      mysqli_set_charset($link,'UTF8');
							      $admin_id = (isset($_POST['admin_id']) ? $_POST['admin_id'] : '');

							      $sql = "select * from ADMIN where admin_id='$admin_id'";

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
							      	
							      	<a href="#" class="button green" id="edited-admin-save-but">Lưu</a>
							      	<a href="#" class="button green" id="edited-admin-clear-but">Làm mới</a>
							      
							        <a href="account-search.php" class="button red" >Trở về</a>
							      </td>
							      
							    </tr>
							  </tfoot>
							  <tbody>
							    
							    <tr>
							          <td>Mã thẻ:</td>
							          <td><input id="mathe2" type="text" value="<?php echo $row['admin_id'];?>" readonly></td>
							    </tr>
							    <tr>
							          <td>Họ và tên:</td>
							          <td><input id="ten2" type="text"  value="<?php echo $row['name'];?>" ></td>
							    </tr>
							    
							    <tr>
							          <td>SĐT:</td>
							          <td><input id="sdt2" type="text" value="<?php echo $row['phonenumber'];?>"></td>
							    </tr>
							    <tr>
							          <td>Email:</td>
							          <td><input id="email2" type="text" value="<?php echo $row['email'];?>" ></td>
							    </tr>
							    
							      

							  </tbody>
							</table>
