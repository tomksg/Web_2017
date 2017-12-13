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
  <div class="bs-example" data-example-id="embedded-scrollspy">
  <div class="collapse navbar-collapse bs-example-js-navbar-scrollspy">
    <ul id="ex1" class="nav nav-pills nav-justified">
    <li id="info" role="presentation" class="active"><a href="#0">소개</a></li>
      <li id="list" role="presentation"><a href="#1">상품목록</a></li>
      <li id="lo" role="presentation"><a href="#2">오시는 길</a></li>
    </ul>
  </div>

    <style>
    body { padding-bottom: 70px; }
    </style>
    <div class="vertical">
    <span class="vertical">
    건어물집 소개
    </span>
    <!-- php업데이트가 느려서 업데이트된건지 확인하려고 넣어둔 현재시간출력함수 -->
    <?php
    $today=date("Y-m-d H:i:s");
    echo $today ?>
  </div>
      <div data-spy="scroll" data-target="ex1" data-offset="0" class="scrollspy-example">
    <div id="info" class="jumbotron">
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
    </div>
      <hr class="featurette-divider">

    <div id="list" class="container">
    <div class="row">
          <div class="col-lg-3">
            <a href="list.php?category=1" class="thumbnail">
            <img src="img/squid.jpg" alt="..."></a>
         </div>
         <div class="col-lg-3">
           <a href="list.php?category=2" class="thumbnail">
           <img src="img/squid.jpg" alt="..."></a>
        </div>
        <div class="col-lg-3">
          <a href="list.php?category=3" class="thumbnail">
          <img src="img/squid.jpg" alt="..."></a>
       </div>
     </div>
     <div class="row">
       <div class="col-lg-3">
         <a href="list.php?category=4" class="thumbnail">
         <img src="img/squid.jpg" alt="..."></a>
      </div>
      <div class="col-lg-3">
        <a href="list.php?category=5" class="thumbnail">
        <img src="img/squid.jpg" alt="..."></a>
     </div>
     <div class="col-lg-3">
       <a href="list.php?category=6" class="thumbnail">
       <img src="img/squid.jpg" alt="..."></a>
    </div>

</div>

    </div>
     <hr class="featurette-divider">
     <div id="lo" class="container">
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





</body>
</html>
