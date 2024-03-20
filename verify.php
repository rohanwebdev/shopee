<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    $email=$_SESSION['email'];
    echo '
<form action="logic.php" method="post">
<input type="input"placeholder="Verify Otp" name="otp">
<input type="hidden" name="email" value="'.$email.'">
<input type="submit" name="verify">
</form>
';
if (isset($_SESSION['msgg'])) {
  echo $_SESSION['msgg'];
  unset($_SESSION['msgg']);



}
?>
</body>
</html>