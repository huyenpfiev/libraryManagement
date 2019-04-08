<?php  session_start();
$status = "sach_dang_muon";
$s="sach_cua_ban";
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

                <h3 style="color:blue"><center>SÁCH BẠN ĐANG MƯỢN</center></h3>
                <table class="table table-hover" id="booked_book_table">
                    <thead>
                        <tr>
                            <th>Mã sách</th>
                            <th>Tên sách</th>
                            <th>Tác giả</th>
                            <th>Chi tiết</th>
                            <th>Ngày mượn</th>
                            <th>Hạn trả</th>
                         
                        </tr>
                    </thead>
                    <tbody>
                      <?php 
                      require_once("database_link.php");
                      $sql="select *from BORROWING_BOOK  inner join BOOK on borrowing_book.book_id=BOOK.book_id inner join TOPIC on BOOK.topics_id=topic.topic_id inner join author on book.author_id=author.author_id  where user_id=6 and BORROWING_BOOK.status=1";
                      $result=query($sql);
                      if($result != null)
                      {
                         while ( $row = mysqli_fetch_assoc($result))
                       {
                    ?>
                        <tr>
                            <td><?php echo $row['book_id'];?></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['author_name'];?></td>
                            <td><a href="#" data-toggle="modal" data-target="#detail-<?php echo $row['deal_id'];?>">Xem</a></td>
                            <td><?php echo $row['borrowed_date'];?></td>
                            <td><?php echo $row['return_date'];?></td>
                         
                        </tr>
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
$sql1="select *from BORROWING_BOOK  inner join BOOK on borrowing_book.book_id=BOOK.book_id inner join TOPIC on BOOK.topics_id=topic.topic_id inner join author on book.author_id=author.author_id  where user_id=6 and BORROWING_BOOK.status=1";
$result1=query($sql1);
if($result1 != null)
{
   while ( $row1 = mysqli_fetch_assoc($result1))
 {
?>
<div id="detail-<?php echo $row1['deal_id'];?>"  class="modal fade" tabindex="-1" role="dialog" >
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
                <td><?php echo $row1['book_id'];?></td>
              </tr>
              <tr>
                <th>Tiêu đề: </th>
                <td><?php echo $row1['name'];?></td>
              </tr>
              <tr>
                <th>Tác giả: </th>
                <td><?php echo $row1['author_name'];?></td>
              </tr>
              <tr>
                <th>Chủ đề: </th>
                <td><?php echo $row1['topic_name'];?></td>
              </tr>
              <tr>
                <th>Nơi xuất bản: </th>
                <td><?php echo $row1['place_of_publication'];?></td>
              </tr>
              <tr>
                <th>Năm xuất bản: </th>
                <td><?php echo $row1['publication_at'];?></td>
              </tr>
              <tr>
                <th>Định dạng: </th>
                <td><?php echo $row1['number_of_pages'];?></td>
              </tr>
              <tr>
                <th>Giá tiền: </th>
                <td><?php echo $row1['price'];?></td>
              </tr>
              <tr>
                <th>Ngày mượn: </th>
                <td><?php echo $row1['borrowed_date'];?></td>
              </tr>
              <tr>
                <th>Hạn trả: </th>
                <td><?php echo $row1['return_date'];?></td>
              </tr>
            </table>

          </div>
          <div class="modal-footer">
            <center><button type="button" class="btn btn-primary" data-dismiss="modal">Close</button></center>
          </div>
        </div>
      </div>
     </div> 
     <?php
    }}
  ?>
     <!-- ==================================== -->


  </body>
</html>

