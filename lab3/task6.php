<h2> Task6 </h2>
<form method="post">
    <p>Email: <input type="text" name="email" placeholder="email" /></p>

    <p><input type="submit" value="view"  /></p>
</form>
<textarea style="height: 100px"><?php
    if(!empty($_POST['email'])) {
        $email = $_POST['em'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "E-mail адрес '$email' указан верно.\n";
        } else {
            echo "E-mail адрес '$email' указан неверно.\n";
        }
    }?>
</textarea>


