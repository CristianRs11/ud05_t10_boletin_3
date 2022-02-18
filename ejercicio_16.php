<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="ejercicio_16.php" enctype="multipart/form-data" method="post">
            <label>Escribe un número: <input type="number" name="nu1" min=0 /></lable>
            <br>
            <input type="submit" value="Submit"/>
            <br>
        </form>
        <?php
            if (isset($_POST['nu1'])){
                if (filter_var($_POST['nu1'],FILTER_VALIDATE_INT)){
                    $num1 = $_POST['nu1'];
                    $ultimo = substr($num1,strlen($num1)-1,1);
                    echo "O último díxito é $ultimo";
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