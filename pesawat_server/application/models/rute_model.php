<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class rute_model extends CI_Model {

    public function getRute($id_rute = null)
    {
        if ($id_rute === null) {
            return $this->db->get('rute')->result_array();
        } else {
            return $this->db->get_where('rute', ['id_rute' => $id_rute])->result_array();
        }
    }

    public function createRute($data)
    {
        $this->db->insert('rute', $data);
        return $this->db->affected_rows();
    }

    public function updateRute($data, $id_rute)
    {
        $this->db->update('rute', $data, ['id_rute' => $id_rute]);
        return $this->db->affected_rows();
    }

    public function deleteRute($id_rute)
    {
        $this->db->delete('rute', ['id_rute' => $id_rute]);
        return $this->db->affected_rows();
    }

}

/* End of file rute_model.php */

?>