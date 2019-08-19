<?php
assert(1.57 == round(calculateSteamPressure(0.5), 2));
assert(3 == calculateAverage([2.0, 3.0, 4.0]));
assert(7 == addNumbers(3, 4));
$expectedResults = [5.0, 4.27, 0.48, -6.39, -16.32];
$i = 0;
foreach ([0.0, 0.5, 1, 1.5, 2] as $x) {
    $y = calculateY($x, 5, 5, 45, 8.9);
    assert($expectedResults[$i] == round($y, 2));
    $i++;
}

