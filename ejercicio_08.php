<html>
	<body>
        <form action="ejercicio_08.php" method="post">
            <p>Escribe a nota dos tres examenes</p>
            <p>Escribe a primeira nota: <input type="text" name="nu1"/></p>
            <p>Escribe a segunda nota: <input type="text" name="nu2"/></p>
            <p>Escribe a terceira nota: <input type="text" name="nu3"/></p>
            <p><input type="submit" value="Submit" /></p>
        </form>
		<?php
            $num1 = $_POST['nu1'];
            $num2 = $_POST['nu2'];
            $num3 = $_POST['nu3'];
			if (is_numeric($num1) | is_numeric($num2) | is_numeric($num3)) {
                if ($num1>10|$num2>10|$num3>10){
                    echo "O máximo de nota é un 10";
                }
                    else{
                    $resu= ($num1+$num2+$num3)/3;
                    echo "A media é: $resu <br>";
                    if($resu < 5){
                        echo "Tes un insuficiente";
                    }
                    else{
                        if($resu==5){
                            echo "Tes un suficiente";
                        }
                        else{
                            if($resu<9){
                                echo "Tes un notable";
                            }
                            else{
                                echo "Tes un sobresaliente";
                            }
                        }
                    }
                }
            }else
            {
                echo "Os tres campo teñen que ser números";
            }
		?>
	</body>
</html>