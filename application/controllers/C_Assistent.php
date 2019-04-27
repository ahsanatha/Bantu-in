<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class C_Assistent extends CI_Controller {
    protected  $provinsi = ["ACEH","SUMATERA UTARA","SUMATERA BARAT","RIAU","JAMBI","SUMATERA SELATAN","BENGKULU","LAMPUNG","KEPULAUAN BANGKA BELITUNG",
    "KEPULAUAN RIAU","DKI JAKARTA","JAWA BARAT","JAWA TENGAH","DI YOGYAKARTA","JAWA TIMUR","BANTEN","BALI","NUSA TENGGARA BARAT",
    "NUSA TENGGARA TIMUR","KALIMANTAN BARAT","KALIMANTAN TENGAH","KALIMANTAN SELATAN","KALIMANTAN TIMUR","KALIMANTAN UTARA",
    "SULAWESI UTARA","SULAWESI TENGAH","SULAWESI SELATAN","SULAWESI TENGGARA","GORONTALO","SULAWESI BARAT","MALUKU","MALUKU UTARA",
    "PAPUA BARAT","PAPUA"];
    public function __construct()
    {
        parent::__construct();
        //deklarasi model
        $this->load->model('M_Assistent');
    }
        public function index(){
            redirect(base_url());
        }
        public function home(){
            $this->load->view('template/headerAst');
            $this->load->view('V_astLogin');
        }
        public function signup()
        {
            $datatoview['provinsi'] = $this->provinsi;
            $this->load->view('V_registAst',$datatoview);
        }
        public function registAst()
        {
             //validation form
		    $this->form_validation->set_rules('nama','Nama','required|trim');
		    $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[asisten.email]',['is_unique'=> 'email sudah terdaftar']);
		    $this->form_validation->set_rules('password','Password','required|trim|matches[password-re]|min_length[6]',['min_length'=>'password harus lebih dari 6 karakter']);
		    $this->form_validation->set_rules('password-re','Password-re','required|trim|matches[password]');
            $this->form_validation->set_rules('nik','Nik','required|trim');
            $this->form_validation->set_rules('noTlp','NoTlp','required|trim');
            $this->form_validation->set_rules('tglLahir','tglLahir','required|trim');
            $this->form_validation->set_rules('alamat','Alamat','required|trim');
            //$this->form_validation->set_rules('wilayah','Wilayah','required|trim');
            $this->form_validation->set_rules('kodePos','KodePos','required|trim');
            $this->form_validation->set_rules('instansi','Instansi','required|trim');
		    //validation check
            if($this->form_validation->run()== false){
               //flashdata fail
                $this->session->set_flashdata('message','<div class ="alert alert-danger role = alert">gagal melakukan registrasi </div>'); 
                //back to V_RegistAst
                $this->signup();
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
                    'password' =>password_hash( $this->input->post('password'),PASSWORD_DEFAULT),
                    'gambar' =>'default.png',
                    'deskripsi' => $this->input->post('deskripsi'),
                ];
                // memanggil method registAsst dari M_Asst
                $this->M_Assistent->regisAst($data);
                //flashdata sukses
                $this->session->set_flashdata('message','<div class ="alert alert-success role = alert">Registrasi berhasil </div>'); 
               //back to V_registCst
                $this->signup();
            }
        }
        public function editProfileAst(){
            $this->load->view('template/headerAst');
            $this->load->view('V_editProfileAst');
        }
        public function signin()
        {
            $data['tipe'] = 'Assistent';
            $this->load->view('V_signin',$data);
        }
        public function doSignIn(){
            $data = array(
                'email' => $this->input->post('email'),
            );
            $query = $this->M_Assistent->cekAst($data);
            if ( ($query->num_rows() > 0) && (password_verify($this->input->post('password'),$query->row_array()['password'])) ){
                $_SESSION['idUser'] = $query->row_array()['idAsisten'];
                $_SESSION['tipeUser'] = 'asisten';
                $data = $this->M_Assistent->getAst($_SESSION['idUser']);
                $this->session->set_userdata($data);
                //var_dump($this->session->userdata['nama']);
                $this->load->view('template/headerAst');
                $this->load->view('V_astLogin');
            }else{
                echo "login gagal";
            };
        }
        
}     
?>