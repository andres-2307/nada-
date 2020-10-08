<div class="modal" id="ventana_modal_vid" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Subir Video</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="modal-body">


                    <div class="form-group">
                        <label for="formGroupExampleInput">Numero y Nombre de la Unidad</label>
                        <input type="text" required  required  class="form-control" name="numero_u" placeholder="Ej : Unidad nº 1 introduccion a la ingenieria de software">
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Nombre de Integrantes</label>
                        <input type="text" required class="form-control" name="nombres_integrantes" placeholder="Escribe los nombres de los integrantes">
                    </div>


                    <div class="form-group">
                        <label for="formGroupExampleInput2">Link del Video de Youtube</label>
                        <input type="text" class="form-control" required name="link" pattern= "*www.youtube.com*" placeholder="mira  bien el tutorial como subir los videos y pegar el link">
                    </div>






                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="guardar" class="btn btn-primary">Subir Video</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include "conexionbd.php";

if (isset($_POST['guardar'])) {

    $numero_u = $_POST['numero_u'];
    $nombres_integrantes = $_POST['nombres_integrantes'];
    $link = $_POST['link'];
    $usuario= $_SESSION['user'];
    
    $numero =preg_replace("/[^0-9]/", "", $numero_u);





    if (!$conexiones) {
        die("Conneccion fallo: " . mysqli_connect_error());
    }
    $consulta1 = "INSERT INTO datos_video (numero_u, nombres_integrantes,link,datos_Usuarios_correo,numer)
       VALUES ('$numero_u', '$nombres_integrantes', '$link','$usuario','$numero' )";

    if (mysqli_query($conexiones, $consulta1)) {

        //echo "&nbsp;&nbsp;&nbsp;&nbsp;los datos fueron ingresados  satisfaftoriamente";
       // echo $_SESSION['user'];
    } else {
        
        echo " &nbsp;&nbsp;no se a guardado  correctamente por favor intentelo de nuevo <br>";
        //echo $_SESSION['user'];
    }

    mysqli_close($conexiones);
}
