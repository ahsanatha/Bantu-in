<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class C_Assistent extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //deklarasi model
        $this->load->model('M_Assistent');
    }


        public function index() 
        {
            $this->load->view('V_loginAs');
        }
        public function assistent()
        {
            $this->load->view('V_registAst');
        }
        public function registAst()
        {
             //validation form
		    $this->form_validation->set_rules('nama','Nama','required|trim');
		    $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[pelanggan.email]',['is_unique'=> 'email sudah terdaftar']);
		    $this->form_validation->set_rules('password','Password','required|trim|matches[password-re]');
		    $this->form_validation->set_rules('password-re','Password-re','required|trim|matches[password]');
            $this->form_validation->set_rules('nik','Nik','required|trim');
            $this->form_validation->set_rules('noTlp','NoTlp','required|trim');
            $this->form_validation->set_rules('tglLahir','tglLahir','required|trim');
            $this->form_validation->set_rules('alamat','Alamat','required|trim');
            $this->form_validation->set_rules('wilayah','Wilayah','required|trim');
            $this->form_validation->set_rules('kodePos','KodePos','required|trim');
            $this->form_validation->set_rules('instansi','Instansi','required|trim');
		    //validation check
            if($this->form_validation->run()== false){
               //flashdata fail
                $this->session->set_flashdata('message','<div class ="alert alert-danger role = alert">gagal melakukan registrasi </div>'); 
                //back to V_RegistAst
                $this->load->view('V_registAst');
            }
            else {
            //insert data to array
                $data = [
                    'nama' =>$this->input->post('nama'),
                    'nik' =>$this->input->post('nik'),
                    'tglLahir' =>$this->input->post('tglLahir'),
                    'alamat' =>$this->input->post('alamat'),
                    'nomorTelpon'=>$this->input->post('noTlp'),
                    'wilayah'=>$this->input->post('wilayah'),
                    'instansi'=>$this->input->post('instansi'),
                    'email'=>$this->input->post('email'),
                    'password' =>password_hash( $this->input->post('password'),PASSWORD_DEFAULT)
                ];
                // memanggil method registAsst dari M_Asst
                $this->M_Assistent->regisAst($data);
                //flashdata sukses
                $this->session->set_flashdata('message','<div class ="alert alert-success role = alert">Registrasi berhasil </div>'); 
               //back to V_registCst
                $this->load->view('V_registAst');
            }
        }
}     
?>