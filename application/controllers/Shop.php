<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function index() {
        $data['title'] = 'Shop';
        $data['content'] = $this->load->view('content/shop/view_shop', [], true);
        $this->load->view('layouts/template', $data);
    }

	public function cart() {
        $data['title'] = 'Cart';
        $data['content'] = $this->load->view('content/shop/view_cart', [], true);
        $this->load->view('layouts/template', $data);
    }

    public function check_out() {
        $data['title'] = 'Check Out';
        $data['content'] = $this->load->view('content/shop/view_check-out', [], true);
        $this->load->view('layouts/template', $data);
    }

    public function single_product() {
        $data['title'] = 'Single Product';
        $data['content'] = $this->load->view('content/shop/view_single-product', [], true);
        $this->load->view('layouts/template', $data);
    }
}
