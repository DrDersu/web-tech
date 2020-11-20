<h2> Task1 </h2>
<form method="get">
    <p>Integer: <input type="text" name="num" placeholder="Input the number" /></p>

    <p><input type="submit" value="view"  /></p>
</form>

<textarea ><?php
   if(!empty($_GET['num'])) {
       $t = $_GET['num'];
       echo ($t % 3) . " , ";
       echo($t % 5);
   }
   ?>
</textarea>

