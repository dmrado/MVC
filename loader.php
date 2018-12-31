<?php
/**
 * Created by PhpStorm.
 * User: dmrado
 * Date: 20.06.2018
 * Time: 21:13
 */
function loader($class){
    require_once "routes/cats.php";
    require_once "models/CatsModel.php";
    require_once "models/Database.php";
    require_once "models/Mysqldb.php";
    require_once "views/CatsView.php";
    require_once "controllers/CatsController.php";

}
spl_autoload_register("loader");
?>