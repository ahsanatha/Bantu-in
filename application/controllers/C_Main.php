<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class C_Main extends CI_Controller {

    public function index() 
    {
        $this->load->view('V_landing');
    }
    public function signin(){
        $data['title'] = 'Masuk';
        $data['tujuan'] = 'signin';
        $this->load->view('V_sebagai',$data);
    }
    public function signup(){
        $data['title'] = 'Daftar';
        $data['tujuan'] = 'signup';
        $this->load->view('V_sebagai',$data);
    }
    
    public function kategori()
    {
        $this->load->view('V_kategori');
    }
}