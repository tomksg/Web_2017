<?php

include('lock.php');
include("config_getdata.php");

//조건문에 박을 쿼리문


$result_count=mysqli_query($bd,"SELECT count(*) FROM gunfish");
$result_row=mysqli_fetch_row($result_count);
$total_row = $result_row[0];
$no = $total_row                             ;



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
   <li role="presentation"><a href="list.php?categrory=1">반건조생선</a></li>
     <li role="presentation"><a href="list.php?categrory=2">건어물</a></li>
     <li role="presentation"><a href="list.php?categrory=3">젓갈</a></li>
     <li role="presentation"><a href="list.php?categrory=4">선물세트</a></li>
</ul>
<style>
body { padding-bottom: 70px; }
</style>

<div class="jumbotron">
 <div class="container">
   <h2>분류</h2>
   <form method="get" action="manage_new_goods.php">
     <input type ="hidden" >
     <!-- hidden 처리해놓을것 -->
     <button type="submit" class="btn btn-secondary btn-sm">새항목 추가
     </button>
   </form>
   <!-- 상품분류 선택이미지,페이지 누르면 링크로 redirect되게해야함 -->
   <hr id ="colored_line" class="featurette-divider">
   <dl

      <?php

      // $no = $total_row;

// 테스트용
        // $result2 = mysqli_query($bd, "SELECT * FROM gunfish WHERE product_id ='$no'");
// test
      $query = "SELECT * FROM gunfish ORDER BY product_id DESC";
      $result = mysqli_query($bd, $query);

      // $row = mysqli_fetch_array($result);
// while($row=mysqli_fetch_array($result))
  ?><div class="row">
    <?  while($row=mysqli_fetch_array($result))
      {
        // $row2 = mysqli_fetch_array($result2);

        ?>

  <div class="container">

         <div class="col-md-3" >
          <img src="<?=$row['product_image']?>" alt="Generic placeholder image" width="180" height="140">

        <strong>상품명 :</strong> <?=$row['product_name']?>
        <br>
        <strong>가격 :</strong> <?=$row['product_price']?> 원


        <form method="get" action="manage_edit_goods.php">
          <input type ="hidden" name="product_id" value="<?=$row['product_id']?>">
          <button type="submit" class="btn btn-secondary btn-sm" >상품수정</button>
        </form>
<?

 ?>
        <form method="get" action="delete_goods.php">
          <input type ="hidden" name="product_id" value="<?=$row['product_id']?>">
          <!-- hidden 처리해놓을것 -->
          <button type="submit" class="btn btn-secondary btn-sm">상품삭제
          </button>
        </form>

        <!-- 우리가 원하는 모양으로 나타내주는 코드를 그냥 php내부에서 html로 만들어줘야할듯 -->
      </div>
    </div>
<br />
    <?php
    // $no = $no - 1;
  }
  mysqli_close($bd);
  ?>

  <br />
</dl>

</div>
</div>
</div>



</body>
</html>
