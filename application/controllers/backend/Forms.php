<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forms extends CI_Controller
{
    public function generalelements()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 1';
        $this->load->view('backend/pages/forms/general', $data);
    }

    public function advancedelements()

    {
        $data['title']   = 'AdminLTE 3 | Dashboard 2';
        $this->load->view('backend/pages/forms/advanced', $data);
    }

    public function editors()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 3';
        $this->load->view('backend/pages/forms/editors', $data);
    }

    public function validation()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 3';
        $this->load->view('backend/pages/forms/validation', $data);
    }
}
