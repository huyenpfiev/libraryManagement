<?php  session_start();
$status = "xem_thong_tin";
$s="tai_khoan";
 ?>

<?php 
  require_once("library_link.php");
 ?>
<!-- ===========================HEADER=========================================================== -->
<?php 
  require_once("header.php");
 ?>
 <?php
require_once("database_link.php");
$sql="select *from USER where user_id=6";//sua
$result=query($sql);

$row = mysqli_fetch_assoc($result);

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
            <div class="content col-md-9 col-sm-9 col-xs-12" id="personal_div">
              <fieldset>
             <h3 style="color:blue"><center>THÔNG TIN CÁ NHÂN</center></h3>
             <table class="table table-hover" id="infor_table"  border="0">
              <tr>
                <th>MSSV:</th>
                <td><?php echo $row['user_id'];?></td>
              </tr>
              <tr>
                <th>Mã bạn đọc:</th>
                <td><?php echo $row['card_code'];?></td>
              </tr>
              <tr>
                <th>Họ và tên:</th>
                <td><?php echo $row['name'];?></td>
              </tr>
              
              <tr>
                <th>Trường:</th>
                <td><?php echo $row['departement'];?></td>
              </tr>
              <tr>
                <th>Khoa:</th>
                <td><?php echo $row['faculty'];?></td>
              </tr>
              <tr>
                <th>Lớp:</th>
                <td><?php echo $row['class'];?></td>
              </tr>
              <tr>
                <th>Địa chỉ:</th>
                <td><?php echo $row['address'];?></td>
              </tr>
              <tr>
                <th>SĐT:</th>
                <td><?php echo $row['phonenumber'];?></td>
              </tr>
              <tr>
                <th>Email:</th>
                <td><?php echo $row['email'];?></td>
              </tr>
             </table> 
            </fieldset>
            </div>
            
          </div>
        </div>
      </div>
  <!-- ===========================================FOOTER============================= -->
     <?php 
      require_once("footer.php");     ?>

      

  </body>
</html>

