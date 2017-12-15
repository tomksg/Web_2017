<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

    include("config_settings.php");  //DB연결을 위한 config.php를 로딩합니다.
    session_start();   //세션의 시작

    if($_SERVER["REQUEST_METHOD"] == "POST"){

    $myusername=addslashes($_POST['username']);
    $mypassword=addslashes($_POST['password']);

    $sql="SELECT id FROM marryme WHERE id='$myusername' and pw='$mypassword'";

    $result=mysqli_query($bd,$sql);
    if(!$result){
     die(mysqli_error($bd));
    }
    //$row=mysql_fetch_array($result);
    //$active=$row['active'];
    // $count = $result->num_rows;
   $count=mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row
    if($count==1)  //count가 1이라는 것은 아이디와 패스워드가 일치하는 db가 하나 있음을 의미합니다.
    {
        // session_register("myusername");
        $_SESSION['login_user']=$myusername;

        header("location: manage_index.php");  // welcome.php 페이지로 넘깁니다.
    }
    else
    {
        //  echo "<script>alert(\"Login 실패\");</script>";
        // $error="Your Login Name or Password is invalid";
        header("location: login-err.php");
        // echo ("<meta http-equiv='Refresh' content='5;
        //  URL=login.php'>");//read.php?id=$id
        exit;
       // header("location: 2.php");  // welcome.php
    }
}
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="css/signin.css" rel="stylesheet">
</head>

  <body>

    <div class="container">
      <div class="alert alert-danger">
        <strong>인증실패!</strong> 다시 시도하십시오.
      </div>

      <form class="form-signin" action="" method="POST">
        <h2 class="form-signin-heading">관리자 인증</h2>
        <label for="inputId" class="sr-only">ID</label>
        <input type="text" id="inputId" class="form-control" placeholder="ID" required autofocus>
        <label for="inputPassword" class="sr-only">PASSWORD</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="PASSWORD" required>
        <button class="btn btn-lg btn-primary" type="submit">완료</button>
      </form>

    </div>
  </body>
</html>
