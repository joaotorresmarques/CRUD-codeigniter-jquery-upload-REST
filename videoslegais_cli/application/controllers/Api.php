<?php
class Api extends CI_Controller{
	var $api ="";

	function __construct(){
		parent::__construct();
		$this->api = "http://localhost/rest/videoslegais_serv/index.php";
		$this->load->library('session');
		$this->load->library('curl');
		$this->load->helper('form');
	}

	public function index(){
		$data['aplicacao'] = json_decode($this->curl->simple_get($this->api)); //INDEX
		$data['categorias'] = json_decode($this->curl->simple_get($this->api.'/api/getcategorias'));

		$this->load->view('index',$data);
	}

	public function visualizarVideo($id){
		$id = strip_tags($id);
		$data['categorias'] = json_decode($this->curl->simple_get($this->api.'/api/getcategorias'));
		//$data['catlist'] = json_decode($this->curl->simple_get($this->api.'/api/getlistcategorias/'.$id));
		$this->load->view('visualizarvideo',$data);
	}

	

}