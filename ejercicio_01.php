
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2> Realizar un algoritmo que pida los coeficientes de una 
            ecuación de 2º grado, y de las posibles soluciones reales. 
            Si no existen reales, debe indicarlo. </h2>
        
        <?php
        
        $z = $_POST['txtZ'];
        $k = $_POST['txtK'];
        $c = $_POST['txtC'];

        $primero = 0;
        $segundo = 0;
        $primero = (-$k + sqrt (pow($k, 2) - (4 * $z * $c))) / (2 * $z);
        $segundo = (-$k - sqrt (pow($k, 2) - (4 * $z * $c))) / (2 * $z);
        ?>
        
        <br/>
        <?php 
        
        if (is_nan ($primero) || is_nan ($segundo)){
            if (is_nan ($primero) && is_nan ($segundo)){
		echo "la ecuacion con signo Positivo no tiene una solucion Real <br/>";
		echo " la ecuacion con signo Negativo no tiene una solucion Real <br/>";
	}else if (is_nan ($primero)){
		echo "la ecuacion con signo Positivo no tiene una solucion Real.";
		echo "El valor de X2 es: ".$segundo;
	}else{
		echo "El valor de la ecuacion con signo Neativo no tiene una solucion Real.";
		echo "El valor de X1 es: ".$segundo;
	}
        }else {
            echo  "El resultado de X1 es: ".$primero." y el de X2 es: ".$segundo;
            }
        ?>
        ?>
    </body>
</html>
