<?php

$router->get('/', 'controllers/index.php');
$router->get('/ManageUser', 'controllers/ManageUser.php');
$router->get('/GeneralRecords', 'controllers/GeneralRecords.php');
$router->get('/CalendarEvents', 'controllers/CalendarEvents.php');
$router->get('/ActivityLog', 'controllers/ActivityLog.php');
$router->get('/Settings', 'controllers/Settings.php');

$router->get('/Notes', 'controllers/notes/index.php')->only('auth');
$router->get('/Note', 'controllers/notes/show.php');
$router->delete('/Note', 'controllers/notes/destroy.php');

$router->get('/Note/edit', 'controllers/notes/edit.php');
$router->patch('/Note', 'controllers/notes/update.php');

$router->get('/Notes/create', 'controllers/notes/create.php');
$router->post('/Notes', 'controllers/notes/store.php');

$router->get('/Register', 'controllers/registration/create.php')->only('guest');
$router->post('/Register', 'controllers/registration/store.php')->only('guest');

$router->get('/Login', 'controllers/session/create.php')->only('guest');
$router->post('/session', 'controllers/session/store.php')->only('guest');
$router->delete('/session', 'controllers/session/destroy.php')->only('auth');