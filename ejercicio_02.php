<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="ejercicio_02.php" enctype="multipart/form-data" method="post">
            <p>Que hora é? <input type="text" name="hora" />:00</p>
            <p><input type="submit" value="Submit"/></p>
        </form>
        <?php
            $hora= $_REQUEST['hora'];
            if ($hora>24)
                echo "<p>O máximo é 24</p>";
            else
                if ($hora>=6 && $hora<=12) 
                    echo "Bos días";
                else
                    if ($hora>=13 && $hora<= 20)
                        echo "Boas tardes";
                    else
                        echo "Boas noites";
        ?>
    </body>
</html>