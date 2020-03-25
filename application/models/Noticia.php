<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticia extends CI_Model{
   public function nuevaNoticia($noticia){

     $this->db->insert('noticias',$noticia);
     return $this->db->affected_rows();

   }

   public function filtrarPorLiga($c,$p){
       $this->db->select('*');
       $this->db->from('noticias');
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