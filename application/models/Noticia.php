<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//Codificado por Gonzalo Fernández
class Noticia extends CI_Model{
    
    private $id;
    private $titulo;
    private $texto;
    private $textoRecortado;
    private $imagen;
    private $redactor;
    
    public function __construct() {
        parent::__construct();
    }

    public function nuevaNoticia($noticia){
        $this->db->insert('noticias',$noticia);
        return $this->db->affected_rows();
    }
    
    public function mostrarNoticia($idNoticia){
        $this->db->select('*');
        $this->db->from('noticias');
        $this->db->where('ID',$idNoticia);
        $query = $this->db->get();               
        return $query->row();
    } 
    
    public function mostrarNoticias(){
        $this->db->select('*');
        $this->db->from('noticias');
        $query = $this->db->get();
        $resultado = $query->result_array();
        return $resultado; 
    }
    
    public function mostrarMisNoticias($usuario){
        $this->db->select('*');
        $this->db->from('noticias','subscripciones');
        $this->db->where('ID',$c);

        $query = $this->db->get();
        $resultado = $query->result_array();
        return $resultado;
    }

}
?>	