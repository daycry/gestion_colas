<?php

class colas extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function getAll(){
		$query = $this->db->get('peticiones');
		return $query->result();
	}
	
	function insert( $datos ){
        $this->db->insert('peticiones', $datos); 
	}
	
	function getListaByTipo( $id ){
		$this->db->where('tipus', $id);
		$this->db->where('entrada IS NULL', null, false);
		$this->db->order_by("en_cua", "desc"); 
		$query = $this->db->get('peticiones');
		return $query->result();
	}
	
	function getListaByTipoGestor( $id ){
		$this->db->where('tipus', $id);
		$this->db->where('sortida IS NULL', null, false);
		$this->db->order_by("en_cua", "asc"); 
		$query = $this->db->get('peticiones');
		return $query->result();
	}
	
	function setFechaEntrada( $id ,$datos){    
		$this->db->where('id', $id);
		$this->db->update('peticiones', $datos); 
	}
	
	function setFechaSortida( $id, $datos ){        
		$this->db->where('id', $id);
		$this->db->update('peticiones', $datos); 
	}
	
}
