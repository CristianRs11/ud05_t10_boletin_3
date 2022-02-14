<html>
	<body>
        <form action="ejercicio_10.php" method="post">
            <p>Que día naciches: <input type="text" name="nu1"/></p>
            <p>En que mes naciches: <input type="text" name="nu2"/></p>
            <p><input type="submit" value="Submit" /></p>
        </form>
		<?php
            $num1=$_REQUEST['nu1'];
            $num2=$_REQUEST['nu2'];
            switch ($num2) {
                case 1:
                    if (1 <= $num1 && $num1 <= 20 ) {
                        echo "Eres Capricornio";
                    }
                    else{
                        if ($num1<= 31) {
                            echo "Eres Acuario";
                        }
                        else{
                            echo "Escribe a data na que naciches";
                        }
                    }
                    break;
                case 2:
                    if (1 <= $num1 && $num1 <= 19 ) {
                        echo "Eres Acuario";
                    }
                    else{
                        if ($num1<= 29) {
                            echo "Eres Piscis";
                        }
                        else{
                            echo "Escribe a data na que naciches";
                        }
                    }
                    break;
                case 3:
                    if (1 <= $num1 && $num1 <= 20 ) {
                        echo "Eres Piscis";
                    }
                    else{
                        if ($num1<= 31) {
                            echo "Eres Aries";
                        }
                        else{
                            echo "Escribe a data na que naciches";
                        }
                    }
                    break;
                case 4:
                    if (1 <= $num1 && $num1 <= 20 ) {
                        echo "Eres Aries";
                    }
                    else{
                        if ($num1<= 30) {
                            echo "Eres Tauro";
                        }
                        else{
                            echo "Escribe a data na que naciches";
                        }
                    }
                    break;
                case 5:
                    if (1 <= $num1 && $num1 <= 20 ) {
                        echo "Eres Tauro";
                    }
                    else{
                        if ($num1<= 31) {
                            echo "Eres Geminis";
                        }
                        else{
                            echo "Escribe a data na que naciches";
                        }
                    }
                    break;
                case 6:
                    if (1 <= $num1 && $num1 <= 20 ) {
                        echo "Eres Geminis";
                    }
                    else{
                        if ($num1<= 30) {
                            echo "Eres Cancer";
                        }
                        else{
                            echo "Escribe a data na que naciches";
                        }
                    }
                    break;
                case 7:
                    if (1 <= $num1 && $num1 <= 22 ) {
                        echo "Eres Cancer";
                    }
                    else{
                        if ($num1<= 31) {
                            echo "Eres Leo";
                        }
                        else{
                            echo "Escribe a data na que naciches";
                        }
                    }
                    break;
                case 8:
                    if (1 <= $num1 && $num1 <= 22 ) {
                        echo "Eres Leo";
                    }
                    else{
                        if ($num1<= 31) {
                            echo "Eres Virgo";
                        }
                        else{
                            echo "Escribe a data na que naciches";
                        }
                    }
                    break;
                case 9:
                    if (1 <= $num1 && $num1 <= 22 ) {
                        echo "Eres Virgo";
                    }
                    else{
                        if ($num1<= 30) {
                            echo "Eres Libra";
                        }
                        else{
                            echo "Escribe a data na que naciches";
                        }
                    }
                    break;
                case 10:
                    if (1 <= $num1 && $num1 <= 22 ) {
                        echo "Eres Libra";
                    }
                    else{
                        if ($num1<= 31) {
                            echo "Eres Escorpio";
                        }
                        else{
                            echo "Escribe a data na que naciches";
                        }
                    }
                    break;
                case 11:
                    if (1 <= $num1 && $num1 <= 21 ) {
                        echo "Eres Escorpio";
                    }
                    else{
                        if ($num1<= 31) {
                            echo "Eres Sagitario";
                        }
                        else{
                            echo "Escribe a data na que naciches";
                        }
                    }
                    break;
                case 12:
                    if (1 <= $num1 && $num1 <= 21 ) {
                        echo "Eres Sagitario";
                    }
                    else{
                        if ($num1<= 31) {
                            echo "Eres Capricornio";
                        }
                        else{
                            echo "Escribe a data na que naciches";
                        }
                    }
                    break;
                default:
                    echo "Escribe ben a túa data de nacemento";
                    break;
            }
		?>
	</body>
</html>