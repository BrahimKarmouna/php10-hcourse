<?php
namespace Core;

class Router
{
    protected $routes = [];
    public function add ( $uri, $controller,$method)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method ,
        ];
    }
    public function get($uri, $controller)
    {
        $this->add( $uri, $controller, 'GET');    ;
    }
    public function post($uri, $controller)
    {
    $this->add( $uri, $controller, 'POST');

    }
    public function delete($uri, $controller)
    {
        $this->add( $uri, $controller, 'DELETE');

    }
    public function patch($uri, $controller)
    {
        $this->add( $uri, $controller, 'PATCH');
    }

    public function put($uri, $controller)
    {

        $this->add( $uri, $controller, 'PUT');
    }


    public function router($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === $method) {
                require base_path($route['controller']);
                return;
            }
        }

        abort(Response::NOT_FOUND);
    }
}


// use Core\Response;

// function routeToController($uri,$routes): void{
//     if(array_key_exists($uri,$routes)){
//     require $routes[$uri];
// }else{
//     require abort(Response::NOT_FOUND);
// }

// }


?>
