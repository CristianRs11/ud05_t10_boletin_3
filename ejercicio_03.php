<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="ejercicio_03.php" enctype="multipart/form-data" method="post">
            <p>Que día é? <input type="text" name="dia" /></p>
            <p><input type="submit" value="Submit"/></p>
        </form>
        <?php
            $dia=$_REQUEST['dia'];
            if ($dia==""){
                echo "Escribe un número entre 1 e 7";
            }else{
                if ($dia>=1 && $dia<=7){
                    $semana=array("Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","Domingo");
                    $diasemana= $dia-1;
                    echo "O día $dia da semana é $semana[$diasemana]";
                }else{
                    echo "O número ten que estar entre 1 e 7";
                }
            }
        ?>
    </body>
</html>