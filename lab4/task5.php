<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div style="width: 500px; margin: 0 auto;">
<form method="post">
        <p style="font: 20px Arial;">Login <input type="text" name="login"></p>
        <p style="font: 20px Arial;">Password <input type="password" name="password"></p>
        
        <button type="submit">LOGIN</button>  
    </form>
<?php
if (!empty($_POST['login'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    if (strcmp($login, "user") == 0) {
        if (strcmp($password, "qwerty") == 0) {
            header("Location:profile.php");
        }
    }
}
?>
</div>
</body>
</html>