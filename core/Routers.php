<?php 

class Router 
{
    public function to_route( $uri, $controller){
        return require_once("controllers/" .$controller);
    }

}