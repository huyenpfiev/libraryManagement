<?php session_start();?>
<?php
        $link=mysqli_connect("localhost","root","","library_management") or die ("Khong the ket noi");
        mysqli_set_charset($link,'UTF8');
        $username = (isset($_POST['username']) ? $_POST['username'] : '');
        $pass = (isset($_POST['pass']) ? $_POST['pass'] : '');

        // $password=md5($pass);
        $sql = "select * from ADMIN where username='$username' and password='$pass'";
        $result=mysqli_query($link, $sql);
        $row=mysqli_fetch_assoc($result);
        $count = mysqli_num_rows($result);
        if($count==0){
            echo $count;
        }
        else{
            echo $row['admin_id'];
        }
        $_SESSION['admin_id']=$row['admin_id'];
        mysqli_free_result($result);
        mysqli_close($link);


?>
