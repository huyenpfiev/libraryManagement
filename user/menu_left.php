 <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
 <div class="sidebar-item" >
      <h4 class="widget-title" style="color:#f39c12">CHUYÊN MỤC</h4>           
            <div class="panel-group" id="accordion" >
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="library_book.php" <?php echo $status == 'sach_thu_vien' ? "style='color:red'" : '' ?>><span class="glyphicon glyphicon-th">
                            </span>Sách thư viện</a>
                        </h4>
                    </div>
                 
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" >
                        <h4 class="panel-title">
                            <a href="#collapseTwo" <?php echo $status == 'tai_lieu_online' ? "style='color:red'" : '' ?>>
                            <span class="glyphicon glyphicon-file" >
                            </span>Tài liệu online </a>
                        </h4>
                    </div>
                   
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" <?php echo $s == 'sach_cua_ban' ? "style='color:red'" : '' ?>>
                            <span class="glyphicon glyphicon-folder-close">
                            </span>Quản lý sách của bạn</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="booked_book.php" <?php echo $status == 'sach_da_dat' ? "style='color:red'" : '' ?>>Sách đã đặt</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="borrowing_book.php" <?php echo $status == 'sach_dang_muon' ? "style='color:red'" : '' ?>>Sách đang mượn</a> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="renewal_book.php" <?php echo $status == 'gia_han_sach' ? "style='color:red'" : '' ?>>Gia hạn sách</a>
                                    </td>
                                </tr>
                                
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" <?php echo $s == 'tai_khoan' ? "style='color:red'" : '' ?>><span class="glyphicon glyphicon-user">
                            </span>Quản lý tài khoản</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="infor_view.php" <?php echo $status == 'xem_thong_tin' ? "style='color:red'" : '' ?>>Xem thông tin</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       <a href="infor_edit.php" <?php echo $status == 'sua_thong_tin' ? "style='color:red'" : '' ?>>Sửa thông tin</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="pass_change.php" <?php echo $status == 'doi_mat_khau' ? "style='color:red'" : '' ?>>Đổi mật khẩu</a>
                                    </td>
                                </tr>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>

     
                    
                    
</div>