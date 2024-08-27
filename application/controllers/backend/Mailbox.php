<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mailbox extends CI_Controller
{
    public function inbox()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 1';
        $this->load->view('backend/pages/mailbox/mailbox', $data);
    }

    public function compose()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 2';
        $this->load->view('backend/pages/mailbox/compose', $data);
    }

    public function read()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 3';
        $this->load->view('backend/pages/mailbox/read-mail', $data);
    }
}
