<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>7-5</title>
</head>
<body>
  <?php if($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
    <?php if(!isset($_POST['message']) || $_POST['message'] === ''): ?>
      <p style="color: red">メッセージを入力してください</p>
    <?php endif; ?>
  <?php endif; ?>
  <form action="" method="post">
    <label for="message">メッセージをどうぞ</label>
    <input type="text" name="message" id="message">
    <button type="submit">送信する</button>
  </form>
</body>
</html>