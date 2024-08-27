<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ui extends CI_Controller
{
    public function general()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 1';
        $this->load->view('backend/pages/ui/general', $data);
    }

    public function icons()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 1';
        $this->load->view('backend/pages/ui/icons', $data);
    }

    public function buttons()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 1';
        $this->load->view('backend/pages/ui/buttons', $data);
    }

    public function sliders()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 1';
        $this->load->view('backend/pages/ui/sliders', $data);
    }

    public function modalsalerts()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 1';
        $this->load->view('backend/pages/ui/modals', $data);
    }

    public function navbartabs()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 1';
        $this->load->view('backend/pages/ui/navbar', $data);
    }

    public function timeline()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 1';
        $this->load->view('backend/pages/ui/timeline', $data);
    }

    public function ribbons()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 1';
        $this->load->view('backend/pages/ui/ribbons', $data);
    }
}
