<?php
class Home extends CI_Controller

{
    public function index()
    {
        $this->load->view('includes/header-link');
        $this->load->view('includes/header');
        $this->load->view('home');
        $this->load->view('includes/footer');
        $this->load->view('includes/footer-link');
    }
}
