<?php

class Home extends CI_Controller {

    public function index() {       
        $data['controller'] = 'home';
        
        $this->load->view('public/header', $data);
        $this->load->view('home/index');
        $this->load->view('public/footer', $data);
    }
}
