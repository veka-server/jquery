<?php

namespace VekaServer\Jquery;

class Autoload
{

    public static function getPathView(){
        return null;
    }

    public static function getPathJS(){
        return dirname(__DIR__).DIRECTORY_SEPARATOR.'js';
    }

    public static function getPathCSS(){
        return null;
    }

}