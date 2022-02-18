<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="ejercicio_14.php" enctype="multipart/form-data" method="post">
            <label>Escribe o número: <input type="number" name="nu1" /></lable>
            <br>
            <input type="submit" value="Submit"/>
            <br>
        </form>
        <?php
            $num1 = $_POST['nu1'];
            if (($num1 % 2) == 0){
                echo "O número $num1 é par ";
            }
            else{
                echo "O número $num1 é impar ";
            }
            if (($num1 % 5) == 0){
                echo "e é divisible entre 5";
            }
            else{
                echo "e non é divisible entre 5";
            }
        ?>
    </body>
</html>