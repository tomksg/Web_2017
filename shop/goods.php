<?php

    include("config_getdata.php");

?>

<!DOCTYPE html>
<html lang="kor">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <!-- 반응형웹으로 만들어주는 태그 -->
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
  $temp_id=$_GET[id];
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
               <button type="submit" class="btn btn-default" onclick="javascript:location.href='localhost/shop/list.php'">Submit</button>
             </form>
        </div>
      </nav>
    </div>
  </div>

<ul class="nav nav-pills nav-justified">
<li role="presentation" class="active"><a href="#">소개</a></li>
  <li role="presentation"><a href="#">상품목록</a></li>
  <li role="presentation"><a href="#">오시는 길</a></li>
</ul>
<style>
body { padding-bottom: 70px; }
</style>

<hr class="featurette-divider">
<div class="jumbotron">
   <div class="container">

  <h2>분류</h2>
<hr width="1500">
<dl class="row">
  <div class="col-lg-3" >
    <img src="img/squid.jpg" alt="Generic placeholder image" width="250" height="250">
  </div>
  <div class="col-lg-3">
    <strong>건조오징어<strong>
    <hr />
            <p>
              <strong>가격</strong> 20000원
            </p>
            <p>
              <strong>제품특징</strong>
            </p>
            <p>
              <strong>원산지</strong>
            </p>
            <p>
              <strong>중량</strong>
            </p>
            <p>
              <strong>소개</strong>
            </p>

  </div>
</dl>

</div>
 </div>
    <hr class="featurette-divider">


</body>
</html>
