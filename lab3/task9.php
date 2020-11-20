<h2> Task9 </h2>
<form method="get">
    <p><input type="submit" value="view"  /></p>
</form>
<textarea style="height: 100px"><?php
    $files1 = scandir(getcwd());
    foreach ($files1 as $value) {
        echo($value)."\n";
    }
    ?>
</textarea>

