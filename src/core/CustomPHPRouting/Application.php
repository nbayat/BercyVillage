<?php

require_once 'Router.php';
require_once 'Request.php';

class Application
{
    public Router $router;
    public Request $request;
    public function __construct()
    {
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run(){
        echo $this->router->resolve();
    }

}