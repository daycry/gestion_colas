<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gestor extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$datos['username'] = $session_data['username'];
			$datos['listaVisat'] = $this->colas->getListaByTipoGestor( 1 );
			$datos['listaSecretaria'] = $this->colas->getListaByTipoGestor( 2 );
			$datos['listaFirma'] = $this->colas->getListaByTipoGestor( 3 );
			$datos['listaCompta'] = $this->colas->getListaByTipoGestor( 4 );
			if( in_array($session_data['username'], $this->config->item('gestor') ) ){
				$this->load->view('gestor/index', $datos);
			}else{
				$this->load->view('inicio/index', $datos);
			}
		}else{
			$this->load->view('ldap/login');
		}
		
	}
	
	public function actualizaLista(){
		$tipo = $this->input->post('tipo');
		if( $tipo == 1 ){
			$datos['listaVisat'] = $this->colas->getListaByTipoGestor( $tipo );
			$this->load->view('partial/visat', $datos);
		}elseif( $tipo == 2 ){
			$datos['listaSecretaria'] = $this->colas->getListaByTipoGestor( $tipo );
			$this->load->view('partial/secretaria', $datos);
		}elseif( $tipo == 3 ){
			$datos['listaFirma'] = $this->colas->getListaByTipoGestor( $tipo );
			$this->load->view('partial/firma', $datos);
		}elseif( $tipo == 4 ){
			$datos['listaCompta'] = $this->colas->getListaByTipoGestor( $tipo );
			$this->load->view('partial/comptabilitat', $datos);
		}
	}
	
	public function editaPeticio(){
		$tipo = $this->input->post('tipo');
		$id = $this->input->post('id');
		$usuario = $this->input->post('usuario');
		
		if ( $tipo == 1 ){
			$data = array(
               'entrada' => date('H:i:s'),
               'empleat' => $usuario
			);
			$this->colas->setFechaEntrada($id, $data);
		}else{
			$data = array(
               'sortida' => date('H:i:s')
			);
			$this->colas->setFechaSortida($id, $data);
		}
		
	}
			
}

