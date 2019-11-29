<?php
class Aprendiz extends controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
    }
    function render(){
        $aprendices = $this->view->datos['aprendices'] = $this->model->leer();
    $this->view->aprendices = $aprendices;
        $this->view->render('aprendiz/index');
    }
    function eliminar($id = null){
        $documento = $id[0];

        if($this->model->eliminar($documento)){
            $mensaje ="Aprendiz eliminado correctamente";
            //$this->view->mensaje = "Alumno eliminado correctamente";
        }else{
            $mensaje = "No se pudo eliminar el Aprendiz";
            //$this->view->mensaje = "No se pudo eliminar al alumno";
        }

        //$this->render();

        echo $mensaje;
    }
    function crear(){
        if(isset($_POST["documento"])){
            if($this->model->Guardar($_POST)){
                $this->view->mensaje = "aprendiz creado correctamente";
                $aprendices = $this->view->datos = $this->model->leer();
                $this->view->aprendices = $aprendices;
                $this->view->render('aprendiz/index');
                
            }else{
                
                $this->view->mensaje = "El Aprendiz ya existe 1";
                $fichas = $this->view->datos['ddl_fichas'] = $this->model->cargarfichas();
                $this->view->ddl_fichas = $fichas;
                $this->view->render('aprendiz/form');
                
            }
        }else{
            $fichas = $this->view->datos['ddl_fichas'] = $this->model->cargarfichas();
            $this->view->ddl_fichas = $fichas;
            $doc = $this->view->datos['ddl_doc'] = $this->model->Cargartipodoc();
            $this->view->ddl_doc = $doc;
            $this->view->render('aprendiz/form');
          
        }
    }
    function leer($param = null){
        $documento = $param[0];
        $aprendiz = $this->model->readById($documento);

        session_start();
        $_SESSION["documento_aprendiz"] = $aprendiz->documento;

        $this->view->aprendiz = $aprendiz;
        $this->view->render('aprendiz/edit'); 
    }
function editar($param = null){
    session_start();
    $documento = $_SESSION["documento_aprendiz"];
    $_POST["documento"]=$documento;
    unset($_SESSION['documento_aprendiz']);

    if($this->model->update($_POST)){
        $this->view->mensaje = "Aprendiz actualizado correctamente";
    }else{
        $this->view->mensaje = "No se pudo actualizar al aprendiz";
    }
    $aprendices = $this->view->datos['aprendices'] = $this->model->leer();
    $this->view->aprendices = $aprendices;
        $this->view->render('aprendiz/index');
}
}
?>