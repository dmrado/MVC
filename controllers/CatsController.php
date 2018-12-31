<?php
/**
 * Created by PhpStorm.
 * User: dmrado
 * Date: 20.06.2018
 * Time: 19:54
 */
include_once("../models/CatsModel.php");
class CatsController
{
    private $view;

    public function __construct($view)
    {
        $this->view = $view;
    }

    public function actionAll() {
        $cats = CatsModel::actionAll();
        $this->view->renderAll($cats);
    }// так как методы actionAll и actionNew статические, то для них не нужно создавать объекты и мы передаем сразу классы (они относятся ко всему классу целиком, а не к каждому объекту)

    public function actionNew() {
        $cat = CatsModel::actionNew();
        $this->view->renderNew($cat);
    }
}//controller
    if (isset($_POST['name'])){
        $san = new AddSlashesSanitizer($_POST);
        $name = new CatsModel($san);
    }//после санации затем передать в CatsModel