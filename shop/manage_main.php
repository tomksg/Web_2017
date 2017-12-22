<?php

include('lock.php');
include("config_getdata.php");

$query = "SELECT * from main WHERE number =1";
$result = mysqli_query($bd,$query) or die ("Error Querying database.");
$row = mysqli_fetch_assoc($result);

$src = $row['image'];
$src2 = $row['description'];

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
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
</head>
<body>

  <h2>관리자 모드</h2>

  <hr width="1500">
  <div class="container">
    <table class="table table-bordered">
      <thead>
        <img src="<?=$src?>"/>
        <caption> 글쓰기 </caption>
      </thead>
      <tbody>
        <form action="main_upload.php" method="POST" encType="multipart/form-data">
          <tr>
            <th> 홈 이미지 </th>

            <!--  서버에있는 이미지파일 가져오고 새거 서버에첨부가능하게 -->

            <td><input type="file" name="upload"/></td>

          </tr>
          <tr>
            <th>소개</th>
            <td>
              <textarea cols="10"  name="content" class="form-control"><?=$src2?>
              </textarea>
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <input type="submit" value="send" class="pull-right"/>
              <!-- 리셋시 원래 서버에 저장되어있는거 업로드 -->
              <input type="button" value="뒤로.. " class="pull-right" onclick="history.back(-1)"/>
                    </td>
                </tr>
              </form>
            </tbody>
          </table>
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
