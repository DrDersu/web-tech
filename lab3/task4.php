<h2> Task4 </h2>
<form method="post">
    <p>Login: <input type="text" name="log" placeholder="login" /></p>
    <p>Password: <input type="password" name="pass" placeholder="password" /></p>
    <p>Email: <input type="text" name="email" placeholder="email" /></p>

    <p><input type="submit" value="view"  /></p>
</form>

<textarea style="height: 100px"><?php
    $login=$_POST['log'];
    $pass=$_POST['pass'];
    $email=$_POST['email'];


    if ($login =="") {
        echo("Hекоторые поля не заполнены!");
    }
    else if ($pass=="") {
        echo("Hекоторые поля не заполнены!");
    }
    else if ($email=="") {
        echo("Hекоторые поля не заполнены!");
    }
    else {
        echo("Регистрация прошла успешно \n");
        echo "LOGIN: ".$login."\n";
        echo "PASSWORD: ".$pass."\n";
        echo "EMAIL: ".$email;

    }

    ?>
</textarea>


