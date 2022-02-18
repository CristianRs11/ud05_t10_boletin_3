<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="ejercicio_17.php" enctype="multipart/form-data" method="post">
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
                    if ($canto > 5) {
                        echo "O máximo de díxitos é 5";
                    }
                    else {
                        $primer = substr($num1,0,1);
                        echo "O primer díxito é $primer";
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