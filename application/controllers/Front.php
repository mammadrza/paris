<?php


class Front extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('FrontModel');
    }


    public function index(){
        $data['all'] = $this->FrontModel->getAll();
        $this->load->view('user/index',$data);
    }

    public function about(){
        $this->load->view('user/about');
    }

    public function contact(){
        $this->load->view('user/contact');
    }

    public function allSport(){
        $this->load->view('user/allSport');
    }

    public function allIntertaiment()
    {
        $this->load->view('user/allIntertaiment');
    }

    public function education()
    {
        $this->load->view('user/education');
    }

    public function technology()
    {
        $this->load->view('user/technology');
    }

    public function singlePage($id){
        $data['single'] = $this->FrontModel->getSingle($id);
        $data['all'] = $this->FrontModel->getAll();
        $this->load->view('user/singlePage',$data);
    }
}
