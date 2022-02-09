<html>
	<body>
        <form action="ejercicio_05.php" method="post">
            <p>A ecuación é: ax + b = 0</p>
            <p>Escribe o primer número: <input type="text" name="nu1"/></p>
            <p>Escribe o segundo número: <input type="text" name="nu2"/></p>
            <p><input type="submit" value="Submit" /></p>
        </form>
		<?php
            $num1 = $_POST['nu1'];
            $num2 = $_POST['nu2'];
			if (is_numeric($num1)) {
                if (is_numeric($num2)){
                    $resu= -($num2)/$num1;
                    echo "O resultado de esta ecuación é: $resu";
                }
                else{
                    echo "O segundo campo ten que ser un número";
                }
            }else
            {
                echo "O primer campo ten que ser un número";
            }
		?>
	</body>
</html>