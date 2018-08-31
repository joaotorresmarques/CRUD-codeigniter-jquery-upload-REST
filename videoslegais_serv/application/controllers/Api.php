<?php
require APPPATH . 'libraries/REST_Controller.php';
 
class Api extends REST_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->model('api/api_model');
    }

    //LISTAR TUDO
    public function index_get(){
        $result = $this->api_model->getallVideos();

        if($result){
            $this->response($result, 200); 
        }else{
            $this->response("No record found", 404);
        }
    }

    public function getcategorias_get(){

        $result = $this->api_model->getCategorias();

        if($result){
            $this->response($result,200);
        }else{
            $this->response("Não ha registros",404);
        }
    }
    /*
    public function getlistCategorias_get($id){

        $this->db->where('vid_categoria', $id);
        $result = $this->db->get('videos')->result();

        if($result){
            $this->response($result,200);
        }else{
            $this->response('nao ha',404);
        }

    }
*/
   /* 
  
   function add_post(){
        $data = array(
            'usu_email'    =>  $this->post('usu_email'),
            'usu_nome'  =>  $this->post('usu_nome'),
            'usu_senha' =>  $this->post('usu_senha'),
        );
        $insert = $this->db->insert('usuarios', $data);
        
        if($insert){
            $this->response($data, 200);
        }
        else{
            $this->response(array('status' => 'fail', 502));
        }
    }*/

}