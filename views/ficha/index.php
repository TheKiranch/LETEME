<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Fichas</title>
</head>
<body>

    <?php require 'views/header.php'; ?>

    <div id="main" class="container">
        <div><?php echo $this->mensaje; ?></div>
        <h1 class="center">Listado de fichas</h1>

        <table id="tabla" class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th  scope="col">ficha</th>
                    <th  scope="col">fecha de ingreso</th>
                    <th  scope="col">programa</th>
                    <th  scope="col">fecha fin lectiva</th>
                    <th  scope="col">fecha fin practica</th>
                    <th  scope="col" colspan="2">Acciones</th>
                    
                </tr>
            </thead>

            <tbody id="tbody-data">
            
        <?php
            include_once 'models/fichadao.php';
            if(count($this->fichas)>0){
                foreach ($this->fichas as $ficha) {
                    $fic = new FichaDAO();
                    $fic = $ficha;
        ?>
                    <tr id="fila-<?php echo $fic->nroficha; ?>">
                        <td><?php echo $fic->nroficha; ?></td>
                        <td><?php echo $fic->fecha_ingreso; ?></td>
                        <td><?php echo $fic->programa; ?></td>
                        <td><?php echo $fic->fecha_fin_lectiva; ?>
                        <td><?php echo $fic->fecha_fin_practica; ?>
                        <td><a href="<?php echo constant('URL') . 'ficha/leer/' . $fic->nroficha; ?>">Actualizar</a></td>
                        <td><button class="bEliminar" data-controlador="aprendiz" data-accion="eliminar" data-id="<?php echo $fic->nroficha; ?>">Eliminar</button></td> 
                    </tr>
        <?php   
                } 
            }else{
        ?>
            <tr><td colspan="9" class="text-center">NO HAY FICHAS</td></tr>
        <?php    
            }
        ?>
            </tbody>
        </table>
        <!--<button type="button" class="btn btn-primary" onClick='window.location.assign("<?php echo constant('URL'); ?>/programa/crear")'>Crear Programa</button>-->
    </div>

    <?php require 'views/footer.php'; ?>
 <script src="<?php echo constant('URL'); ?>/public/js/main.js"></script>
</body>
</html>