<?php
    class Klin extends CI_Controller{

        public function __construct(){
            parent::__construct();
        }

        public function index($page = 'home'){
            $this->load->view('@/_a');
            $this->load->view('@/_b');
            $this->load->view('@/_c');
            $this->load->view('klin/home');
            $this->load->view('@/_d');
            $this->load->view('@/_e');
        }

        public function view($id=0){

            // echo "idnya adalah:".$id;
            $data['detail']=$this->api_data->giatById($id);
            if(empty($data['detail'])){
                show_404();
            }
            $data['judul']= "DETIL KEGIATAN"; 
            $this->load->view('@/_a');
            $this->load->view('@/_b');
            $this->load->view('klin/view', $data);
            $this->load->view('@/_d');
            $this->load->view('@/_e');
        }

    }
?>