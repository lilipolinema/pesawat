<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class reservasi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //pengisian libk rest server (perpus_server)
        $this->API="http://localhost/pesawat/pesawat_server/api/reservasi";
        $this->load->library('curl');
    }

    public function index()
    {
        $respon = json_decode($this->curl->simple_get($this->API.'/reservasi'));
        $data['reservasi'] = $respon->data;
        $this->load->view('reservasi/index',$data);
        
    }

    public function create()
    {
        # code...
        if(isset($_POST['submit'])){
            $data = array(
                'id_reservasi' => $this->input->NULL,
                'tanggal' => $this->input->post('tanggal'),
                'id_customer' => $this->input->post('id_customer'),
                'nmr_kursi' => $this->input->post('nmr_kursi'),
                'id_rute' => $this->input->post('id_rute')
            );
            $insert = $this->curl->simple_post($this->API.'/reservasi', $data, array(CURLOPT_BUFFERSIZE => 10));
            if ($insert) {
                # code...
                $this->session->set_flashdata('hasil', 'Pengisian Data reservasi Berhasil!');
            } else {
                # code...
                $this->session->set_flashdata('hasil', 'Pengisian Data reservasi Gagal!');
            }
            redirect('reservasi');//ke controller reservasi
        }else {
            $this->load->view('reservasi/createReservasi');
        }
    }

    //fungsi edit data reservasi
    public function edit()
    {
        # code...
        if(isset($_POST['submit'])){
            $data = array(
                'id_reservasi' => $this->input->post('id_reservasi'),
                'tanggal' => $this->input->post('tanggal'),
                'id_customer' => $this->input->post('id_customer'),
                'nmr_kursi' => $this->input->post('nmr_kursi'),
                'id_rute' => $this->input->post('id_rute')
            );
            $update = $this->curl->simple_put($this->API.'/reservasi', $data, array(CURLOPT_BUFFERSIZE => 10));
            if ($update) {
                # code...
                $this->session->set_flashdata('hasil', 'Pembaruan Data reservasi Berhasil!');
            } else {
                # code...
                $this->session->set_flashdata('hasil', 'Pembaruan Data reservasi Gagal!');
            }
            redirect('reservasi');//ke controller reservasi
        }else {
            $params = array('id_reservasi' => $this->uri->segment(3));
            $respon = json_decode($this->curl->simple_get($this->API.'/reservasi',$params));
            $data['datareservasi'] = $respon->data;
            $this->load->view('reservasi/editReservasi',$data);
        }
    }

    //fungsi delete data reservasi
    function delete($id_reservasi)
    {
        # code...
        if (empty($id_reservasi)) {
            # code...
            redirect('');
        }else {
            $delete = $this->curl->simple_delete($this->API.'/kontak',array('id_reservasi' => $id_reservasi), array(CURLOPT_BUFFERSIZE => 10));
            if ($delete) {
                $this->session->set_flashdata('hasil', 'Menghapus Data reservasi Berhasil!');
            }else {
                $this->session->set_flashdata('hasil', 'Menghapus Data reservasi Gagal!');
            }
            redirect('reservasi');
        }
    }

}

/* End of file reservasi.php */

?>