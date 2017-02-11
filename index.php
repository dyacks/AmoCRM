<?php

require_once __DIR__ . '/autoload.php';

error_reporting(-1);

if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email'])){
    $ctrl  = 'App\Controllers\\' . 'MainController';
    $act = 'actionSendAmo';
} else {
    $ctrl = isset($_POST['ctrl']) ? $_POST['ctrl'] : 'Main';
    $act = isset($_POST['act']) ? $_POST['act'] : 'Index';

    $ctrl  = 'App\Controllers\\' . $ctrl . 'Controller';

    $act = 'action' . $act;
}
$controller = new $ctrl;
$controller->$act();







