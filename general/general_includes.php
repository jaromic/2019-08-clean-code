<?php
const CRITICAL_TEMPERATURE_KELVIN = 1200;

function calculateSigmaCoefficient($power)
{
    return 0;
}

class CriticalTemperatureException extends \Exception
{
}

class Player
{
    public $position;

    public function __construct()
    {
        $this->position = new Position();
    }


    public static function getInstance()
    {
        return new Player();
    }

    public function move(string $direction)
    {

    }
}

class Position
{
    public function translate($x, $y)
    {

    }
}

class Ausgabe
{
    const GERINGWERTIGES_WIRTSCHAFTSGUT_OBERGRENZE = 400;

}

function formatReport($buchung)
{
    return "";
}

class Response{
    function isSuccess() :bool {
        return true;
    }
}

function basic_http_request($method, $url)
{
    return new Response();
}
const HTTP_METHOD_POST = 1;

class HTTPLibrary
{
    public static function fancyHttpRequest($method, $url)
    {
        return [];
    }
}

class Timer {
    function istAbgelaufen(): bool {
        return true;
    }

    function istWiederholbar(): bool {
        return true;
    }
}

class KfZ {
    function isNotRegistered(): bool {
        return true;
    }

}

$in='40';
$out='20';
$description='Example position';
$temperature=0;
$timer=new Timer();
$kfz= new KfZ();


function startEngine() {

}