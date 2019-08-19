<?php

/* new calculation, see https://ticket.example.com/issues/4291 */
function calculateSteamPressure(float $valvePosition): float
{
    $steamPressure = pi() * $valvePosition;
    return $steamPressure;
}

/**
 * Calculate the average of the two operands
 * @param float $operand1
 * @param float $operand2
 * @return float
 */
function calculateAverage(array $operands): float
{
    $average = array_sum($operands) / count($operands);
    return $average;
}

/* Add the two operands and return the result (c) w/ ♥ by b€stc0d@r */
function addNumbers(int $operand1, int $operand2): int
{
    return $operand1 + $operand2;
}

// calclulatte  y for the x with some other stuff::
function calculateY($x, $initialHeight, $initialVelocity, $launchAngle, $gravity)
{
    $y = $initialHeight + $x * tan($launchAngle) - $gravity * $x ** 2 / 2 * $initialVelocity * (cos($launchAngle)) ** 2;
    return $y;
}

///**
// * Delete all deactivated users.
// * @throws AuthorizationException
// */
//function deleteDeactivatedUsers() {
//    foreach(User::getAll() as $user) {
//        if(!$user->isActivated()) {
//            $user->delete();
//        }
//    }
//}

require_once("test/comments.php");