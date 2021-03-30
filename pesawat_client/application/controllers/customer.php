<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class customer extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //pengisian libk rest server (perpus_server)
        $this->API="http://localhost/pesawat/pesawat_server/api/customer";
        $this->load->library('curl');
    }

    public function index()
    {
        $respon = json_decode($this->curl->simple_get($this->API.'/customer'));
        $data['customer'] = $respon->data;
        $data['gender'] = ['Perempuan','Laki-Laki'];
        $this->load->view('customer/index',$data);
        
    }

    public function create()
    {
        # code...
        if(isset($_POST['submit'])){
            $data = array(
                'id_customer' => $this->input->NULL,
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'notelp' => $this->input->post('notelp'),
                'gender' => $this->input->post('gender')
            );
            $insert = $this->curl->simple_post($this->API.'/customer', $data, array(CURLOPT_BUFFERSIZE => 10));
            if ($insert) {
                # code...
                $this->session->set_flashdata('hasil', 'Pengisian Data customer Berhasil!');
            } else {
                # code...
                $this->session->set_flashdata('hasil', 'Pengisian Data customer Gagal!');
            }
            redirect('customer');//ke controller customer
        }else {
            $this->load->view('customer/createCustomer');
        }
    }

    //fungsi edit data customer
    public function edit()
    {
        # code...
        if(isset($_POST['submit'])){
            $data = array(
                'id_customer' => $this->input->post('id_customer'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'notelp' => $this->input->post('notelp'),
                'gender' => $this->input->post('gender')
            );
            $update = $this->curl->simple_put($this->API.'/customer', $data, array(CURLOPT_BUFFERSIZE => 10));
            if ($update) {
                # code...
                $this->session->set_flashdata('hasil', 'Pembaruan Data customer Berhasil!');
            } else {
                # code...
                $this->session->set_flashdata('hasil', 'Pembaruan Data customer Gagal!');
            }
            redirect('customer');//ke controller customer
        }else {
            $params = array('id_customer' => $this->uri->segment(3));
            $respon = json_decode($this->curl->simple_get($this->API.'/customer',$params));
            $data['datacustomer'] = $respon->data;
            $this->load->view('customer/editCustomer',$data);
        }
    }

    //fungsi delete data customer
    function delete($id_customer)
    {
        # code...
        if (empty($id_customer)) {
            # code...
            redirect('');
        }else {
            $delete = $this->curl->simple_delete($this->API.'/kontak',array('id_customer' => $id_customer), array(CURLOPT_BUFFERSIZE => 10));
            if ($delete) {
                $this->session->set_flashdata('hasil', 'Menghapus Data customer Berhasil!');
            }else {
                $this->session->set_flashdata('hasil', 'Menghapus Data customer Gagal!');
            }
            redirect('customer');
        }
    }

}

/* End of file customer.php */

?>