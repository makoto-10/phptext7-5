<?php
session_start();

if(empty($_SESSION['auth'])){
    header('Location: login.php');
    exit;
}

if(!empty($_POST['logout'])){
    session_destroy();
    header('Location: login.php');
    exit;
}
?>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
ログインID：<?=$_SESSION['login_id'] ?><br>
パスワード：<?=$_SESSION['password'] ?><br>
<form action="login_after.php" method="post">
 <input type="submit" name="logout" value="ログアウト">
</form>
</body>
</html>