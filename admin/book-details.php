<script src="js/script.js"  type="text/javascript" charset="utf-8" async defer></script>
<script>
	$('#book-details-edit-button').click(function(event)
	{
		event.preventDefault();
		$('#book-details-table input').removeAttr('readonly');
		$('#book-id').focus();
		$(this).css('display','none');
		$('#abcd').css('display','block');

	});
</script>
<?php
							      $link=mysqli_connect("localhost","root","","library_management") or die ("Khong the ket noi");
							      mysqli_set_charset($link,'UTF8');
							      $book_id = (isset($_POST['book_id']) ? $_POST['book_id'] : '');

							      $sql = "select * from BOOK where book_id='$book_id'";

							      $result=mysqli_query($link, $sql);
							      $row = mysqli_fetch_assoc($result);

							      
							      ?>

<table  id="book-details-table" width="400" height="200" style="margin:0 auto; margin-top:30px;text-align:center" >
							  <caption>
							    <h2>THÔNG TIN CHI TIẾT</h2>
							  </caption>
							  <tfoot >
							    <tr>
							      <td>
							        
							      </td>
							      <td>
							      	<a href="#" class="button green" id="book-details-edit-button">Chỉnh sửa</a>
							      	<div id="abcd" style="display:none">
							      	<a href="#" class="button green" >Lưu</a>
							      	<a href="#" class="button green" >Làm mới</a>
							      </div>
							        <a href="#" class="button red" id="book-details-delete-button">Xóa</a>
							      </td>
							      
							    </tr>
							  </tfoot>
							  <tbody>
							    <tr>
							          <td>Mã sách</td>
							          <td><input id="book-id" type="text" value="<?php echo $row['book_id'];?>" readonly></td>
							    </tr>
							    <tr>
							          <td>Tên sách:</td>
							          <td><input type="text" value="<?php echo $row['name'];?>" readonly></td>
							    </tr>
							    <tr>
							          <td>Tác giả:</td>
							          <td><input type="text"  value="<?php echo $row['author_id'];?>" readonly ></td>
							    </tr>
							    <tr>
							          <td>Chủ đề:</td>
							          <td>	<input type="text" value="<?php echo $row['topics_id'];?>" readonly>  </td>
							    </tr>
							    <tr>
							          <td>Tóm tắt:</td>
							          <td><input type="text" value="<?php echo $row['sum_up'];?>" readonly></td>
							    </tr>
							    <tr>
							          <td>Phân loại:</td>
							          <td><input type="text" value="<?php echo $row['category_id'];?>" readonly></td>
							    </tr>
							    <tr>
							          <td>Ngày nhập:</td>
							          <td><input type="text" value="" readonly></td>
							    </tr>
							    <tr>
							          <td>Giá tiền:</td>
							          <td><input type="text" value="<?php echo $row['price'];?>" readonly></td>
							    </tr>
							    <tr>
							          <td>Số trang:</td>
							          <td><input type="text" value="<?php echo $row['number_of_pages'];?>" readonly></td>
							    </tr>
							    <tr>
							          <td>Nhà xuất bản:</td>
							          <td><input type="text" value="<?php echo $row['place_of_publication'];?>" readonly></td>
							    </tr>
							    <tr>
							          <td>Thông tin khác:</td>
							          <td><input type="text" value="" readonly></td>
							    </tr>
							      

							  </tbody>
							</table>