<?php

include('lock.php');
include("config_getdata.php");

//조건문에 박을 쿼리문

$category = $_GET['category'];
// $result_count=mysqli_query($bd,"SELECT count(*) FROM gunfish");
// $result_row=mysqli_fetch_row($result_count);
// $total_row = $result_row[0];
// $no = $total_row;


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
    <li role="presentation" class="js-scroll-trigger" id="bar"><a href="manage_list.php?category=1">반건조생선</a></li>
    <li role="presentation" class="js-scroll-trigger" id="bar"><a  href="manage_list.php?category=2">건어물</a></li>
    <li role="presentation" class="js-scroll-trigger" id="bar"><a href="manage_list.php?category=3">젓갈</a></li>
    <li role="presentation" class="js-scroll-trigger" id="bar"><a href="manage_list.php?category=4">선물세트</a></li>
  </ul>

  <div class="jumbotron">
   <div class="container">
    <h1><script >
      var category = '<?=$category?>'
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


    <form method="get" action="manage_new_goods.php">

      <input type ="hidden" name="category" value="<?=$category?>">
      <!-- hidden 처리해놓을것 -->
      <button type="submit" class="btn btn-secondary btn-sm">새항목 추가
      </button>
    </form>
    <!-- 상품분류 선택이미지,페이지 누르면 링크로 redirect되게해야함 -->
    <hr id ="colored_line" class="featurette-divider">
    <dl>



      <div class="container">
        <div class="row" >


         <?php

      // $no = $total_row;

// 테스트용
        // $result2 = mysqli_query($bd, "SELECT * FROM gunfish WHERE product_id ='$no'");
// test
         $category=$_GET['category'];

         $query = "SELECT * FROM gunfish WHERE category = '$category' ORDER BY product_id DESC";
         $result = mysqli_query($bd, $query);

      // $row = mysqli_fetch_array($result);
// while($row=mysqli_fetch_array($result))
         while($row=mysqli_fetch_array($result))
         {
        // $row2 = mysqli_fetch_array($result2);

          ?>



          <div class="col-lg-4"   >
                      <img src="<?=$row['product_image']?>" alt="Generic placeholder image" width="180" height="140">
                      <br>
                      <div id="goods">

                      <strong>상품명 :</strong> <?=$row['product_name']?>
                      <br>
                      <strong>가격 :</strong> <?=$row['product_price']?> 원
                    </div>

                      <form method="get" action="manage_edit_goods.php">
                        <input type ="hidden" name="product_id" value="<?=$row['product_id']?>">
                        <input type ="hidden" name="category" value="<?=$category?>">
                        <button type="submit" class="btn btn-secondary btn-sm" >상품수정</button>
                      </form>


                      <form method="get" action="delete_goods.php">
                        <input type ="hidden" name="product_id" value="<?=$row['product_id']?>">
                        <input type ="hidden" name="category" value="<?=$category?>">
                        <!-- hidden 처리해놓을것 -->
                        <button type="submit" onClick="return confirm_delete();">상품삭제
                        </button>
                      </form>

                      <!-- 우리가 원하는 모양으로 나타내주는 코드를 그냥 php내부에서 html로 만들어줘야할듯 -->
                    </div>
          <!-- 삭제 컨펌함수 -->
          <script>
            function confirm_delete() {
              var check = confirm("정말로 삭제하시겠습니까?");
              if(check == true)
                {alert("상품이 삭제됩니다.");
              var str1 = "delete_goods.php?product_id=";
              var str2= "<?=$row['product_id']?>";
              str1.concat(str2);
              location.href=str1;
            }

            else if(check == false)
              {alert("취소되었습니다. 이전 화면으로 돌아갑니다.");
            location.reload();  }

          }
        </script>



        <?php
    // $no = $no - 1;
      }
      mysqli_close($bd);
      ?>
    </div>
  </div>
  <br/>
  <br />
</dl>

</div>
</div>
</div>

<footer class="footer-distributed">
 <p class="footer-links" >
   <a href="manage_index.php" style="color:#C6C4C3;">관리자모드</a>
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
