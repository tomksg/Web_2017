
<?php

include('lock.php');
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

<ul class="nav nav-pills nav-justified">
  <li role="presentation"><a href="list.php?categrory=1">반건조생선</a></li>
    <li role="presentation"><a href="list.php?categrory=2">건어물</a></li>
    <li role="presentation"><a href="list.php?categrory=3">젓갈</a></li>
    <li role="presentation"><a href="list.php?categrory=4">선물세트</a></li>
      <li role="presentation"><a href="list.php?categrory=5">오징어</a></li>
      <li role="presentation"><a href="list.php?categrory=6">제수용</a></li>
</ul>
<style>
body { padding-bottom: 70px; }
</style>

   <div class="container">
   <h2>분류</h2>
  <hr width="800">
  <!-- 상품분류 선택이미지,페이지 누르면 링크로 redirect되게해야함 -->
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

     <hr class="featurette-divider">

</body>
</html>
