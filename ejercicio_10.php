
     <br/>
        <h2>Pedir el día, mes y año de una fecha e indicar si la fecha es correcta. Con meses de 28, 30 y 31 días. Sin años bisiesto </h2>
<form id="form1" name="form1" method="post" action="">
    <label>Ingrese la fecha asi dd/mm/aaaa:</label>
    <input type="text" name="dia" id="dia"size="4"/> 
    <input type="text" name="mes" id="mes" size="4" /> 
    <input type="text" name="anio" id="anio"size="8" />
<p>
        <input type="submit" name="enviar" id="enviar" value="Enviar" />
</form>
      </p>
      <p>
      <?php
	if (!empty($_REQUEST['dia']) && !empty($_REQUEST['mes']) && !empty($_REQUEST['anio']))
        if (is_numeric($_REQUEST['dia']) && 
         is_numeric($_REQUEST['mes']) && 
         is_numeric($_REQUEST['anio'])) 
        {   
         if (checkdate($_REQUEST['mes'],$_REQUEST['dia'],$_REQUEST['anio']))
         echo "La fecha ingresada es correcta";
        else
         echo "La fecha no es correcta";
}   
else
  echo "La fecha no es correcta";
?>
      </p>
</center>

