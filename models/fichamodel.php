<?php
include_once('models/fichadao.php');
class FichaModel extends Model{
    function __construct(){
        parent::__construct();
    }
public function leer(){
        $items = [];
        try{
            $query = $this->db->connect()->query('SELECT * FROM ficha');
            
            while($row = $query->fetch()){
                $item = new FichaDAO();
                $item->nroficha = $row['nroficha'];
                $item->programa   = $row['programa'];
                $item->fecha_ingreso  = $row['fecha_ingreso'];
                $item->fecha_fin_lectiva  = $row['fecha_fin_lectiva'];
                $item->fecha_fin_practica  = $row['fecha_fin_practica'];
            
                array_push($items, $item);
            }
            return $items;
        }catch(PDOException $e){
           if(constant("DEBUG")){
               echo $e->getMessage();
           }
            return [];
        }
    }
public function cargarFichas(){
        $items = [];
        try{
            $query = $this->db->connect()->query('SELECT nroficha,programa FROM ficha');
            include_once('models/fichadao.php');
            while($row = $query->fetch()){
                $item = new FichaDAO();
                $item->nroficha = $row['nroficha'];
                $item->programa   = $row['programa'];
        
                array_push($items, $item);
            }
            return $items;
        }catch(PDOException $e){
           if(constant("DEBUG")){
               echo $e->getMessage();
           }
            return [];
        }
    }
public function Guardar($datos){
        
    $sentenceSQL="INSERT INTO ficha (nroficha, programa,fecha_ingreso,fecha_fin_lectiva,fecha_fin_practica ) VALUES(:nroficha, :programa, :fecha_ingreso,  :fecha_fin_lectiva, :fecha_fin_practica)";
        $connexionDB=$this->db->connect();
        $query = $connexionDB->prepare($sentenceSQL);
        
        try{
            $query->execute([
                'nroficha' => $datos['nroficha'],
                'programa' => $datos['programa'],
                'fecha_ingreso' => $datos['fecha_ingreso'],
                'fecha_fin_lectiva' => $datos['fecha_fin_lectiva'],
                'fecha_fin_practica' => $datos['fecha_fin_practica']
                
               
            ]);
            return true;
        }catch(PDOException $e){
        if(constant("DEBUG")){
                echo $e->getMessage();
        }
            
            return false;
        }
    }
public function eliminar($id){
        $query = $this->db->connect()->prepare('DELETE FROM ficha WHERE nroficha = :identificador');
        try{
            $query->execute([
                'identificador' => $id
            ]);
            return true;
        }catch(PDOException $e){
            if(constant("DEBUG")){
                echo $e->getMessage();
            }
            return false;
        }
    }
public function update($item){
        $query = $this->db->connect()->prepare('UPDATE ficha SET programa = :programa, fecha_ingreso = :fecha_ingreso, fecha_fin_lectiva = :fecha_fin_lectiva, fecha_fin_practica = :fecha_fin_practica WHERE nroficha = :nroficha');
        try{
            $query->execute([
                'nroficha' => $item['nroficha'],
                'programa' => $item['programa'],
                'fecha_ingreso' => $item['fecha_ingreso'],
                'fecha_fin_lectiva' => $item['fecha_fin_lectiva'],
                'fecha_fin_practica' => $item['fecha_fin_practica']
            ]);
            return true;
        }catch(PDOException $e){
            if(constant("DEBUG")){
                echo $e->getMessage();
            }
            return false;
        }
    }
public function readById($id){
        $item = new FichaDAO();
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM ficha WHERE nroficha = :id');

            $query->execute(['id' => $id]);
            
            while($row = $query->fetch()){
                $item = new FichaDAO();
                $item->nroficha = $row['nroficha'];
                $item->programa   = $row['programa'];
                $item->fecha_ingreso  = $row['fecha_ingreso'];
                $item->fecha_fin_lectiva  = $row['fecha_fin_lectiva'];
                $item->fecha_fin_practica  = $row['fecha_fin_practica'];
               
            }
            return $item;
        }catch(PDOException $e){
            if(constant("DEBUG")){
                echo $e->getMessage();
            }
            return null;
        }
    }

}
    ?>