<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kanbanboard extends CI_Controller
{
    public function index()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 1';
        $this->load->view('backend/pages/kanban', $data);
    }
}
