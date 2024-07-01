<?php

class Router
{
    protected $routes = [];

    public function set(string $method, string $url, closure $target)
    {
        $this->routes[$method][$url] = $target;
    }

    public function run()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $url = $_SERVER['REQUEST_URI'];
        
        if (isset($this->routes[$method])) {
            foreach ($this->routes[$method] as $routePath => $target) {
                $pattern = preg_replace('/\/:([^\/]+)/', '/(?P<$1>[^/]+)', $routePath);

                if (preg_match('/\\' . $pattern . '$/', $url, $matches)) {
                    $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
                    call_user_func_array($target, $params);

                    return;
                }
            }
        } else throw new Exception('Route not found');
    }
}
