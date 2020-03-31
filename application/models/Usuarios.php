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

   public function BuscarTotsJuegos(){
      $this->db->select('DISTINCT(Juego)');
      $this->db->from('ligas');
      $query = $this->db->get();
      $resultado = $query->result_array();
      return $resultado;      
   }

   public function BuscarPorJuego($cod){
      $this->db->select('Nombre');
      $this->db->from('liga');
      $this->db->where('Juego',$cod);
      $query = $this->db->get();
      $resultado = $query->result_array();
      return $resultado;      
   }

   public function buscarLigas($j){
      $this->db->select('Abreviatura');
      $this->db->from('ligas');
      $this->db->where('Juego',$j);
      $query = $this->db->get();
      $resultado = $query->result_array();
      return $resultado;   
   }

   public function sacarPartidos($b){
     $this->db->select('*');
     $this->db->from('partidos');
     $this->db->where('Liga',$b);
     $query = $this->db->get();
     $resultado = $query->result_array();
     return $resultado;   
   }

}
?>	