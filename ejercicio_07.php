<!DOCTYPE html >
<html>
    <head>
        <meta charset="utf-8">
        <title>ejercicio7</title>
    </head>
    <body>
        <form id="form1" name="form1" method="post" action="">
    
      
        <h2> Solicitar al usuario el total de kilómetros que recorre su automóvil si con un litro se recorre 16.4 kilómetros, y desplegar cuantos litros de gasolina gastará, redondear el resultado para que no muestre decimales </h2>
        <label>Ingrese los kilometros :</label>
        <input type="text" name="kilometros" id="kilometros" />
        
      <p>
        <input type="submit" name="enviar" id="enviar" value="Enviar" />
      </p>
        
      
      <label for="resultado">
      
        <?php
        if (!empty($_POST["kilometros"])) {
       $d= $_POST["kilometros"];
        $li=1/16.4;
        $r=$li;
        $Total=$r*$d;
        $Total = round($Total);
        printf("%.0f",$total)."litros de gasolina";
        echo $Total." son el total de litros gastados";
        }

        ?>
     </body>
</html>