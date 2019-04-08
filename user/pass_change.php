<?php  session_start();
$status = "doi_mat_khau";
$s="tai_khoan";
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
            <div class="content col-md-9 col-sm-9 col-xs-12" id="personal_div">
              <fieldset>
             <h3><center>THAY ĐỔI MẬT KHẨU</center></h3>
             <table class="table table-hover" id="infor_table" style="width:370px;height:200px;"  border="0">
              <tr>
                <th>Tài khoản:</th>
                <td><input type="text" disabled></td>
              </tr>
              
              <tr>
                <th>Mật khẩu cũ:</th>
                <td><input type="text"></td>
              </tr>
              <tr>
                <th>Mật khẩu mới:</th>
                <td><input type="text"></td>
              </tr>
              <tr>
                <th>Xác nhận mật khẩu mới:</th>
                <td><input type="text"></td>
              </tr>
             </table> 
              <br>
              <center>
              <button class="btn-primary" style="margin-right:10px;width:80px">Lưu</button>
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

      

  </body>
</html>

