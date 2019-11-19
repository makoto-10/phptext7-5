<?php
session_start();

if(!empty($_POST['submit'])){
    if(!empty($_POST['login_id'])&&!empty($_POST['password'])){
        $_SESSION['auth'] = 1;
        $_SESSION['login_id'] = $_POST['login_id'];
        $_SESSION['password'] = $_POST['password'];
        header('Location: login_after.php');
        exit;
    }
}

if(!empty($_SESSION['auth'])){
    session_destroy();
}
?>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<form action="login.php" method="post">
    ログインID
    <input type="text" name="login_id" value=""><br>
    パスワード
    <input type="password" name="password" value=""><br>
    <input type="submit" name="submit" value="送信">
</form>
</body>
</html>