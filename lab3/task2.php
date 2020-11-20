<h2> Task2 </h2>
<form  method="get">
    <p>Number: <input type="text" name="month" placeholder="Input a month number" /></p>
    <p><input type="submit" value="view" /></p>
</form>
<textarea><?php
    if(!empty($_GET['num'])) {
        $m = $_GET['month'];
        if ($m <= 5 and $m >= 3) {
            echo("Весна");
        } else if ($m <= 8 and $m >= 6) {
            echo("Лето");
        } else if ($m <= 11 and $m >= 9) {
            echo("Осень");
        } else if ($m <= 2 and $m >= 1) {
            echo("Зима");
        } else if ($m == 12) {
            echo("Зима");
        } else {
            echo("Ошибка ввода");
        }
    }
    ?>
	</textarea>

