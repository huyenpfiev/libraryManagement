function updateCounter()
{
  var Sql = "update user set Name = '" + name +"', Rule = "+rule+", Status = " + status + ' where ID = ' + Id;
  alert(Sql)
  $.ajax({
    url: "user-management/excute-query.php",
    type: "post",
    dataType: "text",
    data: {Sql:Sql},
    success: function(result){
      $('#detail-extra').html(result);
    }
  });
}
