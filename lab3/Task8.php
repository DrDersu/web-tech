<h2> Task8 </h2>
<form method="get">
    <p>Text1: <textarea type="text" name="text1" placeholder="text1"></textarea></p>
    <p>Text2: <textarea type="text" name="text2" placeholder="text2"></textarea></p>
    <p><input type="submit" value="view"  /></p>
</form>
<?php
if (!empty($_GET['text1']) or !empty($_GET['text2'])) {
    $text1 = $_GET['text1'];
    $text2 = $_GET['text2'];
    $file1 = 'text1.txt';
    $file2 = 'text2.txt';
    $file_A = 'file_A.txt';
    file_put_contents($file1, $text1);
    file_put_contents($file2, $text2);
    file_put_contents($file_A,'');
    $arr_text1 = explode(" ", $text1);
    $arr_text2 = explode(" ", $text2);
    foreach ($arr_text1 as $str) {
        if (!in_array($str, $arr_text2)) {
            file_put_contents($file_A, $str . ' ', FILE_APPEND);
        }
    }

    $file_B = 'file_B.txt';
    file_put_contents($file_B,'');
    foreach ($arr_text1 as $str){
        if (in_array($str, $arr_text2)){
            file_put_contents($file_B, $str . ' ', FILE_APPEND);
        }
    }

    $file_C = 'file_C.txt';
    file_put_contents($file_C, 'In first text: ');
    $arr = array();
    $arr1 = array();
    foreach ($arr_text1 as $str){
        if (array_count_values($arr_text1)[$str]>2 and !(in_array($str, $arr))){
            file_put_contents($file_C, $str . ' ', FILE_APPEND);
            $arr[]=$str;
        }
    }
    file_put_contents($file_C, " \nIn second text: ", FILE_APPEND);
    foreach ($arr_text2 as $str){
        if (array_count_values($arr_text2)[$str]>2 and !(in_array($str, $arr1))){
            file_put_contents($file_C, $str . ' ', FILE_APPEND);
            $arr1[]=$str;
        }
    }

}
?>
<h3>A</h3>
<textarea style="height: 100px"><?php
if (!empty($_GET['text1']) or !empty($_GET['text2'])) {
    echo file_get_contents($file_A);
}?>
</textarea>

<h3>B</h3>
<textarea style="height: 100px"><?php
    if (!empty($_GET['text1']) or !empty($_GET['text2'])) {
        echo file_get_contents($file_B);
    }
    ?>
</textarea>

<h3>C</h3>
<textarea style="height: 100px"><?php
    if (!empty($_GET['text1']) or !empty($_GET['text2'])) {
        echo file_get_contents($file_C);
    }
     ?>
</textarea>

