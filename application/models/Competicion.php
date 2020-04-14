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

   public function sacarJuego($cod){
    $this->db->select('Juego');
    $this->db->from('ligas');
    $this->db->where('CODLiga',$cod);
    $consulta = $this->db->get();
    $resultado = $consulta->result_array();
    return $resultado;
   }

   public function sacarCodigoEquipo($nom,$ju){
    $this->db->select('CODEq');
    $this->db->from('equipos');
    $this->db->where('Nombre',$nom);
    $this->db->where('Juego',$ju);
    $consulta = $this->db->get();
    $resultado = $consulta->result_array();
    return $resultado;
   }

   public function sacarJugadores($cod){
    $this->db->select('*');
    $this->db->from('jugadores');
    $this->db->where('Equipo',$cod);
    $consulta = $this->db->get();
    $resultado = $consulta->result_array();
    return $resultado;   
   }

   public function sacarInfoPlayer($nom){
    $this->db->select('*');
    $this->db->from('jugadores');
    $this->db->where('Nick',$nom);
    $consulta = $this->db->get();
    $resultado = $consulta->result_array();
    return $resultado;       
   }

   public function numPlayers($cod){
    $this->db->select('*');
    $this->db->from('jugadores');
    $this->db->where('Equipo',$cod);
    $consulta = $this->db->get();
    return $consulta->num_rows();
   }

   public function players($cod,$nick){
   $cadenaSQL="SELECT * FROM jugadores WHERE Nick != $nick AND Equipo = $cod "; 
   $registros=$this->db->query($cadenaSQL);  
   return $registros->result_array();
   }

   

}
?>