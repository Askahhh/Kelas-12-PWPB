<?php
class Katalog_product extends CI_Controller
{
    //bagian yang ditambahkan
    function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
    }
    public function index()
    {
        $data['product'] = $this->product_model->get_product(); //bagian yang ditambahkan
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('katalog_view', $data); //bagian yang ditambahkan
        $this->load->view('footer');
    }
}
