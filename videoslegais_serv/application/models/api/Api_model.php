<?php
class Api_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function getallVideos(){
		$this->db->order_by('vid_data', 'asc');
		$query = $this->db->get('videos',6); //LIMIT DE 6 REGISTROS
		return $query->result();
	}

	public function getCategorias(){
		$this->db->order_by('cat_nome','asc');
		$query = $this->db->get('categorias');
		return $query->result();
	}

}