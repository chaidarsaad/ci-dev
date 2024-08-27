<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function dashboardv1()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 1';
        $this->load->view('backend/pages/dashboard/index', $data);
    }

    public function dashboardv2()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 2';
        $this->load->view('backend/pages/dashboard/index2', $data);
    }

    public function dashboardv3()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 3';
        $this->load->view('backend/pages/dashboard/index3', $data);
    }
}
