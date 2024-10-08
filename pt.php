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
?>
</body>
</html>
