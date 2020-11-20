<?php
$name=$_POST['name'];
$surname=$_POST['surname'];
$lastname=$_POST['lastname'];
$birthday=$_POST['birthday'];
$inn=$_POST['inn'];
$place=$_POST['place'];
$wife=$_POST['wife'];
$order=$_POST['order'];
$education=$_POST['education'];
$nation=$_POST['nation'];
$special=$_POST['special'];
$military=$_POST['military'];
$sports_category=$_POST['sports_category'];
$postponement=$_POST['postponement'];
$conviction=$_POST['conviction'];
$email=$_POST['email'];

if ($name!=null){
    session_start();
    $_SESSION['test']=true;
}

require('register.php');


?>