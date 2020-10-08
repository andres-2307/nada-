<?php 
include ("php/header.php");

?>
<div class="container">

<hr>

<div class="form-group row">
        <label class=" col-form-label">Filtrar Busqueda por</label>
        <div class="col-6">
            <div class="input-group ">  
                <select class="custom-select" id="inputSearchFiltro">
                    
                    <option value="1">Id Ticket</option>
                    <option value="2">Id Dependencia</option>
                    <option value="3">Id Tipo</option>
                    
                </select>
            </div>


        </div>
    </div>

    
    <div class="form-group row">
        <label class=" col-form-label">Ingrese su Busqueda</label>
        <div class="col-6">
            <input type="text" class="form-control" id="inputIdSearch">

         
        </div>
        <div class="col-2">
        <button type="submit" class="btn btn-primary form-control " onclick="buscar() "  id="botonRead" >Ver Datos</button>
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