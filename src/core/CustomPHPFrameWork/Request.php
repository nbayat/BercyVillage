<?php

class Request
{
    public function getPath(){
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path, '?');
        if ($position === false) return $path;
        else return substr($path, 0, $position);
    }

    public function getMethode()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function getBody(){
        $body = [];

        if ($this->getMethode() === 'get'){
            foreach ($_GET as $key => $value){
                $body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            }
        }

        if ($this->getMethode() === 'post'){
            foreach ($_POST as $key => $value){
                $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            }
        }

        return $body;
    }

}