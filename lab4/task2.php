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

for ($tr=0; $tr<$rows; $tr++){
    echo '<tr>';
    for ($td=0; $td<$cols; $td++){
    	if (($td+$tr)%2==0) {
    	 	echo '<td style=" background: yellow;width: 10px;height: 10px" >'."  ".'</td>';
    	}
    	elseif (($td+$tr%2)!=0) {
    		echo '<td style=" background: black;width: 10px;height: 10px" >'."  ".'</td>';
    	}

        
    }
    echo '</tr>';
}

echo '</table>';

?>
</body>
</html>