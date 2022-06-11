#!/usr/bin/php
<?php

include_once "phpagi-2.20/phpagi.php";

$agi = new AGI();


$desativa = $agi->get_variable("DNDdesativa");

$agi->exec("NoOp","Ramal\ desativando\ DND:\ " .$desativa[data]);
$agi->exec("Playback", "DND_desativado");
$agi->exec('Wait',"1");


$agi->database_put('DND', ($desativa[data]), 0);
