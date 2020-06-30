<?php

class Controller{
    
    public function view($view,$page){
        include_once('../Views/'.$view.'/'.$page.'.phtml');
    }
}