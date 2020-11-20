<?php
require_once "connection.php";
if ( !empty($_POST['id']) && !empty($_POST['name']))
{
    $sql="UPDATE db_students SET name1 = :n1, surname= :sn,  lastname= :ln, birthday= :bd, education= :ed,
     nationality= :nt, special= :sp, military_traning= :mt, sport_category= :sc, postpo= :po, address= :ad,
      marital_status= :ms, conviction= :co, rank= :ra, email= :em WHERE id = :id";
    echo "<pre>\n$sql\n</pre>\n";
    $stmt = $pdo_conn->prepare($sql);
    $stmt->execute(array(':id'=>$_POST['id'], ':n1'=>$_POST['name'],
        ':sn'=>$_POST['surname'], ':ln'=>$_POST['lastname'], ':bd'=>$_POST['birthday'], ':ed'=>$_POST['education'],
        ':nt'=>$_POST['nation'], ':sp'=>$_POST['special'], ':mt'=>$_POST['military'], ':sc'=>$_POST['sports_category'],
        ':po'=>$_POST['postponement'], ':ad'=>$_POST['place'], ':ms'=>$_POST['wife'],  ':co'=>$_POST['conviction'],
        ':ra'=>$_POST['order'], ':em'=>$_POST['email']));

    if ($stmt->rowCount()>=1)
        echo "one row was updated";
    else
        echo "nothing was returned";
}

$inn=$_POST['inn'];

header("Location: ../index.php")

?>


