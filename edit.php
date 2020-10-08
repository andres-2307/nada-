<?php 
include ("php/header.php");

?>
<div class="container">


    <hr>
    <div class="form-group row">
       
        <div class="col-4">
            <input type="number" class="form-control" id="inputIdentificacionRead">

         
        </div>
        <div class="col-3">
        <button type="submit" class="btn btn-primary form-control " onclick="cargaEditar()"  id="botonRead" >Buscar Id del Ticket a Editar </button>
        </div>
        
        



    </div>
<hr>
<div class="form-group row">
        <label class="col-1 col-form-label">Dependencia</label>
        <div class="col-6">
            <div class="input-group ">  
                <select class="custom-select" id="einputDependencia">
                    
                    <option value="1">Ingeniería de sistemas</option>
                    <option value="2">Bienestar Universitario</option>
                    <option value="3">Biblioteca</option>
                    <option value="4">Ingenieria Industrial</option>
                </select>
            </div>


        </div>
    </div>
    <div class="form-group row">
        <label class="col-1 col-form-label">Tipo</label>
        <div class="col-6">
        <div class="input-group ">  
                <select class="custom-select" id="einputTipo">
                    <option value="1">Estudiantes</option>
                    <option value="2">Docentes</option>
                    <option value="3">Administrativo</option>
                   
                </select>
            </div>

        </div>
    </div>
    <div class="form-group row">
        <label class="col-1 col-form-label">Nombres</label>
        <div class="col-6">
            <input type="text" class="form-control" id="einputNombres" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-1 col-form-label">Apellidos</label>
        <div class="col-6">
            <input type="text" class="form-control" id="einputApellidos" required >
        </div>
    </div>
    <div class="form-group row">
        <label class="col-1 col-form-label">Email</label>
        <div class="col-6">
            <input type="email"   size="50"  class="form-control" id="einputEmail" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-1 col-form-label">Asunto </label>
        <div class="col-6">
            <input type="text" class="form-control" id="einputAsunto" required >
        </div>
    </div>

    <div class="form-group row">
        <label class="col-1 col-form-label">Descripcion</label>
        <div class="col-6">
           <textarea class="form-control" rows="2" id="einputDescripcion"  required></textarea>
            
        </div>
    </div>
    <div class="form-group row">
        <label class="col-1 col-form-label">Fecha anterior</label>
        <div class="col-6">
        <input type="text" disabled class="form-control" id="einputFecha" >
            
        </div>
    </div>
    <div class="form-group row">
        <label class="col-1 col-form-label">Fecha</label>
        <div class="col-6">
        <input type="datetime-local" class="form-control" id="einputFechanueva" >
            
        </div>
    </div>


    <div class="form-group row">
       
        <div class="col-3">
        
    <button type="submit" class="btn btn-primary " onclick="editar()" id="botonEdit">Enviar Nuevos  Datos</button>
   
            
        </div>

        <div class="col-2">
        <button type="submit" class="btn btn-secondary form-control " onclick="recargar() "  id="botonDesabled"  >Cancelar</button>
        </div>
    <hr>
     
    </div>

    
    
    
   

   

<div class="container-fluid">
<div id="listarTodos"></div>
</div>

</div>



<?php 
include ("php/footer.php");

?>