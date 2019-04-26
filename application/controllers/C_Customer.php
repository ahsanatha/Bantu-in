<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class C_Customer extends CI_Controller {

    protected  $provinsi = ["ACEH","SUMATERA UTARA","SUMATERA BARAT","RIAU","JAMBI","SUMATERA SELATAN","BENGKULU","LAMPUNG","KEPULAUAN BANGKA BELITUNG",
    "KEPULAUAN RIAU","DKI JAKARTA","JAWA BARAT","JAWA TENGAH","DI YOGYAKARTA","JAWA TIMUR","BANTEN","BALI","NUSA TENGGARA BARAT",
    "NUSA TENGGARA TIMUR","KALIMANTAN BARAT","KALIMANTAN TENGAH","KALIMANTAN SELATAN","KALIMANTAN TIMUR","KALIMANTAN UTARA",
    "SULAWESI UTARA","SULAWESI TENGAH","SULAWESI SELATAN","SULAWESI TENGGARA","GORONTALO","SULAWESI BARAT","MALUKU","MALUKU UTARA",
    "PAPUA BARAT","PAPUA"];

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
            $datatoview['provinsi'] = $this->provinsi;
            $this->load->view('V_registCst',$datatoview);
        }
        public function regisCst()
        {
            //validation form
		    $this->form_validation->set_rules('nama','Nama','required|trim');
		    $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[pelanggan.email]',['is_unique'=> 'email sudah terdaftar']);
		    $this->form_validation->set_rules('password','Password','required|trim|matches[password-re]|min_length[6]',['min_length'=>'password harus lebih dari 6 karakter']);
		    $this->form_validation->set_rules('password-re','Password-re','required|trim|matches[password]');
            $this->form_validation->set_rules('instansi','Instansi','required|trim');
            //validation check
            if($this->form_validation->run()== false){
               //flashdata fail
                $this->session->set_flashdata('message','<div class ="alert alert-danger role = alert">gagal melakukan registrasi </div>'); 
                //back to V_RegisCst
                $this->pelanggan();
            }
            else {
            //insert data to array
                $data = [
                    'nama' =>$this->input->post('nama'),
                    'wilayah' =>$this->input->post('wilayah'),
                    'instansi'=>$this->input->post('instansi'),
                    'email'=>$this->input->post('email'),
                    'password' =>password_hash( $this->input->post('password'),PASSWORD_DEFAULT),
                    'gambar' =>'default.png'
                ];
                // memanggil method registCst dari model
                $this->M_Customer->regisCst($data);
                //flashdata sukses
                $this->session->set_flashdata('message','<div class ="alert alert-success role = alert">Registrasi berhasil </div>'); 
               //back to V_registCst
                $this->pelanggan();
            }
        }
        public function editProfileCst(){

            $this->load->view('V_editProfileCst');
        }

        public function signin()
        {
            $this->load->view('V_loginAs');
        }

        public function signup()
        {
            $this->load->view('V_registCst');
        }

        public function kategori()
        {
            $this->load->view('V_kategori');
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