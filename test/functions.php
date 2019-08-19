<?php

$list = [];
$list = addNamesToList($list, "hans", "fritz");
assert($list[0] == "hans");
assert($list[1] == "fritz");
$vat = 0;
calculateVAT(1.0, $vat);
assert($vat == 0.2);
setActivationStatus(true);