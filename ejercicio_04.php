<form id="form1" name="form1" method="post" action="">
  
    <h2>Pedir un número entre 0 y 9.999 y mostrarlo con las cifras al revés </h2>
      <p>
          <label>Ingrese el numero : </label>
        <input type="text" name="numero" id="numero" />
        <br>
        
        <input type="submit" name="enviar" id="enviar" value="Enviar" />
        
      </p>
    
      <p>
        <label for="resultado">
<?php
            if (!empty($_POST["numero"])) {
              $numero = "";
            	$numero = $_POST["numero"];
              $numeros=(string)$numero;
              $result="";
                     for ($i = strlen($numero); $i >=0; $i--) {
                         $result.= $numeros [$i];
                     }
                        echo" El valor al reves es : $result <br/>";
                         }
 
?>
