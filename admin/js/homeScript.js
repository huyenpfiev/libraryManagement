$(document).ready(function()
{
	$(".view").click(function(){
		$.ajax({
			url: "user-management/view.php",
			type: "post",
			dataType: "text",
			data: {

			},
			success: function(result){
				$('#right_content').html(result);
			}
		});
	});
});
