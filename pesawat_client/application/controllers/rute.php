<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class rute extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //pengisian libk rest server (perpus_server)
        $this->API="http://localhost/pesawat/pesawat_server/api/rute";
        $this->load->library('curl');
    }

    public function index()
    {
        $respon = json_decode($this->curl->simple_get($this->API.'/rute'));
        $data['rute'] = $respon->data;
        $this->load->view('rute/index',$data);
        
    }

    public function create()
    {
        # code...
        if(isset($_POST['submit'])){
            $data = array(
                'id_rute' => $this->input->NULL,
                'rute_dari' => $this->input->post('rute_dari'),
                'rute_ke' => $this->input->post('rute_ke'),
                'jam_berangkat' => $this->input->post('jam_berangkat'),
                'jam_tiba' => $this->input->post('jam_tiba'),
                'harga' => $this->input->post('harga')
            );
            $insert = $this->curl->simple_post($this->API.'/rute', $data, array(CURLOPT_BUFFERSIZE => 10));
            if ($insert) {
                # code...
                $this->session->set_flashdata('hasil', 'Pengisian Data rute Berhasil!');
            } else {
                # code...
                $this->session->set_flashdata('hasil', 'Pengisian Data rute Gagal!');
            }
            redirect('rute');//ke controller rute
        }else {
            $this->load->view('rute/createRute');
        }
    }

    //fungsi edit data rute
    public function edit()
    {
        # code...
        if(isset($_POST['submit'])){
            $data = array(
                'id_rute' => $this->input->post('id_rute'),
                'rute_dari' => $this->input->post('rute_dari'),
                'rute_ke' => $this->input->post('rute_ke'),
                'jam_berangkat' => $this->input->post('jam_berangkat'),
                'jam_tiba' => $this->input->post('jam_tiba'),
                'harga' => $this->input->post('harga')
            );
            $update = $this->curl->simple_put($this->API.'/rute', $data, array(CURLOPT_BUFFERSIZE => 10));
            if ($update) {
                # code...
                $this->session->set_flashdata('hasil', 'Pembaruan Data rute Berhasil!');
            } else {
                # code...
                $this->session->set_flashdata('hasil', 'Pembaruan Data rute Gagal!');
            }
            redirect('rute');//ke controller rute
        }else {
            $params = array('id_rute' => $this->uri->segment(3));
            $respon = json_decode($this->curl->simple_get($this->API.'/rute',$params));
            $data['datarute'] = $respon->data;
            $this->load->view('rute/editRute',$data);
        }
    }

    //fungsi delete data rute
    function delete($id_rute)
    {
        # code...
        if (empty($id_rute)) {
            # code...
            redirect('');
        }else {
            $delete = $this->curl->simple_delete($this->API.'/kontak',array('id_rute' => $id_rute), array(CURLOPT_BUFFERSIZE => 10));
            if ($delete) {
                $this->session->set_flashdata('hasil', 'Menghapus Data rute Berhasil!');
            }else {
                $this->session->set_flashdata('hasil', 'Menghapus Data rute Gagal!');
            }
            redirect('rute');
        }
    }

}

/* End of file rute.php */

?>