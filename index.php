<?php
require_once ("./Core/Router.php");
$route=new Router();
//define('Route',new Router());
Router::add('/',['controller'=>'main','Action'=>'home']);
Router::add('/about',['controller'=>'main','Action'=>'about']);
Router::add('/contact',['controller'=>'main','Action'=>'contact']);
print_r(Router::$route);

