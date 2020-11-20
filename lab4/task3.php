<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

$rows = 50; 
$cols = 50; 

echo '<table >';

for ($tr=1; $tr<=$rows; $tr++){ 
    echo '<tr>';
    for ($td=1; $td<=$cols; $td++){
    	if ($td%2==0 and $tr%2==0) {
    	 	echo '<td style=" background: black;" >'."  ".'</td>';
    	}
    	elseif ($td%2==1 and $tr%2==1) {
    		echo '<td style=" background: black;" >'."  ".'</td>';
    	}
    	else{
    		echo '<td style="background: yellow; width: 10px; height: 10px; border:1px solid black;" >'."  ".'</td>';
    	}
        
    }
    echo '</tr>';
}

echo '</table>';

?>
</body>
</html>