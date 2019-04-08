<?php
      $link=mysqli_connect("localhost","root","","library_management") or die ("Khong the ket noi");
      mysqli_set_charset($link,'UTF8');

      $deal_id = (isset($_POST['deal_id']) ? $_POST['deal_id'] : '');
      $card_code = (isset($_POST['card_code']) ? $_POST['card_code'] : '');
      $user_id = (isset($_POST['user_id']) ? $_POST['user_id'] : '');

      $sql3="select *from BORROWING_BOOK where deal_id='$deal_id'";
      $result3=mysqli_query($link, $sql3);
      $row3 = mysqli_fetch_assoc($result3);
      $book_id=$row3['book_id'];


      $sql2="select *from USER where user_id='$user_id'";
      $result2=mysqli_query($link, $sql2);
      $row2 = mysqli_fetch_assoc($result2);
      if($row2['card_code'] != $card_code){
      	$x=1;
      }
      else
      {
		$x=2;

      $sql="delete from BORROWING_BOOK where deal_id='$deal_id'";
      $result=mysqli_query($link, $sql);

      $sql1="update BOOK set borrowed=(borrowed-1) where book_id='$book_id'";
      $result1=mysqli_query($link, $sql1);
      }

      echo $x;

  
 ?>