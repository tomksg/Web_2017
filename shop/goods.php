<?php
// setcookie("what_you_saw","$product_id",time()+2400);
// include('lock.php');
include("config_getdata.php");


// url로 넘어온 category와 id값에 따라 디비에서 값 가져오기

// $category=$_GET['category'];
$product_id=$_GET['product_id'];
// echo $category;
// echo '<br>';

// echo '<br>';
// echo $product_id;

// $query = "SELECT * FROM gunfish WHERE product_id = '$product_id'";
$result = mysqli_query($bd, "SELECT * FROM gunfish WHERE product_id = '$product_id'");
$row=mysqli_fetch_array($result);


// echo $row['product_id'];
// echo '<br>';
// echo $row['product_name'];
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
  <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="cookie.js"></script>

</head>
<body>
  <!-- <script type="text/javascript">set</script> -->

  <div class="banner">
    <td align="center"><a href="index.php" ><img src="img/title.png" border="0" id="banimg" ></a></td>
  </div>


               <ul class="nav  nav-justified navbar-default" id="colored">
             <li role="presentation" class="js-scroll-trigger" id="bar"><a href="img/lnav_1.png">반건조생선</a></li>
               <li role="presentation" class="js-scroll-trigger" id="bar"><a  href="img/lnav_2.png">건어물</a></li>
               <li role="presentation" class="js-scroll-trigger" id="bar"><a href="img/lnav_3.png">젓갈</a></li>
               <li role="presentation" class="js-scroll-trigger" id="bar"><a href="img/lnav_4.png">선물세트</a></li>
             </ul>
  <hr class="featurette-divider">
  <div class="container">

    <h2>분류</h2>
    <hr>
    <dl class="row">
      <div class="col-lg-3" >
        <img src="<?=$row['product_image']?>" alt="Generic placeholder image" width="250" height="250">
      </div>
      <div class="col-lg-3">
        <strong>상품명 :<strong><?=$row['product_name']?>
          <hr />
          <p>
            <strong>가격 :</strong> <?=$row['product_price']?> 원
          </p>
          <p>
            <strong>제품특징 :</strong> <?=$row['product_info']?>
          </p>
          <p>
            <strong>원산지</strong><?=$row['product_from']?>
          </p>
          <p>
            <strong>중량</strong><?=$row['product_weight']?>
          </p>
          <p>
            <strong>소개</strong><?=$row['product_intro']?>
          </p>

        </div>
      </dl>

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
