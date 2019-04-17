<?php

namespace App\Services\Shapes;

use App\Validators\Validator;
use Twig\Environment;

class Circle implements Shape {

    private $_errors;
    private $_templating;

    public function __construct(Environment $templating)
    {
        $this->_templating = $templating;
    }

    public function draw(array $format) {
        $id = time() . rand(1, 150000);
        return $this->_templating->render('draw/circle.html.twig', 
            [
                'x' => rand(1,800), 
                'y' => rand(1,350),
                'perimeter' => $format['perimeter'],
                'color' => $format['border']['color'],
                'line' => $format['border']['width']
            ]
        );
    }

    public function getErrors() : string {
        $this->_errors;
    }

}