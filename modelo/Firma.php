<?php

class Firma {
    
    private $db;
    
    private $datos;
    
    public function __construct() {
        
        require "Conectar.php";
        $this->db = Conectar::conexion();
        $this->datos = array();
    }
    
    public function get_firmas() {
        
        $consulta = $this->db->query("SELECT * FROM firmas");
        
        while ($fila = $consulta->fetch_assoc()){
                       
            $this->datos[] = $fila;
        }
        
        return $this->datos;
    }
    
    public function insertar_firmas($nom, $firma){
        
        $insertar = $this->db->query("INSERT INTO firmas (nombre, img_firma) VALUES ('$nom','$firma')");
        
 
    }
    
}
