<!DOCTYPE html>

<html>

<body>
	<?php
        $vw1 = 12;
        $vw2 = 344;
        $vw3 = 54;
        $vw4 = 565;
        $vw5 = 654;
        $vw6 = 564;
        $vw7 = 543;
        $vw8 = 564;
        $vw9 = 2234;
        $vw10 = 324;
        echo var_dump($vw1 == $vw2) . "</br>";
        echo var_dump($vw3 === $vw4) . "</br>";
        echo var_dump($vw5 != $vw6) . "</br>";
        echo var_dump($vw7 > $vw8) . "</br>";
        echo var_dump($vw9 < $vw10) . "</br>";
        echo var_dump($vw1 <> $vw3) . "</br>";
        echo var_dump($vw2 >= $vw4) . "</br>";
        echo var_dump($vw3 <= $vw5) . "</br>";
	?>
</body>

</html>