<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class reservasi_model extends CI_Model {

    public function getReservasi($id_reservasi = null)
    {
        if ($id_reservasi === null) {
            $this->db->select('reservasi.*, rute.rute_dari as rute_dari, rute.rute_ke as rute_ke, customer.nama as nama');
            $this->db->join('rute', 'rute.id_rute = reservasi.id_rute');
            $this->db->join('customer', 'reservasi.id_customer = customer.id_customer');
            $this->db->from('reservasi');
            $query = $this->db->get();
            return $query->result();
        } else {
            return $this->db->get_where('reservasi', ['id_reservasi' => $id_reservasi])->result_array();
        }
    }

    public function createReservasi($data)
    {
        $this->db->insert('reservasi', $data);
        return $this->db->affected_rows();
    }

    public function updateReservasi($data, $id_reservasi)
    {
        $this->db->update('reservasi', $data, ['id_reservasi' => $id_reservasi]);
        return $this->db->affected_rows();
    }

    public function deleteReservasi($id_reservasi)
    {
        $this->db->delete('reservasi', ['id_reservasi' => $id_reservasi]);
        return $this->db->affected_rows();
    }

}

/* End of file reservasi_model.php */

?>