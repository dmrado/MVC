<?php
/**
 * Created by PhpStorm.
 * User: dmrado
 * Date: 23.06.2018
 * Time: 8:14
 */

interface Database
{
public function connect();
public function disconnect();
public function newquery($sql);
}