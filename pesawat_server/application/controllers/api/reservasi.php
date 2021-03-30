<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';

class reservasi extends REST_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('reservasi_model', 'reservasi'); // load model reservasi_model
    }

    public function index_get()
    {
        $id_reservasi = $this->get('id_reservasi');
        if ($id_reservasi === NULL) {
            $reservasi = $this->reservasi->getReservasi();
        } else {
            $reservasi = $this->reservasi->getReservasi($id_reservasi);
        }

        if ($reservasi) {
            $this->response([
                'status' => true,
                'data' => $reservasi
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'id_reservasi tidak ditemukan di reservasi'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_post()
    {
        $data = [
            'id_reservasi' => $this->post('id_reservasi'),
            'tanggal' => $this->post('tanggal'),
            'id_customer' => $this->post('id_customer'),
            'nmr_kursi' => $this->post('nmr_kursi'),
            'id_rute' => $this->post('id_rute')
        ];

        if ($this->reservasi->createReservasi($data) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Data reservasi Dibuat'
            ], REST_Controller::HTTP_CREATED);
        } else {
            //id_reservasi not found
            $this->response([
                'status' => true,
                'message' => 'Gagal membuat data reservasi baru'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put()
    {
        $id_reservasi = $this->put('id_reservasi');
        $data = [
            'tanggal' => $this->put('tanggal'),
            'id_customer' => $this->put('id_customer'),
            'nmr_kursi' => $this->put('nmr_kursi'),
            'id_rute' => $this->put('id_rute')
        ];

        if ($this->reservasi->updateReservasi($data, $id_reservasi) > 0) {
            $this->response([
                'status' => true,
                'message' => 'Data reservasi sudah di perbarui'
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Gagal untuk memperbarui data!'
            ], REST_Controller::HTTP_BAD_REQUEST);
            var_dump($data, $id_reservasi);
        }
    }

    public function index_delete()
    {
        $id_reservasi = $this->delete('id_reservasi');

        if ($id_reservasi === null) {
            $this->response([
                'status' => false,
                'message' => 'Provide an id_reservasi!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->reservasi->deleteReservasi($id_reservasi) > 0) {
                $this->response([
                    'status' => true,
                    'id_reservasi' => $id_reservasi,
                    'message' => 'terhapus'
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'id_reservasi tidak ditemukan!'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

}

/* End of file reservasi.php */

?>