
<?php

 function query($sql){
	 $link=mysqli_connect("localhost","root","","library_management") or die ("Khong the ket noi");
      mysqli_set_charset($link,'UTF8'); 
      $result=mysqli_query($link,$sql);
      return $result;
}
							     
?>