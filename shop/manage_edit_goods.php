<?php

include('lock.php');
include("config_getdata.php");

// 총 게시물 수 를 구한다.
$result_count=mysqli_query($bd,"SELECT count(*) FROM gunfish");
$result_row=mysqli_fetch_row($result_count);
$total_row = $result_row[0];

$product_id = $_GET['product_id'];
//결과의 첫번째 열이 count(*) 의 결과다.
//mysql_fetch_row 쓰면 $result_row[0] 처럼 숫자를 써서 접근을 해야한다.

$result = mysqli_query($bd,"SELECT * FROM gunfish WHERE product_id='$product_id'");

$row=mysqli_fetch_array($result);

?>


<!DOCTYPE html>
<html lang="kor">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <!-- 반응형웹으로 만들어주는 태그 -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css\bootstrap.css">
  <link rel="stylesheet" href="css/box_design.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <h2>관리자 모드</h2>

  <hr width="1500">
  <div class="container">
    <table class="table table-bordered">
        <thead>
            <caption> 글쓰기 </caption>
        </thead>
        <tbody>
            <form action="product_update.php" method="post" encType="multipart/form-data">

                <input type="hidden" name="product_id" value="<?=$product_id?>">


                <tr>
                    <th>상품명</th>
                    <td><input type="text"  name="product_name" value = "<?=$row['product_name']?>" class="form-control"/></td>
                </tr>
                <tr>
                    <th>상품이미지 </th>
                    <!--  서버에있는 이미지파일 가져오고 새거 서버에첨부가능하게 -->
                    <td><input type="file" name="product_image" value="<?=$row['product_image']?>" /></td>
                </tr>
            <!-- 밑의 각 inputform이랑 텍스트파일에 서버에있는 파일에서
                원래저장되있는 정보 긁어와야함 -->
                <tr>
                    <th>가격(원)</th>
                    <td><input type="text"  name="product_price"   value = "<?=$row['product_price']?>" class="form-control"/></td>
                </tr>
                <tr>
                    <th>제품특징</th>
                    <td><input type="text"  name="product_info"  value = "<?=$row['product_info']?>" class="form-control"/></td>
                </tr>
                <!-- 인풋창에 원래 서버에 저장된 정보 올라와있어야함 -->
                <tr>
                    <th>원산지</th>
                    <td><input type="text"  name="product_from"   value = "<?=$row['product_from']?>" class="form-control"/></td>
                </tr>
                <tr>
                    <th>중량(kg)</th>
                    <td><input type="text"  name="product_weight"   value = "<?=$row['product_weight']?>" class="form-control"/></td>
                </tr>
                <tr>
                    <th>소개</th>
                    <td><textarea cols="10"  name="product_intro" class="form-control" ><?=$row['product_intro']?></textarea></td>
                </tr>
                <tr>







                    <td colspan="2">
                        <input type="submit" value="저장" onclick="" class="pull-right"/>
                        <!-- <input type="button" value="reset" class="pull-left"/>

                         -->
                        <!-- 리셋시 원래 서버에 저장되어있는거 업로드 -->
                        <input type="button" value="상품 목록으로... " class="pull-left" onclick="history.back(-1)"/>
                    <!-- <a class="btn btn-default" onclick="sendData()"> 등록 </a>
                    <a class="btn btn-default" type="reset"> reset </a>
                    <a class="btn btn-default" onclick="javascript:location.href='list.jsp'">글 목록으로...</a> -->
                </td>
            </tr>
        </form>
    </tbody>
</table>
</div>


</body>
</html>
