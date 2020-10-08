<div class="modal " id="ventana_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-center">
            <div class="modal-header ">
                <h5 class="modal-title col-11 text-center" id="exampleModalLabel">Iniciar sesion</h5>

            </div>

            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="modal-body">


                    <div class="form-group">
                        <label for="formGroupExampleInput">Correo Electronico</label>
                        <input type="text" required class="form-control" name="correo" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Contraseña</label>
                        <input type="password" required class="form-control" name="password" placeholder="">
                    </div>

                </div>

                <div class="modal-footer">

                    <button type="button" data-toggle="modal" data-target="#ventana_modal2" class="btn btn-secondary" data-dismiss="modal">Crear Cuenta</button>
                    <button type="submit" name="ingreso" class="btn btn-primary">Ingresar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php

include("conexionbd.php");

// start a session





if (isset($_POST['ingreso'])) {

    $correo = $_POST['correo'];
    $password = $_POST['password'];





    if (!$conexiones) {
        die("Conneccion fallo: " . mysqli_connect_error());
    } else {
        $consulta = " select * from datos_usuarios where correo='$correo' and pasword='$password'";
        $resultado = mysqli_query($conexiones, $consulta);

        $filas = mysqli_num_rows($resultado);
        if ($filas == 0) {
            $mensaje = "DEBES ESTAR REGISTRADO PRA INGRESAR";
            echo "<script>";
            echo "alert('$mensaje');";
            echo "window.location = '../index.php';";
            echo "</script>";
        } else {
            $_SESSION['user'] = $correo;
            $_SESSION['pasword'] = $password;
        }
    }
    mysqli_close($conexiones);
}
?>

<!-- ventana modal de registro por primera vez -->


<div class="modal" id="ventana_modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h5 class="modal-title col-11 text-center" id="exampleModalLabel">Iniciar sesion</h5>
            </div>

            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="modal-body">


                    <div class="form-group">
                        <label for="formGroupExampleInput">Correo Electronico</label>
                        <input type="email" required class="form-control" name="correo" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" placeholder="ingerese su correo">
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput">Nombres</label>
                        <input type="text" required class="form-control" name="nombre" placeholder="ingerese al menos uno">
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput">Apellidos</label>
                        <input type="text" required class="form-control" name="apellidos" placeholder="ingerese al menos uno">
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput">Numero de  Identificacion Para Este Sistema </label>
                        <input type="number" required class="form-control" name="id_estudiante" placeholder="ingerese un numero de id que recuerde luego ">
                    </div>

                    <div class="form-group">
                        <h4 for="formGroupExampleInput2">Contraseña</h4>
                        <input type="password" required class="form-control" pattern="[^'\x22]{5,}" name="pasword">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Confirmar Contraseña</label>
                        <input type="password" required class="form-control" name="conf_pasword">
                    </div>

                </div>
                <div class="modal-footer">

                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" name="registro" class="btn btn-primary">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include("conexionbd.php");

if (isset($_POST['registro'])) {

    $correo = $_POST['correo'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $id_estudiante = $_POST['id_estudiante'];
    $pasword = $_POST['pasword'];
    $conf_pasword = $_POST['conf_pasword'];




    if (!$conexiones) {
        die("Conneccion fallo: " . mysqli_connect_error());
    }
    $consulta1 = "SELECT  correo FROM datos_usuarios WHERE correo='$correo'";
    $consulta2 = "INSERT INTO datos_usuarios (correo, nombre,apellidos, id_estudiante, pasword)
       VALUES ('$correo', '$nombre', '$apellidos', '$id_estudiante', '$pasword')";
    $resultado = mysqli_query($conexiones, $consulta1);
    
    $mostrar = mysqli_fetch_array($resultado);
    
    if ($mostrar['correo'] == "") {
        if (mysqli_query($conexiones, $consulta2)) {
             $mensaje = "los datos fueron ingresados  satisfaftoriamente puedes ingresar con tus datos";
            echo "<script>";
            echo "alert('$mensaje');";
            echo "window.location = '../index.php';";
            echo "</script>";
            //echo "&nbsp;&nbsp;&nbsp;&nbsp;los datos fueron ingresados  satisfaftoriamente";
        }
    } else {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;los datos  no fueron ingresados o ya el correo está registrado ";
    }

    mysqli_close($conexiones);
}
?>


<!-- ventana modal de ingeso de profesor -->

<div class="modal " id="ventana_modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-center">
            <div class="modal-header ">
                <h5 class="modal-title col-11 text-center" id="exampleModalLabel">Iniciar sesion</h5>

            </div>

            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="modal-body">


                    <div class="form-group">
                        <label for="formGroupExampleInput">Correo Electronico</label>
                        <input type="text" required class="form-control" name="correo" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Contraseña</label>
                        <input type="password" required class="form-control" name="password" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Contraseña De Profesor</label>
                        <input type="password" required class="form-control" name="passwordPro" placeholder="">
                    </div>

                </div>

                <div class="modal-footer">

                    <button type="button" data-toggle="modal" data-target="#ventana_modal2" class="btn btn-secondary" data-dismiss="modal">Crear Cuenta</button>
                    <button type="submit" name="ingresoPro" class="btn btn-primary">Ingresar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php

include("conexionbd.php");

// start a session





if (isset($_POST['ingresoPro'])) {

    $correo = $_POST['correo'];
    $password = $_POST['password'];
    $passwordpro = $_POST['passwordPro'];
    $passInt = "1wsar5672#?12?=¿&";







    if (!$conexiones) {
        die("Conneccion fallo: " . mysqli_connect_error());
    } else {
        $consulta = " select * from datos_usuarios where correo='$correo' and pasword='$password'";
        $resultado = mysqli_query($conexiones, $consulta);

        $filas = mysqli_num_rows($resultado);
        if ($filas == 0) {
            $mensaje = "DEBES ESTAR REGISTRADO PARA INGRESAR";
            echo "<script>";
            echo "alert('$mensaje');";
            echo "window.location = '../index.php';";
            echo "</script>";
        } else {
            if ($passwordpro == $passInt) {
                $_SESSION['user'] = $correo;
                $_SESSION['pasword'] = $password;
                $_SESSION['paspro']=$passInt;
            }else{
                $mensaje = "DEBES ESTAR REGISTRADO COMO DOCENTE PARA INGRESAR";
            echo "<script>";
            echo "alert('$mensaje');";
            echo "window.location = '../index.php';";
            echo "</script>";
                
            }
        }
    }
    mysqli_close($conexiones);
}
?>