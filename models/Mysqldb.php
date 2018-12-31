<?php
/**
 * Created by PhpStorm.
 * User: dmrado
 * Date: 23.06.2018
 * Time: 8:16
 */

class Mysqldb implements Database
{
private $pdo;

    public function connect()
    {
        try{
            $this->pdo = new PDO('mysql:host=localhost;dbname=catsdb;charset=utf8', 'root', 'root');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->exec('SET NAMES "utf8"');
        } catch (PDOException $e){
            echo 'Подключение к базе не установлено. Попробуйте еще раз.<br/>'. $e->getMessage();
            exit();
        }
    }

    public function disconnect()
    {
        $this->pdo = null;
    }

    public function newquery($sql)
    {
        return $this->pdo->query($sql);
    }
}