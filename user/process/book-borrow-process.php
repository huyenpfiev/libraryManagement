<?php
      $link=mysqli_connect("localhost","root","","library-management") or die ("Khong the ket noi");
      mysqli_set_charset($link,'UTF8');

      $book_id = (isset($_POST['book_id']) ? $_POST['book_id'] : '');
      $card_code = (isset($_POST['card_code']) ? $_POST['card_code'] : '');
      $user_id = (isset($_POST['user_id']) ? $_POST['user_id'] : '');
   

      $sql2="select *from USER where user_id='$user_id'";
      $result2=mysqli_query($link, $sql2);
      $row = mysqli_fetch_assoc($result2);
      if($row['card_code'] != $card_code){
      	$x=1;
      }
      else
      {
		$x=2;

      	$sql="insert into BORROWING_BOOK (user_id,book_id) values ('$user_id','$book_id')";
      $result=mysqli_query($link, $sql);

      $sql1="update BOOK set borrowed=(borrowed+1) where book_id='$book_id'";
      $result1=mysqli_query($link, $sql1);
      }

      echo $x;

   //    mysqli_free_result($result);
   //    mysqli_free_result($result1);
   //    mysqli_free_result($result2);
	  // mysqli_close($link);
 ?>