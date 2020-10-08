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
        <div class="col-3">
        <button type="submit" class="btn btn-primary form-control " onclick="leer() "  id="botonReadD" >Buscar datos a Borrar</button>
        </div>
        
        
    </div>

   



<div class="container-fluid">
<div id="listarTodos"></div>

<div class="form-group row">
       <div class="col-4">
           <button type="submit" class="btn btn-primary form-control " onclick="borrar() "  id="botonDelete" >Borrar Datos Del Ticket</button>
       </div>
      <div class="col-3">
         <button type="submit" class="btn btn-secondary form-control " onclick="recargar() "  id="botonCancel" >Cancelar</button> </div>
       
      </div>


       
        
</div>
<hr>


        
</div>

</div>
</div>



<?php 
include ("php/footer.php");

?>