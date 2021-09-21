<?php

class Core
{
    private $url, $controller, $method='index', $params=array();


    public function __construct()
    {
        
    }

    public function start($request)
    {
        // var_dump($request);

        if(isset($request['url'])){
            $this->url = explode('/', $request['url']);

            $this->controller = ucfirst($this->url[0]).'Controller';
            // Delete the first array's position
            array_shift($this->url);

            if(isset($this->url[0]) && $this->url !=''){

                $this->method = $this->url[0];
    
                array_shift($this->url);

                if(isset($this->url[0]) && $this->url !=''){
                    $this->params = $this->url;
                }
            }
        }else{
            $this->controller = 'LoginController';
            $this->method = 'index';
        }
        
        return call_user_func(array(new $this->controller, $this->method), $this->params);
        
        // var_dump($this->controller, $this->method, $this->params);
    }
}
