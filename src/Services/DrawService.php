<?php

namespace App\Services;

use App\Services\ShapeFactory;

class DrawService {

    public function __construct(ShapeFactory $factory) {
        $this->_factory = $factory;
    }

    public function draw(array $data) {
        $shapes = "";
        foreach($data as $shape_conf) {
            $shape = $this->_factory->create($shape_conf["type"]);
            $shapes .= $shape->draw($shape_conf);
        }
        return $shapes;
    }

}