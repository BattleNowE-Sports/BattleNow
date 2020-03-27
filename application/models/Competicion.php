<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//Codificado por Sergio Cruz
class Competicion extends CI_Model{
	
   public function BuscarTotsJuegos(){
      $this->db->select('DISTINCT(Juego)');
      $this->db->from('ligas');
      $query = $this->db->get();
      $resultado = $query->result_array();
      return $resultado;      
   }

   public function BuscarPorJuego($cod){
      $this->db->select('Nombre');
      $this->db->from('ligas');
      $this->db->where('Juego',$cod);
      $query = $this->db->get();
      $resultado = $query->result_array();
      return $resultado;      
   }

   public function buscarLigas($j){
      $this->db->select('CODLiga');
      $this->db->from('ligas');
      $this->db->where('Juego',$j);
      $query = $this->db->get();
      $resultado = $query->result_array();
      return $resultado;   
   }

   public function sacarPartidos($b){
     $this->db->select('*');
     $this->db->from('partidos');
     $this->db->where('CODLiga',$b);
     $query = $this->db->get();
     $resultado = $query->result_array();
     return $resultado;   
   }

   public function sacarInfoPartido($cod){
     $this->db->select('*');
     $this->db->from('partidos');
     $this->db->where('CODPartido',$cod);
     $query = $this->db->get();
     $resultado = $query->result_array();
     return $resultado;        
   }

}
?>