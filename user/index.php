<?php 
if(!isset($_SESSION['user_id'])){
  echo "<script>location.href='loginUser/account/login.php'</script>";
}
else
$user_id=$_SESSION['user_id'];


require_once("database_link.php");
$sql="select *from BOOK  inner join AUTHOR on BOOK.author_id=AUTHOR.author_id inner join TOPIC on BOOK.topics_id=topic.topic_id where topics_id=1";
$result=query($sql);

?>


<!-- ===================================================================================== -->
<section class="box-index" class="clearfix">

  <header class="clearfix">
    <h2 class="title" style="color:#d35400">Pháp Y</h2>
    <p ><a href="#" class="view_more">Xem tất cả >></a></p>
  </header>

  <div class="row">
    <?php 
    if($result != null)
    {
      while ( $row = mysqli_fetch_assoc($result))

      {
        ?>
        <div class="item col-md-3 col-sm-3 col-xs-6">
          <span>
            <a href="#" class="thumbnail" data-toggle="modal" data-target=".details-<?php echo $row['book_id'];?>">
              <img src="<?php echo $row['image'];?>" alt="<?php echo $row['name'];?>" width=200px height=300px title="<?php echo $row['name'];?>">
            </a>
          </span>
          <center>
            <?php 
            if($row['borrowed']<$row['quantity'])
            {?>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#book-modal-<?php echo $row['book_id'];?>" >Đặt sách</button>
            <?php 
            }else
            {?>
                <button type="button" class="btn btn-primary" disabled >Đặt sách</button>
            <?php }?>
            
          </center>
        </div>
        <!-- ========================== -->
        <div class="details-<?php echo $row['book_id'];?> modal fade"   tabindex="-1" role="dialog" >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" style="color:#d35400"><center>Thông tin chi tiết sách</center></h3>
              </div>
              <div class="modal-body">
                <table style="width:400px;height:300px;margin:0 auto" border="0">
                  <tr>
                    <th>Mã sách: </th>
                    <td><?php echo $row['book_id'];?></td>
                  </tr>
                  <tr>
                    <th>Tiêu đề: </th>
                    <td><?php echo $row['name'];?></td>
                  </tr>
                  <tr>
                    <th>Tác giả: </th>
                    <td><?php echo $row['author_name'];?></td>
                  </tr>
                  <tr>
                    <th>Chủ đề: </th>
                    <td><?php echo $row['topic_name'];?></td>
                  </tr>
                  <tr>
                    <th>Nơi xuất bản: </th>
                    <td><?php echo $row['place_of_publication'];?></td>
                  </tr>
                  <tr>
                    <th>Năm xuất bản: </th>
                    <td><?php echo $row['publication_at'];?></td>
                  </tr>
                  <tr>
                    <th>Định dạng: </th>
                    <td><?php echo $row['number_of_pages'];?></td>
                  </tr>
                  <tr>
                    <th>Giá tiền: </th>
                    <td><?php echo $row['price'];?></td>
                  </tr>
                </table>

              </div>
              <div class="modal-footer">
                <center><button type="button" class="btn btn-primary" data-dismiss="modal">Close</button></center>
              </div>
            </div>
          </div>
        </div>
        <!-- =============================== -->
        <div id="book-modal-<?php echo $row['book_id'];?>" class="modal fade" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" style="color:#d35400"><center>Đặt mượn sách</center></h3>
              </div>
              <div class="modal-body">
                <table style="width:400px;height:100px;margin:0 auto" border="0">

                  <tr>
                    <th>Nhập mã bạn đọc: </th>
                    <td><input type="text" class="card_code_borrow"></td>
                  </tr>

                </table>

              </div>
              <div class="modal-footer">
                <center>
                  <button type="button" class="btn btn-primary borrow-but" value="<?php echo $row['book_id'];?>" >Đặt sách</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Hủy</button>
                </center>
              </div>
            </div>
          </div>
        </div>
      <?php }} ?>

    </div>
  </section>

  <!-- ============= -->
  <section class="box-index" class="clearfix">
    <header class="clearfix">
      <h2 class="title" style="color:#d35400">Kinh tế-Luật</h2>
      <p ><a href="#" class="view_more">Xem tất cả >></a></p>
    </header>

    <div class="row">


      <div class="item col-md-3 col-sm-3 col-xs-6">
        <span>
          <a href="#" class="thumbnail" data-toggle="modal" data-target="#details-modal">
            <img src="http://thichtruyen.vn/upload_data/post/toi-thay-hoa-vang-tren-co-xanh-1-thichtruyen.vn.jpg" alt="Tôi thấy hoa vàng trên cỏ xanh" width=200px height=300px title="Tôi thấy hoa vàng trên cỏ xanh" >
          </a>
        </span>
        <center>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#book-modal" >Đặt sách</button>
        </center>
      </div>


    </div>
  </section>
  <!-- ============================================ -->
  <script>

  $("div[id^='book-modal']").each(function()
  {
    var currentModal = $(this);
    var s = "<?php echo $user_id ?>";

    currentModal.find('.borrow-but').click(function()
    {
        var book_id=$(this).val();
        var card_code=currentModal.find('.card_code_borrow').val();
        if(card_code==""){
          alert("Vui lòng nhập mã bạn đọc!");
          currentModal.find('.card_code_borrow').focus();
        }
        else{
          $.ajax({
                url: 'process/book-borrow-process.php',
                type: 'POST',
                data: {
                    user_id:s,
                    book_id:book_id,
                    card_code:card_code
                }
                }).done(function(x) {
                  if(x==1)
                  {
                    alert("Mã sai!");
                    currentModal.find('.card_code_borrow').focus();
                  }
                  else
                  {
                    alert("Đặt sách thành công!");
                    location.reload();
                    

                  }

                  
                    
              }); 

        }
    });
  });
  </script>