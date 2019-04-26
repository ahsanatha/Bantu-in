<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class C_loginAs extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }


        public function index()
        {
            $this->load->view('V_loginAs');
        }

        public function pelanggan()
        {
            $this->load->view('V_registCst');
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