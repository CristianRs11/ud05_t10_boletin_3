<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="ejercicio_13.php" enctype="multipart/form-data" method="post">
            <label>Escribe o primer número: <input type="number" name="nu1" /></lable><br>
            <label>Escribe o segundo número: <input type="number" name="nu2" /></lable><br>
            <label>Escribe o terceiro número: <input type="number" name="nu3" /></lable><br>
            <br>
            <input type="submit" value="Submit"/>
            <br>
        </form>
        <?php
            if (isset($_POST['nu1']) && isset($_POST['nu2']) && isset($_POST['nu3'])){
                if (filter_var($_POST['nu1'],FILTER_VALIDATE_INT) && filter_var($_POST['nu1'],FILTER_VALIDATE_INT) && filter_var($_POST['nu1'],FILTER_VALIDATE_INT)){
                    $num1 = $_POST['nu1'];
                    $num2 = $_POST['nu3'];
                    $num3 = $_POST['nu2'];
                    $numeros = array($num1,$num2,$num3);
                    asort($numeros);
                    foreach ($numeros as $num) {
                        echo "$num ";
                    }
                }
                else{
                    echo "Teñen que ser números.";    
                }
            }
            else{
                echo "Teñen que ser números.";
            }
            
        ?>
    </body>
</html>