<?php
foreach (glob("../Controllers/*.php") as $filename)
{
    include $filename;
}
foreach (glob("../Models/*.php") as $filename)
{
    include $filename;
}


if ($_GET) {
    $url = explode("/", $_GET['url']);

    $class = $url[0];
    
    $urlClass = $class . 'Controller';
    print_r($url);
    
    if (class_exists($urlClass)) {
        $myClass = new $urlClass();

        if (!isset($url[1]) || $url[1] == '') {
        
            $myClass->index();
            
        } else {
            $action = $url[1];
            $myClass = new $urlClass();
    
            if(method_exists($myClass,$action)){
                $myClass->$action();
            } else{
                echo "404";
            }
        }
    } else{
        echo "404";
    }
    
    
}