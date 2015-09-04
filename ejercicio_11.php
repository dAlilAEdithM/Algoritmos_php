<center>
        <form method="post" action="">
            <br/>
            <h5>Ejercicio 11</h5>
            <br/>
            <h2> Solicitar calificaciones hasta que la calificación sea 0
                (cero) y desplegar al ultimo de las materia cursadas, 
                las aprobadas y las reprobadas</h2>
            <br/>
            <br/>
            <label><h2>Ingrese Calificación</h2></label>
            <input type="text" name="notas"/>
            <br/>
            <br/>
           <input type="submit" class="p"name="calcular" value="Ingresar"/>
        </form> 
    
    <?php
    session_start();
        
            if (($_REQUEST ['notas'] != 0)){
                $_SESSION['contador'] = $_SESSION['contador'] + 1;
                if (($_REQUEST['notas'] < 3.0)){
                    $_SESSION['reprobado']= $_SESSION['reprobado'] + 1;
                }  else {
                    $_SESSION['aprobado']=$_SESSION['aprobado'] + 1;
                }
                header('Location: ejercicio11.php');
            }  else {
                echo "las materias cursadas fueron: ". $_SESSION['contador']."<br>";
                echo "las materias reprovadas fueron: ". $_SESSION['reprobado']."<br>";
                echo "las materias aprobadas fueron: ". $_SESSION['aprobado']."<br>";
                session_destroy();                
            }
    ?>
</center>

