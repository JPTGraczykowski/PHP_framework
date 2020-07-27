<?php

namespace Core;

// *** Base Controller *** //

abstract class Controller 
{
    // parameters from the matched route
    protected $route_params = [];

    // class constructor
    public function __construct($route_params)
    {
        $this->route_params = $route_params;
    }

    public function __call($name, $args)
    {
        $method = $name . 'Action';

        if (method_exists($this, $method)) {
            if ($this->before() !== false) {
                call_user_func_array([$this, $method], $args);
                $this->after();
            } else {
                echo "Method $method not found in controller ".get_class($this);
            }
        }
    }

    // before filter, called before an action method
    protected function before()
    {

    }

    // after filter, called after an action method
    protected function after()
    {

    }
}