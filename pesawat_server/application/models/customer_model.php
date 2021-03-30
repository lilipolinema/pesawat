<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class customer_model extends CI_Model {

    public function getCustomer($id_customer = null)
    {
        if ($id_customer === null) {
            return $this->db->get('customer')->result_array();
        } else {
            return $this->db->get_where('customer', ['id_customer' => $id_customer])->result_array();
        }
    }

    public function createCustomer($data)
    {
        $this->db->insert('customer', $data);
        return $this->db->affected_rows();
    }

    public function updateCustomer($data, $id_customer)
    {
        $this->db->update('customer', $data, ['id_customer' => $id_customer]);
        return $this->db->affected_rows();
    }

    public function deleteCustomer($id_customer)
    {
        $this->db->delete('customer', ['id_customer' => $id_customer]);
        return $this->db->affected_rows();
    }

}

/* End of file customer_model.php */

?>