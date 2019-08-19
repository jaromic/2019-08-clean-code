<?php
setTimestamp('0');

assert(count(getDiceNumbers()) == 6);

assert(0 == regulateFuelFlow(240, 25));

walkWest();
walkEast();

erstelleUmsatzsteuerVoranmeldung([],[]);

startEngine();