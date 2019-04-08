$('.book-details-show-link').click(function(event)
{

	var el=this;
	var book_id=this.id;
	event.preventDefault();	
	$.ajax({
		url: 'book-details.php',
		type: 'POST',
		data: {
			book_id:book_id
		}
	}).done(function(ketqua) {
		$('.book-details-extra').html(ketqua);


	}); 



});
$('.book-head-details-show-link').click(function(event)
{
	$('.book-head-details-extra').load('http://localhost:8080/admin/book-head-details.php');
});

$('.user-edit-link').click(function(event)
{
	var el=this;
	var user_id=this.id;
	event.preventDefault();	
	$.ajax({
		url: 'user-edit.php',
		type: 'POST',
		data: {
			user_id:user_id
		}
	}).done(function(ketqua) {
		$('#user').html(ketqua);
		$('#ten1').focus();


	}); 

});
$('.admin-edit-link').click(function(event)
{
	var el=this;
	var admin_id=this.id;
	event.preventDefault();	
	$.ajax({
		url: 'admin-edit.php',
		type: 'POST',
		data: {
			admin_id:admin_id
		}
	}).done(function(ketqua) {
		$('#admin').html(ketqua);
		$('#ten2').focus();


	}); 

});

$('.user-del-link').click(function(event)
{
	var el=this;
	var user_id=this.id;
	event.preventDefault();	
	if (confirm("Bạn có chắc chắn muốn xóa tài khoản này không?")) 
	{
		event.preventDefault();	
		$.ajax({
			url: 'account-search.php',
			type: 'POST',
			data: {
				user_id:user_id
			}
		}).done(function(ketqua) {

			$(el).closest('.odd').css('background','red');
			$(el).closest('.odd').fadeOut(800,function(){
				this.remove();
			});
			
		}); 
	} else {
		event.preventDefault();	
	}
	

});
$('.admin-del-link').click(function(event)
{
	var el=this;
	var admin_id=this.id;
	event.preventDefault();	
	if (confirm("Bạn có chắc chắn muốn xóa tài khoản này không?")) 
	{
		event.preventDefault();	
		$.ajax({
			url: 'process/admin-del-process.php',
			type: 'POST',
			data: {
				admin_id:admin_id
			}
		}).done(function(ketqua) {

			$(el).closest('.odd').css('background','red');
			$(el).closest('.odd').fadeOut(800,function(){
				this.remove();
			});

		}); 
	} else {
		event.preventDefault();	
	}


});

$('#user-del-but').click(function(event)
{
	var checkbox = document.getElementsByName('user-checkbox');
	var result = [];
	var a=false;
                // Lặp qua từng checkbox để lấy giá trị
                for (var i = 0; i < checkbox.length; i++){
                	if (checkbox[i].checked === true){
                		result.push(checkbox[i].value);
                		a=true;
                	}
                }
                if(a==false){
                	alert("Vui lòng chọn tài khoản cần xóa");
                }
                else{
                	
                	$.ajax({
                		url: 'process/selected-user-del-process.php',
                		type: 'POST',
                		data: {
                			result:JSON.stringify(result)
                		}
                	}).done(function(ketqua) {
                		location.reload();

                	}); 
                }


                
            });
$('#admin-del-but').click(function(event)
{
	var checkbox = document.getElementsByName('admin-checkbox');
	var result = [];
	var a=false;
                // Lặp qua từng checkbox để lấy giá trị
                for (var i = 0; i < checkbox.length; i++){
                	if (checkbox[i].checked === true){
                		result.push(checkbox[i].value);
                		a=true;
                	}
                }
                if(a==false){
                	alert("Vui lòng chọn tài khoản cần xóa");
                }
                else{
                	
                	$.ajax({
                		url: 'process/selected-admin-del-process.php',
                		type: 'POST',
                		data: {
                			result:JSON.stringify(result)
                		}
                	}).done(function(ketqua) {
                		location.reload();

                	}); 
                }

});

function all_select(x)
{
	var checkbox=document.getElementsByName(x);
	for(var i=0;i<checkbox.length;i++){
		checkbox[i].checked=true;
	}
}
$('#user-add-but').click(function(event)
{
		var mssv=$('#mssv3').val();
		var mathe=$('#mathe3').val();
		var ten=$('#ten3').val();
		var lop=$('#lop3').val();
		var khoa=$('#khoa3').val();
		var sdt=$('#sdt3').val();
		var email=$('#email3').val();
		var sql = "insert into USER (user_id,card_code,name,class,faculty,phonenumber,email,status) values("+mssv+",'"+mathe+"', '"+ten+"','"+lop+"','"+khoa+"','" + sdt + "','"+email+"',1)";
		if((mssv=="")||(mathe=="")||(ten=="")||(lop=="")||(khoa=="")||(sdt=="")||(email==""))
		{
			alert("Vui lòng nhập đầy đủ!");

		}
		else
		{
		$.ajax({
		                		url: 'process/sql-process.php',
		                		type: 'POST',
		                		data: {
		                    		sql:sql
		                		}
		            				}).done(function(ketqua) {
		      						alert("Thêm thành công!");
		      						location.reload();
		            
		                				
		            			}); 
		            			}
});
$('#admin-add-but').click(function(event)
{
		
		var ten=$('#ten4').val();
		var mathe=$('#mathe4').val();
		var sdt=$('#sdt4').val();
		var email=$('#email4').val();
		var sql = "insert into ADMIN (admin_id,name,phonenumber,email,status) values("+mathe+",'"+ten+"','" + sdt + "','"+email+"',1)";
		if((ten=="")||(mathe=="")||(sdt=="")||(email==""))
		{
			alert("Vui lòng nhập đầy đủ!");
		}
		else
		{
		$.ajax({
		                		url: 'process/sql-process.php',
		                		type: 'POST',
		                		data: {
		                    		sql:sql
		                		}
		            				}).done(function(ketqua) {
		      						alert("Thêm thành công!");
		      						location.reload();
		            
		                				
		            			}); 
		            			}
});

function myFunction(x) 
{

	var radio=$('input:radio[name='+x+']:checked').val();
	
	if(radio=="active")
	{
		var sql="update ADMIN set status=1 where admin_id="+x;
	}
	else{
		var sql="update ADMIN set status=0 where admin_id="+x;
	}
	$.ajax({
		url: 'process/sql-process.php',
		type: 'POST',
		data: {
			sql:sql
		}
	}).done(function(ketqua) {
		event.preventDefault();
		});
	


}
function radio(x)
{

	var radio=$('input:radio[name='+x+']:checked').val();
	
	if(radio=="active")
	{
		var sql="update USER set status=1 where user_id="+x;
	}
	else{
		var sql="update USER set status=0 where user_id="+x;
	}
	$.ajax({
		url: 'process/sql-process.php',
		type: 'POST',
		data: {
			sql:sql
		}
	}).done(function(ketqua) {
		event.preventDefault();
		});
	


}


$('#user-search-but').click(function(event)
{
	var x=$('#user-search-sel option:selected').val();
	var keyword=$('#keyWord').val();
	if((x==-1) ||(keyword==""))
	{
		alert("Vui lòng nhập/chọn thông tin để tìm kiếm!");
		$('#keyword').focus();
	}
	else
	{
		if(x==1)
		{
			var s="user_id";
		}
		else if(x==2)
		{
			var s="card_code";
		}
		else if(x==3){
			var s="name";
		}
		else if(x==4){
			var s="class";
		}
		else
		{
			var s="faculty";
		}
		$.ajax({
                url: 'search_result/user-search-result.php',
                type: 'POST',
                data: {
                    s:s,
                    keyword:keyword
                }
            }).done(function(ketqua) {
                $('#user').html(ketqua);
            });


	} 
});
$('#admin-search-but').click(function(event)
{
	var x=$('#admin-search-sel option:selected').val();
	var keyword=$('#keyword').val();
	if((x==-1) ||(keyword==""))
	{
		alert("Vui lòng nhập/chọn thông tin để tìm kiếm!");
		$('#keyword').focus();
	}
	else
	{
		if(x==1)
		{
			var s="admin_id";
		}
		else 
		{
			var s="name";
		}
		
		$.ajax({
                url: 'search_result/admin-search-result.php',
                type: 'POST',
                data: {
                    s:s,
                    keyword:keyword
                }
            }).done(function(ketqua) {
                $('#admin').html(ketqua);
            });


	} 
});
$('#user-right-search-but').click(function(event)
{
	var x=$('#user-search-sel option:selected').val();
	var keyword=$('#keyWord').val();
	if((x==-1) ||(keyword==""))
	{
		alert("Vui lòng nhập/chọn thông tin để tìm kiếm!");
		$('#keyword').focus();
	}
	else
	{
		if(x==1)
		{
			var s="user_id";
		}
		else if(x==2)
		{
			var s="card_code";
		}
		else if(x==3){
			var s="name";
		}
		else if(x==4){
			var s="class";
		}
		else
		{
			var s="faculty";
		}
		$.ajax({
                url: 'search_result/user-right-search-result.php',
                type: 'POST',
                data: {
                    s:s,
                    keyword:keyword
                }
            }).done(function(ketqua) {
                $('#user').html(ketqua);
            });


	} 
});
$('#admin-right-search-but').click(function(event)
{
	var x=$('#admin-search-sel option:selected').val();
	var keyword=$('#keyword').val();
	if((x==-1) ||(keyword==""))
	{
		alert("Vui lòng nhập/chọn thông tin để tìm kiếm!");
		$('#keyword').focus();
	}
	else
	{
		if(x==1)
		{
			var s="admin_id";
		}
		else 
		{
			var s="name";
		}
		
		$.ajax({
                url: 'search_result/admin-right-search-result.php',
                type: 'POST',
                data: {
                    s:s,
                    keyword:keyword
                }
            }).done(function(ketqua) {
                $('#admin').html(ketqua);
            });


	} 
});
$('#login-but').click(function(event)
    {
        var username=$('#userName').val();
        var pass=$('#userPassword').val();
        
        if((username=="")||(pass==""))
        {
            alert("Vui lòng nhập đầy đủ!");
            $('#userName').focus();
        }
        else
        {
            $.ajax({
                url: 'process/login-process.php',
                type: 'POST',
                data: {
                    username:username,
                    pass:pass
                }
            }).done(function(x) {
                if(x==0)
                {
                    alert("Đăng nhập sai! Vui lòng nhập lại!");
                    $('#userName').focus();
                }
                else{
                    window.location="book-management.php";
                }

                
            });


    
        }
    });
$('#changed-pass-save-but').click(function(event)
{

	var oldPass=$('#old-pass').val();
	var newPass=$('#new-pass').val();
	var confirmPass=$('#confirm-pass').val();
	if((oldPass=="")||(newPass =="")||(confirmPass==""))
		{
			alert("Vui lòng nhập đầy đủ!");
			$('#old-pass').focus();
		}
		else
		{
			$.ajax({
				url:'process/pass-change-process.php',
				type:'POST',
				data:{
					oldPass:oldPass,
					newPass:newPass,
					confirmPass:confirmPass
				}

			}).done(function(x)
			{
				if(x==1)
				{
					alert("Mật khẩu cũ sai!");
					$('#old-pass').focus();
				}
				else if(x==2)
				{
					alert("Mật khẩu xác nhận không khớp với mật khẩu mới!");
					$('#confirm-pass').focus();
				}
				else
				{
					alert("Thay đổi password thành công!");
					location.reload();
				}
			});
		}
});
