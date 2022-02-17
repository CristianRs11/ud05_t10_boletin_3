<html>
	<body>
        <form action="ejercicio_12.php" method="post">
            <p>1. Cal é a correcta? </p>
            <input type="radio" name="pre0" value=1 /> HMLT</br>
            <input type="radio" name="pre0" value=2 /> HLMT</br>
            <input type="radio" name="pre0" value=3 /> HTML</br>
            <p>2. Como se chama este módulo? </p>
            <input type="radio" name="pre1" value=1 /> IAW</br>
            <input type="radio" name="pre1" value=2 /> IAWA</br>
            <p>3. Pregunta 3 </p>
            <input type="radio" name="pre2" value=1 /> A</br>
            <input type="radio" name="pre2" value=2 /> B</br>
            <input type="radio" name="pre2" value=3 /> C</br>
            <p>4. Pregunta 4 </p>
            <input type="radio" name="pre3" value=1 /> A</br>
            <input type="radio" name="pre3" value=2 /> B</br>
            <input type="radio" name="pre3" value=3 /> C</br>
            <p>5. Pregunta 5</p>
            <input type="radio" name="pre4" value=1 /> A</br>
            <input type="radio" name="pre4" value=2 /> B</br>
            <input type="radio" name="pre4" value=3 /> C</br>
            <p>6. Pregunta 6</p>
            <input type="radio" name="pre5" value=1 /> A</br>
            <input type="radio" name="pre5" value=2 /> B</br>
            <input type="radio" name="pre5" value=3 /> C</br>
            <p>7. Pregunta 7</p>
            <input type="radio" name="pre6" value=1 /> A</br>
            <input type="radio" name="pre6" value=2 /> B</br>
            <input type="radio" name="pre6" value=3 /> C</br>
            <p>8. Pregunta 8</p>
            <input type="radio" name="pre7" value=1 /> A</br>
            <input type="radio" name="pre7" value=2 /> B</br>
            <input type="radio" name="pre7" value=3 /> C</br>
            <p>9. Pregunta 9</p>
            <input type="radio" name="pre8" value=1 /> A</br>
            <input type="radio" name="pre8" value=2 /> B</br>
            <input type="radio" name="pre8" value=3 /> C</br>
            <p>10. Pregunta 10</p>
            <input type="radio" name="pre9" value=1 /> A</br>
            <input type="radio" name="pre9" value=2 /> B</br>
            <input type="radio" name="pre9" value=3 /> C</br>
            <p><input type="submit" value="Submit" /></p>
        </form>
		<?php
            $respuesta= [3,1,1,2,3,1,2,3,3,2];
            $nota = 0;
            for ($i=0; $i < 10 ; $i++) { 
                if (isset($_REQUEST["pre$i"])){
                    if ($_REQUEST["pre$i"] == $respuesta[$i]) {
                        $nota = $nota + 1;
                    }
                    else{
                        $nota = $nota - 0.1;
                    }
                }
                else{
                    $nota = $nota + 0;
                }
            }
            echo "A túa nota é $nota";
		?>
	</body>
</html>