<?php
class Ficha extends controller{
    function __construct(){
        parent::__construct();
        $this->view->mensaje="";
    }
    function render(){
        $fichas = $this->view->datos['fichas'] = $this->model->leer();
    $this->view->fichas = $fichas;
        $this->view->render('ficha/index');
    }
    function crear(){
        if(isset($_POST["nroficha"])){
            if($this->model->Guardar($_POST)){
                $this->view->mensaje = "Programa creado correctamente";
                $fichas = $this->view->datos['fichas'] = $this->model->leer();
                $this->view->fichas = $fichas;
                $this->view->render('ficha/index');
            }else{
                
                $this->view->mensaje = "La ficha ya existe ";
                $fichas = $this->view->datos['ddl_fichas'] = $this->model->cargarfichas();
                $this->view->ddl_fichas = $fichas;
                $this->view->render('ficha/form');
            }
        }else{
            $fichas = $this->view->datos['ddl_fichas'] = $this->model->cargarfichas();
            $this->view->ddl_fichas = $fichas;
            $this->view->render('ficha/form');
        }
    }
    function eliminar($id = null){
        $nroficha = $id[0];

        if($this->model->eliminar($nroficha)){
            $mensaje ="Aprendiz eliminado correctamente";
            //$this->view->mensaje = "Alumno eliminado correctamente";
        }else{
            $mensaje = "No se pudo eliminar el Aprendiz";
            //$this->view->mensaje = "No se pudo eliminar al alumno";
        }

        //$this->render();

        echo $mensaje;
    }
    function editar($param = null){
        session_start();
        $nroficha = $_SESSION["nroficha_ficha"];
        $_POST["nroficha"]=$nroficha;
        unset($_SESSION['nroficha_ficha']);
    
        if($this->model->update($_POST)){
            $this->view->mensaje = "ficha actualizado correctamente";
        }else{
            $this->view->mensaje = "No se pudo actualizar al ficha";
        }
        $fichas = $this->view->datos['fichas'] = $this->model->leer();
        $this->view->fichas = $fichas;
            $this->view->render('ficha/index');
    }
    function leer($param = null){
        $ficha = $param[0];
        $ficha = $this->model->readById($ficha);

        session_start();
        $_SESSION["nroficha_ficha"] = $ficha->nroficha;

        $this->view->ficha = $ficha;
        $this->view->render('ficha/edit'); 
    }
}
?>