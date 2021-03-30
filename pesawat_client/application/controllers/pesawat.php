<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pesawat extends CI_Controller {

    public function index()
    {
        $this->load->view('pesawat/dashboard');
    }

}

/* End of file pesawat.php */

?>