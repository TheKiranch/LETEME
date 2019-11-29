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
        <h1 class="center">editar  ficha</h1>
        <div class="col-sm-6 offset-sm-3">
        <form action="<?php echo constant('URL'); ?>ficha/editar" method="POST">


        <div class="form-group">
                <label for="nroficha">numero de ficha</label>
                <input type="text" class="form-control"  name="nroficha" readonly id="nroficha" value="<?php echo $this->ficha->nroficha;?>">
                <small id="nrofichaHelp" class="form-text text-muted">Diligencie su numero de ficha</small>
            </div>
            <div class="form-group">
            <label for="programa">nombre del programa</label>
            <input type="text" class="form-control" name="programa" id="programa" value="<?php echo $this->ficha->programa;?>">
            <small id="programaHelp" class="form-text text-muted">Diligencie el nombre del programa</small>
            </div>            
            <div class="form-group">
            <label for="fecha_ingreso">fecha ingreso al programa</label>
            <input type="date" class="form-control" name="fecha_ingreso" readonly id="fecha_ingreso" value="<?php echo $this->ficha->fecha_ingreso;?>">
            <small id="fecha_ingresoHelp" class="form-text text-muted">Ingrese la fecha de ingreso al programa</small>
            </div>
                <div class="form-group">
            <label for="fecha_fin_lectiva">fecha final etapa electiva</label>
            <input type="date" class="form-control" name="fecha_fin_lectiva" readonly id="fecha_fin_lectiva"value="<?php echo $this->ficha->fecha_fin_lectiva;?>">
            <small id="fecha_fin_lectivaHelp" class="form-text text-muted">ingrese la fecha final de etapa electiva</small>
            </div>

            <div class="form-group">
            <label for="fecha_fin_practica">fecha final etapa practica</label>
            <input type="date" class="form-control" name="fecha_fin_practica" readonly id="fecha_fin_practica"value="<?php echo $this->ficha->fecha_fin_practica;?>">
            <small id="fecha_fin_practicaHelp" class="form-text text-muted">ingrese la fecha final de etapa practica</small>
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