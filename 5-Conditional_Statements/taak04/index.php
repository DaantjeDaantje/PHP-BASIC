<!DOCTYPE html>

<html>

<body>
	<?php
        $prod_besteld = 23;

        if($prod_besteld < 10) {
            $prijs = 1.50;
            echo $prijs . "</br>";
        } 

        elseif($prod_besteld < 20) {
            $prijs = 1.25;
            echo $prijs . "</br>";
        } 

        else {
            $prijs = 1.00;
            echo $prijs . "</br>";
        }
	?>
</body>

</html>