<?php
class Router{

    public static $route;

    public static  function add($str,$param){
        self::$route[$str]=$param;
    }

    /**
     * @return mixed
     */

    public function match(){

    }
    public function getRoute()
    {
        return $this->route;
    }

}