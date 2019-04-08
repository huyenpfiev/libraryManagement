<?php  session_start();
$status = "sach_thu_vien";
$s="";
 ?>

<?php 
  require_once("library_link.php");//nên bỏ xún cuối cùng của trang để load nhanh hơn
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
              require_once("index.php");
             ?>                  
            </div>
            
          </div>
        </div>
      </div>
  <!-- ===========================================FOOTER============================= -->
     <?php 
      require_once("footer.php");     ?>

      

  </body>
</html>

