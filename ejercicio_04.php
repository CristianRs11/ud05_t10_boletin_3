<html>
	<body>
        <form action="ejercicio_04.php" method="post">
            <p>Cantas horas traballaches esta semana: <input type="text" name="nu1"/></p>
            <p><input type="submit" value="Submit" /></p>
        </form>
		<?php
            $num1 = $_POST['nu1'];
			if (is_numeric($num1)) {
                if ($num1>40) {
                    $num2= $num1 - 40;
                    $resu= 480 + $num2 * 16;
                    echo "O salario desa semana semanal é ".$resu."€ ";
                }else{
                $resu = $num1 * 12;
                echo "O salario semanal é ".$resu."€ ";
                }
            }else
            {
                echo "Escribe números";
            }
		?>
	</body>
</html>