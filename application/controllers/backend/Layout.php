<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Layout extends CI_Controller
{
    public function topnav()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 1';
        $this->load->view('backend/pages/layout/top-nav', $data);
    }

    public function topnavsidebar()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 1';
        $this->load->view('backend/pages/layout/top-nav-sidebar', $data);
    }

    public function boxed()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 1';
        $this->load->view('backend/pages/layout/boxed', $data);
    }

    public function fixedsidebar()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 1';
        $this->load->view('backend/pages/layout/fixed-sidebar', $data);
    }

    public function fixedsidebarcustomarea()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 1';
        $this->load->view('backend/pages/layout/fixed-sidebar-custom', $data);
    }

    public function fixednavbar()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 1';
        $this->load->view('backend/pages/layout/fixed-topnav', $data);
    }

    public function fixedfooter()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 1';
        $this->load->view('backend/pages/layout/fixed-footer', $data);
    }

    public function collapse()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 1';
        $this->load->view('backend/pages/layout/collapsed-sidebar', $data);
    }
}
