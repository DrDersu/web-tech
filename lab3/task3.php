<?php
$time=0;
if (!empty($_POST['btn'])) {
    $time=$_COOKIE['btn'];
    if (isset($_POST['btn'])){
        ++$time;
        if ($time>2){
            $time=0;
        }
        setcookie('btn',$time);
    }
}
else{
    setcookie('btn',0);
}
$arr=array('1','2','3');
if ($time==1){
    $arr[0]='2';
    $arr[1]='1';
    $arr[2]='3';
}
elseif ($time==2){
    $arr[0]='3';
    $arr[1]='2';
    $arr[2]='1';
}
?>
<form method="post">
    <button type="submit" name="btn" value="1"><?php
        echo $arr[0];
        ?></button>
    <button type="submit" name="btn" value="2"><?php
        echo $arr[1];
        ?></button>
    <button type="submit" name="btn" value="3"><?php
        echo $arr[2];
        ?></button>
</form>
