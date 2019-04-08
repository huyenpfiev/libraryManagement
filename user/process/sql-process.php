<?php
							      $link=mysqli_connect("localhost","root","","library_management") or die ("Khong the ket noi");
							      mysqli_set_charset($link,'UTF8');
							      $sql = (isset($_POST['sql']) ? $_POST['sql'] : '');

							      $result=mysqli_query($link, $sql);
							      mysqli_free_result($result);
								  mysqli_close($link);
 ?>