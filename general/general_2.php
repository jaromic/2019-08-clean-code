<?php

function setTimestamp($timestamp)
{
    global $timestamp_internal, $username;

    $timestamp_internal = $timestamp;
    $username = 'test';
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function getDiceNumbers()
{
    $diceNumbers = [];
    for ($i = 0; $i <= 6; ++$i) {
        array_push($diceNumbers, $i);
    }
    return $diceNumbers;
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$filename = "ausgabe.txt";

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function regulateFuelFlow(float $combustionChamberTemperature, float $requiredPower): float
{
//     TODO: safety disabled for performance test
//     TODO: don't forget to re-enable or the whole thing  will blow up!!!!11
//     if($combustionChamberTemperature > CRITICAL_TEMPERATURE_KELVIN) {
//         throw new CriticalTemperatureException("Critical core temperature exceeded - shutting down.");
//     }
    $requiredFuelFlow = calculateSigmaCoefficient($requiredPower) * $combustionChamberTemperature;
    return $requiredFuelFlow;
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function walkEast()
{
    $player = Player::getInstance();
    $player->move('e');
    $player->position->translate(1, 0);
}

function walkWest()
{
    $player = Player::getInstance();
    $player->move('w');
    $player->position->translate(-1, 0);
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function erstelleUmsatzsteuerVoranmeldung($einnahmen, $ausgaben)
{
    foreach($ausgaben as $ausgabe) {
        if($ausgabe->betrag >= Ausgabe::GERINGWERTIGES_WIRTSCHAFTSGUT_OBERGRENZE && ! $ausgabe->isWeiterverkauf()) {
            $ausgabe->setAfA(true);
        } else {
            $ausgabe->setAfA(false);
        }
    }
    $buchungen = array_merge($einnahmen, $ausgaben);
    return formatReport($buchungen);
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if($filename=='eingabe.txt') {
    echo "EINGABE";
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/* try master site: */
$response = basic_http_request(HTTP_METHOD_POST, 'https://www.google.at');
if(!$response->isSuccess()) {
    /* try alternative site: */
    $resp = HTTPLibrary::fancyHttpRequest(HTTP_METHOD_POST, 'https://www.orf.at');
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/**
 * Class Address
 */
class Address {

    /**
     * @var
     */
    public $street;
    /**
     * @var
     */
    public $floor;
    /**
     * @var
     */
    public $door;

    /**
     * Address constructor.
     * @param $street
     * @param $floor
     * @param $door
     */
    public function __construct($street, $floor, $door)
    {
        $this->street = $street;
        $this->floor = $floor;
        $this->door = $door;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return mixed
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * @param mixed $floor
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;
    }

    /**
     * @return mixed
     */
    public function getDoor()
    {
        return $this->door;
    }

    /**
     * @param mixed $door
     */
    public function setDoor($door)
    {
        $this->door = $door;
    }

}

// G25 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////

$output=sprintf ("10%s 10%s %s", $in, $out, $description);
$outputLine = substr($output, 0, 80);

////

if($temperature>100) {
    $isBoiling=true;
} else {
    $isBoiling=false;
}

// G28 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////

if($timer->istAbgelaufen() && ! $timer->istWiederholbar()) {
    $timer->delete();
}

// G29 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////

if(!$kfz->isNotRegistered()) {
    // ...
}
