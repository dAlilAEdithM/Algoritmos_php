<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>ejercicio9
        </title>
    </head>
    <body>
    <h2>Un alumno desea comprar un computadora portátil en El Lago,
        antes desea sabes cuánto le costará en realidad si le 
        tiene que agregar al precio de la LapTop, $300 pesos de
        impuestos que le cobran el Km. 30 el SAT, y con los Soldados,
        tiene que pagar de impuesto el 5% del valor inicial
        de la LapTop. Cuánto le saldrá en total la LapTop.</h2>
    
    <form id="form1" name="form1" method="post" action="">
      <p>
          <label>Ingrese el valor del computador </label>
        <input type="text" name="Valor" id="Valor" />
      </p>
      <p>
        <input type="submit" name="salir " id="salir " value="Enviar" />
        
      </p>
      
         <?php 
		 
   
 if (!empty($_POST["Valor"])) {
	$Vinicial = $_POST["Valor"];
  	 
	$impuesto = $Vinicial + 300;
	$impuestoS = $Vinicial + 30;
	$Sold = $Vinicial * 0.05;
	$valorTotal = $impuesto + 30 + $Sold ;
	  echo"El valor total del computador es :<h2> $valorTotal</h2><br/>";
  }
   ?>
    </body>
</html>
