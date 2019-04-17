<?php

namespace App\Services;

use App\Services\Shapes\Shape;
use Twig\Environment;

class ShapeFactory {

    public function __construct(Environment $templating)
    {
        $this->_templating = $templating;
    }

    public function create($type) : Shape {

        $classname = ucfirst($type);
        $class = "App\\Services\\Shapes\\".$classname;
        
        $instance = new $class($this->_templating);

        // check if implements Shape interface            
        if (!in_array("App\Services\Shapes\Shape", class_implements($instance))) {
            throw new \Exception($class." should implements shape interface");
        }
        return $instance;
    }
}