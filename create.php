<?php
include("php/header.php");

?>
<hr>
<div class="container">




    <div class="form-group row">
        <label class="col-1 col-form-label">Dependencia</label>
        <div class="col-6">
            <div class="input-group ">  
                <select class="custom-select" id="inputDependencia">
                    
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
                <select class="custom-select" id="inputTipo">
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
            <input type="text" class="form-control" id="inputNombres" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-1 col-form-label">Apellidos</label>
        <div class="col-6">
            <input type="text" class="form-control" id="inputApellidos" required >
        </div>
    </div>
    <div class="form-group row">
        <label class="col-1 col-form-label">Email</label>
        <div class="col-6">
            <input type="email"   size="50"  class="form-control" id="inputEmail" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-1 col-form-label">Asunto </label>
        <div class="col-6">
            <input type="text" class="form-control" id="inputAsunto" required >
        </div>
    </div>

    <div class="form-group row">
        <label class="col-1 col-form-label">Descripcion</label>
        <div class="col-6">
           <textarea class="form-control" rows="2" id="inputDescripcion"  required></textarea>
            
        </div>
    </div>
    <div class="form-group row">
        <label class="col-1 col-form-label">Fecha</label>
        <div class="col-6">
        <input type="datetime-local" class="form-control" id="inputFecha" >
            
        </div>
    </div>

   
    <button type="submit" class="btn btn-primary " onclick="crear()" id="botonCreate">Enviar Datos</button>
    
    <hr>
    


</div>
<?php
include("php/footer.php");

?>