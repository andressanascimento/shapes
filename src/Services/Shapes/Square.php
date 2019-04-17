<?php

namespace App\Services\Shapes;

use App\Validators\Validator;
use Twig\Environment;

class Square implements Shape {

    private $_errors;
    private $_templating;

    public function __construct(Environment $templating)
    {
        $this->_templating = $templating;
    }

    public function draw(array $format) {
        
        return $this->_templating->render('draw/square.html.twig', 
            [
                'x' => rand(1,800), 
                'y' => rand(1,350),
                'sideLength' => $format['sideLength'],
                'color' => $format['border']['color'],
                'line' => $format['border']['width']
            ]
        );
    }

    public function getErrors() : string {
        $this->_errors;
    }

}