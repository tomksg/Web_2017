
<?php

// include('lock.php');
include("config_getdata.php");

// category값 01~06에 따라 다른 목록 업로드

?>


<!DOCTYPE html>
<html lang="kor">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <!-- 반응형웹으로 만들어주는 태그 -->
  <!-- 근데 세개가 row에 묶여있어도 조금이라도 창크기가 작아지면 -->
  <!-- 다 한줄에 하나만 옴 홈페이지에있는 템플릿도 이러함 -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>hi 건어물집에 오신걸 환영합니다</title>
  <link rel="stylesheet" href="css\bootstrap.css">
    <link rel="stylesheet" href="css/box_design.css">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$category=$_GET[category];
 ?>

  <div class="navbar-wrapper">
    <div class="container">

      <nav class="navbar navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar justified"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
    </div>
          <form class="navbar-form navbar-right" role="search">
               <div class="form-group">
                 <input type="text" class="form-control" placeholder="Search">
               </div>
               <button type="submit" class="btn btn-default">Submit</button>
             </form>
        </div>
      </nav>
    </div>
  </div>
<!--
<ul class="nav nav-pills nav-justified">
  <li role="presentation"><a href="list.php?categrory=1">반건조생선</a></li>
    <li role="presentation"><a href="list.php?categrory=2">건어물</a></li>
    <li role="presentation"><a href="list.php?categrory=3">젓갈</a></li>
    <li role="presentation"><a href="list.php?categrory=4">선물세트</a></li>
</ul> -->
<ul>
 <li><a href="list.php?categrory=1"><img src="img/lnav_1.png" alt="..." class="iist_image"></a></li>
 <li><a  href="list.php?categrory=2"><img src="img/lnav_2.png" alt="..." class="iist_image"></a></li>
 <li><a href="list.php?categrory=3"><img src="img/lnav_3.png" alt="..." class="iist_image"></a></li>
  <li><a href="list.php?categrory=4"><img src="img/lnav_4.png" alt="..." class="iist_image"></a></li>
</ul>
&nbsp;
<!-- 근데 창줄이면 깨지네 ;; -->
<br>

   <div class="container">
   <h2>분류</h2>
  <hr>

      <dl>




<div class="container">

       <div class="row" >
         <div class="col-lg-2" >
           <a href="<?php
            $temp_id = 2;
           echo "goods.php?category=",$category,"?id=",$temp_id;
           ?>">
           <img src="img/squid.jpg" alt="Generic placeholder image" width="180" height="140">
         </a>
           <strong>상품명</strong> 건조오징어
          <br>
           <strong>가격</strong> 만원
<!-- 우리가 원하는 모양으로 나타내주는 코드를 그냥 php내부에서 html로 만들어줘야할듯 -->
         </div>
         <div class="col-lg-2" >
           <a href="<?php
            $temp_id = 2;
           echo "goods.php?category=",$category,"?id=",$temp_id;
           ?>">
           <img src="img/squid.jpg" alt="Generic placeholder image" width="180" height="140">
         </a>
           <strong>상품명</strong> 건조오징어
          <br>
           <strong>가격</strong> 만원
<!-- 우리가 원하는 모양으로 나타내주는 코드를 그냥 php내부에서 html로 만들어줘야할듯 -->
         </div>
         <div class="col-lg-2" >
           <a href="<?php
            $temp_id = 2;
           echo "goods.php?category=",$category,"?id=",$temp_id;
           ?>">
           <img src="img/squid.jpg" alt="Generic placeholder image" width="180" height="140">
         </a>
           <strong>상품명</strong> 건조오징어
          <br>
           <strong>가격</strong> 만원
<!-- 우리가 원하는 모양으로 나타내주는 코드를 그냥 php내부에서 html로 만들어줘야할듯 -->
         </div>
       </div>
       <br />
       <div class="row">
         <div class="col-lg-2" >
           <a href="<?php
            $temp_id = 2;
           echo "goods.php?category=",$category,"?id=",$temp_id;
           ?>">
           <img src="img/squid.jpg" alt="Generic placeholder image" width="180" height="140">
         </a>
           <strong>상품명</strong> 건조오징어
          <br>
           <strong>가격</strong> 만원
<!-- 우리가 원하는 모양으로 나타내주는 코드를 그냥 php내부에서 html로 만들어줘야할듯 -->
         </div>
         <div class="col-lg-2" >
           <a href="<?php
            $temp_id = 2;
           echo "goods.php?category=",$category,"?id=",$temp_id;
           ?>">
           <img src="img/squid.jpg" alt="Generic placeholder image" width="180" height="140">
         </a>
           <strong>상품명</strong> 건조오징어
          <br>
           <strong>가격</strong> 만원
<!-- 우리가 원하는 모양으로 나타내주는 코드를 그냥 php내부에서 html로 만들어줘야할듯 -->
         </div>
         <div class="col-lg-2" >
           <a href="<?php
            $temp_id = 2;
           echo "goods.php?category=",$category,"?id=",$temp_id;
           ?>">
           <img src="img/squid.jpg" alt="Generic placeholder image" width="180" height="140">
         </a>
           <strong>상품명</strong> 건조오징어
          <br>
           <strong>가격</strong> 만원
<!-- 우리가 원하는 모양으로 나타내주는 코드를 그냥 php내부에서 html로 만들어줘야할듯 -->
         </div>
       </div>
     </dl>

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
