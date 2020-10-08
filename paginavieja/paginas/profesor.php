<?php include "header.php" ?>

<!-- esta es la tabla que se cargará-->

<div class=" container-fluid pt-5 mt-5">
    <table class="table table-bordered mt-5">
        <thead>

            <tr>
                <th class="text-center">Nombre del proyecto</th>
                <th class="text-center">Nombre de los integrantes</th>
                <th class="text-center">Subido por</th>
                <th class="text-center">Opcion</th>




            </tr>
        </thead>

        <tbody>

            <?php

            include("conexionbd.php");
            $consulta1 = "SELECT  *  FROM datos_proyecto";
            $resultado1 = mysqli_query($conexiones, $consulta1);


            while ($mostrar = mysqli_fetch_array($resultado1)) {
            ?>
                <tr>
                    <td><?php echo $mostrar['Titulo_pro'] . '<br>'; ?></td>
                    <td><?php echo $mostrar['Nombres_integrantes'] . '<br>'; ?></td>
                    <td><?php echo $mostrar['datos_Usuarios_correo'] . '<br>'; ?></td>
                    <td>
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                            <input type="hidden" name="coverpro" value="<?php echo  $mostrar['link'] ?>">
                            <button type="submit" name="ver" class="btn btn-primary">Ver</button>


                        </form>
                    </td>


                </tr>



            <?php
            }


            ?>



            <tr >
                <th class="text-center">Titulo del video</th>
                <th class="text-center">Nombre de los integrantes</th>
                <th class="text-center">Subido por</th>
                <th class="text-center">Opcion</th>




            </tr>
            <?php


            $consulta2 = "SELECT  *  FROM datos_video";
            $resultado2 = mysqli_query($conexiones, $consulta2);

            while ($mostrar = mysqli_fetch_array($resultado2)) {
            ?>
                <tr>
                    <td><?php echo $mostrar['numero_u'] . '<br>'; ?></td>
                    <td><?php echo $mostrar['nombres_integrantes'] . '<br>'; ?></td>
                    <td><?php echo $mostrar['datos_Usuarios_correo'] . '<br>'; ?></td>
                    <td>
                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                            <input type="hidden" name="covervid" value="<?php echo  $mostrar['link'] ?>">
                            <button type="submit" name="vervi" class="btn btn-primary">Ver</button>


                        </form>
                    </td>


                </tr>



            <?php
            }


            ?>


        </tbody>
    </table>
</div>

<?php

if (isset($_POST['ver'])) {

    $linkpro = $_POST['coverpro'];




?>
    <script>
        window.location.replace('#documentacion');
    </script>

    <section class="container-fluid  mx-auto" id="documentacion">



        <div>
            <iframe class="embed-responsive" width="600" height=600 src="<?php echo $linkpro ?>"></iframe>
        </div>

    </section>

<?php
}
if (isset($_POST['vervi'])) {

    $linkvid = $_POST['covervid'];




?>
    <script>
        window.location.replace('#documentacion');
    </script>

    <section class="container-fluid " id="documentacion">



        <div>
            <div class="col-12 col-sm-6 mx-auto">
                
                    <iframe width="600" height="450" src="<?php echo $linkvid ?>" frameborder="2" allowfullscreen="allowfullscreen"></iframe>
                
            </div>
        </div>

    </section>



<?php
}

mysqli_close($conexiones);
?>



<?php
include "footer.php";

?>