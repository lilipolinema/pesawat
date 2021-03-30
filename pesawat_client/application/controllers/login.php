<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('login_model');
        // $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('login/login'); 
    }

    public function proses_login(){
        $username=htmlspecialchars($this->input->post('uname1'));
        $password=htmlspecialchars($this->input->post('pwd1'));

        $ceklogin=$this->login_model->login($username,$password);

        if($ceklogin){
            foreach($ceklogin as $row){
                //kita set userdata pada session dengan nama user dan isi username kita isikan username yang ada pada $row
                $this->session->set_userdata('user',$row->username); 
                $this->session->set_userdata('pass',$row->password);
                //var_dump($row);
                if ($this->session->userdata('user')==$row->username) {
                    # code...
                    redirect('pesawat/index');// ke controller 
                    
                }
            }
        }
        else{
            //jb 5 praktikum no 16
            $data['pesan']="username dan password Anda salah";
            $data['title']='login';
            $this->load->view('template/header_login',$data);
            $this->load->view('login/login',$data);
            $this->load->view('template/footer');
            //redirect('login/index','refresh');
            
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        
        redirect('login','refresh');
        
    }

}

/* End of file login.php */

?>