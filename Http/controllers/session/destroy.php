<?php

use Core\Authenticator;

session_start();

$auth = new Authenticator();
$auth->logout();

header('Location: /');
exit();
