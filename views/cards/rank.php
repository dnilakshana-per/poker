<?php
require 'blocks/Cards/Values.php';
require 'models/Cards/Values.php';
$valueModel = new \models\Cards\Values();
$value = new \blocks\Cards\Values($valueModel);
echo $value->output();