<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html class='v2' dir='ltr' xmlns='http://www.w3.org/1999/xhtml' xmlns:b='http://www.google.com/2005/gml/b' xmlns:data='http://www.google.com/2005/gml/data' xmlns:expr='http://www.google.com/2005/gml/expr'>
  <head>
    <title>Library - Thư viện Trường Cao đẳng Y tế Quảng Trị</title>
  <link rel="icon" href="../img/gymbat.ico" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!--render + chạm phóng to-->
  <META NAME="description" CONTENT="Thư viện Trường Cao đẳng Y tế Quảng Trị (...) ">
  <meta property="og:locale" content="vi_VN" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Thư viện Trường Cao đẳng Y tế Quảng Trị" />
  <meta property="og:image" content="../img/s1.jpg" />

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/custom.css">
  <link rel="stylesheet" href="../awesome/css/font-awesome.min.css">  
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
  <script src="../jquery/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
  <!-- Google Analytics -->
<?php require_once("../incfile/ga.php"); ?>
  <!--Scroll to TOP-->
  <script type='text/javascript'>
    $(function() {
     $(window).scroll(function() {
     if ($(this).scrollTop() != 0) {
     $('#bttop').fadeIn();
     } else {
     $('#bttop').fadeOut();
     }
     });
     $('#bttop').click(function() {
     $('body,html').animate({
     scrollTop: 0
     }, 800);
     });
    });
    </script>
    <!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
    <script src="../assets/js/jquery/jquery-2.1.4.min.js"></script>
    <script src="../assets/js/homeScript.js"  type="text/javascript" charset="utf-8" async defer></script>

    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i' rel='stylesheet'/>
    <link rel="stylesheet" type="text/css" href="assets/CSS/style.css"/>
    <link rel="stylesheet" type="text/css" href="assets/CSS/styles.css"/>
    <link rel="stylesheet" type="text/css" href="assets/CSS/2437439463-css_bundle_v2.css"/>
    <link rel="stylesheet" type="text/css" href="assets/CSS/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/CSS/bootstrap.min.css"/>
    <link href='https://www.blogger.com/dyn-css/authorization.css?targetBlogID=1145915791316203422&amp;zx=8278831f-b871-4a90-9b07-4f553190db86' media='none' onload='if(media!=&#39;all&#39;)media=&#39;all&#39;' rel='stylesheet'/><noscript><link href='https://www.blogger.com/dyn-css/authorization.css?targetBlogID=1145915791316203422&amp;zx=8278831f-b871-4a90-9b07-4f553190db86' rel='stylesheet'/></noscript>
    <script type="text/javascript">
      function updateCounter(){
        var date = new Date();
        var day = date.getDate();
        var Sql = "select * where ID = " + day;
        alert(Sql)
        $.ajax({
          url: "user-management/excute-query.php",
          type: "post",
          dataType: "text",
          data: {Sql:Sql},
          success: function(result){

          }
        });
      }
    </script>
  </head>