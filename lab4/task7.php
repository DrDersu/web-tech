<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<div style="width: 500px; margin: 0 auto;">
<form method="get">
        <p style="font: 20px Arial;">Name <input type="text" name="name" placeholder="Name" ></p>   
        <p style="font: 20px Arial;">Surname <input type="text" name="surname" placeholder="Surname" > </p>
        <p style="font: 20px Arial;">Age 
            <select name="age">
                <?php 
                  for ($i=1; $i <100 ; $i++) { 
                       echo "<option>".$i."</option>";
                    }  
                 ?>
            </select>
        </p>
        <p style="font: 20px Arial;">City 
            <select name="city">
                <option>Almaty</option>
                <option>Shymkent</option>
                <option>Atyrau</option>
                <option>Nursultan</option>
            </select>
        </p>
        <button type="submit">ORDER</button>  
    </form>
<?php
if(!empty($_GET['name'])) {
    include "db.php";
    $name = $_GET['name'];
    $surname = $_GET['surname'];
    $age = $_GET['age'];
    $city = $_GET['city'];


    for ($i = 0; $i < count($restaurants); $i++) {

        if (strcmp($restaurants[$i]['city'], $city) == 0) {

            if ($restaurants[$i]['age_limit'] <= $age) {
                echo '<h3 style="font: 20px Arial;">' . "The restaurant, which you can go to: " . $restaurants[$i]['name'] . ' </h3>';
            }
        }

    }
}
?>
</div>
</body>
</html>