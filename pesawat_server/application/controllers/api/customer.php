<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';

class customer extends REST_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('customer_model', 'customer'); // load model customer_model
    }

    public function index_get()
    {
        $id_customer = $this->get('id_customer');
        if ($id_customer === NULL) {
            $customer = $this->customer->getCustomer();
        } else {
            $customer = $this->customer->getCustomer($id_customer);
        }

        if ($customer) {
            $this->response([
                'status' => true,
                'data' => $customer
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'id_customer tidak ditemukan di customer'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_post()
    {
        $data = [
            'id_customer' => $this->post('id_customer'),
            'nama' => $this->post('nama'),
            'alamat' => $this->post('alamat'),
            'notelp' => $this->post('notelp'),
            'gender' => $this->post('gender')
        ];

        if ($this->customer->createCustomer($data) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Data Customer Dibuat'
            ], REST_Controller::HTTP_CREATED);
        } else {
            //id_customer not found
            $this->response([
                'status' => true,
                'message' => 'Gagal membuat data customer baru'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put()
    {
        $id_customer = $this->put('id_customer');
        $data = [
            'nama' => $this->put('nama'),
            'alamat' => $this->put('alamat'),
            'notelp' => $this->put('notelp'),
            'gender' => $this->put('gender')
        ];

        if ($this->customer->updateCustomer($data, $id_customer) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Data customer sudah di perbarui'
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Gagal untuk memperbarui data!'
            ], REST_Controller::HTTP_BAD_REQUEST);
            var_dump($data, $id_customer);
        }
    }

    public function index_delete()
    {
        $id_customer = $this->delete('id_customer');

        if ($id_customer === null) {
            $this->response([
                'status' => false,
                'message' => 'Provide an id_customer!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->customer->deleteCustomer($id_customer) > 0) {
                $this->response([
                    'status' => true,
                    'id_customer' => $id_customer,
                    'message' => 'terhapus'
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'id_customer tidak ditemukan!'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

}

/* End of file customer.php */

?>