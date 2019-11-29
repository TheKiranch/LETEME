<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Aprendices</title>
</head>
<body>

    <?php require 'views/header.php'; ?>

    <div id="main" class="container">
        <div><?php echo $this->mensaje; ?></div>
        <h1 class="center">Listado de Aprendices</h1>

        <table id="tabla" class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th  scope="col">Documento</th>
                    <th  scope="col">Nombres</th>
                    <th  scope="col">apellidos</th>
                    <th  scope="col">email</th>
                    <th  scope="col">celular</th>
                    <th  scope="col">ficha</th>
                    <th  scope="col">total fallas</th>
                    <th  scope="col" colspan="2">Acciones</th>
                    
                </tr>
            </thead>

            <tbody id="tbody-data">
            
        <?php
            include_once 'models/Aprendizdao.php';
            if(count($this->aprendices)>0){
                foreach ($this->aprendices as $aprendiz) {
                    $ape = new AprendizDAO();
                    $ape = $aprendiz;
        ?>
                    <tr id="fila-<?php echo $ape->documento; ?>">
                        <td><?php echo $ape->documento; ?></td>
                        <td><?php echo $ape->nombres; ?></td>
                        <td><?php echo $ape->apellidos; ?></td>
                        <td><?php echo $ape->email; ?>
                        <td><?php echo $ape->celular; ?>
                        <td><?php echo $ape->ficha_nroficha; ?>
                        <td class ='text-center'><?php echo $ape->total_fallas; ?>
                        <td><a href="<?php echo constant('URL') . 'aprendiz/leer/' . $ape->documento; ?>">Actualizar</a></td>
                        <td><button class="bEliminar" data-controlador="aprendiz" data-accion="eliminar" data-id="<?php echo $ape->documento; ?>">Eliminar</button></td> 
                    </tr>
        <?php   
                } 
            }else{
        ?>
            <tr><td colspan="9" class="text-center">NO HAY APRENDICES</td></tr>
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