<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Extras extends CI_Controller
{
    public function loginv1()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 1';
        $this->load->view('backend/pages/examples/login', $data);
    }

    public function registerv1()

    {
        $data['title']   = 'AdminLTE 3 | Dashboard 2';
        $this->load->view('backend/pages/examples/register', $data);
    }

    public function forgotpasswordv1()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 3';
        $this->load->view('backend/pages/examples/forgot-password', $data);
    }

    public function recoverpasswordv1()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 3';
        $this->load->view('backend/pages/examples/recover-password', $data);
    }

    public function loginv2()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 1';
        $this->load->view('backend/pages/examples/login-v2', $data);
    }

    public function registerv2()

    {
        $data['title']   = 'AdminLTE 3 | Dashboard 2';
        $this->load->view('backend/pages/examples/register-v2', $data);
    }

    public function forgotpasswordv2()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 3';
        $this->load->view('backend/pages/examples/forgot-password-v2', $data);
    }

    public function recoverpasswordv2()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 3';
        $this->load->view('backend/pages/examples/recover-password-v2', $data);
    }

    public function lockscreen()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 3';
        $this->load->view('backend/pages/examples/lockscreen', $data);
    }

    public function legacymenu()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 3';
        $this->load->view('backend/pages/examples/legacy-user-menu', $data);
    }

    public function languagemenu()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 3';
        $this->load->view('backend/pages/examples/language-menu', $data);
    }

    public function error404()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 3';
        $this->load->view('backend/pages/examples/404', $data);
    }

    public function error500()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 3';
        $this->load->view('backend/pages/examples/500', $data);
    }

    public function pace()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 3';
        $this->load->view('backend/pages/examples/pace', $data);
    }

    public function blankpage()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 3';
        $this->load->view('backend/pages/examples/blank', $data);
    }

    public function starterpage()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 3';
        $this->load->view('backend/pages/starter', $data);
    }
}
