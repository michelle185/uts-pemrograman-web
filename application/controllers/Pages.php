<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function index() {
        $data['title'] = 'Pages Error';
        $data['content'] = $this->load->view('content/pages/view_error-page', [], true);
        $this->load->view('layouts/template', $data);
    }
}
