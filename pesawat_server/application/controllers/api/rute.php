<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';

class rute extends REST_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('rute_model', 'rute'); // load model rute_model
    }

    public function index_get()
    {
        $id_rute = $this->get('id_rute');
        if ($id_rute === NULL) {
            $rute = $this->rute->getRute();
        } else {
            $rute = $this->rute->getRute($id_rute);
        }

        if ($rute) {
            $this->response([
                'status' => true,
                'data' => $rute
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'id_rute tidak ditemukan di rute'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_post()
    {
        $data = [
            'id_rute' => $this->post('id_rute'),
            'rute_dari' => $this->post('rute_dari'),
            'rute_ke' => $this->post('rute_ke'),
            'jam_berangkat' => $this->post('jam_berangkat'),
            'jam_tiba' => $this->post('jam_tiba'),
            'harga' => $this->post('harga')
        ];

        if ($this->rute->createRute($data) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Data rute Dibuat'
            ], REST_Controller::HTTP_CREATED);
        } else {
            //id_rute not found
            $this->response([
                'status' => true,
                'message' => 'Gagal membuat data rute baru'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put()
    {
        $id_rute = $this->put('id_rute');
        $data = [
            'rute_dari' => $this->put('rute_dari'),
            'rute_ke' => $this->put('rute_ke'),
            'jam_berangkat' => $this->put('jam_berangkat'),
            'jam_tiba' => $this->put('jam_tiba'),
            'harga' => $this->put('harga')
        ];
        if ($this->rute->updateRute($data, $id_rute) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Data rute sudah di perbarui'
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Gagal untuk memperbarui data!'
            ], REST_Controller::HTTP_BAD_REQUEST);
            var_dump($data, $id_rute);
        }
    }

    public function index_delete()
    {
        $id_rute = $this->delete('id_rute');

        if ($id_rute === null) {
            $this->response([
                'status' => false,
                'message' => 'Provide an id_rute!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->rute->deleteRute($id_rute) > 0) {
                $this->response([
                    'status' => true,
                    'id_rute' => $id_rute,
                    'message' => 'terhapus'
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'id_rute tidak ditemukan!'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

}

/* End of file rute.php */

?>