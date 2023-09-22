<?php 
class Blog extends CI_Controller { 
 
 function index(){ 
 $data['title'] = "Tugas Kita"; 
 $data['content'] = "This Is The Contents"; 
 $this->load->view('blog_view'); 
 } 
}