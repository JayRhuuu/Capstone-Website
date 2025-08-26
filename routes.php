<?php

$router->get('/', 'index.php');
$router->get('/ManageUser', 'ManageUser.php');
$router->get('/GeneralRecords', 'GeneralRecords.php');
$router->get('/CalendarEvents', 'CalendarEvents.php');
$router->get('/ActivityLog', 'ActivityLog.php');
$router->get('/Settings', 'Settings.php');

$router->get('/Notes', 'notes/index.php')->only('auth');
$router->get('/Note', 'notes/show.php');
$router->delete('/Note', 'notes/destroy.php');

$router->get('/Note/edit', 'notes/edit.php');
$router->patch('/Note', 'notes/update.php');

$router->get('/Notes/create', 'notes/create.php');
$router->post('/Notes', 'notes/store.php');

$router->get('/Register', 'registration/create.php')->only('guest');
$router->post('/Register', 'registration/store.php')->only('guest');

$router->get('/Login', 'session/create.php')->only('guest');
$router->post('/session', 'session/store.php')->only('guest');
$router->delete('/session', 'session/destroy.php')->only('auth');