<?php
/**
 * Created by PhpStorm.
 * User: dmrado
 * Date: 20.06.2018
 * Time: 20:13
 */
//session_start();
require_once ("../loader.php");
class CatsModel
{
    public $name;
    public $age;
    private $db;

    public function __construct($name, $age)
    {
        $this->name=$name;
        $this->age=$age;
    }
    public static function actionAll() {
        $db = new Mysqldb();
        $db->connect();
        $cats = [];
        foreach ($db->newquery("SELECT name, age FROM cats") as $row)
            array_push($cats, new self($row['name'], $row['age']));
        $db->disconnect();
        return $cats;
    }
    public static function actionNew() {
        return new CatsModel('Barsik');
    }

    public function __get($key)
    {
        return $this->$key;
    }

}

/*$newcat = new CatsModel();
    $name = $newcat->name;
    $age = $newcat->age;

    try{
        $sql = "SELECT FROM cats WHERE name = '".$name."'";
        $result = $pdo->query($sql);
        $count = $result->rowCount();
            if ($count==0){
                $sql1 = "INSERT INTO cats (`id`, `name`, `age`) VALUES (NULL, '".$name."', '".$age."')";
                $result1 = $pdo->query($sql1);
                if($result1){
                    echo 'Ваш котик по имени '.$name.' успешно записан в базу';
                } else {
                    echo 'Запись котика почему-то недоступна. Попробуйте позже.';
                }

            } else {
                echo 'Такой котик уже записан в базу, выберите ему другое имя.';
            }
    } catch(PDOException $e){
        echo 'Соединение с базой данных почему-то недоступно. Попробуйте позже.';
    }
    //если модель не должна передавать в форму ничего, то как else выбрасывать? Записывать в метод и передавать метод в view? но как?
    //public function sqlInsert(){}//что в нее записать?*/
