<?php  session_start();
$status = "sua_thong_tin";
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
             <h3><center>CHỈNH SỬA THÔNG TIN CÁ NHÂN</center></h3>
             <table class="table table-hover" id="infor_table"  border="0">
              <tr>
                <th>MSSV:</th>
                <td><input type="text" disabled value="<?php echo $row['user_id'];?>"></td>
              </tr>
              <tr>
                <th>Mã bạn đọc:</th>
                <td><input type="text" disabled value="<?php echo $row['card_code'];?>"></td>
              </tr>
              <tr>
                <th>Họ và tên:</th>
                <td><input type="text" disabled value="<?php echo $row['name'];?>"></td>
              </tr>
              
              <tr>
                <th>Trường:</th>
                <td><input type="text" disabled value="<?php echo $row['departement'];?>"></td>
              </tr>
              <tr>
                <th>Khoa:</th>
                <td><input type="text" disabled value="<?php echo $row['faculty'];?>"></td>
              </tr>
              <tr>
                <th>Lớp:</th>
                <td><input type="text" disabled value="<?php echo $row['class'];?>"></td>
              </tr>
              <tr>
                <th>Địa chỉ:</th>
                <td><input type="text" value="<?php echo $row['address'];?>" id="dc"></td>
              </tr>
              <tr>
                <th>SĐT:</th>
                <td><input type="text" value="<?php echo $row['phonenumber'];?>" id="sdt"></td>
              </tr>
              <tr>
                <th>Email:</th>
                <td><input type="text" value="<?php echo $row['email'];?>" id="mail"></td>
              </tr>
             </table> 
              <br>
              <center>
              <button class="btn-primary" style="margin-right:10px;width:80px" id="infor-save-but">Lưu</button>
              <button type="submit" class="btn-danger" style="margin-left:10px;width:80px">Hủy</button>
            </center>

            </fieldset>                
            </div>
            
          </div>
        </div>
      </div>
  <!-- ===========================================FOOTER============================= -->
     <?php 
      require_once("footer.php");     ?>
<script>
  $('#infor-save-but').click(function(event){
    var dc=$('#dc').val();
    var sdt=$('#sdt').val();
    var email=$('#mail').val();
    if((dc=="")||(sdt=="")||(email=="")){
      alert("Nhập đầy đủ thông tin!");
      $('#dc').focus();
    }
    else{
      $sql="update USER set address='"+dc+"', phonenumber='"+sdt"', email='"+email+"' where user_id=6";
      $.ajax({
                url: 'process/sql-process.php',
                type: 'POST',
                data: {
                    sql:sql
                }
                }).done(function(x) {
                  alert("Chỉnh sửa thành công!");
                  location.href="infor_view.php";
    
          });
    }
  });
</script>
      

  </body>
</html>

