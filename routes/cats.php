<?php
/**
 * Created by PhpStorm.
 * User: dmrado
 * Date: 20.06.2018
 * Time: 19:47
 */
//require_once "../controllers/CatsController.php";
//require_once "../views/CatsView.php";
//require_once "../models/CatsModel.php";

include_once ("../loader.php");

$action = isset($_GET['action'])? ($_GET['action']) : 'all';
$controller = new CatsController(new CatsView());
switch($action) {
    case 'all':
        $controller->actionAll();
        break;
    case 'new':
        $controller->actionNew();
        break;
    default:
        $controller->actionAll();
        break;
}//route