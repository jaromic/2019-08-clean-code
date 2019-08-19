<?php

const VAT_PERCENT = 20;

function addNamesToList(array $list, string $name1, string $name2): array
{
    array_push($list, $name1);
    array_push($list, $name2);
    return $list;
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/**
 * @param float $netPrice
 * @return float
 */
function calculateVAT(float $netPrice, float &$vat)
{
    $vat = VAT_PERCENT * $netPrice / 100;
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function setActivationStatus(bool $status)
{
    if ($status == true) {
        //...
    } else {
        //...
    }
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/**
 * Use the Urb-II algorithm to calibrate the system for gravitational fluctuations
 * @return array
 */
function calibrateDensityMatrix()
{
    $densityMatrix = [[0, 0], [1, 1]];
    return $densityMatrix;
}

require_once("test/functions.php");