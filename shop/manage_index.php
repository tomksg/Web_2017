<?php
  
include('lock.php');
 
?>

<!DOCTYPE html>
<html lang="kor">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <!-- 반응형웹으로 만들어주는 태그 -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css\bootstrap.css">
    <link rel="stylesheet" href="css/box_design.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<!-- 가게 소개 -->



<h2>관리자 모드</h2>

  <hr width="1500">
  <!-- 상품분류 선택이미지,페이지 누르면 링크로 redirect되게해야함 -->


       <div class="row" >
         <div class="col-lg-3">
           <a href="manage_main.php">
           <img src="img/squid.jpg" alt="move to manage_main" width="220" height="180">
         </a>
         </div>

         <div class="col-lg-1">
           <a href="manage_list.php">
         <img src="img/squid.jpg" alt="move to manage_list" width="220" height="180">
       </a>
         </div>
       </div>

</body>
</html>
