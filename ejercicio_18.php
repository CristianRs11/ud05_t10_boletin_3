<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="ejercicio_18.php" enctype="multipart/form-data" method="post">
            <label>Escribe un número: <input type="number" name="nu1" /></lable>
            <br>
            <input type="submit" value="Submit"/>
            <br>
        </form>
        <?php
            if (isset($_POST['nu1'])){
                if (filter_var($_POST['nu1'],FILTER_VALIDATE_INT)){
                    $num1 = $_POST['nu1'];
                    $canto = strlen($num1);
                    if ($num1 < 0){
                        if ($canto > 6) {
                        echo "O máximo de díxitos é 5";
                        }
                        else {
                            $canto = $canto - 1;
                            $primer = substr($num1,1,1);
                            echo "O primer díxito é $primer </br>";
                            echo "O número $num1 ten $canto díxitos";
                        }
                    }
                    else {
                            $primer = substr($num1,0,1);
                            echo "O primer díxito é $primer </br>";
                            echo "O número $num1 ten $canto díxitos";
                        }
                }
                else{
                    echo "Tes que escribir un número.";    
                }
            }
            else{
                echo "Tes que escribir un número.";
            }
            
        ?>
    </body>
</html>