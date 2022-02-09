<html>
	<body>
        <form action="ejercicio_06.php" method="post">
            <p>A formula é: t =√ 2h/g sendo g = 9.81m/s2
            <p>Escribe o valor de h: <input type="text" name="nu1"/></p>
            <p><input type="submit" value="Submit" /></p>
        </form>
		<?php
            $num1 = $_POST['nu1'];
			if (is_numeric($num1)) {
                    $resu= sqrt($num1*2/9.81);
                    echo "O resultado de esta ecuación é: $resu segundos";
            }else
            {
                echo "O campo que escribiches ten que ser un número";
            }
		?>
	</body>
</html>