<?php

include('lock.php');
include("config_getdata.php");

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
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
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
           <img src="img/img_01.png" alt="move to manage_main" width="300" height="230">
         </a>
         </div>

         <div class="col-lg-1">
           <a href="manage_list.php?category=1">
         <img src="img/img_02.png" alt="move to manage_list" width="300" height="230">
       </a>
         </div>
       </div>


       <footer class="footer-distributed">
         <p class="footer-links" >
           <a href="login.php" style="color:#C6C4C3;">관리자모드</a>
           &nbsp;
           <a href="index.php" style="color:#C6C4C3;">홈페이지</a>

         </p>
       <hr />
       주식회사 건어물집  | 사업자등록번호 : 123-45-67890 | 대표이사 : 김건어물
       <br>
       주소 : 경기도 고양시 덕양구 항공대학로 76 | 개인정보관리책임 : 김보안 | 이메일 : driedfood@naver.com
       <br>
       고객센터 : 02-333-3333 | FAX : 02-333-3333
       <br>
       COPYRIGHT © 2017 DRIED FOOD SHOP ALL RIGHTS RESERVED
       </footer>


</body>
</html>
