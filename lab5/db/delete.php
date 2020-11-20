<?php
require_once "connection.php";

if ( !empty($_POST['idd']) )
{
    $sql="DELETE FROM db_students WHERE id = :n";
    $stmt = $pdo_conn->prepare($sql);
    $stmt->execute(array(':n'=> $_POST['idd']));

    $sql2="DELETE FROM students WHERE id = :n1";
    $stmt2 = $pdo_conn->prepare($sql2);
    $stmt2->execute(array(':n1'=> $_POST['inn']));

}

header("Location: ../adminpage.php")
?>

