<?php
  
include('lock.php');
 
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
        <form action="write_ok.jsp" method="post" encType="multiplart/form-data">
            <tr>
                <th> 홈 이미지 </th>
                <!--  서버에있는 이미지파일 가져오고 새거 서버에첨부가능하게 -->
                <td><input type="text" placeholder="squid.jpg " name="subject" class="form-control"/></td>
            </tr>
            <tr>
                <th>소개</th>
                <td><textarea cols="10"  name="content" class="form-control">건어물집은 유구한 역사를 가진 전문도매상입니다.</textarea></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="button" value="저장" onclick="sendData()" class="pull-right"/>
                    <input type="button" value="reset" class="pull-left"/>
                    <!-- 리셋시 원래 서버에 저장되어있는거 업로드 -->
                    <input type="button" value="뒤로.. " class="pull-right" onclick=""/>
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
