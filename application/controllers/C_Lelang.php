<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class C_Lelang extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        //deklarasi model
        $this->load->model('M_Assistent');
    }
    public function user(){
        $datatoview['info'] = $this->M_Assistent->getAst($_GET['id']);
        $this->load->view('V_Lelang',$datatoview);
    }
}