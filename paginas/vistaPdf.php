<!-- seccion de pdf del proyectos    http://cic.puj.edu.co/wiki/lib/exe/fetch.php?media=materias:is1:01_lectura_ingenieria_software.pdf#toolbar=0&navpanes=0&scrollbar=0-->
<?php


if (isset($_POST['leerLibro'])) {

    $linkLibro = $_POST['coleerLibro'];
    $titulo = $_POST['nompro'];

   
    
?>

<div class="row text-md-center">

    <section class="container-fluid" id="documentacion">

        <h1 class="display-5 font-weight-bold text-center pb-1 pt-3">Estas Leyendo  <?php echo $titulo ?> </h1>
        <a href="principal.php" type="submit" name="leerLibro" class="btn btn-primary">Leer otro Libro</a>

        <div>
            <iframe onClick="this.select(); class="embed-responsive" width="100%" height=600 src="<?php echo $linkLibro ?>"></iframe>
        </div>

    </section>

</div>

<?php
}


?>
