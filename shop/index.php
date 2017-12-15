<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 위 3개의 메타 태그는 *반드시* head 태그의 처음에 와야합니다; 어떤 다른 콘텐츠들은 반드시 이 태그들 *다음에* 와야 합니다 -->
    <title>hi 건어물집에 오신걸 환영합니다</title>
  <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/box_design.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="C:\Users\user\Desktop\jquery-scroll-follow\lib/jquery.scrollfollow.js"></script>

<style>

#quick {
  position: absolute;
  right: 0;
  top: 100px;
  height: 200px;
  background: black;
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


    <style>
    body { padding-bottom: 70px; }
    </style>
    <div class="vertical">
    <span class="vertical">
    건어물집 소개
    </span>
  </div>
    <section id="introduction" class="jumbotron">
       <div class="container">
     <div class="row featurette">
            <div class="col-md-7 col-md-push-5">
              <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
              <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <div class="col-md-5 col-md-pull-7">
              <img class="featurette-image img-responsive center-block" src="img/squid.jpg" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
            </div>
          </div>
    </div>
    </section>
      <hr class="featurette-divider">

    <section id="list" class="container">
    <div class="row">
          <div class="col-lg-3">
            <a href="<?php
            echo "list.php?id=";
            $temp = 2;
            echo $temp;
            ?>" class="thumbnail">
            <img src="img/squid.jpg" alt="..."></a>
<!-- 여기서 디비에서 값이랑 아이디 가져오는거 추가하고 가져오면서 img 소스에 들어갈  -->
<!-- php 변수를 위에서 미리 정의해주자  -->
         </div>
          <div class="col-lg-3">
            <a href="#" class="thumbnail">
          <img src="img/squid.jpg" alt="..."></a>
           </div>
          <div class="col-lg-3">
            <a href="#" class="thumbnail">
          <img src="img/squid.jpg" alt="..."></a>
          </div>
        </div>
        </section>

     <hr class="featurette-divider">
     <section id="location" class="container">
    <div class="row featurette">
          <div class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
          </div>
          <div class="col-md-5 col-md-pull-7">
            <img class="featurette-image img-responsive center-block" src="img/squid.jpg" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>
    </section>
    <hr class="featurette-divider">


    <footer>
      <p>
             <a  href="login.php">
             관리자모드
           </a>
           &nbsp;&nbsp;&nbsp;
           <a href="index.php">
            홈페이지
           </a>

           </p>
      <p>&copy; 대표:건어물 | 사업자등록번호 : 123-45-67890
      </p>
      <p>
        대표번호:02-333-3333 | 메일 : driedfood@naver.com
      </p>
      <p>
        copyright (c)seafoodworld.com all rights reserved</p>
      </footer>
    </div>

  </div>
<<<<<<< HEAD
<<<<<<< HEAD
    <ul class="nav nav-pills nav-justified">
        <li role="presentation"><a href="login.php">관리자모드</a></li>
    </ul>


=======
>>>>>>> 4a4725beac864590a86c14c719409c8a4a9e1f42
=======
>>>>>>> 4a4725beac864590a86c14c719409c8a4a9e1f42



</body>
</html>
