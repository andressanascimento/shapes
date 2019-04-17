<?php

namespace App\Services\Shapes;

use App\Validators\Validator;

interface Shape {

    public function draw(array $format);

    public function getErrors() : string;
}