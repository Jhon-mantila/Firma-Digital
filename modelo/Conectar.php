<?php
class Conectar {
    
    public static function conexion(){
        
    
            $conexion = new mysqli("localhost", "root", "", "firma");
            $conexion->set_charset("utf8");
            
       
            if ($conexion->connect_errno) {
                
                echo "Fallo al conectar a MySQL: " . $conexion->connect_error;
                
            }else{
                
                //echo 'Conexion ok';
            }
        
        return $conexion;
    }
    
    public function prueba(){
        
        return "Hola";
    }
    
}