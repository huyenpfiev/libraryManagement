<div class="panel-group shadowpanel">
				  <div class="panel panel-default">
				  	<div class="panel-heading">
						<h4><i class=glyphicon glyphicon-list-alt"></i> Menu</h4>
					</div>
					<div class="panel-heading">
						<h4><i class=glyphicon glyphicon-list-alt"></i>
						</h4>
					</div>
					<div class="panel-body">
						<div class="sidebar" id="sidebar">
					<h2>Thống kê trang web</h2>
					<ul>
						<li><a href="#">Lượt truy cập</a></li>
						<li><a href="#">Người dùng</a></li>
						<li><a href="#">Kho hàng</a></li>
						<li><a href="#">Tổng đơn hàng</a></li>
						<li><a href="#">Phiên bản</a></li>
					</ul>

					<h2>Thông tin admin</h2>
					<ul>
						<li><a href="#">Thông tin cá nhân</a></li>
						<li><a href="#">Đổi mật khẩu</a></li>
					</ul>
				</div>


				<div class="clear">
				</div>
					</div>
					<div class="panel-heading">
						<h4><i class=glyphicon glyphicon-list-alt"></i> Bài viết mới nhất</h4>
					</div>
					<div class="panel-body">
					<?php 
function convertstr($str) {
    $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
     $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
     $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
     $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
     $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
     $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
     $str = preg_replace("/(đ)/", 'd', $str); 
     $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'a', $str);
     $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
     $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
     $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'o', $str);
     $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'u', $str);
     $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'y', $str);
     $str = preg_replace("/(Đ)/", 'd', $str);
     $str = preg_replace("/( )/", '-', $str);
      $str = preg_replace("/(#)/", '', $str);
  //$str = str_replace(” “, “-”, str_replace(“&*#39;”,”",$str));
  return $str;
  }
						
					  	$str="select * from baiviet order by idbv desc limit 5";
					  	$kq= mysqli_query($link,$str);
						// if(mysqli_num_rows($kq) == 0)
					 //  		echo 'Chưa bài viết nào';
					 //  	else 
					 //  		while($row=mysqli_fetch_array($kq))
					 //  			{ 
						// 			$url= convertstr($row['title']);
					 //  				echo'<div class="newpost">
						// 					<img src="../img/rss.png" width="5px"> <a href="'.$url.'-'.$row['idbv'].'.html">'.$row['title'].'</a>
						// 					<hr>
						// 				</div>'; 
					 //  			}
				  	?>
					</div>
					
				  </div>
				</div>
<div class="panel-group shadowpanel">
	<div class="panel panel-default">
	</div>
</div>
