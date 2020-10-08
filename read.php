<?php 
include ("php/header.php");

?>
<div class="container">


    <hr>
    <div class="form-group row">
        <label class="col-1,5 col-form-label">Id del Tiket</label>
        <div class="col-4">
            <input type="number" class="form-control" id="inputIdentificacionRead">

         
        </div>
        <div class="col-2">
        <button type="submit" class="btn btn-primary form-control " onclick="leer() "  id="botonRead" >Ver Datos</button>
        </div>
        <div class="col-2">
        <button type="submit" class="btn btn-primary form-control " onclick="recargar() "  id="botonDesabled" disabled >Buscar Otro</button>
        </div>
        



    </div>

   



<div class="container-fluid">
<div id="listarTodos"></div>
</div>

</div>



<?php 
include ("php/footer.php");

?>