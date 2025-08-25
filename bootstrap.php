<?php

use Core\App;
use Core\Container;
use Core\Database;

$containar = new Container();

$containar->bind('Core\Database', function () {
    $config = require base_path('config.php');
    
    return new Database($config['database']);
});

App::setContainer($containar);