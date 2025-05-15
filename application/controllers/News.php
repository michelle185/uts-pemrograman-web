<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function index() {
        $data['title'] = 'News';
        $data['content'] = $this->load->view('content/news/view_news', [], true);
        $this->load->view('layouts/template', $data);
    }

    public function single_news() {
        $data['title'] = 'Single News';
        $data['content'] = $this->load->view('content/news/view_single-news', [], true);
        $this->load->view('layouts/template', $data);
    }
}
