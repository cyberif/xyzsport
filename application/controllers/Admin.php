<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    function index()
    {
        $products = $this->modelProducts->getProduct();
        $data = [
            'title' => 'Dashboard - Azzah Sport',
            'products' => $products->result_array(),
            'jmlproduct' => $products->num_rows()
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer', $data);
    }
    function data_product()
    {
        $products = $this->modelProducts->getProduct();
        $data = [
            'title' => 'Dashboard - Azzah Sport',
            'products' => $products->result_array(),
        ];
        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('data_product', $data);
        $this->load->view('templates/footer', $data);
    }
}
