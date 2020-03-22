<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Model{
   public function anadirUsuario($usuario){

     $this->db->insert('usuarios',$usuario);
     return $this->db->affected_rows();

   }

   public function IniciarSBDCorr($c,$p){
       $this->db->select('User');
       $this->db->from('usuarios');
       $this->db->where('Correo',$c);
       $this->db->where('Pass',$p);
       $query = $this->db->get();
       $resultado = $query->result_array();
       return $resultado;
}

   public function IniciarSBDUsu($u,$p){
       $this->db->select('Correo');
       $this->db->from('usuarios');
       $this->db->where('User',$u);
       $this->db->where('Pass',$p);
       $query = $this->db->get();
       $resultado = $query->result_array();
       return $resultado;
}


}
?>	