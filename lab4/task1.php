<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php 

$news = array();
$news[0]['title'] = "Cristiano Ronaldo won the Champions League again";
$news[0]['content'] = "Cristiano Ronaldo scored 3 goals in final";
$news[0]['author'] = "John Smith";
$news[1]['title'] = "Leo Messi won the La Liga";
$news[1]['content'] = "Leo Messi scored maximum goal in La Liga";
$news[1]['author'] = "Javier Correa";
$news[2]['title'] = "Real Madrid won European Super Cup";
$news[2]['content'] = "Real Madrid won Atletico in Super Cup final";
$news[2]['author'] = "Alfredo Relano";
$news[3]['title'] = "Portugal won The World Cup 2018";
$news[3]['content'] = "Cristiano Ronaldo won The World Cup 2018";
$news[3]['author'] = "Michele Henry";


for ($i=0; $i <count($news) ; $i++) { 
 	 ?>

<div style=" background: midnightblue;  width: 700px; margin: 0 auto; ">
	<h2 style="font: 20px Arial; padding-left: 16px ; padding-top: 10px; color: lightgrey" ><?php
	echo $news[$i]['title']; 
	?></h2>
	<hr>
	<p style=" padding-left: 16px; color: lightgrey"><?php
	echo $news[$i]['content'];
	?></p>
	<h5  style=" float: right; margin-right: 20px; border-bottom: 1px solid white; color: lightgrey "><?php
	echo $news[$i]['author']; 
	?></h5>
	<br>
	<br>
	<br>	
</div>
<?php 
}
?>

</body>
</html>