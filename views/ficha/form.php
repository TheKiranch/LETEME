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
        <h1 class="center">Formulario de ficha</h1>
        <div class="col-sm-6 offset-sm-3">
        <form action="<?php echo constant('URL'); ?>ficha/crear" method="POST">


        <div class="form-group">
                <label for="nroficha">numero de ficha</label>
                <input type="text" class="form-control" name="nroficha" id="nroficha">
                <small id="nrofichaHelp" class="form-text text-muted">Diligencie el numero de la ficha</small>
            </div>
            
           
            <div class="form-group">
            <label for="programa">nombre del programa</label>
            <input type="text" class="form-control" name="programa" id="programa">
            <small id="programaHelp" class="form-text text-muted">Diligencie el nombre del programa</small>
            </div>



        <div class="form-group">
            <label for="fecha_ingreso">Fecha de ingreso al programa</label>
            <input type="date" class="form-control" name="fecha_ingreso" id="fecha_ingreso">
            <small id="fecha_ingresoHelp" class="form-text text-muted">Ingrese su numero de documento</small>
            </div>
            
        	
                 <div class="form-group">
            <label for="fecha_fin_lectiva">Fecha final etapa lectiva</label>
            <input type="date" class="form-control" name="fecha_fin_lectiva" id="fecha_fin_lectiva">
            <small id="fecha_fin_lectivaHelp" class="form-text text-muted">Ingrese la fecha de fin de etapa lectiva</small>
            </div>
                 <div class="form-group">
            <label for="fecha_fin_practica">Fecha final etapa practica</label>
            <input type="date" class="form-control" name="fecha_fin_practica" id="fecha_fin_practica">
            <small id="fecha_fin_practicaHelp" class="form-text text-muted">Ingrese la fecha de fin de etapa practica</small>
            </div>
            
            <input type="submit" class="btn btn-primary" value ="continuar" id="btn_crear">

            <button type="submit" class="btn btn-danger">Cancelar</button>
    </div>

    <?php require 'views/footer.php'; ?>
    <script src="<?php echo constant('URL'); ?>/public/js/main.js"></script>
    
</body>
</html>