<?php


class testeController{

    public function view($page){
        include_once('../Views/teste/'.$page.'.phtml');
    }

    public function index(){
        $this->view('index');
    }

    public function teste(){
        echo "testando";
    }
}