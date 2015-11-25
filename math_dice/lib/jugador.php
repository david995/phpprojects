<?php
class Jugador{
    
    //VARIABLES DE JUGADOR
    
        public $nombre = 'Jugador 1'; //le damos un valor predeterminado
        public $apellidos = 'Apellidos 1';
        public $edad = 0;
        public $puntos =0;
    
    //CONSTRUCTOR JUGADOR
    
    function Jugador(){
        
       
       
    }
    
    //GETTERS DE JUGADOR
    
    public function getNOMBRE(){
        return $this->nombre;
    }
    
    public function getAPELLIDOS(){
        return $this->apellidos;
    }
    
    public function getEDAD(){
        return $this->edad;
    }
    
    public function getPUNTOS(){
        return $this->puntos;
    }
    
    //SETTERS DE JUGADOR
    
    public function setNOMBRE($_nombre){
        $this->nombre = $_nombre;
    }
    
    public function setAPELLIDOS($_apellidos){
        $this->apellidos = $_apellidos;
    }
    
    public function setEDAD($_edad){
        $this->edad = $_edad;
    }
    
    public function setPUNTOS($_puntos){
        $this->puntos = $_puntos;
    }
}
?>