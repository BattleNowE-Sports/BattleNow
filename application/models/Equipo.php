<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//Codificado por Gonzalo Fernández
class Equipo extends CI_Model{
    
    public function __construct() {
        parent::__construct();
    }
    
    public function redirigirBusqueda($datos){
        if($this->filtrarEquipo($datos['Nombre']) > 1){
            return -1;
        }
        else{
            $this->db->select('*');
            $this->db->from('equipos');
            $this->db->where('Nombre',$datos['Nombre']);
            $resultado = $this->db->get();
            return $resultado->result_array();
        }
    }
    
    public function filtrarEquipo($Nombre){
        $this->db->select('COUNT(*)');
        $this->db->from('equipos');
        $this->db->where('Nombre',$Nombre);
        $this->db->group_by('Nombre');
        $resultado = $this->db->get();
    } 
    
    public function mostrarEquipos(){
        $this->db->select('*');
        $this->db->from('equipos');
        $query = $this->db->get();
        $resultado = $query->result_array();
        return $resultado; 
    }

}
?>	