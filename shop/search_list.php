<?php

include("config_getdata.php");

$search_category=$_GET['search_category'];
$search_keyword=$_GET['search_keyword'];

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


 <div class="banner">
   <td align="center"><a href="index.php" ><img src="img/title.png" border="0" id="banimg" ></a></td>
 </div>


              <ul class="nav  nav-justified navbar-default" id="colored">
            <li role="presentation" class="js-scroll-trigger" id="bar"><a href="list.php?category=1">반건조생선</a></li>
              <li role="presentation" class="js-scroll-trigger" id="bar"><a  href="list.php?category=2">건어물</a></li>
              <li role="presentation" class="js-scroll-trigger" id="bar"><a href="list.php?category=3">젓갈</a></li>
              <li role="presentation" class="js-scroll-trigger" id="bar"><a href="list.php?category=4g">선물세트</a></li>
            </ul>
 <!-- 근데 창줄이면 깨지네 ;; -->
 <br>
  <div class="container">
    <div class="navbar-header">
      <form class="navbar-form navbar-right" role="search" action="search_list.php" method="get" >
       <div class="form-group">
         <select name="search_category" class="form-control">
          <option value="01">반건조생선</option>
          <option value="02">건어물</option>
          <option value="03">젓갈</option>
          <option value="04">선물세트</option>
        </select>
        <input type="text" name="search_keyword" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default" >검색</button>
    </form>
  </div>
</div>
 <div class="container">


    <h1><script >
     var category = '<?=$search_category?>'
     switch(category){
       case '1':
         document.writeln('반건조생선');
         break;
       case '2':
         document.writeln('건어물');
         break;
       case '3':
         document.writeln('젓갈');
         break;
       case '4':
         document.writeln('선물세트');
         break;
       default:
         break;
     }
   </script></h1>
    <hr>


   <dl>



     <div class="container">

       <div class="row" >
        <?php

        $result = mysqli_query($bd, "SELECT * FROM gunfish WHERE product_name LIKE '%$search_keyword%' AND category='$search_category'");
        while($row=mysqli_fetch_array($result))
        {

          ?>
                <div class="col-lg-4">
                  <a href="goods.php?product_id=<?=$row['product_id']?>"><img src="<?=$row['product_image']?>" alt="Generic placeholder image" width="180" height="140"></a>
                  <br>
                  <div id="goods">
                    <strong>상품명 :</strong> <?=$row['product_name']?>
                    <br>
                    <strong>가격 :</strong> <?=$row['product_price']?> 원
                    <br>

                  </div>
                    <br>
                </div>

          <?php
        }
        mysqli_close($bd);
        ?>
      </div>
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
