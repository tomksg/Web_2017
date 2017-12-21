<?php
include("config_getdata.php");

$query = "SELECT * from main WHERE number =1";
//$query2 = "SELECT description from main WHERE number=1";
$result = mysqli_query($bd,$query) or die ("Error Querying database.");
// $result2 = mysql_query($bd,$query2)
$row = mysqli_fetch_assoc($result);

$src = $row['image'];
$src2 = $row['description'];
?>


<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="keywords" content="footer, address, phone, icons" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- 위 3개의 메타 태그는 *반드시* head 태그의 처음에 와야합니다; 어떤 다른 콘텐츠들은 반드시 이 태그들 *다음에* 와야 합니다 -->
  <title>hi 건어물집에 오신걸 환영합니다</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/box_design.css">
  <!-- 아래네줄 푸터용 -->
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="C:\Users\user\Desktop\jquery-scroll-follow\lib/jquery.scrollfollow.js"></script>


  <style>

  #quick {
    position: absolute;
    right: 0;
    top: 100px;
    height: 200px;
    background: #black;
    z-index: 2;
  }


}
</style>
</head>
<script type="text/javascript">
  $(function() {

    var UI = {
      init: function() {
        this.quickMenuFn();
        this.topBtn();
      },

      initialize: function() {
        this.id = {
          target: {
            quick: '#quick',
            stickyTop: '#footer'
          },
          topBtnClass: 'btn_top'
        };
        this.init();
      },

      quickMenuFn: function() {
        var quick = $(this.id.target.quick);
        var qTop = parseInt(quick.css('top'));

        $(window).scroll(function() {
          var winTop = $(window).scrollTop();

          quick.stop().animate({
            top: winTop + qTop
          }, 400);

        })
      },

      topBtn: function() {
        var btnLocation = $('.' + this.id.topBtnClass);
        var timerId = 0;

        $(window).on('scroll', function() {
          var winTop = $(window).scrollTop();
          if (winTop > 200) {
            btnLocation.fadeIn();
            clearInterval(timerId);
            timerId = setInterval(btnEffet, 2000);
          } else {
            btnLocation.fadeOut();
            clearInterval(timerId);
          }

        });

        function btnEffet() {
          btnLocation.fadeTo('300', 0.3).fadeTo('300', 1);
        }

        this.scrollTop(btnLocation);
      },

      scrollTop: function(eTarget, speed) {
        var speed = speed || null;
        eTarget.on('click', function() {
          $('html, body').animate({
            scrollTop: $("body").offset().top
          }, speed)
        })
      }

    };

    $(function() {
      UI.initialize();
    })

  })
//여기까지 스크롤따라다니는 js


</script>

<body>
  <div id="quick">스크롤 퀵 메뉴</div>



  <div class="navbar-wrapper">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar justified"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </div>
      </button>
      <form class="navbar-form navbar-right" role="search">
       <div class="form-group">
         <input type="text" class="form-control" placeholder="Search">
       </div>
       <button type="submit" class="btn btn-default" onclick="javascript:location.href='localhost/shop/list.php'">Submit</button>
     </form>
   </div>

 </div>
 <ul class="nav nav-pills nav-justified">
  <li role="presentation" class="js-scroll-trigger"><a href="#introduction">소개</a></li>
  <li role="presentation" class="js-scroll-trigger"><a  href="#list">상품목록</a></li>
  <li role="presentation" class="js-scroll-trigger"><a href="#location">오시는 길</a></li>
</ul>

<ul>
 <li><a href="#introduction"><img src="img/nav_1.png" alt="..." class="index_image"></a></li>
 <li><a  href="#list"><img src="img/nav_2.png" alt="..." class="index_image"></a></li>
 <li><a href="#location"><img src="img/nav_3.png" alt="..." class="index_image"></a></li>
</ul>
&nbsp;
    <!-- <img src="img/nav_1.png" alt="...">
  <img src="img/nav_2.png" alt="...">
    <img src="img/nav_3.png" alt="..."> -->

<div id="main">

<div class="vertical">
  <span class="vertical">
    건어물집 소개
  </span>
</div>
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
