# Shapes

Draw multiples shapes! This application accept squares and circles.

### Prerequisites

* Php 7.2
* Composer


### Installing

```
cd your-project-folder
composer install
```

## Running local

```
php bin/console server:run
```

### Examples

Send a post to /api/draw

```
POST 127.0.0.1:8000
[
            {"type": "square", "sideLength": 100 , "border": {"color": "blue", "width": 5}},
            {"type": "square", "sideLength": 150 , "border": {"color": "red", "width": 30}},
            {"type": "square", "sideLength": 50 , "border": {"color": "purple", "width": 10}},
            {"type": "circle", "perimeter": 50 , "border": {"color": "pink", "width": 10}}
]
```
If you are using postman click to download de payload, this application used canvas and postman don't give support. Open the download payload on a modern browser like Chrome or Firefox

### Creating new shapes

* Create a new class on namespace App/Services/Shapes. Your new class should implements App/Services/Shapes/Shape.
```
<?php

namespace App/Services/Shapes;

use App/Services/Shapes/Shape;

class MyNewShape implements Shape {
    ..
}

```
* Create a new template for your shape inside /templates/draw/my_new_shape.html.twig

That´s it!