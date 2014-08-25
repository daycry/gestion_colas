<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('logged_in')){
			$session_data = $this->session->userdata('logged_in');
			$datos['username'] = $session_data['username'];
			$this->load->view('inicio/index');
		}else{
			$this->load->view('ldap/login');
		}
		
	}
	
	public function recogeVisat(){
		$tipo = $this->input->post('tipo');
		$lista = $this->colas->getListaByTipo( $tipo );
		
		if( $tipo == 1){
			echo"<h5>LLISTA D'ESPERA VISAT</h5>";
		}elseif( $tipo == 2 ){
			echo"<h5>LLISTA SECRETARIA</h5>";
		}elseif( $tipo == 3 ){
			echo"<h5>LLISTA FIRMA PROFESSIONAL</h5>";
		}elseif( $tipo == 4 ){
			echo"<h5>LLISTA COMPTABILITAT</h5>";
		}
		
		if(count($lista) > 0){
			echo"<table class='table table-bordered'>";
			echo"<thead><tr><th>NOM</th><th>Hora</th></tr></thead><tbody>";
			foreach( $lista as $list){
				echo"<tr>";
					echo"<td>".$list->nom."</td>";
					echo"<td>".$list->en_cua."</td>";
				echo"</tr>";
			}
			echo"</tbody></table>";
		}
	}
	
	public function insertaPeticion(){
		$tipo = $this->input->post('tipo');
		$nom = $this->input->post('nom');
		$motiu = $this->input->post('motiu');
		
		$this->form_validation->set_rules('nom', 'Nom', 'required|xss_clean');
		
		if ($this->form_validation->run() == FALSE){
			$this->load->view('inicio/index');
		}else{
			
			$data = array(
               'nom' => $nom,
               'data_peticio' => date('Y-m-d'),
               'en_cua' => date('H:i:s'),
               'tipus' => $tipo,
               'motiu' => $motiu     
			);
			$this->colas->insert($data);
			$this->load->view('inicio/index');
		}
	}	
}

