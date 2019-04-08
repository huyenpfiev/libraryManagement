
$('.btn.btn-primary.borrow-but').click(function(event){
	alert("ksk");
	$('.card_check').html("Nhập mã!");
	var book_id=$('.borrow-but').val();
	var card_code=$('.card_code_borrow').val();
	if(card_code==""){
		alert("Vui lòng nhập mã bạn đọc!");
	}
	else{
		$.ajax({
	    		url: 'process/book-borrow-process.php',
	    		type: 'POST',
	    		data: {
	        		book_id:book_id,
	        		card_code:card_code
	    		}
					}).done(function(ketqua) {
						alert("Đặt sách thành công!");
						location.reload();

	    				
				}); 
	}

});
