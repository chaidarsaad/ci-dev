<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Charts extends CI_Controller
{
    public function chartjs()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 1';
        $this->load->view('backend/pages/charts/chartjs', $data);
    }

    public function flot()

    {
        $data['title']   = 'AdminLTE 3 | Dashboard 2';
        $this->load->view('backend/pages/charts/flot', $data);
    }

    public function inline()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 3';
        $this->load->view('backend/pages/charts/inline', $data);
    }

    public function uplot()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 3';
        $this->load->view('backend/pages/charts/uplot', $data);
    }
}
