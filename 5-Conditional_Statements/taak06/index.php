<!DOCTYPE html>

<html>

<body>
<?php
        $var1 = 7;
        $var2 = 12;

        if($var1 > 10 && $var2 > 10){
                echo "De getallen zijn allebij boven de 10.</br>";
        }

        if($var1 > 10 || $var2 > 10){
                echo "Een van de getallen is boven de 10 of alle twee.</br>";
        }

        if($var1 > 10 xor $var2 > 10){
                echo "Alleen 1 van getallen is boven de 10.</br>";
        }

        if($var1 !== 10 || $var2 !== 10){
                echo "Geen van de getallen is 10.";
        }
        

?>
</body>

</html>