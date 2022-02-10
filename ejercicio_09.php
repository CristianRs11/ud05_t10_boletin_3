<html>
	<body>
        <form action="ejercicio_09.php" method="post">
            <p>A ecuación é: ax^2+bx+c=0</p>
            <p>Escribe o valor de a: <input type="text" name="nu1"/></p>
            <p>Escribe o valor de b: <input type="text" name="nu2"/></p>
            <p>Escribe o valor de c: <input type="text" name="nu3"/></p>
            <p><input type="submit" value="Submit" /></p>
        </form>
		<?php
            $num1 = $_POST['nu1'];
            $num2 = $_POST['nu2'];
            $num3 = $_POST['nu3'];
			if (is_numeric($num1) && is_numeric($num2) && is_numeric($num3)) {
                    $resu= (-($num2)+sqrt(pow($num2,2)-4*$num1*$num3))/2*$num1;
                    echo "x= $resu<br/>";
                    echo "O resultado é x=($num1)*($resu)^2+($num2)*($resu)+($num3)=0<br/>";
                    $resu2= (-($num2)-sqrt(pow($num2,2)-4*$num1*$num3))/2*$num1;
                    echo "x= $resu2<br/>";
                    echo "O resultado é x=($num1)*($resu2)^2+($num2)*($resu2)+($num3)=0<br/>";
            }else
            {
                echo "Os tres campo teñen que ser números";
            }
		?>
	</body>
</html>