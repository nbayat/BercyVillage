<?php

require_once 'Request.php';
require_once 'Application.php';
class Router
{
    public Request $request;
    protected array $routes = [];

    public function __construct($request)
    {
        $this->request = $request;
    }

    public function get($path, $callback){
        $this->routes['get'][$path] = $callback;
    }


    public function post($path, $callback){
        $this->routes['post'][$path] = $callback;
    }


    // on vas identifier le methode et path pour chercher le callBack dans routes
    public function resolve()
    {
        $path = $this->request->getPath();
        $methode = $this->request->getMethode();
        $callback = $this->routes[$methode][$path] ?? false;
        if ($callback === false) {
            return "N'existe pas 404";
        }

        if (is_string($callback)){
            return $this->renderView($callback);
        }

        // executer la fonction callBack
        return call_user_func($callback, $this->request);
    }

    public function renderView(string $view)
    {
        require_once "../views/$view.php";
    }

}