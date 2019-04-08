<?php 
session_start();
if(!isset($_SESSION['admin_id'])){
      echo "<script>location.href='login.php'</script>";
}
?>
<?php

	$link=mysqli_connect("localhost","root","","library_management") or die ("Khong the ket noi");
      mysqli_set_charset($link,'UTF8');

      $admin_id=$_SESSION['admin_id'];

      $oldPass = (isset($_POST['oldPass']) ? $_POST['oldPass'] : '');
      $newPass = (isset($_POST['newPass']) ? $_POST['newPass'] : '');
      $confirmPass = (isset($_POST['confirmPass']) ? $_POST['confirmPass'] : '');

      $sql = "select * from ADMIN where admin_id='$admin_id'";

      $result=mysqli_query($link, $sql);
      $row = mysqli_fetch_assoc($result);

      if($oldPass!= $row['password'])
      {
      	$x=1;
      }
      else if($newPass != $confirmPass)
      {
      	$x=2;
      }
      else
      {
      	$x=3;
      	$updateSQL="update ADMIN set password='$newPass' where admin_id='$admin_id'";
      	$r=mysqli_query($link, $updateSQL);
      }
      echo $x;
      	
	?>