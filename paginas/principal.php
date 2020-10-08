<?php

include "header.php";

?>



<!-- sccion de imagenes en carrusel-->



<!-- secion de libros -->



<section class="py-0" id="proyectos">
    <div class="container">
        <h1 class="display-5 font-weight-bold text-center pb-1 pt-5 mt-5"></h1>
        <div class="row text-md-center">

            <?php include("conexionbd.php");
            $consulta = "SELECT  *  FROM libros";
            $resultado = mysqli_query($conexiones, $consulta);
           
            while ($mostrar = mysqli_fetch_array($resultado)) {
            ?>
                <div class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-0 py-3">
                    <div class="card">
                        <!-- <img class="card-img-top h-100" src="images/proyecto1.png" alt="imagen del proyecto">-->
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $mostrar['autor'] ?></h5>
                            <p class="card-text">
                                <?php echo $mostrar['titulo_del_libro'] ?>
                            </p>
                            <form method="post" action="vistaPdf.php">
                                <input type="hidden" name="nompro" value ="<?php echo $mostrar['titulo_del_libro'] ?>">

                                <input type="hidden" name="coleerLibro" value ="<?php echo  $mostrar['link'] ?>">
                                <button type="submit" name="leerLibro" class="btn btn-primary">Leer Libro</button>


                            </form>

                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
</section>



<?php


mysqli_close($conexiones);
?>



<?php
include "footer.php";

?>