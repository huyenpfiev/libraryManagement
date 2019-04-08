<?php  session_start();
$status = "sach_da_dat";
$s="sach_cua_ban";
if(!isset($_SESSION['user_id'])){
  echo "<script>location.href='loginUser/account/login.php'</script>";
}
else
{
  $user_id=$_SESSION['user_id'];
}

 ?>

<?php 
  require_once("library_link.php");
 ?>
<!-- ===========================HEADER=========================================================== -->
<?php 
  require_once("header.php");
 ?>
      
<!-- ===========================================MAIN========================================== -->
      <div id="wrapper">
        <div class="container">
          <div class="row">
            <!-- ======================================MENU-LEFT======================= -->
            <div class="sidebar col-md-3 col-sm-3 col-xs-12">

            <?php 
            require_once("menu_left.php");
           ?>
                
            </div>
            <!-- ============================MENU-RIGHT=========================== -->
            <div class="content col-md-9 col-sm-9 col-xs-12">
              <?php 
              require_once("searchBox.php");
             ?>

                <h3 style="color:blue"><center>SÁCH BẠN ĐÃ ĐẶT</center></h3>
                <table class="table table-hover" id="booked_book_table">
                    <thead>
                        <tr>
                            <th>Mã sách</th>
                            <th>Tên sách</th>
                            <th>Tác giả</th>
                            <th>Chi tiết</th>
                            <th>Hủy đặt</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php 
                      require_once("database_link.php");
                      $sql="select *from BORROWING_BOOK  inner join BOOK on borrowing_book.book_id=BOOK.book_id inner join TOPIC on BOOK.topics_id=topic.topic_id inner join author on book.author_id=author.author_id  where user_id='$user_id'";
                      $result=query($sql);
                      if($result != null)
                      {
                         while ( $row = mysqli_fetch_assoc($result))
                       {
                    ?>
                      
                        <tr>
                            <td><?php echo $row['book_id'];?></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['author_name'];?> </td>
                            <td><a href="#"  data-toggle="modal" data-target="#detail-<?php echo $row['deal_id'];?>">Xem</a></td>
                            <td><a href="#" data-toggle="modal" data-target="#booked-cancel-<?php echo $row['deal_id'];?>">Hủy</a></td>
                        </tr>

                        <!-- ======================= -->
                        
                        <?php
                      }}
                        mysqli_free_result($result);

                      ?>
                        
                    </tbody>
                </table>
            
            </div>
            
          </div>
        </div>
      </div>
  <!-- ===========================================FOOTER============================= -->
     <?php 
      require_once("footer.php");     ?>
<!-- ========================================= -->
<?php
require_once("database_link.php");
$sql1="select *from BORROWING_BOOK  inner join BOOK on borrowing_book.book_id=BOOK.book_id inner join TOPIC on BOOK.topics_id=topic.topic_id inner join author on book.author_id=author.author_id  where user_id='$user_id'";
$result1=query($sql1);
if($result1 != null)
{
   while ( $row1 = mysqli_fetch_assoc($result1))
 {
?>
<div id="detail-<?php echo $row1['deal_id'];?>" class="modal fade" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" style="color:#d35400"><center>Thông tin chi tiết sách</center></h3>
      </div>
      <div class="modal-body">
        <table style="width:400px;height:300px;margin:0 auto" border="0">
          <tr>
            <th>Mã sách: </th><td><?php echo $row1['book_id'];?></td>
          </tr>
          <tr>
            <th>Tiêu đề: </th><td><?php echo $row1['name'];?></td>
          </tr>
          <tr>
            <th>Tác giả: </th><td><?php echo $row1['author_name'];?></td>
          </tr>
          <tr>
            <th>Chủ đề: </th><td><?php echo $row1['topic_name'];?></td>
          </tr>
          <tr>
            <th>Nơi xuất bản: </th><td><?php echo $row1['place_of_publication'];?></td>
          </tr>
          <tr>
            <th>Năm xuất bản: </th><td><?php echo $row1['publication_at'];?></td>
          </tr>
          <tr>
            <th>Định dạng: </th><td><?php echo $row1['number_of_pages'];?></td>
          </tr>
          <tr>
            <th>Giá tiền: </th><td><?php echo $row1['price'];?></td>
          </tr>

        </table>

      </div>
      <div class="modal-footer">
        <center><button type="button" class="btn btn-primary" data-dismiss="modal">Close</button></center>
      </div>
    </div>
  </div>
</div> 

     <!-- ==================================== -->
    <div id="booked-cancel-<?php echo $row1['deal_id'];?>"  class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title" style="color:#d35400"><center>Hủy đặt sách</center></h3>
          </div>
          <div class="modal-body">
            <table style="width:400px;height:100px;margin:0 auto" border="0">
              <tr>
                <th>Nhập mã bạn đọc: </th>
                <td><input type="text" class="card_code_borrow_cancel"></td>
              </tr>
              
            </table>

          </div>
          <div class="modal-footer">
            <center>
              <button type="button" class="btn btn-primary borrow-cancel-but" value="<?php echo $row1['deal_id'];?>" >OK</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Hủy</button>
            </center>
          </div>
        </div>
      </div>
    </div>
<?php
  }}

  ?>
  </body>
    <script>
  $("div[id^='booked-cancel']").each(function()
  {
    var currentModal = $(this);
    var s = "<?php echo $user_id ?>";
    currentModal.find('.borrow-cancel-but').click(function()
    {
        var deal_id=$(this).val();
        var card_code=currentModal.find('.card_code_borrow_cancel').val();
        if(card_code==""){
          alert("Vui lòng nhập mã bạn đọc!");
          currentModal.find('.card_code_borrow_cancel').focus();
        }
        else{
          $.ajax({
                url: 'process/borrow-cancel-process.php',
                type: 'POST',
                data: {
                    user_id:s,
                    deal_id:deal_id,
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
                    alert("Hủy đặt sách thành công!");
                    location.reload();
                    

                  }

                  
                    
              }); 

        }
    });
  });
  </script>
</html>

