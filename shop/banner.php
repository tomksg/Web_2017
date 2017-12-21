

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
  </head>
  <body>

    <div class="banner">
        <td align="center"><a href="shop/index.php" ><img src="img/title.png" border="0" id="banimg" ></a></td>
    </div>


          <ul class="nav  nav-justified navbar-default" id="colored">
        <li role="presentation" class="js-scroll-trigger" id="bar"><a href="#introduction">소개</a></li>
          <li role="presentation" class="js-scroll-trigger" id="bar"><a  href="#list">상품목록</a></li>
          <li role="presentation" class="js-scroll-trigger" id="bar"><a href="#location">오시는 길</a></li>
        </ul>

        <!-- <img src="img/nav_1.png" alt="...">
      <img src="img/nav_2.png" alt="...">
        <img src="img/nav_3.png" alt="..."> -->

    <div id="main">

    <div class="vertical">
      <span class="vertical">
        건어물집 소개
      </span>
    </div>

    <p>
    &nbsp;
    </p>

    <section id="introduction" >
     <div class="container">
       <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <p class="lead">
            <!-- 소개 문구 -->
            <?=$src2?>
          </p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="class="lead" src="<?=$src?>" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>
    </div>
    </section>

    <div class="vertical">
      <span class="vertical">
        상품목록
      </span>
    </div>
    <section id="list" class="container">
      <div class="row">
        <div class="col">
          <a href="list.php?category=1">
            <img src="img/index_01.png" class="category" alt="..."></a>
          </div>
          <div class="col">
            <a href="list.php?category=2" class="">
              <img src="img/index_02.png" class="category" alt="..."></a>
            </div>
            <div class="col">
              <a href="list.php?category=3" class="">
                <img src="img/index_03.png" class="category" alt="..."></a>
              </div>
              <div class="col">
                <a href="list.php?category=4" class="">
                  <img src="img/index_04.png" class="category" alt="..."></a>
                </div>
          </div>
        </section>
        <div class="vertical">
          <span class="vertical">
            찾아오시는 길
          </span>
        </div>

        <section id="location" class="container">
          <div class="row featurette">
            <div class="col-md-7 col-md-push-4">
          <img class="featurette-image img-responsive center-block map" src="img/info.png" data-src="holder.js/500x500" alt="Generic placeholder image">
            </div>
            <div class="col-md-5 col-md-pull-7">
              <img class="featurette-image img-responsive center-block map" src="img/map.png" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
            </div>
          </div>
        </section>

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
