<?php
require 'blocks/Cards/Suit.php';
require 'models/Cards/Suit.php';
$suitModel = new \models\Cards\Suit();
$suit = new \blocks\Cards\Suit($suitModel);
echo $suit->output();