<?php

require ('config.php');
require ('telegram.php');

$telegram = new telegram(TOKEN);

echo $telegram->getMe();
