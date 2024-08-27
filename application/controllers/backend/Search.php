<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search extends CI_Controller
{
    public function simplesearch()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 1';
        $this->load->view('backend/pages/search/simple', $data);
    }

    public function enhanced()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 2';
        $this->load->view('backend/pages/search/enhanced', $data);
    }

    public function simpleresults()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 2';
        $this->load->view('backend/pages/search/simple-results', $data);
    }

    public function enhancedresults()
    {
        $data['title']   = 'AdminLTE 3 | Dashboard 2';
        $this->load->view('backend/pages/search/enhanced-results', $data);
    }
}
