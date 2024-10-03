<?php
  $title = "お問い合わせフォーム";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
  <style>
    h1 {
      font-size: 20px; 
      label {
      display: block; 
      margin-bottom: 10px; 
    }
    input, textarea {
      margin-bottom: 15px; 
      padding: 8px; 
      width: 100%; 
      box-sizing: border-box; 
    }
    input[type="submit"] {
      margin-top: 10px; 
    }
    }
  </style>
</head>
<body>
<h1><?php echo $title; ?></h1>
    <form method="post" action="confirm.php">
      <label for="name">名前:</label><br>
      <input type="text" id="name" name="name"><br>
      <label for="email">メールアドレス:</label><br>
      <input type="email" id="email" name="email"><br>
      <label for="message">お問い合わせ内容:</label><br>
      <textarea id="message" name="message"></textarea><br><br>
      <input type="submit" value="送信">
    </form>
</body>
</html>