<?php
							      $link=mysqli_connect("localhost","root","","library_management") or die ("Khong the ket noi");
							      mysqli_set_charset($link,'UTF8');

							      $admin_id = (isset($_POST['admin_id']) ? $_POST['admin_id'] : '');
							      $sql="delete from ADMIN where admin_id='$admin_id'";
							      $result=mysqli_query($link,$sql);
							      mysqli_free_result($result);
								  mysqli_close($link);
?>