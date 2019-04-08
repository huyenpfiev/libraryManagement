<?php  session_start();
$status = "gia_han_sach";
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

                <h3 style="color:blue"><center>SÁCH SẮP HẾT HẠN MƯỢN</center></h3>
                <table class="table table-hover" id="booked_book_table">
                    <thead>
                        <tr>
                            <th>Mã sách</th>
                            <th>Tên sách</th>
                            <th>Tác giả</th>
                            <th>Chi tiết</th>
                            <th>Ngày mượn</th>
                            <th>Hạn trả</th>
                            <th>Gia hạn</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TD_02</td>
                            <td>Phân tích thiết kế hướng đối tượng</td>
                            <td>Nam Cao </td>
                            <td><a href="#" data-toggle="modal" data-target="#detail-modal">Xem</a></td>
                            <td>11/2/2017</td>
                            <td>12/2/2018</td>
                            <td><a href="#" data-toggle="modal" data-target="#renewal-modal">Gia hạn</a></td>
                        </tr>
                        
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
<div id="detail-modal"  class="modal fade" tabindex="-1" role="dialog" >
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
                <td>TD_02</td>
              </tr>
              <tr>
                <th>Tiêu đề: </th>
                <td>Tin học đại cương</td>
              </tr>
              <tr>
                <th>Tác giả: </th>
                <td>Nhan Phúc Vinh, Trường Giang</td>
              </tr>
              <tr>
                <th>Chủ đề: </th>
                <td>Tin học, Tin học phổ thông</td>
              </tr>
              <tr>
                <th>Nơi xuất bản: </th>
                <td>Hà Nội</td>
              </tr>
              <tr>
                <th>Năm xuất bản: </th>
                <td>2017</td>
              </tr>
              <tr>
                <th>Định dạng: </th>
                <td>200 trang</td>
              </tr>
              <tr>
                <th>Giá tiền: </th>
                <td>100000 VNĐ</td>
              </tr>
              <tr>
                <th>Ngày mượn: </th>
                <td>1</td>
              </tr>
              <tr>
                <th>Hạn trả: </th>
                <td>1</td>
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
    <div id="renewal-modal"  class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title" style="color:#d35400"><center>Gia hạn sách</center></h3>
          </div>
          <div class="modal-body">
            <table style="width:400px;height:100px;margin:0 auto" border="0">
              <tr>
                <th>Nhập mã bạn đọc: </th>
                <td><input type="text"></td>
              </tr>
              
            </table>

          </div>
          <div class="modal-footer">
            <center>
              <button type="button" class="btn btn-primary" data-dismiss="modal">OK</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Hủy</button>
            </center>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>

