<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class C_Customer extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //deklarasi model
        $this->load->model('M_Customer');
    }


        public function index() 
        {
            $this->load->view('V_landing');
        }
        public function pelanggan()
        {
            $this->load->view('V_registCst');
        }
        public function regisCst()
        {
            //validation form
		    $this->form_validation->set_rules('nama','Nama','required|trim');
		    $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[pelanggan.email]',['is_unique'=> 'email sudah terdaftar']);
		    $this->form_validation->set_rules('password','Password','required|trim|matches[password-re]');
		    $this->form_validation->set_rules('password-re','Password-re','required|trim|matches[password]');
            $this->form_validation->set_rules('wilayah','Wilayah','required|trim');
            $this->form_validation->set_rules('instansi','Instansi','required|trim');
		    //validation check
            if($this->form_validation->run()== false){
               //flashdata fail
                $this->session->set_flashdata('message','<div class ="alert alert-danger role = alert">gagal melakukan registrasi </div>'); 
                //back to V_RegisCst
                $this->load->view('V_registCst');
            }
            else {
            //insert data to array
                $data = [
                    'nama' =>$this->input->post('nama'),
                    'wilayah' =>$this->input->post('wilayah'),
                    'instansi'=>$this->input->post('instansi'),
                    'email'=>$this->input->post('email'),
                    'password' =>password_hash( $this->input->post('password'),PASSWORD_DEFAULT)
                ];
                // memanggil method registCst dari model
                $this->M_Customer->regisCst($data);
                //flashdata sukses
                $this->session->set_flashdata('message','<div class ="alert alert-success role = alert">Registrasi berhasil </div>'); 
               //back to V_registCst
                $this->load->view('V_registCst');
            }
        }
        
        public function signin()
        {
            $this->load->view('V_signinCst');
        }

        public function signup()
        {
            $this->load->view('V_registCst');
        }

        public function kategori()
        {
            $this->load->view('V_kategori');
        }

        public function asisten()
        {
            $this->load->view('V_registAst');
        }

        public function signinCst()
        {
            $this->load->view('V_signinCst');
        }

        public function signinAst()
        {
            $this->load->view('V_signinAst');
        }

    }
?>