<?php

namespace VekaServer\Jquery;

use VekaServer\Interfaces\PluginInterface;

class Autoload implements PluginInterface
{

    public static function getPathView():array{
        return [];
    }

    public static function getPathJS():array{
        return dirname(__DIR__).DIRECTORY_SEPARATOR.'js';
    }

    public static function getPathCSS():array{
        return null;
    }

}
