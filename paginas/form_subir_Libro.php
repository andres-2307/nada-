

<div class="modal" id="ventana_modal_ar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Subir Libro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="modal-body">


                    <div class="form-group">
                        <label for="formGroupExampleInput">Titulo del Libro</label>
                        <input type="text" required class="form-control" name="Titulo_libro" placeholder="Escribe El Titulo Del Libro">
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Nombre de Autor</label>
                        <input type="text" required class="form-control" name="Autor" placeholder="Escribe los Nombres del Autor">
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Categoria</label>

                          <div class="col-6">
                              <div class="input-group ">  
                                 <select class="custom-select" id="inputDependencia" name="categoria">
                    
                                    <option value="niños">Niños</option>
                                    <option value="jovenes">Jovenes</option>
                                    <option value="liderazgo">Liderazgo</option>
                                    <option value="otro">otro</option>
                                 </select>
                                </div>

                             </div>
                    </div>
                  

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Tema</label>
                        <div class="col-6">
                              <div class="input-group ">  
                                 <select class="custom-select" id="tema" name="tema">
                    
                                    <option value="alabanza y adoracion">Alabanza y Adoracios</option>
                                    <option value="guerra espiritual">Guerra Espiritual</option>
                                    <option value="biblias">Biblias</option>
                                    <option value="estudios teologicos">Estudios Teologicos</option>
                                    <option value="testimonios o historia">Testimonios o Historia</option>
                                    <option value="otro">otro </option>
                                 </select>
                                </div>

                             </div>
                   </div>

                    

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Link del libro</label>
                        <input type="text" required class="form-control" name="link" placeholder="puedes pegar el link del archivo con el formato indicado">
                    </div>





                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="guardar" class="btn btn-primary" role="button">Subir Archivos</button>
                </div>

            </form>
        </div>
    </div>
</div>



<?php
include("conexionbd.php");

if (isset($_POST['guardar'])) {

    $titulo_libro = $_POST['Titulo_libro'];
    $autor = $_POST['Autor'];  
    $categoria = $_POST['categoria'];
    $tema=$_POST['tema'];
    $link = $_POST['link'];

 


    if (!$conexiones) {
        die("Conneccion fallo: " . mysqli_connect_error());
    }
    $consulta1 = "INSERT INTO libros (titulo_del_libro, autor, categoria, link, tema)
       VALUES ('$titulo_libro', '$autor', '$categoria', '$link', '$tema' )";

    if (mysqli_query($conexiones, $consulta1)) {

        echo "&nbsp;&nbsp;&nbsp;&nbsp;los datos fueron ingresados  satisfaftoriamente";
    } else {
        echo " &nbsp;&nbsp;no se a guardado el regitro correctamente por favor intentelo de nuevo";
    }

    mysqli_close($conexiones);
}
