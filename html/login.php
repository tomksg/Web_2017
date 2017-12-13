
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/signin.css" rel="stylesheet">
</head>

  <body>

    <div class="container">
      <form class="form-signin">
        <h2 class="form-signin-heading">관리자 인증</h2>
        <label for="inputEmail" class="sr-only">ID</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="ID" required autofocus>
        <label for="inputPassword" class="sr-only">PASSWORD</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="PASSWORD" required>
        <button class="btn btn-lg btn-primary" type="submit">완료</button>
      </form>

    </div>
  </body>
</html>
