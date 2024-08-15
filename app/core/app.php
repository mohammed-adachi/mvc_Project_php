<?php

class app{
private $controller;
private $method;
private $params;

private function slitURl(){
    if(isset($_GET['url'])){
        $url = $_GET['url'];
        $url = rtrim($url, '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        return $url;
    }
     function run(){
    $url= $this->slitURl();

    $filename = 'app/controllers/'.$url[0].'.php';

}
}

}