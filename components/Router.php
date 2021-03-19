<?php


class Router{
    private  $routes;

    public function __construct(){
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include_once ($routesPath);
    }


    private function getURI(){
        if(!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'],'/');
        }
        return false;
    }

    public function run(){
        $uri = trim(str_replace('index.php','',$this->getURI()),'/');
        foreach($this->routes as $uriPattern => $path){
            if(preg_match("~$uriPattern~", $uri)){
//                var_dump($uriPattern);
//                var_dump($path);
//                var_dump($uri);die;

                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
//var_dump($internalRoute);die;
                $segments = explode('/', $internalRoute);

                $controllerName=array_shift($segments).'Controller';
                $controllerName=ucfirst($controllerName);
//var_dump($controllerName);

                $actionName='action'.ucfirst(array_shift($segments));
//var_dump($actionName);exit;

                $param = ($segments);

                $controllerFile=ROOT.'/controllers/'.$controllerName.'.php';

                if(file_exists($controllerFile)){
                    include_once($controllerFile);

                }

                $controllerObject=new $controllerName;

                $result= call_user_func_array(array($controllerObject,$actionName), $param);

                if($result!=null){
                    break;
                }
            }
        }
    }
}
