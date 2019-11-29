<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>editar Aprendiz</title>
</head>
<body>

    <?php require 'views/header.php'; ?>

    <div id="container" class="container">
        <div><?php echo $this->mensaje; ?></div>
        <h1 class="center">editar  aprendiz</h1>
        <div class="col-sm-6 offset-sm-3">
        <form action="<?php echo constant('URL'); ?>aprendiz/editar" method="POST">


        <div class="form-group">
                <label for="nombres">Nombres</label>
                <input type="text" class="form-control"  name="nombres" id="nombres" value="<?php echo $this->aprendiz->nombres;?>">
                <small id="nombresHelp" class="form-text text-muted">Diligencie sus nombres</small>
        </div>
        <div class="form-group">
            <label for="apellidos">Apellidos</label>
            <input type="text" class="form-control" name="apellidos" id="apellidos" value="<?php echo $this->aprendiz->apellidos;?>">
            <small id="apellidosHelp" class="form-text text-muted">Diligencie sus apellidos</small>
        </div>

        <div class="form-group">
            <label for="tipo_documento_id">tipo de documento</label>
            <input type="text" class="form-control" name="tipo_documento_id" readonly id="tipo_documento_id" value="<?php echo $this->aprendiz->tipo_documento_id;?>">
        </div>
            

        <div class="form-group">
            <label for="documento">Numero de documento</label>
            <input type="text" class="form-control" name="documento" readonly id="documento" value="<?php echo $this->aprendiz->documento;?>">
            <small id="documentoHelp" class="form-text text-muted">Ingrese su numero de documento</small>
        </div>

        <div class="form-group">
            <label for="fecha_exp_documento">Fecha de expedicion de documento</label>
            <input type="date" class="form-control" name="fecha_exp_documento" readonly id="fecha_exp_documento" value="<?php echo $this->aprendiz->fecha_exp_documento;?>">
            <small id="fecha_exp_documentoHelp" class="form-text text-muted">Ingrese la fecha de expedicion del documento</small>
        </div>

        <div class="form-group">
            <label for="lugar_exp_documento">Lugar de expedicion de documento</label>
            <input type="text" class="form-control" name="lugar_exp_documento" readonly id="lugar_exp_documento" value="<?php echo $this->aprendiz->lugar_exp_documento;?>">
            <small id="lugar_exp_documentoHelp" class="form-text text-muted">Departamento-ciudad/municipio</small>
        </div>

        <div class="form-group">
            <label for="fecha_nacimiento">fecha de nacimiento</label>
            <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" value="<?php echo $this->aprendiz->fecha_nacimiento;?>">
            <small id="fecha_nacimientoHelp" class="form-text text-muted">Fecha de nacimiento</small>
        </div>

        <div class="form-group">
            <label for="lugar_nacimiento">Lugar de nacimiento</label>
            <input type="text" class="form-control" name="lugar_nacimiento" id="lugar_nacimiento" value="<?php echo $this->aprendiz->lugar_nacimiento;?>">
            <small id="lugar_nacimientoHelp" class="form-text text-muted">lugar de naciemiento</small>
        </div>

        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" class="form-control" name="direccion" id="direccion" value="<?php echo $this->aprendiz->direccion;?>">
            <small id="direccionHelp" class="form-text text-muted">Ingrese su dirección de residencia</small>
        </div>
           <label class="form-text text">Whatsapp
            <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="whatsapp1" name="whatsapp" value="1" <?php if($this->aprendiz->whatsapp==1){ echo 'checked="checked"';} ?>> 
            <label class="custom-control-label" for="whatsapp1">si</label>
        </div> 

        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="whatsapp2" name="whatsapp" value="1" <?php if($this->aprendiz->whatsapp==0){ echo 'checked="checked"';} ?>> 
            <label class="custom-control-label" for="whatsapp2">No</label>
        </div> 

        <div class="form-group">
            <label for="eps">EPS</label>
            <input type="text" class="form-control" name="eps" id="eps" required value="<?php echo $this->aprendiz->eps;?>">
            <small id="epsHelp" class="form-text text-muted">Ingrese su EPS</small>
        </div>

        <div class="form-group">
            <label for="rh">Acudiente</label>
            <input type="text" class="form-control" name="rh" id="rh"value="<?php echo $this->aprendiz->rh;?>">
            
        </div>

        <div class="form-group">
            <label for="acudiente">Acudiente</label>
            <input type="text" class="form-control" name="acudiente" id="acudiente"value="<?php echo $this->aprendiz->acudiente;?>">
            <small id="acudienteHelp" class="form-text text-muted">ingrese nombre de acudiente</small>
        </div>

        <div class="form-group">
            <label for="celular_acudiente">Celular Acuediente</label>
            <input type="text" class="form-control" name="celular_acudiente" id="celular_acudiente" value="<?php echo $this->aprendiz->celular_acudiente;?>">
            <small id="celular_acudienteHelp" class="form-text text-muted">Ingrese el nombre de acudiente</small>
        </div>

        <label for="estilos_aprendizaje">Estilos de aprendizaje</label><br>
        <div class=" form-check ">
                <input type="checkbox" id="estilos_0" name="estilos[0]"value="Acomodador"  class=form-check-input>
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

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="<?php echo $this->aprendiz->email;?>">
            <small id="emailHelp" class="form-text text-muted">Ingrese su dirección de correo electrónico</small>
        </div>
        <div class="form-group">
            <label for="celular">Celular</label>
            <input type="number" class="form-control" name="celular" id="celular"value="<?php echo $this->aprendiz->celular;?>">
            <small id="celularHelp" class="form-text text-muted">Ingrese su numero de celular</small>
        </div>
        <div class="form-group">
            <label for="ficha_nroficha">Numero de Ficha</label>
            <input type="ficha_nroficha" class="form-control" name="ficha_nroficha" id="ficha_nroficha"value="<?php echo $this->aprendiz->ficha_nroficha;?>">
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