<h2> Task5 </h2>
<h3>Print all numbers less than 10,000, which have at least one digit  3  and which are not divisible by 5.</h3>
<textarea style="width: 400px; height: 200px;"><?php
    for ($i=0; $i <10000 ; $i++) {
        if (strpos((string)$i, '3')!==false) {
            if($i%5!=0){
                echo $i . ', ';
            }
        }
    }
    ?>
</textarea>



