<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


    <button type="submit" onClick="return confirm_delete();">상품삭제</button>
    <script>
    function confirm_delete() {
            var check = confirm("정말로 삭제하시겠습니까?");
                	  if(check == true)
                    {alert("상품이 삭제됩니다.");
                    document.write(
                      <form method="get" action="delete_goods.php">
                        <input type ="hidden" name="product_id" value="<?=$row['product_id']?>">
                      </form> );
                  }

                	  else if(check == false)
                    {alert("취소되었습니다. 이전 화면으로 돌아갑니다.");
                  location.reload();  }

    }
    </script>


    <form method="get" action="delete_goods.php">
      <input type ="hidden" name="product_id" value="<?=$row['product_id']?>">
    </form>


  </body>
</html>
