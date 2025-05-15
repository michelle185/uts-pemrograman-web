<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index() {
        $data['title'] = 'Static Home';
        $data['content'] = $this->load->view('content/beranda/view_static-home', [], true);
        $this->load->view('layouts/template', $data);
    }

    public function slider_home() {
        $data['title'] = 'Slider Home';
        $data['content'] = $this->load->view('content/beranda/view_slider-home', [], true);
        $this->load->view('layouts/template', $data);
    }
}
