<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <form action="ejercicio_15.php" enctype="multipart/form-data" method="post">
            <label>1. Tu pareja parece estar más inquieta de lo normal sin ningún motivo aparente.</label></br>
                <input type="radio" name="pre0" value="V" />Verdadero</br>
                <input type="radio" name="pre0" value="F" />Falso</br>
            <label>2. Ha aumentado sus gastos de vestuario.</label></br>
                <input type="radio" name="pre1" value="V" />Verdadero</br>
                <input type="radio" name="pre1" value="F" />Falso</br>
            <label>3. Ha perdido el interés que mostraba anteriormente por ti.</label></br>
                <input type="radio" name="pre2" value="V" />Verdadero</br>
                <input type="radio" name="pre2" value="F" />Falso</br>
            <label>4. Ahora se afeita y se asea con más frecuencia (si es hombre) o ahora se arregla el pelo y se asea con más frecuencia (si es mujer).</label></br>
                <input type="radio" name="pre3" value="V" />Verdadero</br>
                <input type="radio" name="pre3" value="F" />Falso</br>
            <label>5. No te deja que mires la agenda de su teléfono móvil.</label></br>
                <input type="radio" name="pre4" value="V" />Verdadero</br>
                <input type="radio" name="pre4" value="F" />Falso</br>
            <label>6. A veces tiene llamadas que dice no querer contestar cuando estás tú delante.</label></br>
                <input type="radio" name="pre5" value="V" />Verdadero</br>
                <input type="radio" name="pre5" value="F" />Falso</br>
            <label>7. Últimamente se preocupa más en cuidar la línea y/o estar bronceado/a.</label></br>
                <input type="radio" name="pre6" value="V" />Verdadero</br>
                <input type="radio" name="pre6" value="F" />Falso</br>
            <label>8. Muchos días viene tarde después de trabajar porque dice tener mucho más trabajo.</label></br>
                <input type="radio" name="pre7" value="V" />Verdadero</br>
                <input type="radio" name="pre7" value="F" />Falso</br>
            <label>9. Has notado que últimamente se perfuma más.</label></br>
                <input type="radio" name="pre8" value="V" />Verdadero</br>
                <input type="radio" name="pre8" value="F" />Falso</br>
            <label>10. Se confunde y te dice que ha estado en sitios donde no ha ido contigo.</label></br>
                <input type="radio" name="pre9" value="V" />Verdadero</br>
                <input type="radio" name="pre9" value="F" />Falso</br>
            <input type="submit" value="Submit" />
        </form>
        <?php
            $respuesta=["V","V","V","V","V","V","V","V","V","V"];
            $resultado= 0;
            for ($i=0; $i < 10; $i++) {
                if (isset($_REQUEST["pre$i"])) {
                    if ($_REQUEST["pre$i"] == $respuesta[$i]) {
                        $resultado = $resultado + 3;
                    }
                    else {
                        $resultado = $resultado + 0;
                    }
                }
                else {
                    $resultado = $resultado + 0;
                }
            }
            if ($resultado>=0 && $resultado<=10) {
                echo "¡Enhorabuena! tu pareja parece ser totalmente fiel.";
            }
            else{
                if ($resultado>=11 && $resultado<=22) {
                    echo "Quizás exista el peligro de otra persona en su vida o en su mente, aunque seguramente será algo sin importancia. No bajes la guardia.";
                }
                else{
                    echo "Tu pareja tiene todos los ingredientes para estar viviendo un romance con otra persona. Te aconsejamos que indagues un poco más y averigües que es lo que está pasando por su cabeza.";
                }
            }
        ?>
    </body>
</html>