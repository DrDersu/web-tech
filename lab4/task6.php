

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div style="width: 500px; margin: 0 auto;">
	<?php 
		include "db.php";
	 ?>
	<form method="get">

		  <p><?php
				echo $questions[0]["question"];
		  ?></p>

		  <input type="radio" id="val_1" name="questions1" value='1' >
		  <label for="val_1"><?php echo $questions[0]["var_1"]; ?></label><br>

		  <input type="radio" id="var_2" name="questions1" value="2">
		  <label for="var_2"><?php echo $questions[0]["var_2"]; ?></label><br>

		  <input type="radio" id="var_3" name="questions1" value="3">
		  <label for="var_3"><?php echo $questions[0]["var_3"]; ?></label>
		  <br> 

		  <input type="radio" id="var_4" name="questions1" value="4">
		  <label for="var_4"><?php echo $questions[0]["var_4"]; ?></label>
		  <br> 



		  <p><?php  
				echo $questions[1]["question"];
		  ?></p>

		  <input type="radio" id="val_1" name="questions2" value='1' >
		  <label for="val_1"><?php echo $questions[1]["var_1"]; ?></label><br>

		  <input type="radio" id="var_2" name="questions2" value="2">
		  <label for="var_2"><?php echo $questions[1]["var_2"]; ?></label><br>

		  <input type="radio" id="var_3" name="questions2" value="3">
		  <label for="var_3"><?php echo $questions[1]["var_3"]; ?></label>
		  <br> 

		  <input type="radio" id="var_4" name="questions2" value="4">
		  <label for="var_4"><?php echo $questions[1]["var_4"]; ?></label>
		  <br> 



		  <p><?php  
				echo $questions[2]["question"];
		  ?></p>

		  <input type="radio" id="val_1" name="questions3" value='1' >
		  <label for="val_1"><?php echo $questions[2]["var_1"]; ?></label><br>

		  <input type="radio" id="var_2" name="questions3" value="2">
		  <label for="var_2"><?php echo $questions[2]["var_2"]; ?></label><br>

		  <input type="radio" id="var_3" name="questions3" value="3">
		  <label for="var_3"><?php echo $questions[2]["var_3"]; ?></label>
		  <br> 

		  <input type="radio" id="var_4" name="questions3" value="4">
		  <label for="var_4"><?php echo $questions[2]["var_4"]; ?></label>
		  <br> 


		  <p><?php  
				echo $questions[3]["question"];
		  ?></p>

		  <input type="radio" id="val_1" name="questions4" value='1' >
		  <label for="val_1"><?php echo $questions[3]["var_1"]; ?></label><br>

		  <input type="radio" id="var_2" name="questions4" value="2">
		  <label for="var_2"><?php echo $questions[3]["var_2"]; ?></label><br>

		  <input type="radio" id="var_3" name="questions4" value="3">
		  <label for="var_3"><?php echo $questions[3]["var_3"]; ?></label>
		  <br> 

		  <input type="radio" id="var_4" name="questions4" value="4">
		  <label for="var_4"><?php echo $questions[3]["var_4"]; ?></label>
		  <br> 




		  <p><?php  
				echo $questions[4]["question"];
		  ?></p>

		  <input type="radio" id="val_1" name="questions5" value='1' >
		  <label for="val_1"><?php echo $questions[4]["var_1"]; ?></label><br>

		  <input type="radio" id="var_2" name="questions5" value="2">
		  <label for="var_2"><?php echo $questions[4]["var_2"]; ?></label><br>

		  <input type="radio" id="var_3" name="questions5" value="3">
		  <label for="var_3"><?php echo $questions[4]["var_3"]; ?></label>
		  <br> 

		  <input type="radio" id="var_4" name="questions5" value="4">
		  <label for="var_4"><?php echo $questions[4]["var_4"]; ?></label>
		  <br> 	



		  <p><?php  
				echo $questions[5]["question"];
		  ?></p>

		  <input type="radio" id="val_1" name="questions6" value='1' >
		  <label for="val_1"><?php echo $questions[5]["var_1"]; ?></label><br>

		  <input type="radio" id="var_2" name="questions6" value="2">
		  <label for="var_2"><?php echo $questions[5]["var_2"]; ?></label><br>

		  <input type="radio" id="var_3" name="questions6" value="3">
		  <label for="var_3"><?php echo $questions[5]["var_3"]; ?></label>
		  <br> 

		  <input type="radio" id="var_4" name="questions6" value="4">
		  <label for="var_4"><?php echo $questions[5]["var_4"]; ?></label>
		  <br> 


		  <p><?php  
				echo $questions[6]["question"];
		  ?></p>

		  <input type="radio" id="val_1" name="questions7" value='1' >
		  <label for="val_1"><?php echo $questions[6]["var_1"]; ?></label><br>

		  <input type="radio" id="var_2" name="questions7" value="2">
		  <label for="var_2"><?php echo $questions[6]["var_2"]; ?></label><br>

		  <input type="radio" id="var_3" name="questions7" value="3">
		  <label for="var_3"><?php echo $questions[6]["var_3"]; ?></label>
		  <br> 

		  <input type="radio" id="var_4" name="questions7" value="4">
		  <label for="var_4"><?php echo $questions[6]["var_4"]; ?></label>
		  <br> 



		  <p><?php  
				echo $questions[7]["question"];
		  ?></p>

		  <input type="radio" id="val_1" name="questions8" value='1' >
		  <label for="val_1"><?php echo $questions[7]["var_1"]; ?></label><br>

		  <input type="radio" id="var_2" name="questions8" value="2">
		  <label for="var_2"><?php echo $questions[7]["var_2"]; ?></label><br>

		  <input type="radio" id="var_3" name="questions8" value="3">
		  <label for="var_3"><?php echo $questions[7]["var_3"]; ?></label>
		  <br> 

		  <input type="radio" id="var_4" name="questions8" value="4">
		  <label for="var_4"><?php echo $questions[7]["var_4"]; ?></label>
		  <br> 



		  <p><?php  
				echo $questions[8]["question"];
		  ?></p>

		  <input type="radio" id="val_1" name="questions9" value='1' >
		  <label for="val_1"><?php echo $questions[8]["var_1"]; ?></label><br>

		  <input type="radio" id="var_2" name="questions9" value="2">
		  <label for="var_2"><?php echo $questions[8]["var_2"]; ?></label><br>

		  <input type="radio" id="var_3" name="questions9" value="3">
		  <label for="var_3"><?php echo $questions[8]["var_3"]; ?></label>
		  <br> 

		  <input type="radio" id="var_4" name="questions9" value="4">
		  <label for="var_4"><?php echo $questions[8]["var_4"]; ?></label>
		  <br> 


		  <p><?php  
				echo $questions[9]["question"];
		  ?></p>

		  <input type="radio" id="val_1" name="questions10" value='1' >
		  <label for="val_1"><?php echo $questions[9]["var_1"]; ?></label><br>

		  <input type="radio" id="var_2" name="questions10" value="2">
		  <label for="var_2"><?php echo $questions[9]["var_2"]; ?></label><br>

		  <input type="radio" id="var_3" name="questions10" value="3">
		  <label for="var_3"><?php echo $questions[9]["var_3"]; ?></label>
		  <br> 

		  <input type="radio" id="var_4" name="questions10" value="4">
		  <label for="var_4"><?php echo $questions[9]["var_4"]; ?></label>
		  <br> 
			<input type="submit" value="Submit">
	</form>
<?php
if(!empty($_GET['questions1'])) {


    $questions1 = $_GET['questions1'];
    $questions2 = $_GET['questions2'];
    $questions3 = $_GET['questions3'];
    $questions4 = $_GET['questions4'];
    $questions5 = $_GET['questions5'];
    $questions6 = $_GET['questions6'];
    $questions7 = $_GET['questions7'];
    $questions8 = $_GET['questions8'];
    $questions9 = $_GET['questions9'];
    $questions10 = $_GET['questions10'];

    $p = 0;


    if (strcmp($answers[0], $questions1) == 0) {
        $p++;
    }

    if (strcmp($answers[1], $questions2) == 0) {
        $p++;
    } else {

    }
    if (strcmp($answers[2], $questions3) == 0) {
        $p++;
    } else {

    }
    if (strcmp($answers[3], $questions4) == 0) {
        $p++;
    } else {

    }
    if (strcmp($answers[4], $questions5) == 0) {
        $p++;
    } else {

    }
    if (strcmp($answers[5], $questions6) == 0) {
        $p++;
    } else {

    }
    if (strcmp($answers[6], $questions7) == 0) {
        $p++;
    } else {

    }
    if (strcmp($answers[7], $questions8) == 0) {
        $p++;
    } else {

    }
    if (strcmp($answers[8], $questions9) == 0) {
        $p++;
    } else {

    }
    if (strcmp($answers[9], $questions10) == 0) {
        $p++;
    } else {

    }

    echo '<h3 style="font: 20px Arial;">' . $p . ' </h3>';
    if ($p < 5) {
        echo '<h3 style="font: 20px Arial;">' . 'YOU FAILED' . ' </h3>';
    } elseif ($p < 8) {
        echo '<h3 style="font: 20px Arial;">' . 'GOOD' . ' </h3>';
    } else {
        echo '<h3 style="font: 20px Arial;">' . 'PERFECT' . ' </h3>';
    }
}
?>
</div>
</body>
</html>


