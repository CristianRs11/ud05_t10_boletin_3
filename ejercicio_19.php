<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="ejercicio_19.php" enctype="multipart/form-data" method="post">
            <label>Escribe un número: <input type="number" name="nu1" min=0 /></lable>
            <br>
            <input type="submit" value="Submit"/>
            <br>
        </form>
        <?php
            if (isset($_POST['nu1'])){
                if (filter_var($_POST['nu1'],FILTER_VALIDATE_INT)){
                    $canto = strlen($_REQUEST['nu1']);
                    if ($canto > 5) {
                        echo "O máximo de díxitos é 5";
                    }
                    else{
                        $num1 = $_POST['nu1'];
                        $cap = true;
                        for ($i=0; $i<strlen($num1); $i++){
                            $iz = substr($num1,$i,1);
                            $der = substr($num1,strlen($num1)-1-$i,1);
                            if ($iz != $der){
                                $cap = false;
                            }
                        }
                        if ($cap){
                            echo "O número $num1 é capicúa";
                        }
                        else{
                            echo "O número $num1 non é capicúa";
                        }
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