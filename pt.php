<html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
</head>
<body>
<?php 
        mb_language("Japanese");
        mb_internal_encoding("UTF-8");

        $to = "yasutaka82@icloud.com";
        $title = "タイトル";
        $message = "内容";
        $headers = "From: from@example.com";
        if(mb_send_mail($to, $title, $message, $headers))
        {
            echo "メール送信成功です";
        }
        else
        {
            echo "メール送信失敗です";
        }
?>
</body>
</html>
