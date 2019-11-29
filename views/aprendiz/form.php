<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
</head>
<body>

    <?php require 'views/header.php'; ?>

    <div id="container" class="container">
        <div><?php echo $this->mensaje; ?></div>
        <h1 class="center">Formulario de aprendiz</h1>
        <div class="col-sm-6 offset-sm-3">
        <form action="<?php echo constant('URL'); ?>aprendiz/crear" method="POST">


        <div class="form-group">
                <label for="nombres">Nombres</label>
                <input type="text" class="form-control" name="nombres" id="nombres">
                <small id="nombresHelp" class="form-text text-muted">Diligencie sus nombres</small>
            </div>
            
           
            <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" name="apellidos" id="apellidos">
            <small id="apellidosHelp" class="form-text text-muted">Diligencie sus apellidos</small>
            </div>

           <div class="form-group">
            <label for="id">Tipo de documento</label>
            <select class="custom-select" id="id" name="id">
            <option selected value="">seleccione...</option>
            <?php
            include_once 'models/tipodoc.php';
            if(count($this->ddl_doc)>0){
                foreach ($this->ddl_doc as $doc) {
                    $ddl_doc = new TipoDocDAO();
                    $ddl_doc = $doc;
        ?>
            
                <option selected value="<?php echo $ddl_doc->id;  ?>"><?php echo $ddl_doc->descripcion;  ?></option>
                <?php
                 } 
            }
                ?>
                    </select>
            </div>


        <div class="form-group">
            <label for="documento">Numero de documento</label>
            <input type="text" class="form-control" name="documento" id="documento">
            <small id="documentoHelp" class="form-text text-muted">Ingrese su numero de documento</small>
            </div>
            
        	
                 <div class="form-group">
            <label for="fecha_exp_documento">Fecha de expedicion de documento</label>
            <input type="date" class="form-control" name="fecha_exp_documento" id="fecha_exp_documento">
            <small id="fecha_exp_documentoHelp" class="form-text text-muted">Ingrese la fecha de expedicion del documento</small>
            </div>
                 <div class="form-group">
            <label for="lugar_exp_documento">Lugar de expedicion de documento</label>
            <input type="text" class="form-control" name="lugar_exp_documento" id="lugar_exp_documento">
            <small id="lugar_exp_documentoHelp" class="form-text text-muted">Departamento-ciudad/municipio</small>
            </div>
                 <div class="form-group">
            <label for="fecha_nacimiento">fecha de nacimiento</label>
            <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento">
            <small id="fecha_nacimientoHelp" class="form-text text-muted">Fecha de nacimiento</small>
            </div>
                 <div class="form-group">
            <label for="lugar_nacimiento">Lugar de nacimiento</label>
            <input type="text" class="form-control" name="lugar_nacimiento" id="lugar_nacimiento">
            <small id="lugar_nacimientoHelp" class="form-text text-muted">lugar de naciemiento</small>
            </div>

            <div class="form-group">
            <label for="ficha_nroficha">ficha</label>
            <select class="custom-select" id="ficha_nroficha" name="ficha_nroficha">
            <option selected value="">seleccione...</option>
            <?php
            include_once 'models/fichadao.php';
            if(count($this->ddl_fichas)>0){
                foreach ($this->ddl_fichas as $ficha) {
                    $ddl_ficha = new FichaDAO();
                    $ddl_ficha = $ficha;
        ?>
            
                <option selected value="<?php echo $ddl_ficha->nroficha;  ?>"><?php echo $ddl_ficha->programa;  ?></option>
                <?php
                 } 
            }
                ?>
                    </select>
            </div>
            
            <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" class="form-control" name="direccion" id="direccion">
            <small id="direccionHelp" class="form-text text-muted">Ingrese su dirección de residencia</small>
            </div>
            
            <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email">
            <small id="emailHelp" class="form-text text-muted">Ingrese su dirección de correo electrónico</small>
            </div>
                <div class="form-group">
            <label for="celular">Celular</label>
            <input type="number" class="form-control" name="celular" id="celular">
            <small id="celularHelp" class="form-text text-muted">Ingrese su numero de celular</small>
            </div>
                        <div class="form-group">
            <label for="whatsapp">Whatsapp</label><br>
            <input type="radio" name="whatsapp" value="1"> Si<br>
            <input type="radio" name="whatsapp" value="0"> No<br>
            <small id="whatsappHelp" class="form-text text-muted">Indique si dispone de whatsapp</small>
            </div>  

            <div class="form-group">
            <label for="eps">EPS</label>
            <input type="text" class="form-control" name="eps" id="eps" required>
            <small id="epsHelp" class="form-text text-muted">Ingrese su EPS</small>
            </div>
            <div class="form-group">
            <label for="rh">Rh</label>
            <select class="custom-select" id="rh" name="rh">
            <option selected value="">Seleccione tipo de RH</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="B-">B-</option>
            <option value="B+">B+</option>
            <option value="AB-">AB-</option>
            <option value="AB+">AB+</option>
            </select>
            <small id="rhHelp" class="form-text text-muted">Ingrese su RH</small>
        </div>
                 
                <div class="form-group">
            <label for="acudiente">Acudiente</label>
            <input type="text" class="form-control" name="acudiente" id="acudiente">
            <small id="acudienteHelp" class="form-text text-muted">ingrese nombre de acudiente</small>
            </div>
                <div class="form-group">
            <label for="celular_acudiente">Celular Acuediente</label>
            <input type="text" class="form-control" name="celular_acudiente" id="celular_acudiente">
            <small id="celular_acudienteHelp" class="form-text text-muted">Ingrese el nombre de acudiente</small>
            </div>
            
          
            
               
            <label for="estilos_aprendizaje">Estilos de aprendizaje</label><br>
            <div class=" form-check ">
                <input type="checkbox" id="estilos_0" name="estilos[0]"value="Acomodador" class=form-check-input>
                <label class="form-check-label" for="" >Acomodador</label>
            </div>
            <div class=" form-check ">
                <input type="checkbox" id="estilos_1" name="estilos[1]"value="Convergente" class=form-check-input>
                <label class="form-check-label" for="" >Convergente</label>
            </div>
            <div class=" form-check ">
                <input type="checkbox" id="estilos_2" name="estilos[2]" value="Asimilador"class=form-check-input>
                <label class="form-check-label" for="" >Asimilador</label>
            </div>
            <div class="form-check ">
                <input type="checkbox" id="estilos_3" name="estilos[3]" value="Divergente" class=form-check-input>
                <label class="form-check-label" for="" >Divergente</label>
            </div>
                
          <input type="submit" class="btn btn-primary" value ="continuar" id="btn_crear">

            <button type="submit" class="btn btn-danger">Cancelar</button>

        </form>
        </div>
    </div>

    <?php require 'views/footer.php'; ?>
    <script src="<?php echo constant('URL'); ?>/public/js/main.js"></script>
    
</body>
</html>