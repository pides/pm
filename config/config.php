<?php
/**
 * Created by PhpStorm.
 * User: Pides
* Date: 16/1/10
* Time: 下午6:47
*/
class Config{
    function __construct($arr)
    {
        $configPath = __DIR__ . '/';
        if(!$arr && !is_array($arr))return;
        foreach($arr as $v){
            $this->$v = include_once $configPath . $v . '.php';
        }
    }
}