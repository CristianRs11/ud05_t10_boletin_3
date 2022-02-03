<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="ejercicio_01.php" enctype="multipart/form-data" method="post">
            <p>Escribe o día da semana: <input type="text" name="diasemana" /></p>
            <p><input type="submit" value="Submit"/></p>
        </form>
        <?php
            $diasemana= $_REQUEST['diasemana'];
            switch ($_REQUEST['diasemana']) {
                case 'Lunes':
                    echo "<p>O $diasemana a primeira hora tes IAW</p>";
                    break;
                case 'Martes':
                    echo "<p>O $diasemana a primeira hora tes SAD</p>";
                    break;
                case 'Miércoles':
                    echo "<p>O $diasemana a primeira hora tes ASX</p>";
                    break;
                case 'Jueves':
                    echo "<p>O $diasemana a primeira hora tes ASX</p>";
                    break;
                case 'Viernes':
                    echo "<p>O $diasemana a primeira hora tes IAW</p>";
                    break;
                default:
                    echo "<p>Escribe lunes, martes, miércoles, jueves ou viernes.</p>";
                    break;
            }
        ?>
    </body>
</html>