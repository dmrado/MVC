<?php
/**
 * Created by PhpStorm.
 * User: dmrado
 * Date: 13.06.2018
 * Time: 20:32
 */

class AddSlashesSanitizer implements ISanitizer
{
    private $data;
    public function __construct(array $data)
    {
        $this->data=$data;
    }

    public function sanitize(){
        $i = 0;
        foreach ($this->data as $key => $val){
            if ($i<=2){
                $this->data[$key] = addslashes($val);
                $i++;
            }
        }
    }
    public function getDataByIndex($key) {
        return $this->data[$key];
    }

    public function __toString()
    {
        $str = "";
        foreach ($this->data as $val)
            $str .= "<p>$val.zzz</p><br>";
        return $str;
    }
}