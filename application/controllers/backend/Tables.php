<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tables extends CI_Controller
{
    public function simpletables()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 1';
        $this->load->view('backend/pages/tables/simple', $data);
    }

    public function datatables()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 2';
        $this->load->view('backend/pages/tables/data', $data);
    }

    public function jsgrid()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 3';
        $this->load->view('backend/pages/tables/jsgrid', $data);
    }
}
