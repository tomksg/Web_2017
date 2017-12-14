<?php

include('lock.php');
include("config_getdata.php");

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
                <th>상품명</th>
                <td><input type="text"  name="subject" value = "건조오징어"class="form-control"/></td>
            </tr>
            <tr>
                <th>상품이미지 </th>
                <!--  서버에있는 이미지파일 가져오고 새거 서버에첨부가능하게 -->
                <td><input type="text" placeholder="squid.jpg " name="subject" class="form-control"/></td>
            </tr>
            <!-- 밑의 각 inputform이랑 텍스트파일에 서버에있는 파일에서
            원래저장되있는 정보 긁어와야함 -->
            <tr>
                <th>가격</th>
                <td><input type="text"  name="filename"   value = "30,000원" class="form-control"/></td>
            </tr>
            <tr>
                <th>제품특징</th>
                <td><input type="text"  name="filename"  value = "건조오징어" class="form-control"/></td>
            </tr>
            <!-- 인풋창에 원래 서버에 저장된 정보 올라와있어야함 -->
            <tr>
                <th>원산지</th>
                <td><input type="text"  name="filename"   value = "건조오징어" class="form-control"/></td>
            </tr>
            <tr>
                <th>중량</th>
                <td><input type="text"  name="filename"   value = "건조오징어" class="form-control"/></td>
            </tr>
            <tr>
                <th>소개</th>
                <td><textarea cols="10"  name="content" class="form-control">건조오징어가 몸에 정말 좋음</textarea></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="button" value="저장" onclick="sendData()" class="pull-right"/>
                    <input type="button" value="reset" class="pull-left"/>
                    <!-- 리셋시 원래 서버에 저장되어있는거 업로드 -->
                    <input type="button" value="상품 목록으로... " class="pull-right" onclick=""/>
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
