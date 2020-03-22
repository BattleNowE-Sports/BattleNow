<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Usuarios');
    }	

	public function index()
	{
		$this->load->view('header_view');
        $this->load->view('index_view');
        $this->load->view('footer_view');
	}

	public function login(){
		$this->load->view('header_view');		
        $this->load->view('login_view');       
	}

  public function cerrarS(){
        $this->session->sess_destroy('info');
        redirect('Home');
  }

	public function loginBD(){
		$usu = new Usuarios();
		$cU = $this->input->post('ucher');
		$pas = $this->input->post('pass');

       if($this->input->post('modo') == "corr"){
            $res = $usu->IniciarSBDCorr($cU,$pas);
            if($res == NULL){
                $this->session->set_flashdata('ErrorInic','Ha ocurrido un error en el inicio de sesion, comprueba los datos introducidos o intentalo de nuevo más tarde');
                redirect('Home/login');
            }else{
                $this->session->set_userdata('usuario',$res);
                redirect('Home/index');
            }
       }else{
       	    if($this->input->post('modo') == "usu"){
       	        $res = $usu->IniciarSBDUsu($cU,$pas);	
                if($res == NULL){
                    $this->session->set_flashdata('ErrorInic','Ha ocurrido un error en el inicio de sesion, comprueba los datos introducidos o intentalo de nuevo más tarde');
                    redirect('Home/login');
                }else{
                    $this->session->set_userdata('usuario',$cU);
                    redirect('Home/index');
                }

       	    }
       }
	}
	public function registrarBD(){
	  $usu = new Usuarios();
      
      $datos['usuario'] = Array(
           'User' => $this->input->post('user'),
           'Pass' => $this->input->post('contra'),
           'Correo' => $this->input->post('correo')
      );

      $res = $usu->anadirUsuario($datos['usuario']);
      if($res == 0){
      	$this->session->set_flashdata('ErrorAn','Ha ocurrido un error a la hora de registrarte, intentalo de nuevo más tarde');
      	redirect('Home/login');
      }else{
      	$this->session->set_flashdata('Corre','Registrado con exito!!!');
      	redirect('Home/login');      	
      }
	}	
}
