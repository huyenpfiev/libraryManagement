<?php
	$link=mysqli_connect("localhost","root","","library_management") or die ("Khong the ket noi");
	mysqli_set_charset($link,'UTF8');

	$data = $_POST["result"];

    $data   = json_decode("$data",true);

    for($i=0;$i<sizeof($data);$i++){
    	$sql = "delete from ADMIN where admin_id='$data[$i]'";
    	$result=mysqli_query($link, $sql);
    }

	mysqli_free_result($result);
	mysqli_close($link);

?>