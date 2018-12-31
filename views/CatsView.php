<?php
/**
 * Created by PhpStorm.
 * User: dmrado
 * Date: 20.06.2018
 * Time: 20:00
 */
include_once ("../form.html");

class CatsView
{
    public function renderAll(array $cats) {
        foreach ($cats as $cat)
            echo $cat->name . "<br>";

    }

    public function renderNew(CatsModel $cat) {
        echo $cat->name."<br>";
        $f="form.html";
        echo $f;
        //здесь подключить файл форма ввода котов
    }
}//view