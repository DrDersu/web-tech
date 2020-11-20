<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div style="width: 500px; margin: 0 auto;">
<form method="get">
        <p style="font: 20px Arial;">Client name <input type="text" name="name" placeholder="Name" ></p>   
        <p style="font: 20px Arial;">Client surname <input type="text" name="surname" placeholder="Surname" > </p>
        <p style="font: 20px Arial;">Food 
            <select name="food">
                <option>Pizza-1100 KZT</option>
                <option>Chikens-1200 KZT</option>
                <option>Lagman-800 KZT</option>
                <option>Burger-500 KZT</option>
            </select>
        </p>
        <button type="submit">ORDER FOOT</button>  
    </form>
<?php
if (!empty($_GET['name'])) {
            $name=$_GET['name'];
            $surname=$_GET['surname'];
            $food=$_GET['food'];
            echo '<h3 style="font: 20px Arial;">' . $name . ' ' . $surname . ' ordered ' . $food. ' </h3>';
}
?>
</div>
</body>
</html>