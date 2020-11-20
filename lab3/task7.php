<h2> Task7 </h2>
<form method="get">
    <p>Text1: <textarea type="text" name="text1" placeholder="text1"></textarea></p>
    <p>Text2: <textarea type="text" name="text2" placeholder="text2"></textarea></p>
    <p><input type="submit" value="view"  /></p>
</form>
<textarea style="height: 100px"><?php
    if(!empty($_GET['text1']) or !empty($_GET['text2'])) {
        $text1 = $_GET['text1'];
        $text2 = $_GET['text2'];
        $perc2 = 5;
        $sim = similar_text($text1, $text2, $perc);
        $perc2 = ($perc * 5) / 100;
        echo "Cходство: $sim ($perc2 out of 5) \n $perc %";
    }
    ?>
</textarea>

