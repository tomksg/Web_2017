<?php
echo "<script>alert(\"부정한 조작 감지!\");</script>";
echo "1초뒤 홈페이지로 redirect 됩니다.";
echo ("<meta http-equiv='Refresh' content='1;
         URL=index.php'>");
?>