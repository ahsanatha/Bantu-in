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
        $this->load->model('M_Assistent');
    }
    public function index(){
        redirect(base_url());
    }
        public function home()
        {
            $this->load->view('template/header');
            $this->load->view('V_loginPelanggan');
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
                $this->signup();
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
                $this->session->set_flashdata('message','<div class ="alert alert-success role = alert">Edit Profile berhasil </div>'); 
               //back to V_registCst
                $this->signup();
            }
        }
        public function editProfileCst(){
            //validation form
		    $this->form_validation->set_rules('nama','Nama','required|trim');
            $this->form_validation->set_rules('instansi','Instansi','required|trim');
            $this->form_validation->set_rules('noHp','noHp','required|trim');
            //validation check
            if($this->form_validation->run()== false){
               //flashdata fail 
               $this->load->view('template/header');
                $this->load->view('V_editProfileCst');
            }
            else {
            //insert data to array
                $data = [
                    'nama' =>$this->input->post('nama'),
                    'instansi'=>$this->input->post('instansi'),
                    'noHp' =>$this->input->post('noHp')
                ];
               
                $this->M_Customer->editCst($data);
                //flashdata sukses
                $this->session->set_userdata($this->M_Customer->getCst($_SESSION['idUser']));
                $this->session->set_flashdata('message','<div class ="alert alert-success role = alert">Registrasi berhasil </div>'); 
                $this->load->view('template/header');
                $this->load->view('V_editProfileCst');
            }
            
        }
        public function detailAst(){
            $this->load->view('V_detailAsstCst');
        }
        public function signin()
        {
            $datatoview['tipe'] = 'Customer';
            $this->load->view('V_signin',$datatoview);
        }

        public function signup()
        {
            $datatoview['provinsi'] = $this->provinsi;
            $this->load->view('V_registCst',$datatoview);
        }

        public function kategori_baby()
        {
            if (isset($_SESSION['idUser'])){
                $query = $this->M_Assistent->getAss("bs");
                $data['asistens'] = $query->result_array(); 
                $data['title'] = "Baby Sitter";
                $data['gambar'] = 'baby_sitter';
                $this->load->view('kategori/V_kategori_asis', $data);
            }else {
                $this->signin();
            }
        }

        public function kategori_suster()
        {
            if (isset($_SESSION['idUser'])){
                $query = $this->M_Assistent->getAss("str");
                $data['asistens'] = $query->result_array(); 
                $data['title'] = "Suster";
                $data['gambar'] = 'nurse';
                $this->load->view('kategori/V_kategori_asis', $data);
            }else{
                $this->signin();
            }
        }


        public function kategori_asis()
        {
            if (isset($_SESSION['idUser'])){
                $query = $this->M_Assistent->getAss("art");
                $data['asistens'] = $query->result_array(); 
                $data['title'] = "Asisten Rumah Tangga";
                $data['gambar'] = 'maid';
                $this->load->view('kategori/V_kategori_asis', $data);
            }else{
                $this->signin();
            }
        }


        public function signinCst()
        {
            $this->load->view('V_signinCst');
        }

        public function signinAst()
        {
            $this->load->view('V_signinAst');
        }
        public function doSignIn(){
            $data = array(
                'email' => $this->input->post('email'),
            );
            $query = $this->M_Customer->cekCst($data);
            if ( ($query->num_rows() > 0) && (password_verify($this->input->post('password'),$query->row_array()['password'])) ){
                $_SESSION['idUser'] = $query->row_array()['idPelanggan'];
                $_SESSION['tipeUser'] = 'customer';
                $data = $this->M_Customer->getCst($_SESSION['idUser']);
                $this->session->set_userdata($data);
                redirect(base_url());
            }else{
                echo "login gagal";
            };
        }
        public function logout(){
            $this->load->view('C_Customer');
        }   

    }
?>