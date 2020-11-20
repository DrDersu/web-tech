<?php

if ($_POST['adminName']=="admin" and $_POST['passAdmin'] == 'admin') {
    header("Location: ../lab5/adminpage.php");
        }
    else{
        header("Location: ../lab5/index.php");
}
