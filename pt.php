<html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
</head>
<body>
<?php 
        mb_language("Japanese");
        mb_internal_encoding("UTF-8");

        $to = $_POST['email'];
        $title = $_POST['title'];
        $message = $_POST['naiyo'];
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
