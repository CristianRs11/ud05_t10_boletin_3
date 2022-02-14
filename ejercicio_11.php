<html>
	<body>
        <form action="ejercicio_11.php" method="post">
            <p>Escribe a hora: <input type="text" size=1 name="nu1"/>:<input type="text" size=1 name="nu2"/></p>
            <p><input type="submit" value="Submit" /></p>
        </form>
		<?php
            $num1 = $_POST['nu1'];
            $num2 = $_POST['nu2'];
			if (is_numeric($num1) && is_numeric($num2)) {
                if ($num1>24) {
                    echo "Escribe ben a hora";
                }else{
                    if ($num1==24 && $num2>0){
                        echo "Escribe ben a hora";
                    }
                    else{
                        if ($num2>60){
                            echo "Escribe ben a hora";
                        }
                        else{
                            $segundos= $num1*3600+$num2*60;
                            if ($segundos== 86400) {
                                echo "Xa é medianoite";
                            }
                            else{
                                $canto=86400-$segundos;
                                echo "Quedan $canto segundos";
                            }
                        }
                    }
                }
            }else
            {
                echo "Escribe números";
            }
		?>
	</body>
</html>