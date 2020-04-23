<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Usuarios');
        $this->load->model('Competicion');
        $this->load->model('Noticia');
        $this->load->model('Equipo');
    }	

    //Codificado por Gonzalo Fernández
	public function index(){
		
        $this->load->view('index_view');
        
	}

    //Codificado por Sergio Cruz
	public function login(){
		$this->load->view('header_view');		
        $this->load->view('login_view');
        $this->load->view('footer_view');
	}

    //Codificado por Sergio Cruz
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
    
    //Codificado por Sergio Cruz
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
    
    //Codificado por Sergio Cruz
    public function cerrarS(){
        $this->session->sess_destroy('info');
        redirect('Home');
    }
    
    //Codificado por Gonzalo Fernández
    public function filtro(){
        $this->load->view('header_view');
        $this->load->view('filtro_view');
        $this->load->view('footer_view');
    }
    
    //Codificado por Gonzalo Fernández
    public function verEquipos(){
        $equ = new Equipo();
        $equipos['equipo'] = $equ->mostrarEquipos();
	    $this->load->view('header_view');
        $this->load->view('equipos_view',$equipos);
        $this->load->view('footer_view');
	}
    
    //Codificado por Gonzalo Fernández
    public function verEquipo(){
        $equ = new Equipo();
        $identificador = $this->uri->segment(3);
        $equipos['equipo'] = $equ->redirigirBusqueda($identificador);
        if(secciones)
		$this->load->view('header_view');
        $this->load->view('equipo_view',$equipos);
        $this->load->view('footer_view');
    }
    
    //Codificado por Gonzalo Fernández
    public function verNoticias(){
        $not = new Noticia();
        $noticias['noticia'] = $not->mostrarNoticias();
	    $this->load->view('header_view');
        $this->load->view('noticias_view',$noticias);
        $this->load->view('footer_view');
	}
    
    //Codificado por Gonzalo Fernández
    public function verNoticia(){
        $not = new Noticia();
        $identificador = $this->uri->segment(3);
        $noticias['noticia'] = $not->mostrarNoticia($identificador);
		$this->load->view('header_view');
        $this->load->view('noticia_view',$noticias);
        $this->load->view('footer_view');
    }
    
    //Codificado por Sergio Cruz
    public function verInfoPartido(){
        $c = new Competicion();
        $cod = $this->uri->segment(3);
        $data['partido'] = $c->sacarInfoPartido($cod);

        $this->load->view('header_view');
        $this->load->view('infopartido_view',$data);
        $this->load->view('footer_view');
    }
    
    //Codificado por Sergio Cruz
    public function partidas(){
        $usu = new Competicion();
        $juego = $this->uri->segment(3);
        if($juego == "Todo"){
            $res = $usu->BuscarTotsJuegos();
            $data['juegos'] = $res;
            $this->load->view('header_view');
            $this->load->view('partidas_view',$data);
            $this->load->view('footer_view');
        }else{
            $resu = $usu->BuscarPorJuego($juego);
            $array = array();
            foreach ($resu as $n) {

            }
        }
    }

    public function verInfoPlayer(){
        $c = new Competicion();
        $player = $this->uri->segment(3);
        $data['jugador'] = $c->sacarInfoPlayer($player);
        $this->load->view('header_view');
        $this->load->view('player_view',$data);
        $this->load->view('footer_view');
    }
    
}
